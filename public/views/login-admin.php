<section class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
      <h2 class="">Inicio de sesi&oacute;n</h2>
<br>
<?php if (isset($mensajeerror)): ?>
  <div class="alert alert-danger" role="alert"><?php echo $mensajeerror ?></div>
  <br>
<?php endif; ?>

      <form class="form-signin" method="post" action="login">
          <label for="inputEmail" class="sr-only">Usuario</label>
          <input type="usuario" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
          <label for="password" class="sr-only">Contrase&ntilde;a</label>
          <input type="password" id="password" class="form-control" name="password" placeholder="Contrase&ntilde;a" required="">
          <!-- <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div> -->
          <br>
          <button class="btn  btn-primary btn-block" type="submit">Iniciar Sesi&oacute;n</button>
        </form>
    </div>
  </div>

</section>
