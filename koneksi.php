<?php
// class untuk menghubungkan ke database 
class database
{
  var $db_host = "localhost";
  var $db_user = "root";
  var $db_password = "";
  var $db_name = "gubuk_rawon";
  var $koneksi = "";

  // melakukan koneksi dengan database jika error maka ditampilkan error nya
  public function __construct()
  {
    $this->koneksi = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
    if (mysqli_connect_errno()) {
      echo "Koneksi database Gagal :" . mysqli_connect_error();
    }
  }

  public function get_data_user($username)
  {
    $queryGetUser = "SELECT * FROM user WHERE username = '$username'";
    $data = mysqli_query($this->koneksi, $queryGetUser);
    return $data;
  }

  public function get_all_order()
  {
    $query = "
            SELECT 
            COUNT(orderID) AS TotalOrder,
            COUNT(DISTINCT customerID) AS TotalCustomer,
            COUNT(CASE WHEN status='Selesai' THEN orderID END) AS TotalSelesaiOrders,
            COUNT(CASE WHEN status='Pending' THEN orderID END) AS TotalPendingOrders,
            SUM(totalAmount) AS totalAmount
            FROM orders;
        ";

    $data = mysqli_query($this->koneksi, $query);
    return $data;
  }

  public function get_orders_by_customer()
  {
    $query = "
            SELECT
            Customer.customerID,
            Customer.name,
            Customer.email,
            Customer.phoneNumber,
            Customer.address,
            Orders.orderID,
            Orders.orderDate,
            Orders.status AS orderStatus,
            Orders.paymentStatus,
            Orders.paymentMethod,
            GROUP_CONCAT(Menu.menuName SEPARATOR ', ') AS menuNames,
            GROUP_CONCAT(OrderDetail.quantity SEPARATOR ', ') AS quantities,
            GROUP_CONCAT(Menu.price SEPARATOR ', ') AS prices
        FROM
            Customer
        JOIN Orders ON Customer.customerID = Orders.customerID
        JOIN OrderDetail ON Orders.orderID = OrderDetail.orderID
        JOIN Menu ON OrderDetail.menuID = Menu.menuID
        GROUP BY
            Orders.orderID
        ORDER BY
            Orders.orderDate DESC";
    $data = mysqli_query($this->koneksi, $query);
    return $data;
  }
  public function get_orders_by_customer_offline()
  {
    $query = "
            SELECT
            Customer.customerID,
            Customer.name,
            Orders.orderID,
            Orders.orderDate,
            Orders.status AS orderStatus,
            Orders.paymentStatus,
            Orders.paymentMethod,
            Orders.orderDate, 
            GROUP_CONCAT(Menu.menuName SEPARATOR ', ') AS menuNames,
            GROUP_CONCAT(OrderDetail.quantity SEPARATOR ', ') AS quantities,
            GROUP_CONCAT(Menu.price SEPARATOR ', ') AS prices
        FROM
            Customer
        JOIN Orders ON Customer.customerID = Orders.customerID
        JOIN OrderDetail ON Orders.orderID = OrderDetail.orderID
        JOIN Menu ON OrderDetail.menuID = Menu.menuID
        WHERE orderType = 'Offline'
        GROUP BY
            Orders.orderID
        ORDER BY
            Orders.orderDate DESC";
    $data = mysqli_query($this->koneksi, $query);
    return $data;
  }

  public function get_orders_customer_by_id($orderId)
  {
    $query = "
          SELECT
            Customer.customerID,
            Customer.name,
            Customer.email,
            Customer.phoneNumber,
            Customer.address,
            Orders.orderID,
            Orders.orderDate,
            Orders.status AS orderStatus,
            Orders.paymentStatus,
            Orders.paymentMethod,
            Orders.totalAmount,
            GROUP_CONCAT(Menu.menuID SEPARATOR ',') AS menuID,
            GROUP_CONCAT(Menu.menuName SEPARATOR ', ') AS menuNames,
            GROUP_CONCAT(OrderDetail.quantity SEPARATOR ', ') AS quantities,
            GROUP_CONCAT(Menu.price SEPARATOR ', ') AS prices
        FROM
            Customer
        JOIN Orders ON Customer.customerID = Orders.customerID
        JOIN OrderDetail ON Orders.orderID = OrderDetail.orderID
        JOIN Menu ON OrderDetail.menuID = Menu.menuID
        WHERE Orders.orderID = ?
        GROUP BY
            Orders.orderID;
        ";

    // prepared statement
    $stmt = mysqli_prepare($this->koneksi, $query);
    mysqli_stmt_bind_param($stmt, "i", $orderId);
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch the data
    $data = mysqli_fetch_assoc($result);

    // Close the statement
    mysqli_stmt_close($stmt);

    return $data;
  }

