
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="logo" aria-current="page" href="index.html">
            <img class="logo" src="../img/logo.png"/>
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbars">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Ubicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ubicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Promociones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tarjetas regalo</a>
              </li>
              <li class="nav-item">
                <button type='button' class="btn btn-primary" data-toggle="modal" data-target="#popUpWindow">Iniciar sesión</button>
                <div class="modal fade" id="popUpWindow">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"></h3>
                      </div>
                      <div class="modal-header">
                        <form class="login-container" name="loginform" id="loginform" role="form" action="../wp-login.php" method="POST">
                          <div class="form-group">
                            <input type="text" name="log" id="user_login" class="form-control" placeholder="Usuario"/>
                            <input type="password" name="pwd" id="user_pass" class="form-control" placeholder="Password" />
                            <a href=""><p>¿Aún no estás registrado?</p></a>
                          </div>
                        </form>
                      </div>
                            <div class="modal-footer"> 
                                <input type="submit" value="Send" form="loginform" class="btn btn-primary btn-block" id="submit">
                                <input type="hidden" name="redirect_to" value="/social1">
                            </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
          
</header>