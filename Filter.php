<?php

// Developer By : Azozz ALFiras
// Created : 2023/2/18

// ORDER BY Price ASC 
// من العدد القليل وانت صاعد
include "Config.php";

$Min = $_GET["Min"];
$Max = $_GET["Max"];


$array_json = array();


$sql = "SELECT * FROM Sales_List WHERE Price between '$Min' AND '$Max' ORDER BY Price ASC ";

$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$Images_List =    $row["Images_List"];
$array = explode(' ', $Images_List);
$array_json[] = array(
'id' => $row["id"],
'Images_List'=> $array,
'MainImage'=> $array[0],
'Price' => $row["Price"],
'Address' => $row["Address"],
'Size' => $row["Size"],
'Number_Rooms' => $row["Number_Rooms"],
'Number_Kitchens' => $row["Number_Kitchens"],
'Number_Bathrooms' => $row["Number_Bathrooms"],
'Number_Floors' => $row["Number_Floors"],
'Display_Type' => $row["Display_Type"],
'Payment_Type' => $row["Payment_Type"],
'User_Name' => $row["User_Name"],
'User_Number' => $row["User_Number"],
'Personal_id' => $row["Personal_id"],
'Residence_Card' => $row["Residence_Card"],
'Status' => $row["Status"],
'Data_Push' => $row["Data_Push"]
);


// } else if($row["Price"] == $Fliter){
// $Images_List =    $row["Images_List"];
// $array = explode(' ', $Images_List);
// $array_json[] = array(
// 'id' => $row["id"],
// 'Images_List'=> $array,
// 'MainImage'=> $array[0],
// 'Price' => $row["Price"],
// 'Address' => $row["Address"],
// 'Size' => $row["Size"],
// 'Number_Rooms' => $row["Number_Rooms"],
// 'Number_Kitchens' => $row["Number_Kitchens"],
// 'Number_Bathrooms' => $row["Number_Bathrooms"],
// 'Number_Floors' => $row["Number_Floors"],
// 'Display_Type' => $row["Display_Type"],
// 'Payment_Type' => $row["Payment_Type"],
// 'User_Name' => $row["User_Name"],
// 'User_Number' => $row["User_Number"],
// 'Personal_id' => $row["Personal_id"],
// 'Residence_Card' => $row["Residence_Card"],
// 'Status' => $row["Status"],
// 'Data_Push' => $row["Data_Push"]
// );


// }
}
}
echo json_encode($array_json, JSON_PRETTY_PRINT);
  