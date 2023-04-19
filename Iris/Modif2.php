<?php
    $id = $_POST["id"];
    $stock4 = $_POST["stock4"];
    $stock1 = $_POST["stock1"];

    $id1 = mysqli_connect("localhost","root","","stock");
    $req = "UPDATE info SET
                stock4 = '$stock4',
                stock1 = '$stock1'
            WHERE id = $id";
    mysqli_query($id1, $req);
    echo "L'article a bien été mises à jour.....";
    header("refresh:2; url=info.php");
?>