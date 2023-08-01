<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
<div class="bg--hero">
        <div class="container grid--2cols gap-2">
            <div class="p-4 gap-2">
                <div>
                    <spam class="bg-white px-3 py-2 m-0 rounded-lg">Nunca dejes de aprender</spam>
                </div>
                <h1 class="font-weight-bold text--colorFirst">Tradición & Vanguardia.</h1>
                <p class="text--colorFirst">Más de 100 años trabajando en el futuro académico de México.</p>
                <div class="grid--2cols gap-2">
                    <button class="btn btn--colorFirst">INSCRÍBETE</button>
                    <img src="<?php echo __ROOT__; ?>/public/img/10k.png">
                </div>
            </div>
            <div class="p-4 position-relative">
                <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/heroImg.png">
                <div class="d-flex flex-row position-absolute sobreponerBtn p-0 rounded-lg bg-white opacity-80 align-items-center p-2">
                    <img class="pr-2" src="<?php echo __ROOT__; ?>/public/img/icon/calendar.png">                        
                    <div class="">
                        <p class="font-weight-bold m-0">250k</p>
                        <p class="m-0">Estudiantes inscritos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>