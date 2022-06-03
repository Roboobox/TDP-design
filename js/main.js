$(document).ready(function() {
    let theme = localStorage.getItem("theme");
    const switcher = $('#themeSwitch');
    if ((theme && theme === "dark") ||
        (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        $('body').addClass('dark-mode');
        switcher.prop('checked', true);
    }

    $('#home .scroll-prompt').click(function (event) {
        event.preventDefault();
        $("html, body").stop().animate({
            scrollTop: ($("#intro_container").offset().top - 30)
        }, 800);
    });

    $('.intro-text').waypoint(function () {
        $('.intro-text.closed').removeClass('closed');
    }, { offset: '60%' });

    $('#home .timeline-event').each(function () {
        let $this = $(this);
        $(this).waypoint(function() {
            completeStep($this);
        }, { offset: '55%' });
    });

    $('#home .timeline .btn-scroll-next').click(function (event) {
        event.preventDefault();
        $("html, body").stop().animate({
            scrollTop: ($(this).parents('.timeline-event-container').next().offset().top - 100)
        }, 800);

    });

    switcher.click(function () {
        const body = $('body');
        if($(this).is(':checked')) {
            body.addClass('dark-mode');
            localStorage.setItem("theme", "dark");
        } else {
            body.removeClass('dark-mode');
            localStorage.setItem("theme", "light");
        }
    });

    $('#mobile_menu').click(function () {
        let mobNav = $('.nav-buttons');
        let mobNavOverlay = $('.nav-overlay');
        if (!mobNav.is(':visible')) {
            mobNav.removeClass('d-none');
            mobNavOverlay.show();
            mobNav.stop().animate({
                left: 0,
            }, 300);
        }
    })

    $('.nav-overlay').click(function () {
        let mobNav = $('.nav-buttons');
        let mobNavOverlay = $('.nav-overlay');
        if (mobNav.is(':visible')) {
            mobNav.stop().animate({
                left: '-70%',
            }, 300, function () {
                mobNav.addClass('d-none');
                mobNavOverlay.hide();
            });
        }
    })
});


function completeStep(timelineEvent) {
    timelineEvent.children(".timeline-marker").addClass('active');
    timelineEvent.children(".timeline-line").addClass('active');
    timelineEvent.children(".timeline-card").addClass('active');
}