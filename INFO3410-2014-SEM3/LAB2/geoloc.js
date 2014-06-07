
function handlePosition(position) {
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
  var lat = position.coords.latitude;
  var lon = position.coords.longitude;
  
  document.getElementById("displayResult").innerHTML="("+ lat + "," + lon +")";  
}
function handleError(err){
	console.dir(err);
}
function runFunc(){
	if ("geolocation" in navigator){
		var geo = navigator.geolocation;	
		
		geo.getCurrentPosition(handlePosition,handleError);
	}else{
		alert("no geolocation sorry");
	}
}