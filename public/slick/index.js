   $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 7,
            slidesToScroll: 1
        });
        
    });

$('#bankpp').click(function() {
    $('#bankpps').addClass('active');
    $('#bankpps').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
 $('#palbank').addClass('hidden');
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
  $('#bankpp').addClass('hidden');
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
 $('#bankpp').addClass('hidden');
});


$('#stripe').click(function() {
    $('#stripeform').addClass('active');
    $('#stripeform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
 $('#palpay').addClass('hidden');
 $('#bankpp').addClass('hidden');
});


$('#CASHU').click(function() {
    $('#CASHUform').addClass('active');
    $('#CASHUform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
 $('#bankpp').addClass('hidden');

});


$('#MasterCard').click(function() {
    $('#MasterCardform').addClass('active');
    $('#MasterCardform').removeClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#Onecardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
 $('#bankpp').addClass('hidden');
});


$('#Onecard').click(function() {
    $('#Onecardform').addClass('active');
    $('#Onecardform').removeClass('hidden');

 $('#bankpp').addClass('hidden');

    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Payoneer_logo_logotypeform').addClass('hidden');
});


$('#Payoneer_logo_logotype').click(function() {
    $('#Payoneer_logo_logotypeform').addClass('active');
    $('#Payoneer_logo_logotypeform').removeClass('hidden');
 $('#bankpp').addClass('hidden');
    
    $('#PayPalform').addClass('hidden');
    $('#stripeform').addClass('hidden');
    $('#CASHUform').addClass('hidden');
    $('#MasterCardform').addClass('hidden');
    $('#Onecardform').addClass('hidden');

});



