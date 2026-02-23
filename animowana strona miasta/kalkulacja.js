function cardA(){
	
	var text=document.getElementById("sztuki").value;
	if(text==""){
		document.getElementById("result").innerHTML="Nie podałeś liczby kartek pamiątkowych!";
	}else if(isNaN(text)){
		document.getElementById("result").innerHTML="Nie prawidlowa wartosc pola ilosc!";
	}else if(parseInt(text)<0){
			document.getElementById("result").innerHTML="Wartość nie może być ujemna!";
		
	}else{
		var wynik=parseInt(text*16);
		if(document.getElementById("honor").checked==true){
			document.getElementById("result").innerHTML=wynik*0.50+" zł";
		}else{
			
			document.getElementById("result").innerHTML=wynik+" zł";
		}
		
	}
	
}

function cardB(){
	
	var text=document.getElementById("sztuki").value;
	if(text==""){
		document.getElementById("result").innerHTML="Nie podałeś liczby kartek pamiątkowych!";
	}else if(isNaN(text)){
		document.getElementById("result").innerHTML="Nie prawidlowa wartosc pola ilosc!";
	}else if(parseInt(text)<0){
			document.getElementById("result").innerHTML="Wartość nie może być ujemna!";
		
	}else{
		var wynik=parseInt(text*18);
		if(document.getElementById("honor").checked==true){
			document.getElementById("result").innerHTML=wynik*0.50+" zł";
		}else{
			
			document.getElementById("result").innerHTML=wynik+" zł";
		}
		
	}
	
}

function cardC(){
	
	var text=document.getElementById("sztuki").value;
	if(text==""){
		document.getElementById("result").innerHTML="Nie podałeś liczby kartek pamiątkowych!";
	}else if(isNaN(text)){
		document.getElementById("result").innerHTML="Nie prawidlowa wartosc pola ilosc!";
	}else if(parseInt(text)<0){
			document.getElementById("result").innerHTML="Wartość nie może być ujemna!";
		
	}else{
		var wynik=parseInt(text*22);
		if(document.getElementById("honor").checked==true){
			document.getElementById("result").innerHTML=wynik*0.50+" zł";
		}else{
			
			document.getElementById("result").innerHTML=wynik+" zł";
		}
		
	}
	
}

function resecik(){
	
	document.getElementById("result").innerHTML=" ";
	
}