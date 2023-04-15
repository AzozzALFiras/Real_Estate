<?php

// Developer By : Azozz ALFiras
// Created : 2023/2/5

include "Config.php";

// For workigng with POST parameters

$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
if(strcasecmp($REQUEST_METHOD, "GET") == 0){
header($_SERVER["SERVER_PROTOCOL"]."Error method", true, 405);
exit();
} else{


// For Get request body parameters 
$data =  file_get_contents('php://input');

// convert data to json string and append to array with request parameters
$jsondata = json_decode($data, true);

// Get data from json string 
$User_Name = $jsondata["User_Name"];
$User_Number = $jsondata["User_Number"];
$User_Email = $jsondata["User_Email"];
$User_Password = $jsondata["User_Password"];

// for creating a new user on database 
if($User_Name && $User_Email && $User_Password && $User_Number){

// For checking if the user is already in the database 
$sql = "SELECT * FROM `User`  WHERE  `User_Email` = '$User_Email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$array_json = array(
'House_Text' => "The Email address of the user already exists.",
'House_Status'=> "ERROR_1"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);
}
} else {

// Create a new user object on the database 

$Hash_Password = password_hash($User_Password,PASSWORD_DEFAULT);

$sql = "INSERT INTO User (User_Name, User_Number, User_Email, Password, Created_at)
VALUES ('$User_Name', '$User_Number', '$User_Email', '$Hash_Password',  '$TimeNow')";
if ($link->query($sql) === TRUE) {

$array_json = array(
'House_Text' => "The a user new has been created successfully.",
'House_Status'=> "SUCCESS"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);

} else {

$array_json = array(
'House_Text' => "there are problems with a user new create.",
'House_Status'=> "ERROR_2"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);


}


}

} else {

// For Login 

$sql = "SELECT * FROM `User`  WHERE  `User_Email` = '$User_Email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$hashed_password = $row["Password"];
$Number_row = $row["User_Number"];
$Name_row = $row["User_Name"];

// echo $Password_row;
// echo $User_Password;

if (password_verify($User_Password, $hashed_password)) {


$array_json = array(
'User_Name' => $Name_row,
'User_Number'=> $Number_row,
'User_Email'=> $User_Email,
);
echo json_encode($array_json, JSON_PRETTY_PRINT);

} else {
$array_json = array(
'House_Text' => "The password is incorrect.",
'House_Status'=> "ERROR_3"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);


}

}
} else {

$array_json = array(
'House_Text' => "The email is incorrect.",
'House_Status'=> "ERROR_4"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);


}


}


}