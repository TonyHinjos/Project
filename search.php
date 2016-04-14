<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'mephibosheth.';
$dbName = 'landgis_db';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT parcel_number FROM title_search WHERE UPPER(parcel_number) LIKE '%".strtoupper($searchTerm)."%' ORDER BY parcel_number ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = strtoupper($row['parcel_number']);
}
//return json data
echo json_encode($data);
?>
<?php
// define('DB_SERVER', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'mephibosheth.');
// define('DB_NAME', 'landgis_db');


// if (isset($_GET['term'])){
// 	$return_arr = array();

// 	try {
// 	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8880;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
// 	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
// 	    $stmt = $conn->prepare('SELECT parcel_number FROM title_search WHERE parcel_number LIKE :term');
// 	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    
// 	    while($row = $stmt->fetch()) {
// 	        $return_arr[] =  $row['parcel_number'];
// 	    }

// 	} catch(PDOException $e) {
// 	    echo 'ERROR: ' . $e->getMessage();
// 	}


//     /* Toss back results as json encoded array. */
//     echo json_encode($return_arr);
// }

