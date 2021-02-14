let id = 1;
let idMax = 4;
const duration = 400;

function showFrame() {
    // Change margin-top value to show frame id
    $('.viewport').animate({marginTop: '-' + ((id -1) * window.innerHeight) + 'px'});
}

function showPoints() {
    // Set inactive for all points, then set active point id
    let activePoint = $('.point.active');
    if (activePoint)
        activePoint.removeClass('active', duration)

    $('#' + id + '.point').addClass('active', duration);
}

function showArrows() {
    // Set display none for all arrows, then set display block for arrow up if id > 1 and for arrow down if id < idMax
    if (id > 1) {
        $('.up').fadeIn(duration);
    } else {
        $('.up').fadeOut(duration);
    }
    if (id < idMax) {
        $('.down').fadeIn(duration);
    } else {
        $('.down').fadeOut(duration);
    }
}

showFrame();
showPoints();
showArrows();

$('.up').on('click', function () {
    id--;
    id = id < 1 ? 1 : id;
    showFrame();
    showPoints();
    showArrows();
});
$('.down').on('click', function () {
    id++;
    id = id > idMax ? idMax : id;
    showFrame();
    showPoints();
    showArrows();
});