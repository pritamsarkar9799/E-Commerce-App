
<?php 
$name=$_POST['t1'];
$email=$_POST['t2'];
$address=$_POST['t3'];
$phoneno=$_POST['t4'];
$username=$_POST['t5'];
$password=$_POST['t6'];

// echo $name."<br>";
//  echo $password;

    $con=mysqli_connect("localhost","root","","minorproject");

    $sql = "insert into signup values('$name','$email','$address', $phoneno,'$username','$password')";

    $r = mysqli_query($con,$sql);
        if($r>0)
        {   
            //echo $r." Sign up successful";
            header ('location:index.php');
        }
        else
        {
            echo "<br>Unsuccessful";
        }

?>