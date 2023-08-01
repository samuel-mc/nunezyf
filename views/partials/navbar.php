<header class="d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <a href="<?php echo __ROOT__; ?>">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        </a>
        <nav class="navbar__list">
            <ul>
                <li><a class="a--darkBlue" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="dropdown">
                    <span class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </span>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo __ROOT__; ?>servicio">Unidad de Inspeccion</a>
                        <a class="dropdown-item" href="<?php echo __ROOT__; ?>normas">Normas de Seguridad</a>
                    </div>
                </li>
                <li><a class="a--darkBlue" href="<?php echo __ROOT__; ?>solicitud">Solicitud</a></li>
                <li><a class="a--darkBlue" href="<?php echo __ROOT__; ?>acerca">Acerca</a></li>
                <li><a class="a--darkBlue" href="<?php echo __ROOT__; ?>contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>contacto" class="btn btn-primary btn--darkblue px-4 py-2">
            Empezar
        </a>
    </div>
</header>

<header class="py-2 px-4 w-full d-lg-none">
    <div class="d-flex justify-content-between">
        <a href="<?php echo __ROOT__; ?>">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="">
        </a>
        <button class="p-2 btn btn-primary btn--darkblue btn--square" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="notShowed nav__mobile" id="mobileMenu">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-75">
        <div class="d-flex justify-content-between p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png">
            <button class="btn btn-danger btn--square d-flex justify-content-center" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <nav class="navbar__list my-5">
            <ul class="flex-column">
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <div class="dropdown my-3">
                    <a class="h4 text-white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                    Servicios
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo __ROOT__; ?>servicio">Unidad de Inspeccion</a>
                        <a class="dropdown-item" href="<?php echo __ROOT__; ?>normas">Normas de Seguridad</a>
                    </div>
                </div>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>solicitud">Solicitud</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>acerca">Acerca</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>contacto" class="btn btn-primary btn--mediumblue">
            Empezar
        </a>

    </div>
</nav>