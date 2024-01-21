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
                <h3 class="card-title">Yapılacaklar Listenize Ekleyin</h3>
              </div>
              <!-- /.card-header -->
              <?php 
                if (getSession('error')) {
                    echo "<div class='alert alert-".$_SESSION['error']['type']."'>". $_SESSION['error']['message']."</div>";
                }
            ?>
              <!-- form start -->
              <form method="post" id="todo_add_form">
                <input id="id" type="hidden" value="<?= $data['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Kategori Seçiniz</label>
                    <select class="form-control" name="category_id" id="category_id">
                      <?php if ($data['category_id'] !== 0): ?>
                      <option value="<?= $data['category_id']; ?>"><?= $data['category_title']; ?></option>
                      <?php endif;?>
                      <option value="0">- Kategori Seçimi Yapınız -</option>
                      <?php foreach($data['categories'] as $category):?>
                      <option value="<?= $category['id']?>"><?= $category['title']?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="title">Başlık</label>
                    <input type="text" class="form-control" name="title" id="title" value="<?= $data['title']; ?> " placeholder="Ne yapmak istersiniz?">
                  </div>
                  <div class="form-group">
                    <label for="description">Açıklama</label>
                    <input type="text" class="form-control" name="description" id="description" value="<?= $data['description']; ?> " placeholder="Ne yapmak istersiniz?">
                  </div>
                  <div class="form-group">
                    <label for="status">Durum</label>
                    <select name="status" id="status" class="form-control">
                      <option <?= $data['status'] == 'a' ? 'selected="selected"' : null; ?> value="a">Aktif</option>
                      <option <?= $data['status'] == 'p' ? 'selected="selected"' : null; ?> value="p">Pasif</option>
                      <option <?= $data['status'] == 's' ? 'selected="selected"' : null; ?> value="s">Süreçte</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="progress">İlerleme</label>
                    <input type="range" class="form-control" name="progress" id="progress" value="<?= $data['progress']; ?>" min="0" max="100">
                  </div>
                  <div class="form-group">
                    <label for="color">Renk Seçiniz</label>
                    <input type="color" class="form-control" name="color" id="color" value="<?= $data['color']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="start_date">Başlangıç Tarihi</label>
                    <div class="row">
                        <?php 
                        $start_date = !empty($data['start_date']) ? date('Y-m-d', strtotime($data['start_date'])) : date('Y-m-d');
                        $start_date_time = !empty($data['start_date']) ? date('H:i', strtotime($data['start_date'])) : date('H:i');
                        ?>
                        <input type="date" value="<?= $start_date ?>" class="form-control col-8" name="start_date" id="start_date">
                        <input type="time" value="<?= $start_date_time ?>" class="form-control col-4" name="start_date_time" id="start_date_time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="end_date">Bitiş Tarihi</label>
                    <div class="row">
                        <?php 
                        $end_date = !empty($data['end_date']) ? date('Y-m-d', strtotime($data['end_date'])) : date('Y-m-d');
                        $end_date_time = !empty($data['end_date']) ? date('H:i', strtotime($data['end_date'])) : date('H:i');
                        ?>
                        <input type="date" value="<?= $end_date ?>" class="form-control col-8" name="end_date" id="end_date">
                        <input type="time" value="<?= $end_date_time ?>" class="form-control col-4" name="end_date_time" id="end_date_time">
                    </div>
                </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="1" class="btn btn-primary">Ekle</button>
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

  const todo = document.getElementById('todo_add_form');
  
  todo.addEventListener('submit', (e) => {
    // console.log('test');
    let id = document.getElementById('id').value;
    let title = document.getElementById('title').value;
    let description = document.getElementById('description').value;
    let category_id = document.getElementById('category_id').value;
    let color = document.getElementById('color').value;
    let start_date = document.getElementById('start_date').value;
    let end_date = document.getElementById('end_date').value;
    let start_date_time = document.getElementById('start_date_time').value;
    let end_date_time = document.getElementById('end_date_time').value;
    let status = document.getElementById('status').value;
    let progress = document.getElementById('progress').value;
    
    let formData = new FormData();

    formData.append('id', id );
    formData.append('title', title );
    formData.append('description', description );
    formData.append('category_id', category_id );
    formData.append('color', color );
    formData.append('start_date', start_date );
    formData.append('end_date', end_date );
    formData.append('start_date_time', start_date_time );
    formData.append('end_date_time', end_date_time );
    formData.append('status', status );
    formData.append('progress', progress );


    axios.post('<?= url('api/edittodo') ?>', formData).then(response => {
      
      if (response.data.redirect) {
        // console.log(response.data.redirect);
        window.location.href = response.data.redirect;
      } else {

        Swal.fire(
        response.data.title,
        response.data.msg,
        response.data.status,

        );

      }

      

        console.log(response)
    }).catch(error => console.log(error))
    e.preventDefault();
  })

</script>
</body>
</html>
