$(document).ready(function () {
    // popover
    (function () {
        $('[data-bs-toggle="popover"]').map(function (i, item) {
            console.log(item)
            return new bootstrap.Popover(item)
        });
    })();

    // navigation active link
    (function () {
        let baseUrl = document.baseURI;
        let currentPage = location.href.slice(baseUrl.length);
        $('[href="' + currentPage + '"]').addClass('active').parent().siblings().find('a').removeClass('active');
    })();

    // testimonial
    (function () {
        $('.testimonial-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: true,
            smartSpeed: 700,
            autoplay: 5000,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        })
    })();

    // scroll top
    (function () {
        $('.scroll-top').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, "slow");
        });
    })();

    // youtube video
    // on preview show iframe
    $('#company-video').on('show.bs.modal', function (e) {
        var idVideo = $(e.relatedTarget).data('id');
        $('#company-video .modal-body').html('<iframe width="100%" height="420px" src="https://www.youtube.com/embed/' + idVideo + '?autoplay=true" frameborder="0" allowfullscreen></iframe>');
    });
    //on close remove
    $('#company-video').on('hidden.bs.modal', function () {
        $('#company-video .modal-body').empty();
    });
});