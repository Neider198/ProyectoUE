<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?php echo RAIZ ?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
  </script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <?php
                include("componentes/encabezado.php")
            ?>
            <div id="layoutSidenav_nav">
        
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php
                        $menu = $mods[MODULO][ACCION];
                        $archivo = $menu["archivo"];
                        include($archivo);
                      ?>
                    </div>
                </main>
                <?php
                    include("componentes/pie.php")
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo RAIZ ?>js/scripts.js"></script>
    </body>
</html>
