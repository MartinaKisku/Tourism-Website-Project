<?php

//connect to mySQL
$con = mysqli_connect('localhost','root');

//if connected then echo
if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}

//selecting database
mysqli_select_db($con,'tourism user data');

//when user enters some information we access it my its name,  it gets stored in the given variable
$User = $_POST['User'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comment= $_POST['Comment'];

//firing query
$query = "insert into user_info_data (User,Email,Mobile,Comment)
values ('$User','$Email','$Mobile','$Comment')";
echo "$query";
mysqli_query($con, $query );

//when query once fired redirect to this page
header('location:index.php');


?>