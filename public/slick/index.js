   $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5
        });
        
    });


$('#palpays').click(function() {
    $('#palpay').addClass('active');
    $('#palpay').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
 $('#palbank').addClass('hidden');
});

$('#PayPal').click(function() {
    $('#PayPalform').addClass('active');
    $('#PayPalform').removeClass('hidden');

    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
 $('#palbank').addClass('hidden');
 $('#palpay').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');

});


$('#stripe').click(function() {
    $('#stripeform').addClass('active');
    $('#stripeform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');


});


$('#CASHU').click(function() {
    $('#CASHUform').addClass('active');
    $('#CASHUform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');


});


$('#MasterCard').click(function() {
    $('#MasterCardform').addClass('active');
    $('#MasterCardform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');

});


$('#Onecard').click(function() {
    $('#Onecardform').addClass('active');
    $('#Onecardform').removeClass('hidden');



    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
});


$('#Payoneer_logo_logotype').click(function() {
    $('#Payoneer_logo_logotypeform').addClass('active');
    $('#Payoneer_logo_logotypeform').removeClass('hidden');

    
    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');

});


$('#bankpp').click(function() {
    $('#palbank').addClass('active');
    $('#palbank').removeClass('hidden');

    
    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');

});

