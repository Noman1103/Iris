<?php
    $id = $_GET["id"];
    echo "L'article  : $id a été supprimé de la base....";

    $id1 = mysqli_connect("localhost","root","","stock");
    $req = "delete from info where id = $id";
    mysqli_query($id1,$req);
    header("refresh:3; url=info.php");
?>