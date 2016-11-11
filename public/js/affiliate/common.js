/* #side追従 */
$(function(){
	var side = $("#side");
	var main = $("#main");
	var min_move = main.offset().top;
	var max_move = main.offset().top + main.height() - side.height() - 2*parseInt(side.css("top") );
	var margin_bottom = max_move - min_move;

	$(window).bind("scroll", function() {
		var wst =  $(window).scrollTop();
		if( wst > min_move && wst < max_move ){
			var margin_top = wst - min_move ;
			side.animate({"margin-top": margin_top},{duration:600,queue:false});
		}else if( wst < min_move ){
			side.animate({"margin-top":0},{duration:600,queue:false});
		}else if( wst > max_move ){
			side.animate({"margin-top":margin_bottom},{duration:600,queue:false});
		}
	});    
});

/* pagetop */
$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('#gotop').fadeIn();
		} else {
			$('#gotop').fadeOut();
		}
	});
});

$('#gotop').click(function () {
	$('body,html').animate({
		scrollTop: 0
	}, 800);
	return false;
});

$('#button_pref_select').click(function(){
	$(this).toggleClass('active');
	$('#block_pref').slideToggle();
});

$('#button_city_select').click(function(){
	$(this).toggleClass('active');
	$('#block_city').slideToggle();
});

$('#button_course_select').click(function(){
	$(this).toggleClass('active');
	$('#block_course').slideToggle();
});

$('#cover').click(function(){
	$('#modal_window').fadeOut();
});

$('#button_japan').click(function(){
	$('#modal_window').fadeIn();
	$('#button_pref_select').addClass('active');
	$('#block_pref').fadeIn();
    $('#block_city').css('display','none');
    $('#block_course').css('display','none');
});

$('#button_course').click(function(){
	$('#modal_window').fadeIn();
	$('#button_course_select').addClass('active');
    $('#button_course_select').focus();
	$('#block_course').fadeIn();
    $('#block_pref').css('display','none');
    $('#block_city').css('display','none');
});

$('#confirm_buttom').click(function(){
	$('#modal_window').fadeIn();
	$('#button_course_select').addClass('active');
    $('#button_course_select').focus();
	$('#block_course').fadeIn();
    $('#block_pref').css('display','none');
    $('#block_city').css('display','none');
});
