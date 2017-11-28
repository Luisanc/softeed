<header class="full">
    <div class="container">
        <div class="left">
            <div class="logo">
                <a href="#"><img src="aplication/images/Softeed.jpg" alt="Softeed Logo" title="Softeed Logo"></a>
            </div>
            <nav>
                <div class="navigation full">
                    <div class="nav">
                        <a href="<?php echo $helper->url("estudiantes","index"); ?>" class="black">ESTUDIANTES</a>
                    </div>
                    <div class="nav">
                        <a href="<?php echo $helper->url("projects","index"); ?>" class="black">PROYECTOS</a>
                    </div>
                </div>
            </nav>
        </div>
        <?php if (empty($sesion)){?>
        <div class="right">
              <div class="signin ">
                  <a href="<?php echo $helper->url("login","index")?>" class="black">Iniciar Sesión</a>
              </div>
              <div class="signup ">
                  <a href="<?php echo $helper->url("registre","index")?>" class="black">Registarse</a>
              </div>
        </div>
        <?php }else{?>
        <div class="right">
            <label class="name"><?php echo 'Bienvenido '.$sesion[1]; ?></label>
        </div>
        <?php }?>
    </div>
</header>