



    
//event pada link
$('.ps').on('click',function(e){

    //ambil isi href
    var tujuan = $(this).attr('href');
    //tangkap elemen yg bersangkutan
    var elemenTujuan = $(tujuan);

    // pindahkan scroll
    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    },1000);

    e.preventDefault();

});






