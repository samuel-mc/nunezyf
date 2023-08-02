<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="bg--hero pb-5">
        <div class="container grid--2cols gap-8">
            <div class="p-0 p-sm-2 gap-2 font--workSans">
                <div class="pt-2">
                    <spam class="bg-white px-3 py-2 m-0 rounded-lg">Nunca dejes de aprender</spam>
                </div>
                <h1 class="font-weight-bold text--colorFirst text--3xl">Tradición & Vanguardia.</h1>
                <p class="text--colorFirst">Más de 100 años trabajando en el futuro académico de México.</p>
                <div class="grid--2cols gap-2 align-items-center">
                    <a class="btn btn--colorFirst" href="<?php echo __ROOT__; ?>#contacto">INSCRÍBETE</a>
                    <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/10k.png">
                </div>
            </div>
            <div class="p-0 p-sm-4 position-relative">
                <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/heroImg.png">
                <div class="d-flex flex-row position-absolute sobreponerBtn rounded-lg opacity-80 align-items-center p-2">
                    <img class="pr-2" src="<?php echo __ROOT__; ?>/public/img/icon/calendar.png">
                    <div class="">
                        <p class="font-weight-bold m-0">250k</p>
                        <p class="m-0">Estudiantes inscritos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grid--2cols text--colorFirst container gap-4 align-items-center py-5">
        <img class="p-2 img-fluid" src="<?php echo __ROOT__; ?>/public/img/acerca.png">
        <div class="font--workSans">
            <h1 class="font-weight-bold text--2xl text-uppercase">Acerca de nosotros</h1>
            <p>
                Desde 1918 nuestro colegio ha vivido muchos de los acontecimientos mundiales más importantes de la historia: el final de la Revolución Mexicana, la creación de la primera computadora, la Segunda Guerra Mundial, el primer viaje a la Luna… <br>
                Desde ese momento nos hemos dedicado arduamente a la generación de un mejor futuro a través de un modelo educativo siempre en vanguardia, enfocado a crear profesionales de primer nivel en todas las areas y sectores para el área productiva de de la nación.<br>
                Elaborar, realizar y evaluar un proyecto educativo, es la tarea formativa de nuestra escuela, donde nos esforzamos por colaborar estrechamente con los padres de familia, primeros responsables de la educación de sus hijos. Los maestros colaboramos aceptando el reto de ayudar a formarlos y orientarlos para el mejor cumplimiento de su misión.<br>
                La escuela humaniza mediante la cultura, ayuda a madurar, procura descubrir, valorar y cultivar la propia identidad, por lo que es fundamental inspirar y alimentar la disponibilidad, la participación, la confianza, la generosidad y el espíritu de colaboración entre los alumnos, maestros, trabajadores y padres de familia.<br>
            </p>
        </div>
    </section>

    <section class="container" id="agenda">
        <div class="bg--colorFirst p-4 rounded-lg bg--image2 position-relative grid--2cols font--workSans">
            <div>
                <h1 class="text-white font-weight-bold py-4 text--2xl text-uppercase">Agenda una visita</h1>
                <a class="btn btn--colorThird" href="<?php echo __ROOT__; ?>#contacto">AGENDA AHORA</a>
            </div>
            <img class="pr-2 sobreponerImg" src="<?php echo __ROOT__; ?>/public/img/agenda.png">
        </div>
    </section>

    <section class="container text-center py-5 text--colorFirst font--workSans" id="programas">
        <h1 class="font-weight-bold py-4 text--2xl">PROGRAMAS ACADÉMICOS</h1>
        <div class="pt-2 gap-2 px-5">
            <a class="btn btn--colorThird d-flex justify-content-between" href="<?php echo __ROOT__; ?>#unam">
                <b>Preparatoria incorporada a la UNAM</b>
                <img class="pl-2" src="<?php echo __ROOT__; ?>/public/img/icon/arrowR.png">
            </a>
            <a class="btn btn--colorThird d-flex justify-content-between" href="<?php echo __ROOT__; ?>#bachillerato">
                <b>Bachilleratos técnicos.</b>
                <img class="pl-2" src="<?php echo __ROOT__; ?>/public/img/icon/arrowR.png">
            </a>
            <a class="btn btn--colorThird d-flex justify-content-between" href="<?php echo __ROOT__; ?>#carreras">
                <b>Carreras comerciales.</b>
                <img class="pl-2" src="<?php echo __ROOT__; ?>/public/img/icon/arrowR.png">
            </a>
            <a class="btn btn--colorThird d-flex justify-content-between" href="<?php echo __ROOT__; ?>#licenciaturas">
                <b>Licenciaturas.</b>
                <img class="pl-2" src="<?php echo __ROOT__; ?>/public/img/icon/arrowR.png">
            </a>

        </div>
    </section>

    <section class="container py-5 text--colorFirst font--workSans" id="unam">
        <h1 class="font-weight-bold py-4 text-center text--2xl text-uppercase">Preparatoria incorporada a la UNAM</h1>
        <div class="grid--4cols gap-4">
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">ÁREA 1: Físico Matemático e Ingeniería</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">ÁREA 2: Ciencias Biológicas y de la Salud</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">ÁREA 3. Ciencias Sociales</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">ÁREA 4. Humanidades y Artes</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text--colorFirst font--workSans" id="bachillerato">
        <h1 class="font-weight-bold py-4 text-center text--2xl text-uppercase">Bachillerato Tecnológico en Administración</h1>
        <div class="grid--4cols gap-4">
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Bachillerato Tecnológico en Administración</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Bachillerato Tecnológico en Programación</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Bachillerato Tecnológico en Contabilidad</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Bachillerato Tecnológico en Secretariado Ejecutivo</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text--colorFirst font--workSans" id="carreras">
        <h1 class="font-weight-bold py-4 text-center text--2xl text-uppercase">Carreras comerciales de la SEP</h1>
        <div class="grid--4cols gap-4">
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Secretaria en Español e Inglés</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Secretaria en Áreas Comerciales</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Secretaria en Áreas Contables y Comerciales</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Contador Auditor Privado </h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text--colorFirst font--workSans" id="licenciaturas">
        <h1 class="font-weight-bold py-4 text-center text--2xl text-uppercase">Licenciaturas</h1>
        <div class="grid--4cols gap-4">
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Administración</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Pedagogía</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Contaduría</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Derecho</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Diseño Publicitario</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Informática</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Administrativa</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Mercadotecnia</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__space"></div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Relaciones Públicas</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
            <div class="card__hover p-3 d-flex flex-column">
                <i class="card__icon"></i>
                <h4 class="my-4">Sistemas Computacionales</h4>
                <div class="mt-auto">
                    <button class="btn btn--colorThird">Descargar PDF</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg--colorSecond font--workSans">
        <div class="container grid--2cols">
            <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/becas.png">
            <div class="py-4 p-sm-4 text--colorFirst">
                <h1 class="font-weight-bold text--2xl text-uppercase">BECAS</h1>
                <p>Estamos comprometidos con la educación por lo que ofrecemos grandes descuentos a nuestro alumnado basado en sus promedios anteriores, aptitudes y sobre todo; sus ganas de estudiar y superarse.</p>
                <div>
                    <a href="" class="btn btn--colorFirst">APLICA PARA UNA BECA</a>
                </div>
            </div>
        </div>
    </section>

    <section class="text--colorFirst container grid--2cols py-5 align-items-center gap- font--workSans">
        <form id="formulario" class="radius-md shadow-lg text-left py-4 px-5 rounded-lg gap-2">
            <h1 class="font-weight-bold text-center">Contactar</h1>
            <div>
                <input type="text" class="radius-md btn--colorThird p-2 w-100" placeholder="Nombre">
            </div>
            <div>
                <input type="email" class="radius-md btn--colorThird p-2 w-100" placeholder="Correo">
            </div>
            <div>
                <input type="text" class="radius-md btn--colorThird p-2 w-100" placeholder="Asunto">
            </div>
            <div>
                <input type="text" class="radius-md btn--colorThird p-2 w-100" placeholder="Número de teléfono">
            </div>
            <div>
                <textarea class="radius-md p-2 w-100 btn--colorThird" id="mensaje" rows="4" placeholder="Mensaje"></textarea>
            </div>
            <a href="#" class="btn btn--colorFirst px-5 py-3 m-2">
                Enviar mensaje
            </a>
        </form>
        <div class="p-3 h-100">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1119.1170329958436!2d-99.14373331273497!3d19.358497899660694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe34eeda3269%3A0x5ac37d8923f2c891!2sCalz.%20de%20Tlalpan%201621%2C%20Portales%20Nte%2C%20Benito%20Ju%C3%A1rez%2C%2003300%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1690944225489!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/mapa.png">                         -->
    </section>
</main>
<?php include 'partials/footer.php'; ?>