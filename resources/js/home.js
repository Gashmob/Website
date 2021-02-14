let id = 1;
let idMax = 5;

function showFrame() {
    // Set display none for all frames, then set display block for frame id
    $('.viewport')[0].style.marginTop = '-' + ((id -1) * window.innerHeight) + 'px';
}

function showPoints() {
    // Set inactive for all points, then set active point id
    $.map($('.point'), function (point) {
        point.classList.remove('active');
    });

    $('#'+ id +'.point')[0].classList.add('active');
}

function showArrows() {
    // Set display none for all arrows, then set display block for arrow up if id > 1 and for arrow down if id < idMax
    if (id > 1) {
        $('.up')[0].style.display = 'block';
    } else {
        $('.up')[0].style.display = 'none';
    }
    if (id < idMax) {
        $('.down')[0].style.display = 'block';
    } else {
        $('.down')[0].style.display = 'none';
    }
}

showFrame();
showPoints();
showArrows();

$('.up').on('click', function () {
    id--;
    showFrame();
    showPoints();
    showArrows();
});
$('.down').on('click', function () {
    id++;
    showFrame();
    showPoints();
    showArrows();
});