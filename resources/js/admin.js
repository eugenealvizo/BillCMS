var empty = /^\s*$/;
var email_format = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var number_format = /^\d+$/;
var url_format = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
var interval, countdown, process;

jQuery(function() {




    $(document).ready(function() {
        if ($('#slug').length > 0) {
            jQuery(document).on('keyup', '#title', function() {
                slug = (this.value).toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-')
                jQuery('#slug').val(slug);
            });
        }
    });

    $('.btn-sub').on('click', function() {
        form = jQuery('#addForm');
        btns.hide();

        newdata = new FormData();

        jQuery.each(ser, function(i, v) {
            newdata.append(v.name, v.value);
        });

        jQuery.ajax({
            url: baseurl + module + '/' + method,
            type: 'POST',
            data: newdata,
            processData: false,
            contentType: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
            }
        });
        return false;
    });
        
});