<?php
/*@author Fatunmbi  Daniel 
  Date 17/08/2017
*/

define("HOST_NAME","localhost");
define("USERNAME","root");
define("PASSWORD","password");
define("DB_NAME","HNGIntership");
define("TEST_TABLE","test");

$conn = new mysqli(HOST_NAME, USERNAME, PASSWORD,DB_NAME);

$query = "SELECT * FROM ".TEST_TABLE;
$stmt = $conn->query($query);
$result = array();
if ($stmt){
	while($row = $stmt->fetch_assoc()){
	array_push($result, $row);
	}
	echo json_encode(array("response"=>$result));

}
$stmt = null;
$conn->close();

