$(function() {
    $( document ).ready(function() {

        $('.hotel-num').on('click', function() {
            elem = $(this);
            var counter = elem.data('room');
            counter = counter.slice(-1);

            $('.hotel-'+counter).siblings().show();
            $('.hotel-'+counter).hide();


        });

    });

  $(document).on('submit', '#search-frm', function() {
      window.location.href = baseurl + '/search/' + $('#term').val();
      return false;
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