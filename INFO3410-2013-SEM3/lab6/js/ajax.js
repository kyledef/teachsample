

window.onload= function(){
	console.log("ready to code");
	use_ajax(draw_table);
}

console.log("ready");

function use_ajax(func){
	var xmlhttp;

	//Use a technique called feature detection
	if (window.XMLHttpRequest){
  		xmlhttp=new XMLHttpRequest();
  	}
	else{// code for IE6, IE5 (older browsers compatibility)
  		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  	}

  	xmlhttp.onreadystatechange=function(){
  		//Ready state 4 = means we got a response
  		//status tells us what type of response 200 means everything good (data received)
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
    		data =xmlhttp.responseText;
    		
    		//When data is received it is accepted as a string
    		// console.log(data);
    		// console.log(typeof data);

    		//However this is not useful to us, we need to convert it to an object so we
    		//can use the data    		
    		data = JSON.parse(data);
    		//console.log(typeof data);

    		//We cannot return this data, however we can passin the function that will use the data

    		func(data);

    	}
  	}
  	xmlhttp.open("GET","lib/data.php",true);
	xmlhttp.send();

}


draw_table(data){

}