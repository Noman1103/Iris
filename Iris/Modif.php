<?php
    $id = $_GET["id"];
    $id1 = mysqli_connect("localhost","root","","stock");
    $req = "select * from info where id = $id";
    $res = mysqli_query($id1, $req);
    $ligne = mysqli_fetch_assoc($res);
    $type = $ligne["type"];
    $stock4 = $ligne["stock4"];
    $stock1 = $ligne["stock1"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif</title>
    <link rel="stylesheet" href="styleInfo.css">
</head>
<body>
    <h1>Modifications de l'artcile <?=$type?></h1>
    <form action="Modif2.php" method="post" class="modif">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type=text name="stock4" value="<?=$stock4?>" placeholder="Stock 4"> <br> <br>
        <input type=text name="stock1" value="<?=$stock1?>" placeholder="Stock -1"> <br> <br>
        <input type="submit" value="MODIFIER">
    </form>
</body>
</html>