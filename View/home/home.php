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
  <div class="content-wrapper p-3">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <h5 class="mt-4 mb-2">Güncel Durum <code><?= date('Y-m-d'); ?></code></h5>
      <div class="row">
        <?php foreach($data['istatistik'] as $row):?>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-gradient-<?= status($row['status'])['bg-color'] ?>">
              <span class="info-box-icon"><i class="<?= status($row['status'])['icon'] ?>"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><?= status($row['status'])['title'] ?></span>
                <span class="info-box-number"><?= $row['toplam']?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: <?= number_format($row['yuzde']) ?>%"></div>
                </div>
                <span class="progress-description">
                  <?= '%'. number_format($row['yuzde'], 2) ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        <?php endforeach; ?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row">
      <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <?php foreach($data['surec'] as $todo):?>
              <div class="time-label">
                <span class="bg-info"><?= date('d.m.Y', strtotime($todo['start_date']))?></span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fa fa-angle-double-right bg-light"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> <?= date('H:i', strtotime($todo['start_date']))?></span>
                  <h3 class="timeline-header">
                    <span class="badge" style="color: #FFFFFF; background-color: <?= $todo['color']?>"> <?= $todo['category_title'];?> </span>
                    <?= $todo['title']?>
                  </h3>
                  <div class="timeline-body"><?= $todo['description']?></div>
                  </br>
                  <span class="badge" style="color: #FFFFFF; background-color: <?= $todo['color']?>"><?= $todo['progress']; ?>%</span>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar" style="color: #FFFFFF; background-color: <?= $todo['color']?>; width:<?= $todo['progress']; ?>%"></div>
                    </div>
                  

                  <div class="timeline-footer">
                    <a href="<?= url('todo/edit/'.$todo['id']); ?>" class="btn btn-sm" style="color: #FFFFFF; background-color: <?= $todo['color']?>">Git</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <?php endforeach;?>
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
      </div>
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
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.min.js')?>"></script>
</body>
</html>
