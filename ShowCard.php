<?php
$connection=mysqli_connect("db1.cs.uakron.edu","gic1","aigh0AhC","DB_gic1");

$cardName=$_POST["cardName"];

$result=mysqli_query($connection, "SELECT * FROM MtgCards
                                        WHERE cardname='".$cardName;."'");

$cardData=mysqli_fetch_array($result);

mysqli_close($connection);
?>

<html lang ="en">
    <head>
        <meta charset="utf-8"/>
        <title>Settings</title>
        <link rel="stylesheet" type="text/css" href="text.css"></link>
    </head>
    <body>
        <table>
            <tr><td>Card Name: </td><td><?php echo $cardData["cardname"]?></td><tr>
            <tr><td>Mana Cost: </td><td><?php echo $cardData["manacost"]?></td><tr>
            <tr><td>Card Types: </td><td><?php echo $cardData["cardtypes"]?></td><tr>
            <tr><td>Card Text: </td><td><?php echo $cardData["cardtext"]?></td><tr>
            <tr><td>Power: </td><td><?php echo $cardData["power"]?></td><tr>
            <tr><td>Toughness: </td><td><?php echo $cardData["toughness"]?></td><tr>
            <tr><td>Loyalty: </td><td><?php echo $cardData["loyalty"]?></td><tr>
            <tr><td>Rarity: </td><td><?php echo $cardData["rarity"]?></td><tr>
        </table>
    </body>
</html>
