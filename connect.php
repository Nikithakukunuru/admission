<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name="testdb";
$conn=mysqli_connect($server_name,$username,$password,$database_name);


// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['save']))
{
  $ref_id=$_POST['ref_id'];
$surname=$_POST['surname'];
$cand_name=$_POST['cand_name'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$sub_caste=$_POST['sub_caste'];
$orphan=$_POST['orphan'];
$income=$_POST['income'];
$adhar=$_POST['adhar'];
$medium1=$_POST['medium1'];
$district1=$_POST['district1'];
$medium5=$_POST['medium5'];
$district5=$_POST['district5'];
$medium6=$_POST['medium6'];
$district6=$_POST['district6'];
$medium7=$_POST['medium7'];
$district7=$_POST['district7'];
$fee=$_POST['fee'];
$jou_no=$_POST['jou_no'];
$date=$_POST['date'];
$pref_1=$_POST['pref_1'];
$pref_2=$_POST['pref_2'];
$checkbox=$_POST['checkbox'];
$sql_query="INSERT INTO entry_form(ref_id,surname,cand_name,father_name,mother_name,dob,gender,address,email.mobile,sub_caste,orphan,income,adhar,medium1,
district1,medium5,district5,medium6,district6,medium7,district7,fee,jou_no,date,pref_1,pref_2,checkbox) VALUES('$ref_id','$surname','$cand_name','$father_name',
'$mother_name','$dob','$gender','$address','$email','$mobile','$sub_caste','$orphan','$income','$adhar','$medium1','$district1','$medium5','$district5','$medium6',
'$district6','$medium7','$district7','$fee','$jou_no','$date','$pref_1','$pref_2','$checkbox')";
if(mysqli_query($conn,$sql_query))
{
  echo"New Details entry inerted successfully!";
}
  else
  {
    "Error:".$sql."".mysqli_error($conn);
   }
  mysqli_close($conn);
}
?>
