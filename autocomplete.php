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
//$query = "SELECT name, numcode, phonecode, iso3 FROM country where UPPER(name) LIKE '".strtoupper($name)."%'";
$query = $db->query("SELECT title_number FROM title_search WHERE title_number LIKE '".strtoupper($searchTerm)."%' ORDER BY title_number ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = strtoupper($row['title_number']);
}
//return json data
echo json_encode($data);
?>