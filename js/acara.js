document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.filter-btn');
    var cards = document.querySelectorAll('.event-card');
    var daySections = document.querySelectorAll('.event-day');
    var emptyState = document.getElementById('filter-empty');

    if (!buttons.length || !cards.length) return;

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            var filter = button.getAttribute('data-filter');

            buttons.forEach(function (btn) {
                var isActive = btn === button;
                btn.classList.toggle('is-active', isActive);
                btn.setAttribute('aria-pressed', String(isActive));
            });

            var visibleCount = 0;

            cards.forEach(function (card) {
                var show = filter === 'semua' || card.getAttribute('data-category') === filter;
                card.classList.toggle('is-hidden', !show);
                if (show) visibleCount++;
            });

            daySections.forEach(function (section) {
                var hasVisible = section.querySelector('.event-card:not(.is-hidden)');
                section.classList.toggle('is-hidden', !hasVisible);
            });

            if (emptyState) {
                emptyState.hidden = visibleCount !== 0;
            }
        });
    });
});
