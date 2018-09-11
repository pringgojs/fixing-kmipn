$(document).ready(function(){
    $('.main-slider').slick({
        infinite : true,
        speed : 500,
        fade : true,
        cssEase : 'linear'
    });
});

$('.modal-button').click(function(event){
    event.preventDefault();
    var id = $(this).attr('data-id'); 
    var modal = new Custombox.modal({
    content: {
        effect: 'superscaled',
        target: '#category-'+id
    }   
    });
    
    modal.open();
});