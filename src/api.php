<?php 
header('Content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$res = array('error' => false);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn= NULL;

// Connect to mySQL host:
try {
		$conn = new mysqli("localhost", "root", "", "csudijo");
} catch (Exception $e) {
		$res['error'] = true;
		$msg = $e->getMessage();
		$res['message'] = "Database connection established failed! {$msg}";
		echo(json_encode($res, JSON_UNESCAPED_UNICODE));
		die();
}

// Change character set to utf8: (don't throw exception)
if ($conn->set_charset("utf8")) {
	$res['charset'] = $conn->character_set_name();
} else {
	$res['error'] = true;
	$msg = $conn->error;
	$res['message'] = "Change character set to utf8 failed! {$msg}";
	echo(json_encode($res, JSON_UNESCAPED_UNICODE));
	die();
}

$conn->query("SET GLOBAL sql_mode='STRICT_ALL_TABLES', SESSION sql_mode='STRICT_ALL_TABLES'");

$action = 'read'; // default action

if (isset($_GET['action'])) { 
	$action = $_GET['action']; // get action value
}

if ($action == 'entries') {
	try {
		$table = 'vendegkonyv';
		$result = $conn->query("SELECT * FROM {$table}");
		// Fetch all
		$entries = array();
		$entries = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$res['entries'] = $entries;
		$res['message'] = "Entries read successfully!";
	} catch (Exception $e) {
		$res['error'] = true;
		$msg = $e->getMessage();
		$res['message'] = "Entries read failed! {$msg}";
	}
}

if ($action == 'create') {
	$bejegyzes = $_POST['bejegyzes'];
	if (strlen($bejegyzes) == 0) $name = NULL;
	$prepared = $conn -> prepare("INSERT INTO `vendegkonyv` (`bejegyzes`) VALUES (?)");
	if ($prepared == false) die("Error in create (prepare)");
	$result = $prepared->bind_param('s', $bejegyzes);
	if ($result == false) die("Error in create (bind)");
	
	try {
		$prepared->execute();
		$res['message'] = "Entry added successfully!";
	} catch (Exception $e) {
		$res['error'] = true;
		$msg = $e->getMessage();
		$res['message'] = "Entry added failed! {$msg}";
	}

	$prepared -> close();
}



$conn -> close();

echo(json_encode($res, JSON_UNESCAPED_UNICODE));
die();

 ?>