let isExpand = true;

$('#menu_expand').on('click', function () {
    if (isExpand) {
        isExpand = false;
        $('.menu__texts').animate({'width':'0'}, 'slow');
    } else {
        isExpand = true;
        $('.menu__texts').animate({'width':'100%'}, 'slow');
    }
})