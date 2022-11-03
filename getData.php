<?php
header("Content-Type: application/json; charset=UTF-8");
// set up header; first two prevent IE from caching queries
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

require("cc.php");
$opt = $_REQUEST['opt'];

if($opt==1)
	getall();
elseif ($opt==2) 
	getsmh();
elseif ($opt==3)
	gett();
elseif ($opt==4)
	getsun();
elseif ($opt==5)
	getcurr();


function getcurr()
{
	$farm_db=connect();
	$query = "SELECT * FROM `sensor` WHERE time = (SELECT MAX(time) FROM `sensor`)";
	$outp = array();
	$outp = runqueryrow($farm_db,$query);
	echo json_encode($outp);
}

function getsun()
{
	$farm_db=connect();
	$query = "SELECT * FROM `sensor`"; // complete query
	$outp = array();
	$outp = runqueryall($farm_db,$query);
	$table = array();
	$table['cols'] = array(
		/* define your DataTable columns here
		 * each column gets its own array
		 * syntax of the arrays is:
		 * label => column label
		 * type => data type of column (string, number, date, datetime, boolean)
		 */
		array('label' => 'Time', 'type' => 'string'),
		array('label' => 'Sunlight', 'type' => 'number')
		// etc...
	);

	$rows = array();
	foreach ($outp as $r) {
	    $temp = array();
		// each column needs to have data inserted via the $temp array
		$temp[] = array('v' => $r['time']);
		$temp[] = array('v' => $r['sunlight']);
		// etc...
		
		// insert the temp array into $rows
	    $rows[] = array('c' => $temp);
	}

	// populate the table with rows of data
	$table['rows'] = $rows;

	// encode the table as JSON
	$jsonTable = json_encode($table);


	// return the JSON data

	echo $jsonTable;
}

function gett()
{
	$farm_db=connect();
	$query = "SELECT * FROM `sensor`"; // complete query
	$outp = array();
	$outp = runqueryall($farm_db,$query);
	$table = array();
	$table['cols'] = array(
		/* define your DataTable columns here
		 * each column gets its own array
		 * syntax of the arrays is:
		 * label => column label
		 * type => data type of column (string, number, date, datetime, boolean)
		 */
		array('label' => 'Time', 'type' => 'string'),
		array('label' => 'Temperature', 'type' => 'number'),
		// etc...
	);

	$rows = array();
	foreach ($outp as $r) {
	    $temp = array();
		// each column needs to have data inserted via the $temp array
		$temp[] = array('v' => $r['time']);
		$temp[] = array('v' => $r['temperature']);
		// etc...
		
		// insert the temp array into $rows
	    $rows[] = array('c' => $temp);
	}

	// populate the table with rows of data
	$table['rows'] = $rows;

	// encode the table as JSON
	$jsonTable = json_encode($table);


	// return the JSON data

	echo $jsonTable;
}

function getsmh()
{
	$farm_db=connect();
	$query = "SELECT `time`,`soilmoist`,`humidity` FROM `sensor`"; // complete query
	$outp = array();
	$outp = runqueryall($farm_db,$query);
	$table = array();
	$table['cols'] = array(
		/* define your DataTable columns here
		 * each column gets its own array
		 * syntax of the arrays is:
		 * label => column label
		 * type => data type of column (string, number, date, datetime, boolean)
		 */
		array('label' => 'Time', 'type' => 'string'),
	    array('label' => 'Soil Moisture', 'type' => 'number'),
		array('label' => 'Humidity', 'type' => 'number'),
		// etc...
	);

	$rows = array();
	foreach ($outp as $r) {
	    $temp = array();
		// each column needs to have data inserted via the $temp array
		$temp[] = array('v' => $r['time']);
		$temp[] = array('v' => $r['soilmoist']);
		$temp[] = array('v' => $r['humidity']);
		// etc...
		
		// insert the temp array into $rows
	    $rows[] = array('c' => $temp);
	}

	// populate the table with rows of data
	$table['rows'] = $rows;

	// encode the table as JSON
	$jsonTable = json_encode($table);


	// return the JSON data

	echo $jsonTable;
}

function getall()
{
	$farm_db=connect();
	$query = "SELECT * FROM `sensor`"; // complete query
	$outp = array();
	$outp = runqueryall($farm_db,$query);
	$table = array();
	$table['cols'] = array(
		/* define your DataTable columns here
		 * each column gets its own array
		 * syntax of the arrays is:
		 * label => column label
		 * type => data type of column (string, number, date, datetime, boolean)
		 */
		array('label' => 'Time', 'type' => 'string'),
	    array('label' => 'Soil Moisture', 'type' => 'number'),
		array('label' => 'Temperature', 'type' => 'number'),
		array('label' => 'Humidity', 'type' => 'number'),
		array('label' => 'Sunlight', 'type' => 'number')
		// etc...
	);

	$rows = array();
	foreach ($outp as $r) {
	    $temp = array();
		// each column needs to have data inserted via the $temp array
		$temp[] = array('v' => $r['time']);
		$temp[] = array('v' => $r['soilmoist']);
		$temp[] = array('v' => $r['temperature']);
		$temp[] = array('v' => $r['humidity']);
		$temp[] = array('v' => $r['sunlight']);
		// etc...
		
		// insert the temp array into $rows
	    $rows[] = array('c' => $temp);
	}

	// populate the table with rows of data
	$table['rows'] = $rows;

	// encode the table as JSON
	$jsonTable = json_encode($table);


	// return the JSON data

	echo $jsonTable;
}
?>