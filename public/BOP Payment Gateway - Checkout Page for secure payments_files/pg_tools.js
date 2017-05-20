function f_selectedItem() {

	
	sysdate = new Date();
	year = sysdate.getYear(sysdate) % 100;
	mois = sysdate.getMonth(sysdate) +1 ;
	

	
	var ExpYY = document.getElementById("DrpLstExpYY");
	for(var i=0;i<ExpYY.length;i++)
		if(ExpYY[i].value== year) ExpYY.selectedIndex = i;
		
	
	
	
	var ExpMM = document.getElementById("DrpLstExpMM");	
	for(var i=0;i<ExpMM.length;i++)
		if(ExpMM[i].value== mois) ExpMM.selectedIndex = i;

	

	
	return true;
	
	}