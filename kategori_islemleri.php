<?php 
ob_start();
session_start();
if (!isset($_SESSION['kisi'])) {
  header("Location:../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ÜRÜN EKLE</title>
    <script type="text/javascript" src="../assets/js/sweetalert2.all.min.js"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <?php 
    include("../yardimcidosyalar/baglanti.php");
    ?>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php 
                    echo $_SESSION['kisi'];
                   ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="oturumkapat.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Çıkış </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-cog"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategori-islemleri.php">
                <span class="menu-title">Kategori İşlemleri</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="urun-islemleri.php">
                <span class="menu-title">Ürün İşlemleri</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin-islemleri.php">
                <span class="menu-title">Admin İşlemleri</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

            
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Kategori Ekle</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" name="form1" method="post">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Kategori Adı</label>
                        <?php 
                      //guncelle butonu

                           if (isset($_GET['guncelleid'])) {
                            $katid= $_GET['guncelleid'];
                              $kategoriadi= $vt->query("SELECT katadi FROM kategoriler where katid = '$katid'")->fetch()['katadi'];


                              echo '<input type="text" class="form-control" id="kategoriadi" name="kategoriadi"  value="'.$kategoriadi.'" placeholder="Kategori Adı" autocomplete="off">';
                           }
                           else {
                             echo '<input type="text" class="form-control" id="kategoriadi" name="kategoriadi" placeholder="Kategori Adı" autocomplete="off">';
                           }




                      ?>
                        
                      </div>
                      <?php 
                        if (isset($_POST['kaydet'])) {
                          

                          $kategoriadi = mb_strtoupper(trim($_POST['kategoriadi']),'utf8');
                          if ($kategoriadi=="") {
                            echo '<script>Swal.fire("Uyarı", "Kategori adı boş geçilemez", "info"); </script>';
                          }
                          else {
                              $kayitsayisi = $vt->query("SELECT count(*) as ks FROM kategoriler where katadi = '$kategoriadi'")->fetch()['ks'];
                              if ($kayitsayisi == 0) {
                                $kayitkontrol = $vt->query("INSERT INTO kategoriler VALUES (NULL, '$kategoriadi')");
                                if ($kayitkontrol->rowCount() == 1) {
                                  echo '<script>Swal.fire("Başarılı", "Kategori eklendi", "success"); </script>';
                                }
                                else {
                                   echo '<script>Swal.fire("Hata", "Kategori eklenemedi", "error"); </script>';
                                }

                              }
                              else
                              {
                                echo '<script>Swal.fire("Uyarı", "Kategori daha önce eklenmiş", "info"); </script>';
                              }
                          }
                        }



                       ?>
                      
                      
                     <?php 
                      //guncelle butonu

                     if (isset($_GET['guncelleid'])) {
                        echo '<button type="submit" class="btn btn-gradient-primary me-2" name="guncelle">Güncelle</button>';
                     }
                     else {
                       echo ' <button type="submit" class="btn btn-gradient-primary me-2" name="kaydet">Kaydet</button>';
                     }


                     if (isset($_POST['guncelle'])) {
                       $katid = $_GET['guncelleid'];
                       $katadi = $_POST['kategoriadi'];
                       $guncellekontrol = $vt->query("UPDATE kategoriler set katadi = '$katadi' WHERE katid = '$katid'");
                       if ($guncellekontrol->rowCount()== 1 ) {

                          echo '<script>Swal.fire("Başarılı", "Kategori güncellendi", "success"); </script>';
                          //header("Location:kategori-islemleri.php");
                       }
                       else
                       {
                          echo '<script>Swal.fire("Hata", "Kategori güncellenemedi", "error"); </script>';
                       }

                     }

                     if (isset($_GET['silid'])) {
                       $katid = $_GET['silid'];
                       //$katadi = $_POST['kategoriadi'];
                       $guncellekontrol = $vt->query("DELETE FROM kategoriler WHERE katid = '$katid'");
                       if ($guncellekontrol->rowCount()== 1 ) {

                          echo '<script>Swal.fire("Başarılı", "Kategori silindi", "success"); </script>';
                          //header("Location:kategori-islemleri.php");
                       }
                       else
                       {
                          echo '<script>Swal.fire("Hata", "Kategori silinemedi", "error"); </script>';
                       }

                     }


                      ?>
                      
                     
                      
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">KATEGORİLER</h4>
                    
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Kategori Adı</th>
                          <th>Silme</th>
                          <th>Güncelleme</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php  
                            $kategoriler = $vt->query("select * from kategoriler",PDO::FETCH_ASSOC);
                            $sirano = 1;
                            foreach ($kategoriler as $kategori) {
                              
                              echo ' <tr>
                                      <td>'.$sirano.'</td>
                                      <td>'.$kategori['katadi'].'</td>
                             
                                      <td class="text-danger" align="center"><a href="kategori-islemleri?silid='.$kategori['katid'].'" style="color:red;"><i class="fa fa-trash-o"></i></a></td>
                                      <td class="text-primary" align="center"><a href="kategori-islemleri?guncelleid='.$kategori['katid'].'"><i class="fa fa-edit"></i></td>
                                    </tr>';
                                    $sirano++;
                            }


                       ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/select2/select2.min.js"></script>
    <script src="../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="../assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/file-upload.js"></script>
    <script src="../assets/js/typeahead.js"></script>
    <script src="../assets/js/select2.js"></script>
    
    <!-- End custom js for this page -->
  </body>
</html>
