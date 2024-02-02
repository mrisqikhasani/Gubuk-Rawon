<!-- Start Restaurant Menu -->
<section id="mu-restaurant-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-restaurant-menu-area">
          <div class="mu-title">
            <h2>MENU GUBUK RAWON</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-restaurant-menu-content">
            <ul class="nav nav-tabs mu-restaurant-menu">
              <li class="active"><a href="#makanan" data-toggle="tab">Makanan</a></li>
              <li><a href="#paket" data-toggle="tab">Paket</a></li>
              <li><a href="#minuman" data-toggle="tab">Minuman</a></li>
              <li><a href="#lain-lain" data-toggle="tab">Lain-lain</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="makanan">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <?php
                    $itemsPerRow = 3;
                    $counter = 0;
                    foreach ($resultMakanan as $row) {
                      // Buka div row setiap awal baris
                      if ($counter % $itemsPerRow == 0) {
                        echo "<div class='row'>";
                      }
                    ?>
                      <div class='col-md-4'>
                        <ul class='mu-menu-item-nav' id='menu-list' onclick='addToCart(event)'>
                          <li class='menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row[' price'] ?>'>
                            <div class='media menu'>
                              <div class='media-left'>
                                <a href='#'>
                                  <img class='media-object' src='assets/img/menu/<?= $row['imageName'] ?>' alt=' img'>
                                </a>
                              </div>
                              <div class='media-body menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                                <h4 class='media-heading'><?= $row['menuName'] ?></h4>
                                <span class='mu-menu-price'><?= $row['price'] ?></span>
                                <p><?= $row['description'] ?></p>
                                <button class='btn btn-primary'>Add To Cart</button>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    <?php
                      // Tutup div row setiap akhir baris
                      if (($counter + 1) % $itemsPerRow == 0 || $counter == count($resultMakanan) - 1) {
                        echo "</div>";
                      }
                      $counter++;
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- tab fade paket -->
              <div class="tab-pane fade " id="paket">
                <div class="mu-tab-content-area">
                  <div class="row">
                    <?php
                    $itemsPerRow = 3;
                    $counter = 0;
                    foreach ($resultPaket as $row) {
                      // Buka div row setiap awal baris
                      if ($counter % $itemsPerRow == 0) {
                        echo "<div class='row'>";
                      }
                    ?>
                      <div class='col-md-4'>
                        <ul class='mu-menu-item-nav' id='menu-list' onclick='addToCart(event)'>
                          <li class='menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                            <div class='media menu'>
                              <div class='media-left'>
                                <a href='#'>
                                  <img class='media-object' src='assets/img/menu/<?= $row['imageName'] ?>' alt='img'>
                                </a>
                              </div>
                              <div class='media-body menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                                <h4 class='media-heading'><?= $row['menuName'] ?></h4>
                                <span class='mu-menu-price'><?= $row['price'] ?></span>
                                <p><?= $row['description'] ?></p>
                                <button class='btn btn-primary'>Add To Cart</button>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    <?php
                      // Tutup div row setiap akhir baris
                      if (($counter + 1) % $itemsPerRow == 0 || $counter == count($resultMakanan) - 1) {
                        echo "</div>";
                      }
                      $counter++;
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade " id="minuman">
              <div class="mu-tab-content-area">
                <div class="row">
                  <?php
                  $itemsPerRow = 3;
                  $counter = 0;
                  foreach ($resultMinuman as $row) {
                    
                    if ($counter % $itemsPerRow == 0) {
                      echo "<div class='row'>";
                    }
                  ?>
                    <div class='col-md-4'>
                      <ul class='mu-menu-item-nav' id='menu-list' onclick='addToCart(event)'>
                        <li class='menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                          <div class='media menu'>
                            <div class='media-left'>
                              <a href='#'>
                                <img class='media-object' src='assets/img/menu/<?= $row['imageName'] ?>' alt='img'>
                              </a>
                            </div>
                            <div class='media-body menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                              <h4 class='media-heading'><?= $row['menuName'] ?></h4>
                              <span class='mu-menu-price'><?= $row['price'] ?></span>
                              <p><?= $row['description'] ?></p>
                              <button class='btn btn-primary'>Add To Cart</button>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  <?php
                    // Tutup div row setiap akhir baris
                    if (($counter + 1) % $itemsPerRow == 0 || $counter == count($resultMakanan) - 1) {
                      echo "</div>";
                    }
                    $counter++;
                  }
                  ?>
                </div>
              </div>
            </div>

            <div class="tab-pane fade " id="lain-lain">
              <div class="mu-tab-content-area">
                <div class="row">
                  <?php
                  $itemsPerRow = 3;
                  $counter = 0;
                  foreach ($resultOthers as $row) {
                    // Buka div row setiap awal baris
                    if ($counter % $itemsPerRow == 0) {
                      echo "<div class='row'>";
                    }
                  ?>
                    <div class='col-md-4'>
                      <ul class='mu-menu-item-nav' id='menu-list' onclick='addToCart(event)'>
                        <li class='menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                          <div class='media menu'>
                            <div class='media-left'>
                              <a href='#'>
                                <img class='media-object' src='assets/img/menu/<?= $row['imageName'] ?>' alt=' img'>
                              </a>
                            </div>
                            <div class='media-body menu' data-id='<?= $row['menuID'] ?>' data-name='<?= $row['menuName'] ?>' data-price='<?= $row['price'] ?>'>
                              <h4 class='media-heading'><?= $row['menuName'] ?></h4>
                              <span class='mu-menu-price'>Rp <?= $row['price'] ?></span>
                              <p><?= $row['description'] ?></p>
                              <button class='btn btn-primary'>Add To Cart</button>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  <?php
                    // Tutup div row setiap akhir baris
                    if (($counter + 1) % $itemsPerRow == 0 || $counter == count($resultMakanan) - 1) {
                      echo "</div>";
                    }
                    $counter++;
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="buttonChart">
            <button type="button" class="btn btn-danger btn-lg" id="buttonCart" data-toggle="modal" data-target="#Cart" style=" position: fixed; bottom: 20px; right: 20px; display: block;
									">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              Cart
            </button>
          </div>

          <?php include('layout/modalCart.php'); ?>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End Restaurant Menu -->