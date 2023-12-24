<?php 
    view('static/header');

?>

<div class="login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>ToDo</b>App</a>
            </div>
            <div class="card-body">
            <p class="login-box-msg"><?= lang('Oturum Açın');?></p>

            
            <form action="<?= URL."login" ?>" method="post">
                <div class="input-group mb-3">
                <?php getSession('hata');?>
                <input type="email" class="form-control" name="email" placeholder="<?= lang('Email');?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="<?= lang('Password');?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                    <?= lang('Remember Me');?>
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" name="signin" class="btn btn-primary btn-block"><?= lang('Sign In');?></button>
                </div>
                <!-- /.col -->
                </div>
            </form>

            <!-- <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p> -->
            </div>
        <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>
<!-- /.login-box -->


<!-- Main Footer -->
  <?php view('static/footer');?>
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
