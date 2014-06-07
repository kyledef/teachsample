
var arr = [];
console.log(arr.length);

//introducing built in methods of the array object

//#1 (push) -> adds value to the end of the array
var i;
for (i = 0; i < 5; i++){
	arr.push(i);
}

//#2 (unshift) -> add an element to front of the array
for (i = 1; i <=5; i++){
	arr.unshift(i * i);
}


console.log(arr);
//3 (pop) -> removes the last two elements in the array
for(i = 0; i < 2;i++){
	var temp = arr.pop(); //pop element and store in temporary variable
	console.log("removed % from the end of the array",temp);
	console.log(arr);
	//console.log(arr.pop()); // shorten version of the above 2 lines of code
}

console.log(arr);
//4 (shift) ->
for(i = 0; i < 2;i++){
	var temp = arr.shift();
	console.log("Removed %d from front of the array",temp);
	console.log(arr);
}

console.log("Before Slicing");
console.log(arr);
//5 slice ->
var tempArr = arr.slice(1,5);
console.log("after Slicing");
console.log(arr);
console.log("Created Array extracted");
console.log(tempArr);


/** Creating Functions **/

//Declaring a function called doSomething
function doSomething(){
	alert("I did something");
	alert("and it worked");
}

//Assigning a function to the didSomething variable
var didSomething = function(){
	alert("I did something");
	alert("and it worked");
}

//didSomething();

//functions with parameters
function withParameters(val1, val2){
	console.log(val1);
	console.log(val2);
}

withParameters(123, 234);
withParameters(123);
withParameters();

/** important **/
function add( a, b){
	console.log(isNaN(a));
	console.log(isNaN(b));
	//Checking to ensure both a and b are numbers
	if (isNaN(a) === false && isNaN(b) === false){
		//now i know both variables are numbers i can perform the addition operation
		return a + b;
	}else{
		//If at least one of the variables is not a number I return null to let the user of the function know an invalid operation was attempted
		return null;
	}
}

var result = add(2,3);
console.log(result);

result = add("ab", 3);
console.log(result);

function addv2(a, b){
	if ( b === undefined && !isNaN(a)){
		return a;
	}

	if (!isNaN(a) && !isNaN(b)){ //** important ! 
		return a + b;
	}else{
		return null;
	}
}
console.log(addv2("c","d"));
console.log(addv2(1));


var arr = []; //Creates an empty array

//Using numerical keys to assign values to the array
arr[1] = "value";
arr[2] = "next value";


//Using alphanumeric keys to assign values
arr["key"] = "value";  //In this example the word "key" is used as the index/key to store the information 
console.log(arr['key']);
console.log(arr);
console.log(arr.length);

//This will not work consistently/accurately for associative arrays with alphanumeric keys
for(i = 1; i <= arr.length; i++){
	console.log(arr[i]);
}

for (var key in arr){
	console.log("key is -> %s",key);
	console.log("value is -> %s",arr[key]);
}

arr = [];
arr = new Array(0);

//Objects 
var obj = {}; 
//console.log(typeof obj);
//console.log(typeof arr);
//console.log(typeof doSomething);
//console.log(typeof didSomething);

console.log("****dealing with objects ****");
//Assign a key to an object can be done in two ways
obj['key'] = "value"; //using an array notation
console.log(obj.key); //Using an object notation

obj.new_value = "value two"; //Using an object notation
console.log(obj['new_value']); //using an array notation


//created and assigned a non-empty object to the variable name
var name = {
	first : 'kyle',
	last : 'defreitas'
};
console.log(name.first); //Come back to that

//this is the same as 
var name2 = {};
name2.first = "kyle";
name2.last = "defreitas";
name2.address = {
	street : "Circular Road",
	area : "St Augustine",
	city : ""
};
console.log(name2);















