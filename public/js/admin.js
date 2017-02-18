$(function() {
    $(document).ready(function() {
        if($('#tag').length > 0) {
          jQuery('#tag').tagit({
                singleField: true,
                singleFieldNode: jQuery('#tag')
            });
        }

        if($('.text-content').length > 0) {
            initTinyMCE('text-content');
        }

        if ($('#slug').length > 0) {
            jQuery(document).on('keyup', '#title', function() {
                slug = (this.value).toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-')
                jQuery('#slug').val(slug);
            });
        }


        $(document).on('click', '#change-vid', function() {
            val = $('#url').val();
            url = baseurl+'/admin/dashboard/edit/1';
            $('.err-url').remove();


            params  = {url : val,
                       _token: $("input[name=_token]").val(),
                       is_vid: 1}


            $.ajax({
                  type: 'post',
                  url: url,
                  data: params,
                  dataType: 'json',
                  success: function(data){
                    alert('Saved');
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

        $(document).on('click', '.btn-banner-sub', function() {

            url = baseurl+'/admin/page-banners/update/'+commid

            $('.err1').remove();
            $('.err2').remove();

            elem = $(this);
            form = $('#bannerForm');

            btn = $('.btn-sub');

            btn.hide();

            var myData = new FormData($(form)[0]);

            $.ajax({
                url         : url,
                data        : myData,
                contentType : false,
                processData : false,
                type        : 'POST',
                  success: function(data){
                    console.log(data);
                    alert('Data Successfully Saved');
                    window.location.href = baseurl+'/admin/'+method;
                  },
                  error: function(data) {
                    var errors = data.responseJSON;
                    btn.show();

                    $.each( errors, function( key, value ) {
                        idName = key;

                        $('#'+idName).after('<div class="err1" style="color:red" >*'+value[0]+'</div>');
                        $('#'+idName).after('<div class="err2" style="color:red" >*'+value[1]+'</div>');
                    });

                  }
            });

            return false;
        });


        $(document).on('click', '.activity-btn', function() {
            val = $('#url').val();
            url = baseurl+'/admin/things-to-do/activity/edit/'+aid;
            form = $('#addForm');

            var myData = new FormData($("#addForm")[0]);

            $.ajax({
                url         : url,
                data        : myData,
                contentType : false,
                processData : false,
                type        : 'POST',
                  success: function(data){
                    console.log(data);
                  },
                  error: function(data){
                    var errors = data.responseJSON;
                    console.log(data);
                    
                  }
                });

            return false;
        });

        $(document).on('click', '.btn-feat', function() {
            elem = $(this);
            cat = elem.data('cat');
            id = elem.data('id');
            url = baseurl+'/admin/promos-and-events/featured/';

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

        $(document).ready(function () {

            $(document).on('click', '.banner-toggle', function() {
                elem = $(this);
                alert('a')
                // if(elem.text().toLowerCase() == 'enable video banner') {

                //     url = baseurl+'/admin/dashboard/edit/1';
                    
                // } else {
                //     location.reload();
                // }

            });
        })


        $(document).on('click', '.add-img', function(){
            var fld;
            
            if(commid == 'banners') {
                fld = 'banners';
            } else {
                fld = 'images'
            }

            count = $('#container').length;
            
            $( '<div id="container" class="psu-'+count+'">'+
                '<div class="row row-img">'+
                    '<div class="col-sm-6">'+
                        '<div class="form-group">'+
                            '<label>Image</label>'+
                            '<br>'+
                        '</div>'+
                            '<input type="file" class="form-control req"  name="'+fld+'[]">'+
                            '<br>'+
                    '</div>'+
                    '<div class="col-sm-6">'+
                    '<div class="col-sm-6"></div>'+
                        '<div class="form-group">'+
                            '<a href="javascript:void(0)" class="btn btn-danger btn-rm" data-rm="'+count+'">Remove</a>'+
                        '</div>'+
                   '</div>'+
                '</div>'+
                '</div>' ).appendTo( $(".img-container") );

        });

        $(document).on('click', '.btn-rm', function(){

            if(dataid == 'images') {
                pagecnt = 'images';
            } else {
                pagecnt = 'activity';
            }


            elem = $(this),
            dataid = aid,
            id = elem.data('id'),
            url = baseurl+'/admin/'+method+'/'+pagecnt+'/removeImage/'+aid;
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


        $(document).on('click','#add-new', function() {
            cnt = $('.mce').length;
            $('<div class="row">'+
            '<div class="col-sm-6">'+
                '<div class="form-group">'+
                    '<label>File</label>'+
                    '<input type="file" class="form-control req"  name="image[]">'+
                '</div>'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-sm-6">'+
                    '<div class="form-group">'+
                        '<label>Title</label>'+
                        '<input type="text" class="form-control" name="activity[title][]"/>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-sm-12">'+
                    '<div class="form-group">'+
                        '<label>Description</label>'+
                        '<textarea class="text-content form-control" name="activity[desc][]" rows="7"></textarea>'+
                    '</div>'+   
                '</div>'+
            '</div>').insertBefore( $(".btn-sub-db") )
        });

    });


    $(document).on('click', '.btn-sub', function() {
        $('.err').remove();
        elem = $(this);
        form = $(this).closest("form").attr('id');

        btn = $('.btn-sub');

        btn.hide();

        if(form == 'addForm') {
            form = $('#addForm');
            tinyMCE.triggerSave();

            if(method != 'insert' || method != 'update') {
                // sub page
                url = baseurl + '/admin/'+method+'/'+dataid+'/'+aid;

                if(method == 'community' || method == 'our-residence' || method == 'where-to-eat' || method == 'things-to-do' || method == 'promos-and-events' || method == 'whats-new') {
                    url = baseurl + '/admin/'+method+'/'+commid;
                    alert(url);
                }

                if(method == 'dashboard') {
                    url = baseurl + '/admin/' + method +'/'+ dataid + '/1';
                }
            } 
        } else {
            form = $('#imageForm');

            if(method == 'places-to-stay') {
                url = '/admin/'+method+'/'+dataid+'/images/edit/'+imgids;
            } else {
                if(imgids == '') {
                    url = '/admin/'+method+'/images/edit/'+aid;
                } else {
                    url = '/admin/'+method+'/'+dataid+'/'+commid+'/1';
                }
            }
        }

        var myData = new FormData($(form)[0]);

        $.ajax({
            url         : url,
            data        : myData,
            contentType : false,
            processData : false,
            type        : 'POST',
              success: function(data){
                alert('Data Successfully Savedd');
                window.location.href = baseurl+'admin/'+method;
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
