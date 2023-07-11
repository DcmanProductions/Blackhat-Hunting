
$(document).ready(() => {
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
    update()
    $(document).on('scroll', () => update())
    $("#scroll-indicator").on('click', () => {
        window.scrollTo(0, window.screen.height - 200)
    })
})