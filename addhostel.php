<?php
include 'core.php';
include 'cstd.php';
if(isset($_SESSION['user_id'])&&isset($_POST['form_name'])&&isset($_POST['form_lane'])&&isset($_POST['form_town'])&&isset($_POST['form_city'])&&isset($_POST['form_district'])&&isset($_POST['form_state'])&&isset($_POST['form_rent'])&&isset($_POST['form_bed'])&&isset($_POST['form_bath'])&&isset($_POST['facility1'])&&isset($_POST['facility2'])){
$id = $_SESSION['user_id'];
$get_name = "SELECT `name` FROM `users` WHERE `id` = '$id'";
$run_get_name = mysqli_query($connection,$get_name);
while($row = mysqli_fetch_assoc($run_get_name)){
    $name = $row['name'];
}

$hostel = $_POST['form_name'];
$hostel = mysqli_real_escape_string($connection,$hostel);
$lane = $_POST['form_lane'];
$lane = mysqli_real_escape_string($connection,$lane);
if(empty($_POST['form_landmark']))
    $land = 'NULL';
else
    $land = $_POST['form_landmark'];
$land = mysqli_real_escape_string($connection,$land);
$town = $_POST['form_town'];
$town = mysqli_real_escape_string($connection,$town);
$city = $_POST['form_city'];
$city = mysqli_real_escape_string($connection,$city);
$district = $_POST['form_district'];
$district = mysqli_real_escape_string($connection,$district);
$state = $_POST['form_state'];
$state = mysqli_real_escape_string($connection,$state);
if(isset($_POST['pg']))
    $pg = 1;
else
    $pg = 0;
if(isset($_POST['boys']))
    $boy = 1;
else
    $boy = 0;
if(isset($_POST['girls']))
    $girl = 1;
else
    $girl = 0;
$rent = $_POST['form_rent'];
$rent = mysqli_real_escape_string($connection,$rent);
$bed = $_POST['form_bed'];
$bed = mysqli_real_escape_string($connection,$bed);
$bathroom = $_POST['form_bath'];
$bathroom=mysqli_real_escape_string($connection,$bathroom);
$facility1 = $_POST['facility1'];
$facility1 = mysqli_real_escape_string($connection,$facility1);
$facility2 = $_POST['facility2'];
$facility2 = mysqli_real_escape_string($connection,$facility2);
$addmore = $_POST['addmore'];
foreach($addmore as $val){
    $facility[] = $val;
}
for($i= 0;$i<13;$i++){
    if(empty($facility[$i])){
        $facility[$i] = 'NULL';
    }
}

$addmore2 = $_POST['addmore2'];
foreach($addmore2 as $val2){
    $rules[] = $val2;
}
for($i= 0;$i<7;$i++){
    if(empty($rules[$i])){
        $rules[$i] = 'NULL';
    }
}

$query = "INSERT INTO `hostel_details` VALUES ('','$id','$name','$hostel','$lane','$land','$town','$city','$district','$state','$pg','$rent','$bed','$bathroom','$facility1','$facility2','$facility[0]','$facility[1]','$facility[2]','$facility[3]','$facility[4]','$facility[5]','$facility[6]','$facility[7]','$facility[8]','$facility[9]','$facility[10]','$facility[11]','$facility[12]','$rules[0]','$rules[1]','$rules[2]','$rules[3]','$rules[4]','$rules[5]','$boy','$girl','1')";
if($query_run  = mysqli_query($connection,$query))
    header('Location:landlord.php');
}else{
    header('Location:hostel.php');
}
?>