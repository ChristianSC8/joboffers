    document.addEventListener('DOMContentLoaded', function () {

        const btnOpenNabar = document.getElementById('btn-open-navbar');
        const btnCloseNabar = document.getElementById('btn-close-navbar');
        const menuNavbar = document.getElementById('menu-navbar');
        const overlay = document.getElementById('overlay');

        btnOpenNabar.addEventListener('click', openNavbar);
        btnCloseNabar.addEventListener('click', closeNavbar);
        overlay.addEventListener('click', closeNavbar);

        function openNavbar() {
            menuNavbar.classList.add('active');
            overlay.classList.add('active');
        }
        function closeNavbar() {
            menuNavbar.classList.remove('active');
            overlay.classList.remove('active');
        }

        const header = document.getElementById('header');
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                header.classList.add("active");
            } else {
                header.classList.remove("active");
            }
        });
    })
