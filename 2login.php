<?php
include 'anmeldung.php';
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    $chk="";

    foreach ($education as $chk1)
    {
     $chk.=$chk1.",";   
    }
    $sql="insert into student(name,password,gender,education) values('$name','$password','$gender','$chk')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('</script>";

    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}


?>