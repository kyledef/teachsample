/*jslint vars: true, white: true */
(function(window){
	"use strict";
	// var console = console || window.console;

	//Introducing Variables in JavaScript
	var v; 						// declaring a variable called v
	v = "a"; 					//Assigning a value "a" to the variable v
	var va = 23;				// both the declaration of v and assignment of a value 23 in the same statement

	//Student experience in Java would note that there is not 'type' specified when creating the variable
	//The type of the variable is dynamically assigned based on the values specified.

	// ** Demonstrating type of Java Script **
	function demonstrateType(){
		v = "a";
		console.log(typeof v);	//This will display string
		v = 1;
		console.log(typeof v);	//This will display number
		v = 2.3;
		console.log(typeof v);	//This will display number
		v = true;
		console.log(typeof v);	//This will display boolean

		// The three above types are primitive types in the JavaScript language
		// There are 5 primitive types. The two missing from the above examples are undefined and null.
		// Two other interesting types to consider will be object and functions. We will discuss these in detail at a later time

		v = {};
		console.log(typeof v);	//This will display object
		v = [];
		console.log(typeof v);	//This will display object
		v = function(){};
		console.log(typeof v);	//This will display function
		
		// !! Further reading => http://en.wikibooks.org/wiki/JavaScript/Variables_and_Types && https://developer.mozilla.org/en/docs/Web/JavaScript/Guide/Values,_variables,_and_literals

		//Though these concepts are simple to understand care must be given to ensure you understand the current type that is used
		// For example
		console.log ("22" + 3);	//This will display 223
		//however
		console.log ("22" - 2);	//This will display 20
	}

	demonstrateType();

	function demonstrateLoops(){
		// Iterations -> https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Statements#Loop_Statements
		// We can consider the for i Loop which behaves the same as other c-based languages
		var i;
		for (i = 0; i < 1; i ++){
			console.log("For loop ran");
		}

		// The do while loop
		i = 0;
		do 
			console.log("Do while Loop ran");
		while (i > 0);			//NB the do while loop will always run once before the condition is checked.

		// The while loop
		i = 1;
		while (i > 0){
			console.log("The while loop ran");
			i -= 1;				//Performs the same operation as i-- or i = i -1
		}
	}

	demonstrateLoops();
	
	// ** Introducting Simple Data Structures **
	// In this context data structures refers to any container that we can use to store data for retrieval and manipulation
	//We consider arrays and objects

	function demonstrateArrays(){
		//There are multiple ways to create arrays in JavaScript however we recommend to use the following:
		var good_arr = [];
		//The alternative method is:
		var avoid_arr = new Array();

		good_arr = []; 			// will create an empty array with a length of 0
		good_arr = [2];			// will create an array with a length of 1
		good_arr = [21,22];		// will create an array with a length of 2


		avoid_arr = new Array(2);// will create an empty array with a length of 2
		avoid_arr = new Array(2,1);//Will create a array of size 2 with two elements.
		//because of the additional/conditional construction of the array using the construction (new Array) we advise new entrants to JS to avoid
	}


}(this));