<?php

// Developer By : Azozz ALFiras
// Created : 2023/2/5

include "Config.php";

if(isset($_GET["House_id_Status"])){


$House_id_Status = $_GET["House_id_Status"];

$sql = "SELECT * FROM `Sales_List`  WHERE  `id` = '$House_id_Status'";
// echo $sql;
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    
$sql1 = "UPDATE Sales_List SET Status='true' WHERE id=$House_id_Status";

if ($link->query($sql1) === TRUE) {


$array_json1 = array(
'House_Text' => "The a House Status has been update successfully.",
'House_Status'=> "SUCCESS"
);
echo json_encode($array_json1, JSON_PRETTY_PRINT);

} else {
    
$array_json = array(
'House_Text' => "The House Status was not update.",
'House_Status'=> "ERROR_7"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);


}

}
} else {


$array_json = array(
'House_Text' => "The House was not found.",
'House_Status'=> "ERROR_6"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);

}
}

$House_id = $_GET["House_id"];
if(isset($House_id)){

if($House_id == "All"){

$array_json = array();

$sql = "SELECT * FROM `Sales_List` ";
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$Images_List =    $row["Images_List"];
$array = explode(' ', $Images_List);

$Personal_id =    $row["Personal_id"];
$array1 = explode(' ', $Personal_id);
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
'Personal_id' => $array1,
'Status' => $row["Status"],
'Data_Push' => $row["Data_Push"]
);


}
}
echo json_encode($array_json, JSON_PRETTY_PRINT);

} else{
$sql = "SELECT * FROM `Sales_List`  WHERE  `id` = '$House_id'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$Images_List =    $row["Images_List"];
$array = explode(' ', $Images_List);

$Personal_id =    $row["Personal_id"];
$array1 = explode(' ', $Personal_id);
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
'Personal_id' => $array1,
'Status' => $row["Status"],
'Data_Push' => $row["Data_Push"]
);

echo json_encode($array_json, JSON_PRETTY_PRINT);
}
} else{
    
$array_json = array(
'House_Text' => "The House was not found.",
'House_Status'=> "ERROR_6"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);



}
}
}
?>