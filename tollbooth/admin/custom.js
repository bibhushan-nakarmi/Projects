$(document).ready(function() {
    $('.norm_user_btn').click(function(){
        $('.guest-user').hide();
        $('.normal-user').show();
        $(this).addClass('active');
        $('.guest_user_btn').removeClass('active');
    });
    
    $('.guest_user_btn').click(function(){
        $('.normal-user').hide();
        $('.guest-user').show();
        $(this).addClass('active');
        $('.norm_user_btn').removeClass('active');
    });
});