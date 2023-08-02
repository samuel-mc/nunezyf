<header class="d-none d-lg-block bg--colorSecond bg--image2">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <a href="<?php echo __ROOT__; ?>">
            <img class="img-fluid font" src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        </a>
        <nav class="navbar__list font--workSans">
            <ul>
                <li><a class="a--colorFirst text--colorFirst" href="<?php echo __ROOT__; ?>#home">Home</a></li>
                <li><a class="a--colorFirst" href="<?php echo __ROOT__; ?>#solicitud">Acerca</a></li>
                <li><a class="a--colorFirst" href="<?php echo __ROOT__; ?>#acerca">Programas academicos</a></li>
                <li><a class="a--colorFirst" href="<?php echo __ROOT__; ?>#contacto">Becas</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>#contacto" class="btn btn-primary btn--colorFirst px-4 py-2 font--workSans">
            INSCRÍBETE
        </a>
    </div>
</header>

<header class="py-2 px-4 w-full d-lg-none">
    <div class="d-flex justify-content-between">
        <a href="<?php echo __ROOT__; ?>">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w--128">
        </a>
        <button class="p-2 btn btn-primary btn--colorFirst btn--square" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="notShowed nav__mobile bg--image2 font--workSans" id="mobileMenu">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-75">
        <div class="d-flex justify-content-between p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w--128">
            <button class="btn btn-danger btn--square d-flex justify-content-center" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <nav class="navbar__list my-5">
            <ul class="flex-column">
                <li class="my-3"><a class="h4 a--colorFirst" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="my-3"><a class="h4 a--colorFirst" href="<?php echo __ROOT__; ?>solicitud">Solicitud</a></li>
                <li class="my-3"><a class="h4 a--colorFirst" href="<?php echo __ROOT__; ?>acerca">Acerca</a></li>
                <li class="my-3"><a class="h4 a--colorFirst" href="<?php echo __ROOT__; ?>contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>contacto" class="btn btn-primary btn--colorFirst">
            INSCRÍBETE
        </a>

    </div>
</nav>