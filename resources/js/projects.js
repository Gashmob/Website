$('#search').on('input', function () {
    const search = $('#search')[0].value;

    for (const card of $('.card')) {
        if (!card.id.toLowerCase().includes(search.toLowerCase())) {
            card.classList.add('hide');
        } else {
            card.classList.remove('hide');
        }
    }
});