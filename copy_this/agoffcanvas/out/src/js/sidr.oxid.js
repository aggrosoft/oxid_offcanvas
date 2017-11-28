$(function(){
    
    //create base element
    var sidr = $('<div id="sidr-offcanvas" class="sidr left" style="transition: left 0.2s ease;"></div>');
    $('body').append(sidr);
    
    //helper to refresh content
    function loadSidrContent(cnid){
        sidr.addClass('initialized');
        sidr.append('<div class="loading"><i class="fa fa-2x fa-spin fa-spinner fa-loading"></i></div>').focus();
        
        $.ajax({
            url: SIDR_BASE_URL,
            data: {
                cnid: cnid
            },
            success: function(result){
                sidr.html(result);
            }
        });
    }
    
    //init on toggle click, stop default event
    $("#mainnav .navbar-toggle").click(function(){
        sidr.css('left','0px');
        !sidr.hasClass('initialized') && loadSidrContent();
        return false;
    });
    
    $('body, .sidr-close').click(function(){
        sidr.css("left", "-"+sidr.width()+"px");
    });
    
    //on link click, fetch content if flag set
    $('#sidr-offcanvas').on('click', '.sidr-ajax-link', function(){
        loadSidrContent($(this).data('cnid'));
        return false;
    });
    
    
});