$(document).ready(function() {

    let overlay = $('#overlay');
    let open_modal = $('.open_modal');
    let close = $('.modal_close, #overlay');
    let modal = $('.modal_div');
    
    open_modal.click(function(event) {
        event.preventDefault();
        let newUrl = '<img src="img/' + event.target.id + '">';
        $('#big_img').html(newUrl);
    
        let div = $(this).attr('href');
        overlay.fadeIn(400, function(){
            $(div)
            .css('display', 'block')
            .animate({opacity: 1, top: '40%'}, 200);
        });
    });
    
    close.click( function(){
        modal
        .animate({opacity: 0, top: '45%'}, 200, function(){
            $(this).css('display', 'none');
            overlay.fadeOut(400);
        });
    });
});