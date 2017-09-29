$(document).ready(function() {
         //resgiter user
        $("#users-register").validationEngine({
            scrollOffset : 200
        });
        $("#login-users").validationEngine({
            scrollOffset : 200,
            promptPosition : "topLeft"
        });
        $("#login-corp").validationEngine({
            scrollOffset : 200,
            promptPosition : "topLeft"
        });
        $('#signup-com').validationEngine({
            scrollOffset : 200
        });
        $('#profile').validationEngine({
            scrollOffset : 200,
            promptPosition : "topLeft"
        });
        $('#skills').validationEngine({
            scrollOffset : 200,
            promptPosition : "topLeft"
        });
        $('#awards').validationEngine({
            scrollOffset : 200,
            promptPosition: 'topLeft'
        });
        $('#corp_prof').validationEngine({
            scrollOffset : 200,
            promptPosition: 'topLeft'
        });
        $('#forgot-users').validationEngine({
            scrollOffset : 200,
            promptPosition: 'topLeft'
        });
        $('#forgot-corp').validationEngine({
            scrollOffset : 200,
            promptPosition: 'topLeft'
        });
        $('#job_order').validationEngine({
            scrollOffset:200,
            promptPosition: 'topLeft'
        });
        $('#question').validationEngine({
            scrollOffset:200,
            promptPosition: 'topLeft'
        })
        setTimeout(function(){ 
            $('#flashMessage').hide('slow');
         }, 3000);

        $('.company_signup').click(function(e){
            e.preventDefault();
            var url = $(this).find('a').attr('href');
            $(location).attr('href', url)
            $('#mytab a[href="#tab-corpmember"]').tab('show');
            $( "html body" ).scrollTop( 0 );
         
        })
   
        var hash = document.location.hash;
        if (hash == '#signup-corpmember') {
            $('#mytab a[href="#tab-corpmember"]').tab('show');
        } 
        if (hash == '#login-corpmember') {
            $('#mytab a[href="#tab-corpmember"]').tab('show');
        } 
        // check value input location
        var defaultval = $('input[class=radioLocal]:checked').val();
        if(defaultval == 'other'){
            $('#inputCity').prop('disabled', true);
            $('#inputAddress').prop('disabled', true);
            $('#pref').prop('disabled', true);
        }else{
            $('#inputCity').prop('disabled', false);
            $('#inputAddress').prop('disabled', false);
            $('#pref').prop('disabled', false);
        }
        $('input[class=radioLocal]').change(function(){
            var value = $(this).val();
            if(value == 'other'){
                $('#inputCity').prop('disabled', true);
                $('#inputAddress').prop('disabled', true);
                $('#pref').prop('disabled', true);
            }else{
                $('#inputCity').prop('disabled', false);
                $('#inputAddress').prop('disabled', false);
                $('#pref').prop('disabled', false);
            }
        }); 
    })

    // JavaScript Document
$(function() {

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('lastTab', $(this).attr('href'));
    });

    // go to the latest tab, if it exists:
    var lastTab = localStorage.getItem('lastTab');
    if (lastTab) {
        $('#profile-tab-nav a[href="' + lastTab + '"]').tab('show');
    }
    /*******************
    インプットファイルへの画像反映
    ********************/
    $(document).on('change', '.file', function() {
        var view_box = $(this).parents('.view_box'),
            fileprop = $(this).prop('files')[0],
            find_img = $(this).next('img'),
            fileRdr = new FileReader();
        var boximg = view_box.find('.review-avatar');
        if (find_img.length) {
            find_img.nextAll().remove();
            find_img.remove();
        }
        var img =  '<img alt="" class="img_view"><br><a href="#" class="img_del link_danger"><i class="fa fa-trash"></i> 削除する</a>';
            boximg.html(img);
        fileRdr.onload = function() {
            view_box.find('img').attr('src', fileRdr.result);
            img_del(view_box);
        }
        fileRdr.readAsDataURL(fileprop);
    });

    function img_del(target) {
        target.find("a.img_del").on('click', function() {
                $(this).parent().find('input[type=file]').val('');
                $(this).parent().find('.img_view, br').remove();
                $(this).remove();
            var viewbox = $('.view_box');
            var img = '<input type="file" name="image" class="file validate[checkFileType[jpg|jpeg|gif|JPG|png|PNG]]">';
            img += '<p class="text-muted"><small>推奨画像サイズ（横210px × 縦210px)</small></p>';
            img += '<span class="review-avatar"></span>';
            viewbox.html(img);
            return false;

        });

    }
    
});