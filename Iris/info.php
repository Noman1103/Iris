<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Info</title>
    <link rel="stylesheet" href="styleInfo.css">
</head>
<body>
    <div class="tete">
    <h2 class="li">Liste de stock</h2>
        <a href="Page d'accueil.php" class="a"><img src='Retour.png' width='30px'></a>
    </div>
    <table>
        <tr>
            <th>Type</th><th>Détail</th><th>Stock (4e étage)</th><th>Stock (-1)</th><th>Modif</th><th>Supp</th>
        </tr>
    <?php
        $id = mysqli_connect("127.0.0.1", "root", "", "stock");
        $req = "select * from info order by type";
        $resultat = mysqli_query($id, $req);
        while($ligne = mysqli_fetch_assoc($resultat))
        {
            echo"<tr class=info> 
                <td>".$ligne["type"]."</td> 
                <td>".$ligne["detail"]."</td> 
                <td>".$ligne["stock4"]."</td> 
                <td>".$ligne["stock1"]."</td>
                <td><a href='Modif.php?id=".$ligne["id"]."'><img src='Modif.png' width='20px'></a></td>
                <td><a href='Supp.php?id=".$ligne["id"]."'><img src='Supp.png' width='20px'></a></td>
                </tr>";
        }
    ?>  
    </table> <br><br>
    <div class="form">
    <h2>Nouveau article en stock</h2>
    <form action="nouv.php" method="post">
        Article   <input type="text" name="type"> <br><br> Détail <input type="text" name="detail"><br> <br>
        Stock <input type="text" name="stock4" placeholder="Stock au 4e"> 
        <input type="text" name="stock1" placeholder="Stock au -1"><br><br>
        <input type="submit" value="Envoyer" name="bout">
    </form>
    </div>
</body>
</html>
