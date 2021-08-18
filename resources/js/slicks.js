$('.slick').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<i class="fas fa-angle-left prev"></i>',
    nextArrow: '<i class="fas fa-angle-right next"></i>',
    responsive: [{
        breakpoint: 995,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    ]
});

$(function () {
    $("#draggable").draggable();
});

function show() {
    document.getElementById("hide").style.display = "block";
}

function hide() {
    document.getElementById("hide").style.display = "none";
}

$(function () {
    $("#tabs").tabs();
});

$('#register-change').on('click', function () {
    if ($('#login-change').hasClass('active-tab')) {
        $('#login-change').removeClass('active-tab');
    }

    $(this).addClass('active-tab');
});

$('#login-change').on('click', function () {
    if ($('#register-change').hasClass('active-tab')) {
        $('#register-change').removeClass('active-tab');
    }

    $(this).addClass('active-tab');
});

function showheader() {
    document.getElementById("hideheader").style.display = "block";
    document.getElementById("hideheader").style.width = "5px";
    document.getElementById("showheader").style.display = "none";
    document.getElementById("navbarNav").style.display = "block";
}

function hideheader() {
    document.getElementById("hideheader").style.display = "none";
    document.getElementById("showheader").style.display = "block";
    document.getElementById("navbarNav").style.display = "none";
}

function hidenav() {
    document.getElementById("navbarNav").style.display = "none";
    document.getElementById("hideheader").style.display = "none";
    document.getElementById("showheader").style.display = "block";
}

function hien() {
    document.getElementById("remember-me").inputMode.onclick();
}
