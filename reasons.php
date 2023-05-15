<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="reasons.css">
    <title>Form Pershkrimi</title>
</head>
<body>

<?php

$msg3 = "";
$msg4 = "";

if(isset($_POST['submit1'])){

    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $title3 = $_POST['title3'];

    $pershkrim_pershkrim1 = $_POST['sub_title_1'];
    $pershkrim_pershkrim2 = $_POST['sub_title_2'];
    $pershkrim_pershkrim3 = $_POST['sub_title_3'];


    $databaze1 = mysqli_connect("localhost","root","","projekt");

    $query1 = "INSERT INTO world( main_title_1, main_title_2, main_title_3, sub_title_1, sub_title_2, sub_title_3 ) VALUES ('$title1','$title2','$title3','$pershkrim_pershkrim1','$pershkrim_pershkrim2','$pershkrim_pershkrim3')";

    $rezultat1 = mysqli_query($databaze1,$query1);

    if($rezultat1){

        $msg3 = "Data succesfully updated!";
    }

    else{

        $msg4 ="The update went wrong!";
    }

}


?>

<?php include 'dashboard_projekt.php'?>

<form action="reasons.php" method="POST" enctype="multipart/form-data" class="form">

<label for="title">Titles: </label>
<input type="text" name="title1" id="title1" require class="form-control" placeholder="Input the first Title"><br>
<input type="text" name="title2" id="title2" require class="form-control" placeholder="Input the second Title"><br>
<input type="text" name="title3" id="title3" require class="form-control" placeholder="Input the third Title"><br>

<label for="subtitle">Sub-Titles: </label>
<input type="text" name="sub_title_1" id="sub_title_1" require class="form-control" placeholder="Input the first Sub-Title"><br>
<input type="text" name="sub_title_2" id="sub_title_2" require class="form-control" placeholder="Input the second Sub-Title"><br>
<input type="text" name="sub_title_3" id="sub_title_3" require class="form-control" placeholder="Input the third Sub-Title"><br>


<button type="submit" name="submit1" class="btn btn-danger">Update Data</button><br><br>
<p style="color: green"><?php echo $msg3 ;?></p>
<p style="color: red"><?php echo $msg4 ;?></p>

</form>

    
</body>
</html>