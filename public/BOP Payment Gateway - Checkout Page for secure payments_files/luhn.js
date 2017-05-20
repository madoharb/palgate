function luhn_algorithm()
{
  
  var numero = document.FrmJccCheckout.TxtCardNo.value;
  var totalcarte=0;
  var dnum=0;
  var test=0;
  if (numero.length < 13) {
	alert ('The number of the digits for the Credit Card is incorrect');
	document.FrmJccCheckout.TxtCardNo.focus();
	return (false);
	}
	else
	{
  for ( i = numero.length; i >= 1 ;  i--)
  {
    test=test+1;
	num = numero.charAt(i-1);
    if ((test % 2) != 0)
       totalcarte=totalcarte+parseInt(num)
    else {
       dnum=parseInt(num)*2;
       if (dnum >= 10)
          totalcarte=totalcarte+1+dnum-10
       else
          totalcarte=totalcarte+dnum;
    }
   
  }
  if ((totalcarte % 10) != 0){
		alert ('Invalid Card Number');
       document.FrmJccCheckout.TxtCardNo.focus();
       return (false);
  }else{
       return(true);
  }
}
  
}