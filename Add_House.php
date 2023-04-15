<?php

include "Config.php";


$array = array();
$array1 = array();

$Price = $_POST["Price"];
$Address = $_POST["Address"];
$Size = $_POST["Size"];
$Number_Rooms = $_POST["Number_Rooms"];
$Number_Kitchens = $_POST["Number_Kitchens"];
$Number_Bathrooms = $_POST["Number_Bathrooms"];
$Number_Floors = $_POST["Number_Floors"];
$Display_Type = $_POST["Display_Type"];
$Payment_Type = $_POST["Payment_Type"];
$User_Name = $_POST["User_Name"];
$User_Number = $_POST["User_Number"];
$Status = $_POST["Status"];
$Personal_id = $_FILES["Personal_id"];
$Images_List = $_FILES["Images_List"];


if(!empty($Price)){



foreach ($Personal_id['type'] as $k => $v) {

$filecsext = strtolower(end(explode('.', $Personal_id['type'][$k])));
$PathExt = substr($filecsext, strpos($filecsext, "/") + 1);
$Personal_Array = 'Uploads/' . md5(microtime() .$Personal_id['name'][$k]).".$PathExt";
move_uploaded_file($Personal_id['tmp_name'][$k], $Personal_Array);

$array1[] =  getBaseUrl().$Personal_Array." ";
}


foreach ($Images_List['type'] as $k => $v) {

$filecsext = strtolower(end(explode('.', $Images_List['type'][$k])));
$PathExt = substr($filecsext, strpos($filecsext, "/") + 1);
$ImageList_Array = 'Uploads/' . md5(microtime() .$Images_List['name'][$k]).".$PathExt";
move_uploaded_file($Images_List['tmp_name'][$k], $ImageList_Array);


$array[] =  getBaseUrl().$ImageList_Array." ";

}





}
// }



$ListImages = implode($array);

$array_Image = rtrim($ListImages, " ");

$ListPersion = implode($array1);

$array_Persion = rtrim($ListPersion, " ");

$sql = "INSERT INTO Sales_List (Price, Images_List, Address, Size, Number_Rooms, Number_Kitchens, Number_Bathrooms, Number_Floors, Display_Type, Payment_Type, User_Name, User_Number, Personal_id, Status, Data_Push)
VALUES ('$Price', '$array_Image', '$Address', '$Size', '$Number_Rooms', '$Number_Kitchens', '$Number_Bathrooms', '$Number_Floors', '$Display_Type', '$Payment_Type', '$User_Name', '$User_Number', '$array_Persion', '$Status',   '$TimeNow')";
if ($link->query($sql) === TRUE) {



$array_json = array(
'House_Text' => "The a House new has been created successfully.",
'House_Status'=> "SUCCESS"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);


} else {
// echo "Error: " . $sql . "<br>" . $link->error;

$array_json = array(
'House_Text' => "There was an error while creating a new house.",
'House_Status'=> "ERROR_5"
);
echo json_encode($array_json, JSON_PRETTY_PRINT);

}

