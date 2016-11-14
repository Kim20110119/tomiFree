/* --------------------------------------------------------------------------

Toggle Navi

-------------------------------------------------------------------------- */

$('ul.dropdown li:has(ul)').addClass('has-submenu');
$('ul.dropdown li ul').addClass('sub-menu');
$('ul.dropdown li:has(ul)');
$('ul.dropdown li').hover(function () {
    $(this).addClass('hover');
}, function () {
    $(this).removeClass('hover');
});
var $menu = $('#global-navigation');
var $menulink = $('#toggle-nav');
var $menuTrigger = $('.has-submenu > a');
$menulink.click(function (e) {
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
});
$menuTrigger.click(function (e) {
    $(this).toggleClass('active').next('ul').toggleClass('active');
});
function openSubmenu(e) {
    e.preventDefault();
}
$(window).on('load resize', function(){
    var w = $(window).width();
    var x = 767;
    if (w <= x) {
        $menuTrigger.click(openSubmenu);
    } else {
        $menuTrigger.unbind('click', openSubmenu);
    }
});

/* --------------------------------------------------------------------------

Scroll Top Button

-------------------------------------------------------------------------- */

var syncerTimeout = null ;
$(function() {
    $(window).scroll( function() {
        if(syncerTimeout == null) {
            syncerTimeout = setTimeout(function() {
                var element = $('.page-top');
                var visible = element.is(':visible');
                var now = $(window).scrollTop();
                var under = $('body').height() - (now + $(window).height());
                if(now > 200 && 200 < under) {
                    if(!visible) {
                        element.fadeIn('fast');
                    }
                }
                else if(visible) {
                    element.fadeOut('slow');
                }
                syncerTimeout = null;
            }, 1000);
        }
    });
    $('.move-page-top').click(
        function() {
            $('html,body').animate({scrollTop:0}, 'slow');
        }
    );
});


/* --------------------------------------------------------------------------

See More button

-------------------------------------------------------------------------- */

$('.SeeMore').click(function(){
    var $this = $(this);
    $this.toggleClass('SeeMore');
    if($this.hasClass('SeeMore')){
        $this.text('もっと見る ▼');
    } else {
        $this.text('閉じる ▲');
    }
});