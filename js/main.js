document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.navbar-toggle');
    var menu = document.getElementById('navbar-menu');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', function () {
        var isOpen = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!isOpen));
        toggle.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
        menu.classList.toggle('is-open', !isOpen);
    });

    menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Buka menu');
            menu.classList.remove('is-open');
        });
    });
});
