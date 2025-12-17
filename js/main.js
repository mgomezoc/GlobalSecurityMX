$(function() {
    AOS.init({
        offset: 0
    });
    $("#loading").fadeOut(1000);
    $('.skitter').skitter({
        navigation: true,
        progressbar: true,
        imageSwitched: function(index, skitter) {},
        with_animations: ["paralell", "glassBlock", "swapBars"]
    });
    setCarruselClientes(true, 100000);
});

function setCarruselClientes(ltr, time) {
    var width = $("#clientes-carrousel")[0].scrollWidth;
    if (ltr) {
        $("#clientes-carrousel").scrollLeft(0)
            .animate({
                scrollLeft: width,
                easing: "easeInExpo"
            }, time);
    } else {
        $("#clientes-carrousel").animate({
            scrollLeft: 0,
            easing: "easeOutShine"
        }, time);
    }
    setTimeout(function() {
        setCarruselClientes(!ltr, time);
    }, time);
}

function setMenuActive(menu) {
    var menuActive = $(".header-menu li > a").filter(function(i, el) {
        return $(el).text() === menu;
    });
    $(menuActive).addClass("active");
    return false;
}
