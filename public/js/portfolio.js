document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.site-navbar');

    if (navbar) {
        window.addEventListener('scroll', function () {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        });
    }
});
