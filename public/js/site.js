$(function() {
    $( document ).ready(function() {
        if(module == 'events' || module == 'promos')
        {
            elem = $(this);
            if($('[data-opt="promos"]').hasClass('nav-active')) {
                console.log('promos')
                elem.trigger('click');
           }

           if($('[data-opt="events"]').hasClass('nav-active')) {
                console.log('events')
                elem.trigger('click');
           }
        }
    });
	$(document).on('click', '#btn-contact', function() {
        url = baseurl+'/send';
        $('.err-url').remove();
        params  = {name :$('#name').val(),
                   _token: $("input[name=_token]").val(),
                   email: $('#email').val(),
               		message: $('#message').val()}
        $.ajax({
              type: 'post',
              url: url,
              data: params,
              dataType: 'json',
              success: function(data){
                alert('Email Sent!');
              },
              error: function(data){
                var errors = data.responseJSON;
                $.each( errors, function( key, value ) {
                    console.log(value[0]);
                   jQuery('input[id="url"]').after('<div class="err-url">'+value[0]+'</div>');
                });
              }
            });

        return false;
  });
});