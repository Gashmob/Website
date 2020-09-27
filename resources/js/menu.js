let isExpand = false;

$('#menu_expand').on('click', function () {
    if (isExpand) {
        isExpand = false;
        $('.menu__texts').addClass('menu__texts--hidden');
    } else {
        isExpand = true;
        $('.menu__texts').removeClass('menu__texts--hidden');
    }
})