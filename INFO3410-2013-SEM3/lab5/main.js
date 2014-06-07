
//Creates a variable that contains a string => note that no type is explicitly stated
var v = "varible";
console.log(v);
console.log(typeof v);

//This gives us the ability to add different type of information such as integers with no problems
v = 0;
console.log(v);
console.log(typeof v);

//Interestingly in JavaScript, both integers and real numbers are simply numbers, there is only one numerical type
v = 3.505;
console.log(v);
console.log(typeof v);

//Similarly we can utilize booleans which can provide useful operations for condition testing
v = true;
console.log(v);
console.log(typeof v);

// We can create an array with an initial value of three
v = [3];
console.log(typeof v);
console.log(v[0]);
console.log(v.length);

//Note however in this example we use the same 3 however, this creates an empty array of size 3
v = Array(3);
console.log(typeof v);
console.log(v[0]);
console.log(v.length);

//It is not advisable to use Array, because it requires an additional overhead to remember the following difference.
//while Array(3) creates an empty array of size 3, Array(2,3) creates an array of size two that contains two elements
v = Array(2,3);
console.log(typeof v);
console.log(v[0]);
console.log(v.length);

//While we are familiar with the concept of arrays as data structures, which gives us the ability to hold a set of information in one place. 
//Javascript also gives us an object that is a more general purpose data structure that can also hold information in a structured manner

//Create an Object
v = {};
v.name = "robert";
console.log(typeof v);
console.log(v.name);
console.log(v['name']);
console.log(v.length); //Note this will print undefine. The length property is on the array object
//If you want to determine how many elements in the object use the following technique
console.log(Object.keys(v).length);

v = {'name': 'kyle', 'role':'teacher', 'interest':'programming'};

console.log(v.interest);
console.log(v['role']);

//We are familiar by now with the concept of a for loop. However the traditional for  loop will not work, because there is not arr[1] or arr[0] because the information may not always be stored at numerical indexes.
//To overcome this problem we have a for in loop
var i;
for(i in v){	
	console.log("%s: \t %s",i,v[i]);
}


