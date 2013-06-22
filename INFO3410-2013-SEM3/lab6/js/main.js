
//exploring scope
var outside = "outside";

function testScope(){
  var inside = "inside";
  // console.log(outside);
  inBad = "Inside and bad";
  var b = 20;

  //Emphasis => Scope is determined by functions only
  for(var i = 0;i < 100;i++){
    var b = 200;
  }

  //Which b will it use?
  // console.log(b);
}
testScope();

// console.log(inside);
// console.log(inBad);
// console.log(window.inBad);
// console.log(window.outside);

function strangeProps(func){

  //I can create a function inside another function
  function inside(x,y){
    return x * y;
  }
  //and of course we can run it from inside the function
  //console.log(inside(x,y));
  //can it run from outside?

  //What happens if we return the name of the function
  //return inside;  

  //we can pass a function as a parameter to another function
  //an run it from iside the function

  if (func){
    func(2,4);
  }
}

// var func = strangeProps(null);
// console.log(func(2,3));

function sum (x,y){
  console.log(x+y);
}

//strangeProps(sum);


var alternative = function(test){
  console.log(test);
}

// alternative("Hello Everyone");