  // insert orders and table orderDetail
  public function post_order($customerData, $products)
  {
    // insert into customer
    $insertCustomerQuery = "
        INSERT INTO customer(name, email, phoneNumber, address) VALUES(?, ?, ?, ?); 
        ";
    $customerStmt = $this->koneksi->prepare($insertCustomerQuery);
    $customerStmt->bind_param('ssss', $customerData['name'], $customerData['email'], $customerData['phoneNumber'], $customerData['address']);
    $customerStmt->execute();
    $customerID = $customerStmt->insert_id;
    $customerStmt->close();

    // insert into orders
    $insertOrdersQuery = "
        INSERT INTO orders(customerID, totalAmount, paymentMethod) VALUES (?, ?, ?);
        ";
    $ordersStmt = $this->koneksi->prepare($insertOrdersQuery);
    $ordersStmt->bind_param('ids', $customerID, $customerData['total'], $customerData['metodePembayaran']);
    $ordersStmt->execute();
    $ordersID = $ordersStmt->insert_id;
    $ordersStmt->close();

    // insert into OrderSDetails
    $insertOrdersDetail = "INSERT INTO orderDetail(orderID, menuID, quantity, subtotal) VALUES(?, ?, ?, ?)";
    $orderDetailsStmt = $this->koneksi->prepare($insertOrdersDetail);

    foreach ($products as $productKey => $product) {
      $productID = $product['productID'];
      $quantity = $product['productQuantity'];
      // $price = $product['productPrice'];
      $subtotal = $product['subTotal'];
      // Assuming $ordersID is defined elsewhere in your code
      $orderDetailsStmt->bind_param('iiid', $ordersID, $productID, $quantity, $subtotal);
      if (!$orderDetailsStmt->execute()) {
        echo "Error: " . $orderDetailsStmt->error;
        // }
      }
    }

    $orderDetailsStmt->close();
    return "Success";
  }

  public function post_order_without_customer($totalData, $products)
  {
    // insert into orders
    $insertOrdersQuery = "
        INSERT INTO orders(customerID, totalAmount, orderType) VALUES (?, ?, ?);
        ";
    $ordersStmt = $this->koneksi->prepare($insertOrdersQuery);
    $ordersStmt->bind_param('ids', $totalData['customerID'], $totalData['total'], $totalData['orderType']);
    $ordersStmt->execute();
    $ordersID = $ordersStmt->insert_id;
    $ordersStmt->close();

    // insert into OrderSDetails
    $insertOrdersDetail = "INSERT INTO orderDetail(orderID, menuID, quantity, subtotal) VALUES(?, ?, ?, ?)";
    $orderDetailsStmt = $this->koneksi->prepare($insertOrdersDetail);

    foreach ($products as $productKey => $product) {
      $productID = $product['productID'];
      $quantity = $product['productQuantity'];
      // $price = $product['productPrice'];
      $subtotal = $product['subTotal'];
      // Assuming $ordersID is defined elsewhere in your code
      $orderDetailsStmt->bind_param('iiid', $ordersID, $productID, $quantity, $subtotal);
      if (!$orderDetailsStmt->execute()) {
        echo "Error: " . $orderDetailsStmt->error;
        // }
      }
    }

    $orderDetailsStmt->close();
    return "Success";
  }


