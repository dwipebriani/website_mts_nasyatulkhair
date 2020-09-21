// efent pada saat link diklik
$('.page-scroll').on('click',function(e){

	// ambil sis href
	var tujuan = $(this).attr('href');

	// tangkap elemen ybs
	var elemenTujuan = $(tujuan);

	// pindahkan scroll
	$('body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 1250, 'easeInOutExpo');
	e.preventDefault();
});


// parallax
$(window).scroll(function() {
var wScroll= $(this).scrollTop();



// galeri
if( wScroll > $('.galeri').offset().top - 250 ) {

	$('.galeri .thumbnail').each(function(i){
		setTimeout(function(){
			 $('.galeri .thumbnail').eq(i).addClass('muncul');
		}, 300 * (i+1));
	});

	

}









});


