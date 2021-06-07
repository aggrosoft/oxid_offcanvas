$(function(){

    //create base element
    var offcanvas = $('<div id="offcanvas-menu" class="navbar-collapse offcanvas-collapse navbar-light bg-light"></div>');
    $('body').append(offcanvas);
    var backdrop = $('<div id="offcanvas-backdrop" class="modal-backdrop fade"></div>')

    //helper to refresh content
    function loadOffCanvasContent(cnid){
        offcanvas.addClass('initialized');
        offcanvas.append('<div class="loading"><i class="fas fa-2x fa-spin fa-spinner fa-loading"></i></div>').focus();

        $.ajax({
            url: OFFCANVAS_BASE_URL,
            data: {
                cnid: cnid
            },
            success: function(result){
                offcanvas.html(result);
            }
        });
    }

    //init on toggle click, stop default event
    $(".navbar-toggler").click(function(){
        $('body').append(backdrop);
        offcanvas.addClass('open');
        backdrop.addClass('show');
        !offcanvas.hasClass('initialized') && loadOffCanvasContent(OFFCANVAS_CURRENT_CNID);
        $('body').click(function(ev){
            if( offcanvas.hasClass('open') && !$(ev.target).is('#offcanvas-menu') && $(ev.target).parents('#offcanvas-menu').length == 0 ){
                offcanvas.removeClass('open');
                backdrop.remove();
                return false;
            }
        });
        $('body').one('click', '.offcanvas-close', function(){
            offcanvas.removeClass('open');
            backdrop.remove();
            return false;
        })
        return false;
    });



    //on link click, fetch content if flag set
    $('#offcanvas-menu').on('click', '.offcanvas-ajax-link', function(){
        loadOffCanvasContent($(this).data('cnid'));
        return false;
    });


});