  public function update_orders_by_id($id, $totalAmount, $status, $paymentStatus, $paymentMethod, $quantity, $subTotal, $menuId,)
  {

    for ($i = 0; $i < count($quantity); $i++) {
      // Query untuk update tabel orders
      $updateOrderQuery = "
        UPDATE orders
        SET 
            totalAmount = ?,
            status = ?,
            paymentStatus = ?,
            paymentMethod = ?
        WHERE 
            orderId = ?;
    ";

      // Query untuk update tabel orderDetail
      $updateOrderDetailsQuery = "
        UPDATE orderDetail
        SET 
            quantity = ?,
            subTotal = ?
        WHERE 
            orderId = ? AND menuID = ?;
    ";

      // Persiapkan statement untuk update orders
      $statementOrderQuery = $this->koneksi->prepare($updateOrderQuery);
      $statementOrderQuery->bind_param('ssssi', $totalAmount, $status, $paymentStatus, $paymentMethod, $id);

      // Persiapkan statement untuk update orderDetail
      $statementOrderDetailsQuery = $this->koneksi->prepare($updateOrderDetailsQuery);
      $statementOrderDetailsQuery->bind_param('idii', $quantity[$i], $subTotal[$i], $id, $menuId[$i]);

      try {
        // Mulai transaksi untuk memastikan konsistensi data
        $this->koneksi->begin_transaction();

        // Eksekusi query untuk update orders
        $statementOrderQuery->execute();

        // Eksekusi query untuk update orderDetail
        $statementOrderDetailsQuery->execute();

        // Commit transaksi jika semua query berhasil
        $this->koneksi->commit();

        // Tampilkan pesan atau lakukan redirect setelah update
        return "Data berhasil diupdate!";
      } catch (Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        $this->koneksi->rollback();

        // Tampilkan pesan kesalahan
        return "Error updating data: " . $e->getMessage();
      } finally {
        // Tutup statement
        $statementOrderQuery->close();
        $statementOrderDetailsQuery->close();
      }
    }
  }

  public function update_customer($customerID, $name, $email, $phoneNumber, $address)
  {
    $updateCustomerQuery = "
        UPDATE customer
        SET
            name = ?,
            email= ?,
            phoneNumber = ?,
            address = ?
        WHERE
            customerId = ?
        ";

    $stmt = $this->koneksi->prepare($updateCustomerQuery);
    $stmt->bind_param("ssssi", $name, $email,  $phoneNumber, $address, $customerID);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      // The UPDATE operation was successful
      $stmt->close();
      return true;
    } else {
      // The UPDATE operation failed
      $stmt->close();
      return false;
    }
  }

  // public function deleteOrder($orderId, $customerID)
  // {
  //   $deleteOrderQuery = "
  //       DELETE
  //       FROM orders
  //       WHERE orderID = ?
  //       ";

  //   $deleteOrderDetailsQuery = "
  //       DELETE 
  //       FROM orderDetail
  //       WHERE orderID = ?
  //       ";

  //   $deleteCustomerQuery = "
  //       DELETE 
  //       FROM 
  //           customer
  //       WHERE customerID = ?;
  //       ";

  //   try {
  //     $statementOrderQuery = $this->koneksi->prepare($deleteOrderQuery);
  //     $statementOrderQuery->bind_param('i', $orderId);

  //     $statementOrderDetailQuery = $this->koneksi->prepare($deleteOrderDetailsQuery);
  //     $statementOrderDetailQuery->bind_param('i', $orderId);

  //     $statementCustomerQuery = $this->koneksi->prepare($deleteCustomerQuery);
  //     $statementCustomerQuery->bind_param('i', $customerID);

  //     $statementOrderQuery->execute();
  //     $statementCustomerQuery->execute();

  //     $statementOrderQuery->close();
  //     $statementCustomerQuery->close();

  //     return "success";
  //   } catch (Exception $e) {
  //     return "error: " . $e->getMessage();
  //   }
  // }


  
  public function get_all_menu()
  {
    $getMenuQuery = "SELECT * FROM menu";

    $data = mysqli_query($this->koneksi, $getMenuQuery);
    return $data;
  }
  
  public function get_menu_by_category($kategori)
  {
    $getMenuQuery = "SELECT * FROM menu WHERE category = '$kategori'";

    $data = mysqli_query($this->koneksi, $getMenuQuery);
    return $data;
  }
}
