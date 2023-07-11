(() => {
    const nav = $("nav");
    const expand = () => nav.addClass('expanded')
    const collapse = () => nav.removeClass('expanded')
    const update = () => {
        if (window.scrollY <= 50) {
            collapse();
        } else {
            expand()
        }
    }
    $(document).on('scroll', e => update())
})()