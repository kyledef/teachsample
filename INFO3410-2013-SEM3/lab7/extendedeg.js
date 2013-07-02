console.log("Ready");


// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(assignButtons);



function assignButtons(){
	document.getElementById('local').onclick = drawPieChart;
	document.getElementById('pie_svr').onclick = loadFromServer;
}


// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawPieChart() {
	console.log("Run");

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Mushrooms', 3],
		['Onions', 1],
		['Olives', 1],
		['Zucchini', 1],
		['Pepperoni', 2]
	]);

	// Set chart options
	var options = {'title':'How Much Pizza I Ate Last Night','width':400,'height':300};

	           
	// Instantiate and draw our chart, passing in some options.
	var pie_chart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
	pie_chart.draw(data, options);
}



function loadFromServer(){
	console.log("Loading From Server");
	
	//Retrieve XMLRequest Object
	var xmlhttp;
	if (window.XMLHttpRequest)xmlhttp=new XMLHttpRequest();
	else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	//Setup to receive data
	xmlhttp.onreadystatechange=function(){
		console.log("State Changed: "+ xmlhttp.readyState);

		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			console.log("Server sent data");
			var data = xmlhttp.responseText; 
			data = JSON.parse(data);
			drawPieServer(data);
		}
	}

	//Specific details of the request
	xmlhttp.open("GET","lib/data.php",true);
	xmlhttp.send();
}

function drawPieServer(data){
	//console.dir(data);

	var dataTable = new google.visualization.DataTable(),
		options,
		table, formatData = [];
		

	dataTable.addColumn("string", "crime");
	dataTable.addColumn("string", "id");
	dataTable.addColumn("string", "month");
	dataTable.addColumn("string", "reported");
	dataTable.addColumn("string", "year");

	data.forEach(function(ele){
		var arr = [];
		arr.push(ele.crime);
		arr.push(ele.id);
		arr.push(ele.month);
		arr.push(ele.reported);
		arr.push(ele.year);

		formatData.push(arr);
	});

	dataTable.addRows(formatData);

	options = {'title':'Crime Data','width':400,'height':300};

	table = new google.visualization.BarChart(document.getElementById('pie_svr'));
	table.draw(dataTable, options);

}