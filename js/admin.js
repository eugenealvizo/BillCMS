$(function() {

    $(document).ready(function() {
        if($('#tag').length > 0) {
          jQuery('#tag').tagit({
                singleField: true,
                singleFieldNode: jQuery('#tag')
            });
        }


        $(".js-example-basic-single").select2();


        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: "yy-mm-dd"});    
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd',altFormat: "yy-mm-dd"}); 

        if($('.text-content').length > 0) {
            initTinyMCE('text-content');
        }

        $(document).on('keyup', '#total', function() {
            elem = $(this);

            $('#dumtotal').val(elem.val());

        });


        if ($('#slug').length > 0) {
            jQuery(document).on('keyup', '#title', function() {
                slug = (this.value).toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-')
                jQuery('#slug').val(slug);
            });
        }

        $(document).on('click', '.btn-feat', function() {
            elem = $(this);
            cat = elem.data('cat');
            id = elem.data('id');
            url = baseurl+'/admin/promos-and-events/featured/'+id;

            params  = {category_id : cat,
                       id: id,
                       _token: $("input[name=_token]").val()};


            $.post(url, params, function(data) {
                if(data == 'changed') {

                    $('tr').siblings().find('.category-'+cat+' .btn-feat').removeClass('btn-success');
                    $('tr').siblings().find('.category-'+cat+' .btn-feat').addClass('btn-default');

                    elem.removeClass('btn-default');
                    elem.addClass('btn-success');
                }
            });
            

            return false;
        });


        $(document).on('change','#userid', function() {

            id = $(this).val();
            params  = {id: id,
                       _token: $("input[name=_token]").val()};

            url = baseurl+'/admin/'+method+'/getaddress/'+id;

            $.post(url, params, function(data) {
                if(data) {
                    $('#address').val(data);
                } else {
                    alert('Oops Something went wrong');
                }

            });
        }); 

        $(document).on('click', '.btn-rm', function() {
            elem = $(this),
            id = elem.data('id'),
            url = baseurl+'/admin/'+method+'/'+dataid+'/images/removeImage/'+imgids;
            params  = {dataid : dataid,
                       _token: $("input[name=_token]").val(),      
                       node : id}

            if(elem.attr('data-id')) {
                if(confirm('Do you wish to remove this image') == true) {
                    $('#container-'+id).fadeOut();
                    
                    $.ajax({
                          type: 'post',
                          url: url,
                          data: params,
                          dataType: 'json',
                          success: function(data){
                            console.log(data);
                          },
                          error: function(data){
                            console.log(data);
                            alert('Oops something went wrong');
                          }
                        });
                }
            } else {
                console.log('b');
                id = elem.data('rm');

                $('.psu-'+id).remove();
            }
            return false;
        });

        $(document).on('click', '.btn-del', function() {

            elem = $(this);
            id = elem.data('id');
            if(dataid == 'hotels' || dataid == 'rooms') {
                url = baseurl+'/admin/'+method+'/'+dataid+'/delete/'+id;
            } else {
                url = baseurl+'/admin/'+method+'/delete/'+id;
            }

            params  = {id: id,
                       _token: $("input[name=_token]").val()};

            var msg = confirm("Are you sure you want to delete?");

            if (msg == true) {
                $.post(url, params, function(data) {
                    if(data) {
                        $('#' + id).fadeOut();
                        alert('Data Successfuly Deleted');
                    } else {
                        alert('Oops Something went wrong');
                    }

                });
            } 
        });

    });


    $(document).on('click', '.btn-sub', function() {
        $('.err').remove();
        elem = $(this);
        form = $(this).closest("form").attr('id');
        alert(form);

        btn = $('.btn-sub');
        var url;

        if(dataid == 'insert') {
            url = baseurl+'/admin/'+method+'/store';
        } else {
            url = baseurl+'/admin/'+method+'/update/'+commid;
        }



        btn.hide();

        var myData = new FormData($('#'+form)[0]);

        $.ajax({
                url         : url,
                data        : myData,
                contentType : false,
                processData : false,
                type        : 'POST',
                success: function(data){
                console.log(url);
                alert('Data Successfully Saved');
                // if(dataid == 'insert' || dataid == 'update' || dataid == 'images') {
                //     if(method == 'community') {
                //         method = 'our-residences';
                //     }
                //     window.location.href = baseurl+'/admin/'+method;
                // } else {
                //     window.location.href = baseurl+'/admin/'+method+'/'+dataid;
                // }
              },

                error: function(data) {
                var errors = data.responseJSON;
                btn.show();

                $.each( errors, function( key, value ) {
                    idName = key;

                    if (/images/i.test(key) || /banners/i.test(key)) {
                        msg1 = value[0].replace(/[.0-9]/g, '');
                        msg2 = value[1].replace(/[.0-9]/g, '');
                        alert(msg1+'\n'+msg2);
                    }

                    $('#'+idName).after('<div class="err">'+value+'</div>');
                });

              }
        });

        return false;
    });

});

function initTinyMCE(selector){

    tinymce.init({
                selector:'textarea'+selector, 
                theme                   : "modern",
                selector                : "textarea",
                plugins                 : ["advlist autolink lists link charmap print preview hr anchor pagebreak",
                                           "searchreplace wordcount visualblocks visualchars code fullscreen",
                                           "insertdatetime nonbreaking save contextmenu directionality",
                                           "emoticons paste textcolor colorpicker textpattern"],
                toolbar1                : "alignleft aligncenter alignright alignjustify",
                image_advtab            : true,
                width                   : 850,
                height                  : 200,
                force_br_newlines       : true,
                force_p_newlines        : false,
                relative_urls           : false});
}
