<?php 
    view('static/header');

?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= URL.'logout'; ?>" class="nav-link">Çıkış</a>
      </li>
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            Message Start
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Message Start
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Message Start
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            Message End
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 

    view('static/sidebar');
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-5">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profiliniz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" id="profile">
                <div class="card-body">
                  <hr>
                  <div class="form-group">
                    <label for="isim">İsim</label>
                    <input type="text" class="form-control" name="isim" value="<?= getSession('name')?>" id="isim">
                  </div>
                  <div class="form-group">
                    <label for="soyisim">Soyisim</label>
                    <input type="text" class="form-control" name="soyisim" value="<?= getSession('surname')?>" id="soyisim">
                  </div>
                  <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= getSession('email')?>">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="1" class="btn btn-primary">Güncelle</button>
                </div>
              </form>
            </div>
            </div>
          </div>
          <!-- password Change -->
          <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Şifrenizi Değiştirin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" id="password_change">
                <div class="card-body">
                  <hr>
                  <div class="form-group">
                    <label for="old_password">Eski Şifreniz</label>
                    <input type="password" class="form-control" name="old_password" id="old_password">
                  </div>
                  <div class="form-group">
                    <label for="password">Yeni Şifreniz</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="form-group">
                    <label for="password_again">Tekrar Yeni Şifreniz</label>
                    <input type="password" class="form-control" name="password_again" id="password_again">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="1" class="btn btn-primary">Güncelle</button>
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
    <?php 
      view('static/csidebar')
    ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php view('static/footer');?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= assets('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- SweetAlert -->
<script src="<?= assets('plugins/sweetalert2/sweetalert2.all.js')?>"></script> 
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js" integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    const profile = document.getElementById('profile');
    const password_change = document.getElementById('password_change');
    
  profile.addEventListener('submit', (e) => {
    // console.log('test');
    let isim = document.getElementById('isim').value;
    let soyisim = document.getElementById('soyisim').value;
    let email = document.getElementById('email').value;

    
    let formData = new FormData();

    formData.append('isim', isim );
    formData.append('soyisim', soyisim );
    formData.append('email', email );



    axios.post('<?= url('api/profile') ?>', formData).then(response => {
      
        Swal.fire(
        response.data.title,
        response.data.msg,
        response.data.status,

        );      

        console.log(response)
    }).catch(error => console.log(error))
    e.preventDefault();
  })

  password_change.addEventListener('submit', (e) => {
    // console.log('test');
    let old_password = document.getElementById('old_password').value;
    let password = document.getElementById('password').value;
    let password_again = document.getElementById('password_again').value;

    
    let formData = new FormData();

    formData.append('old_password', old_password );
    formData.append('password', password );
    formData.append('password_again', password_again );



    axios.post('<?= url('api/passwordchange') ?>', formData).then(response => {
      
 
        Swal.fire(
        response.data.title,
        response.data.msg,
        response.data.status,

        );

      
        console.log(response)
    }).catch(error => console.log(error))
    e.preventDefault();
  })

</script>
</body>
</html>
