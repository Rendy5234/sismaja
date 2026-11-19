document.addEventListener('DOMContentLoaded', function () {
    initCountdown();
    initCountUp();
});

function initCountdown() {
    var root = document.querySelector('[data-countdown]');
    if (!root) return;

    var target = new Date(root.getAttribute('data-countdown')).getTime();
    if (isNaN(target)) return;

    var units = {
        hari: root.querySelector('[data-unit="hari"]'),
        jam: root.querySelector('[data-unit="jam"]'),
        menit: root.querySelector('[data-unit="menit"]'),
        detik: root.querySelector('[data-unit="detik"]')
    };

    function pad(value) {
        return String(value).padStart(2, '0');
    }

    function render() {
        var diff = Math.max(target - Date.now(), 0);
        var seconds = Math.floor(diff / 1000);

        units.hari.textContent = pad(Math.floor(seconds / 86400));
        units.jam.textContent = pad(Math.floor((seconds % 86400) / 3600));
        units.menit.textContent = pad(Math.floor((seconds % 3600) / 60));
        units.detik.textContent = pad(seconds % 60);
    }

    render();
    setInterval(render, 1000);
}

function initCountUp() {
    var values = document.querySelectorAll('.stat-value[data-count]');
    if (!values.length) return;

    if (!('IntersectionObserver' in window)) {
        values.forEach(animateValue);
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            animateValue(entry.target);
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.4 });

    values.forEach(function (el) {
        observer.observe(el);
    });
}

function animateValue(el) {
    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
    var duration = 1200;
    var start = performance.now();

    function step(now) {
        var progress = Math.min((now - start) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(target * eased).toLocaleString('id-ID');
        if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
}
