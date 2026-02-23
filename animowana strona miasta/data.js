
function czas(){
	
	var data = new Date();
	
	var d=data.getDate();
	var m=data.getMonth()+1;
	var r=data.getFullYear();
	
	if(d<10) d="0"+d;
		if(m<10) m="0"+m;
	
	document.getElementById("data").innerHTML="DATA: "+d+"/"+m+"/"+r;
	
	
	
}