<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $v1=$_POST["v1"];
    $v1=$_POST["v1"];
    $v2=$_POST["v2"];
    $v3=$_POST["v3"];
    $v4=$_POST["v4"];
    $v5=$_POST["v5"];
    $v6=$_POST["v6"];
    $tel=$_POST["tel"];
    $ad=$_POST["adr"];
    $n=$_POST["np"];
    $mo=$_POST["mo"];
    $mysql=mysqli_connect("localhost", "root","","hhhh");
    $req = "INSERT INTO client VALUES ('$n','$tel','$ad',$v1,$v2,$v3,$v4,$v5,$v6,'$mo')";
    mysqli_query($mysql,$req);
    ?>

</body>

</html>