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
            Orders.orderID";
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

    public function update_orders_by_id($id, $totalAmount, $status, $paymentStatus, $paymentMethod, $quantity, $subTotal)
    {
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
                orderId = ?;
        ";

        // Persiapkan statement untuk update orders
        $statementOrderQuery = $this->koneksi->prepare($updateOrderQuery);
        $statementOrderQuery->bind_param('ssssi', $totalAmount, $status, $paymentStatus, $paymentMethod, $id);

        // Persiapkan statement untuk update orderDetail
        $statementOrderDetailsQuery = $this->koneksi->prepare($updateOrderDetailsQuery);
        $statementOrderDetailsQuery->bind_param('idi', $quantity, $subTotal, $id);

        // Mulai transaksi untuk memastikan konsistensi data
        try {
            $this->koneksi->begin_transaction();

            // Eksekusi query untuk update orders
            $statementOrderQuery->execute();

            // Eksekusi query untuk update orderDetail
            $statementOrderDetailsQuery->execute();

            // Commit transaksi jika semua query berhasil
            $this->koneksi->commit();

            // Tampilkan pesan atau lakukan redirect setelah update
            echo "Orders updated successfully!";
        } catch (Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            $this->koneksi->rollback();

            // Tampilkan pesan kesalahan
            echo "Error updating orders: " . $e->getMessage();
        }

        // Tutup statement
        $statementOrderQuery->close();
        $statementOrderDetailsQuery->close();
    }
}
