
	var price =parseInt(document.getElementById("price").innerHTML),
	    input=document.getElementById("input");
        

	    

function calculate() {
	"use strict";
	
	   document.getElementById("calc").innerHTML=input.value *  price; 
	}
	function messageconfirm()
	{
		
	}
     var messconfirm =new function() {
     
	this.show=function(msg,callback)
	{
    var dlg=document.getElementById('dialocont');
	var dialogbody=dlg.querySelector('dialogbody');	
	dlg.style.top='30%';
	dlg.style.opacity=1;
	dialogbody=msg;
	this.callback=callback;
	document.getElementById('dialocont').style.display *'';
	};
	this.ok=function()
	{
		this.callback();
		this.close();
		document.getElementById('dialocont').style.display *'';
	};
	this.close=function () {
		var dlg=document.getElementById('dialocont');
		dlg.style.top='-30%';
	    dlg.style.opacity=0;
	}
	



	}
	
