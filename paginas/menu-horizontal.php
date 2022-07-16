<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UESAL</title>
        <link href="<?php echo RAIZ ?>css/styles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawesome.com/cad69f0005.js" crossorigin="anonymous"></script>
        
  </script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <?php
                include("componentes/encabezado.php")
            ?>
            <div id="layoutSidenav_nav">
                <?php
                    include("componentes/menu.php")
                ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 ">
                        <div class="card" style="margin-top:15px;padding:10px 15px" >
                            <?php
                                $menu = $mods[MODULO][ACCION];
                                $archivo = $menu["archivo"];
                                include($archivo);
                            ?>
                        </div>
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
