//  live search using js
// hilangkan tombol cari
$('#cari').hide();
$(document).ready(function(){
$('#keyword').on('keyup',function(){
    //munculkan icon loading
    $('.loader').show();

$.get('ajax/client.php?keyword=' + $('#keyword').val(),function(data){
$('#container').html(data);
$('.loader').hide();
});
});
});