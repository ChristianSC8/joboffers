<?php
require_once BASE_PATH . '/src/views/includes/header.php';
?>

<header class="header" id="header">
    <div class="overlay-header" id="overlay"></div>
    <div class="container">

        <a href="<?php echo url ?>" class="logo">
            <img src="<?php echo url ?>public/assets/logo.png" alt="imgaes" alt="">
            <p>Wesley</p>
        </a>

        <div class="navbar-desktop">
            <ul>
                <li class="links"><a href="#">Ofertas</a></li>
                <li class="links"><a href="#">Contacto</a></li>
                <li class="links"><a href="#">Bloc</a></li>
            </ul>
        </div>

        <div class="buttons-auth-register">
            <a href="<?php echo url ?>src/views/auth/signIn.php" class="signup">Acceder</a>
            <a href="<?php echo url ?>src/views/auth/signUp.php" class="signin">Registrar</a>
        </div>

        <button class="nav-open-btn" id="btn-open-navbar">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                <g>
                    <path d="M469.333,224h-448C9.551,224,0,233.551,0,245.333c0,11.782,9.551,21.333,21.333,21.333h448   c11.782,0,21.333-9.551,21.333-21.333C490.667,233.551,481.115,224,469.333,224z" />
                    <path d="M21.333,117.333h448c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333h-448C9.551,74.667,0,84.218,0,96   S9.551,117.333,21.333,117.333z" />
                    <path d="M469.333,373.333h-448C9.551,373.333,0,382.885,0,394.667C0,406.449,9.551,416,21.333,416h448   c11.782,0,21.333-9.551,21.333-21.333C490.667,382.885,481.115,373.333,469.333,373.333z" />
                </g>
            </svg>
        </button>

        <nav class="navbar" id="menu-navbar">

            <div class="navbar-top">
                <a href="#" class="logo">
                    <img src="<?php echo url ?>public/assets/logo.png" alt="imgaes">
                    <div class="text-logo">
                        <h2>Wesley</h2>
                        <p>www.wesley.com</p>
                    </div>
                </a>
                <button class="nav-close-btn" id="btn-close-navbar">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.021 512.021" style="enable-background:new 0 0 512.021 512.021;" xml:space="preserve">
                        <g>
                            <path d="M301.258,256.01L502.645,54.645c12.501-12.501,12.501-32.769,0-45.269c-12.501-12.501-32.769-12.501-45.269,0l0,0   L256.01,210.762L54.645,9.376c-12.501-12.501-32.769-12.501-45.269,0s-12.501,32.769,0,45.269L210.762,256.01L9.376,457.376   c-12.501,12.501-12.501,32.769,0,45.269s32.769,12.501,45.269,0L256.01,301.258l201.365,201.387   c12.501,12.501,32.769,12.501,45.269,0c12.501-12.501,12.501-32.769,0-45.269L301.258,256.01z" />
                        </g>
                    </svg>
                </button>
            </div>
            <span class="spacer"></span>

            <div class="navbar-list">
                <ul class="navbar-list-top">
                    <li>
                        <a href="#home" class="navbar-link">
                            <div class="icon-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <path d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                    <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>

                            </div>
                            <p class="text-item">Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="navbar-link">
                            <div class="icon-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <rect x="32" y="128" width="448" height="320" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                    <path d="M144 128V96a32 32 0 0132-32h160a32 32 0 0132 32v32M480 240H32M320 240v24a8 8 0 01-8 8H200a8 8 0 01-8-8v-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>
                            </div>
                            <p class="text-item">Ofertas</p>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="navbar-link">
                            <div class="icon-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <path d="M208 64h66.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62V432a48 48 0 01-48 48H192a48 48 0 01-48-48V304" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                    <path d="M288 72v120a32 32 0 0032 32h120" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                    <path d="M160 80v152a23.69 23.69 0 01-24 24c-12 0-24-9.1-24-24V88c0-30.59 16.57-56 48-56s48 24.8 48 55.38v138.75c0 43-27.82 77.87-72 77.87s-72-34.86-72-77.87V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                            </div>
                            <p class="text-item">Blog</p>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="navbar-link">
                            <div class="icon-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M160 336V48l32 16 32-16 31.94 16 32.37-16L320 64l31.79-16 31.93 16L416 48l32.01 16L480 48v224" />
                                    <path d="M480 272v112a80 80 0 01-80 80h0a80 80 0 01-80-80v-48H48a15.86 15.86 0 00-16 16c0 64 6.74 112 80 112h288" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M224 144h192M288 224h128" />
                                </svg>
                            </div>
                            <p class="text-item">Contacto</p>
                        </a>
                    </li>

                </ul>
                <ul class="navbar-list-button">
                    <div class="auth-btns">
                        <a href="<?php echo url ?>src/views/auth/signIn.php" class="sign-in-mobil">Acceder</a>
                        <a href="<?php echo url ?>src/views/auth/signUp.php" class="sign-up-mobil">Registrar</a>
                    </div>

                    <div class="user-information">
                        <ul class="navbar-list-user">
                            <li>
                                <a href="#home" class="navbar-link">
                                    <div class="icon-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        </svg>
                                    </div>
                                    <p class="text-item">Ajustes</p>
                                </a>
                            </li>
                            <li>
                                <a href="#home" class="navbar-link">
                                    <div class="icon-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        </svg>
                                    </div>
                                    <p class="text-item">Notificaciones</p>
                                </a>
                            </li>
                            <li>
                                <a href="#home" class="navbar-link">
                                    <div class="icon-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                        </svg>
                                    </div>
                                    <p class="text-item">Cerrar sección</p>
                                </a>
                            </li>
                        </ul>
                        <div class="userinfo-darkmode">
                            <div class="user-content">
                                <div class="img-user">

                                </div>
                                <div class="information">
                                    <h2>Tinkerwesley</h2>
                                    <p>admin@gmail.com</p>
                                </div>
                            </div>
                            <div class="dark-mode">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>