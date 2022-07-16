<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav nav-texto">                      
            <a class="nav-link link-menu-color" style="color:#dfdfdf" href="<?php echo RAIZ ?>inicio/pagina-inicio">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-house" style="color:#dfdfdf"></i></div>
                Inicio
            </a>
            
            <a class="nav-link link-menu-color collapsed" style="color:#dfdfdf" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProyecto" aria-expanded="false" aria-controls="collapseProyecto">
                <div class="sb-nav-link-icon"><i style="color:#dfdfdf" class="fa-solid fa-diagram-project"></i></div>
                Proyecto
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseProyecto" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link"  href="<?php echo RAIZ ?>proyecto/inicio"> <i class="fa-solid fa-circle-dot sub-icono"></i> Crear</a>
                    <a class="nav-link" href="<?php echo RAIZ ?>proyecto/consultar"><i  class="fa-solid fa-circle-dot sub-icono"></i>Consultar</a>
                </nav>
            </div>

            <a class="nav-link link-menu-color collapsed" style="color:#dfdfdf" href="<?php echo RAIZ ?>presupuesto/inicio">
                <div class="sb-nav-link-icon"><i style="color:#dfdfdf" class=" fa-solid fa-money-bill-trend-up"></i></div>
                Presupuesto
            </a>
            
            <a class="nav-link link-menu-color collapsed" style="color:#dfdfdf" href="#" data-bs-toggle="collapse" data-bs-target="#collapseModificar" aria-expanded="false" aria-controls="collapseModificar">
                <div class="sb-nav-link-icon"><i style="color:#dfdfdf" class="fa-solid fa-file-pen"></i></div>
                Modificar
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseModificar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link"  href="<?php echo RAIZ ?>modificar/adicion"> <i class="fa-solid fa-circle-dot sub-icono"></i> Adicion</a>
                    <a class="nav-link" href="<?php echo RAIZ ?>modificar/translados"><i  class="fa-solid fa-circle-dot sub-icono"></i>Translados</a>
                    <a class="nav-link" href="<?php echo RAIZ ?>modificar/consultar"><i  class="fa-solid fa-circle-dot sub-icono"></i>Aval</a>
                </nav>
            </div>

            <a class="nav-link link-menu-color" style="color:#dfdfdf" href="<?php echo RAIZ ?>inicio/pagina-inicio">
                <div class="sb-nav-link-icon"><i style="color:#dfdfdf" class="fa-solid fa-file-lines"></i></div>
                Informes
            </a>
        </div>
    </div>
    <!-- <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div> -->
</nav>