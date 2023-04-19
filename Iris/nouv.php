<?php
if(isset($_POST["bout"])){
    extract($_POST);
    $id=mysqli_connect("localhost","root","","stock");
    $req="insert into info values 
    (null,'$type','$detail','$stock4','$stock1')";
    mysqli_query($id,$req);
    
}
header("refresh:0; url=info.php");
?>