<?php
require_once BASE_PATH . '/src/views/includes/header.php';
?>

<section class="hero-section">
    <div class="container">
        <div class="absolute">
            <div class="basolute-content">
                <div class="circle"></div>
                <div class="circle-two"></div>
            </div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1>
                    Descubre nuevas <br>oportunidades laborales
                </h1>

                <img src="<?php echo url ?>public/assets/cube.svg" alt="">
                <img src="<?php echo url ?>public/assets/plus.svg" alt="">
            </div>
            <div class="hero-description">
                <p class="p-mobile">Cuando buscas empleo, hay varias estrategias que puedes seguir para optimizar tu búsqueda.</p>
                <p class="p-dekstop">Cuando buscas empleo, hay varias estrategias que puedes <br> seguir para optimizar tu búsqueda.</p>
                <img class="img-row" src="<?php echo url ?>public/assets/line.svg" alt="">
                <img class="img-code" src="<?php echo url ?>public/assets/code.svg" alt="">

            </div>

            <div class="search-start-btn">
                <button class="start-btn">
                    <span>Comenzar Búsqueda</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                    </svg>
                </button>
            </div>
            <div class="all-offers-text">
                <h2>
                    <span>21,701,403</span>
                    <span>Trabajos Publicados en Total</span> 
                </h2>
            </div>
            <div class="img-mobile">
            <img src="<?php echo url ?>public/assets/mobile-img.svg" alt="">
            </div>
        </div>
    </div>
</section>
