$(document).load(() => {
    $('img[loading=lazy]').each((i, e) => {
        let image = $(e)
        let name = image.attr('src').split('/').pop();
        image.css('background-image', `url('/assets/images/sm/${name}')`)

        if (e.complete)
            load(e);

    })
    $('img[loading=lazy]').on('load', e => load(e.currentTarget))

    function load(img) {

    }
})