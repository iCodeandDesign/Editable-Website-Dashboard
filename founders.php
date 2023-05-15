<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="founders.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php

$msg1 = "";
$msg2 = "";

if(isset($_POST['submit'])){

    $emri1 = $_POST['emri1'];
    $emri2 = $_POST['emri2'];
    $emri3 = $_POST['emri3'];
    $pershkrim1 = $_POST['pic-sub-title_1'];
    $pershkrim2 = $_POST['pic-sub-title_2'];
    $pershkrim3 = $_POST['pic-sub-title_3'];

    $filename1 = $_FILES['image1']['name'];
    $filename2 = $_FILES['image2']['name'];
    $filename3 = $_FILES['image3']['name'];
    $tmpname1 = $_FILES['image1']['tmp_name'];
    $tmpname2 = $_FILES['image2']['tmp_name'];
    $tmpname3 = $_FILES['image3']['tmp_name'];
    $image1 = "image/".$filename1;
    $image2 = "image/".$filename2;
    $image3 = "image/".$filename3;


    $databaze = mysqli_connect("localhost","root","","projekt");

    $query = "INSERT INTO world( name_1, name_2, name_3, pic_1, pic_2, pic_3 , pic_sub_title_1 , pic_sub_title_2 , pic_sub_title_3) VALUES ('$emri1','$emri2','$emri3','$filename1','$filename2','$filename3','$pershkrim1','$pershkrim2','$pershkrim3')";

    $rezultat = mysqli_query($databaze,$query);

    if(move_uploaded_file($tmpname1 , $image1)){

        $msg1 = "Data succesfully updated!";
    }

    else{

        $msg2 ="The update went wrong!";
    }

    if(move_uploaded_file($tmpname2 , $image2)){

        $msg1 = "Data succesfully updated!";
    }

    else{

        $msg2 ="The update went wrong!";
    }

    if(move_uploaded_file($tmpname3 , $image3)){

        $msg1 = "Data succesfully updated!";
    }

    else{

        $msg2 ="The update went wrong!";
    }
}



?>


<?php include 'dashboard_projekt.php'?>

<form action="founders.php" method="POST" enctype="multipart/form-data" class="form">

<label for="emri">Names: </label>
<input type="text" name="emri1" id="emri1" require class="form-control" placeholder="Input the first name"><br>
<input type="text" name="emri2" id="emri2" require class="form-control" placeholder="Input the second name"><br>
<input type="text" name="emri3" id="emri3" require class="form-control" placeholder="Input the third name"><br>

<input type="file" name="image1" class="form-control"><br>
<input type="file" name="image2" class="form-control"><br>
<input type="file" name="image3" class="form-control"><br>


<label for="pershkrimi1">Descripton of Picture 1: </label>
<textarea type="text" name="pic-sub-title_1" id="pershkrimi1" require class="form-control"></textarea><br>
<label for="pershkrimi2">Descripton of Picture 2: </label>
<textarea type="text" name="pic-sub-title_2" id="pershkrimi2" require class="form-control"></textarea><br>
<label for="pershkrimi3">Descripton of Picture 3:</label>
<textarea type="text" name="pic-sub-title_3" id="pershkrimi3" require class="form-control"></textarea><br>


<button type="submit" name="submit" class="btn btn-danger">Update Data</button><br><br>
<p style="color: green"><?php echo $msg1 ;?></p>
<p style="color: red"><?php echo $msg2 ;?></p>

</form>

    
</body>
</html>