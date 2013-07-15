
function generateEven(n){
	var arr = [],
		i;
	for (i = 2; i <= n;i += 2){
		arr.push(i);
	}
	return arr;
}

function getSize(arr){
	console.log(arr.length);

	for (var item in arr){
		console.log(arr[item]);
	}
}

function addTo(arr, el, pos){

	if (pos.toLowerCase() === "front"){
		arr.unshift(el);
	}else if (pos.toLowerCase() === "back"){
		arr.push(el);
	}
}

function enqueue(arr, val){
	arr.push(val);
}

function dequeue(arr){
	return arr.shift();
}

function addToObj(obj, index, val){
	obj[index] = val;
}