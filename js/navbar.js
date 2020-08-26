function switchMenu(){
	x = document.getElementById("menuMobile").style.width;

	if (x==0 || x =="0px"){
		document.getElementById("menuMobile").style.width = "50%";
		document.getElementById("menuMobile").style.fontSize = "1em";
	} else{				
		document.getElementById("menuMobile").style.width = 0;
		document.getElementById("menuMobile").style.fontSize = "0";
	}
}