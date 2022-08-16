<div class="login-page vh-100">
<div class="row align-item-center justify-content-center">
  <!-- /.login-logo -->
  <div class="card card card-outline card-primary">
    <div class="card-header text-center">
      <b>Almacén</b>MAIE
    </div>
    <div class="card-body">
      <p>Ingresar al sistema</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">

          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario(); 

        ?>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</div>

