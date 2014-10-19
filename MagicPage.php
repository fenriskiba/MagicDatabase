<?php
$connection=mysqli_connect("localhost","gic1","databaseclass","DatabaseManagement");

$result = mysqli_query($connection, "SELECT * FROM MagicCards
                                        WHERE CardName LIKE '".$_GET["cardname"]."%'
                                          AND ManaCost='".$_GET["manacost"]."'
                                          AND Types LIKE '%".$_GET["types"]."%'
                                          AND CardText LIKE '%".$_GET["cardtext"]."%'
                                          AND CreaturePower>=".$_GET["power"]."
                                          AND CreatureToughness>=".$_GET["toughness"]."
                                          AND PlaneswalkerLoyalty=".$_GET["loyalty"]);
$cardDetails=mysqli_fetch_array($result);

mysqli_close($connection);
?>

<html lang = "en">
<head>
<meta charset = "utf-8" />
</script>

<title> MAGIC THE GATHERING Card Search
</title>

<!--external style sheet-->
<link rel="stylesheet" type="text/css" href="WTSstyle.css">

<style type = "text/css">
div.banner{

height:135px;

margin-left: auto;
margin-right: auto;
background-color:white;
width:1000px;
}

body{
background-color: grey;
}

div.logo{
background-image: url('Resources/magiclogo.jpg');
background-position: 0px 8px;
margin-left: auto;
margin-right: auto;
height:130px;
background-repeat: no-repeat;
width:420px;
}

div.searchbox{
width: 1000px;
background-color: white;
margin-left: auto;
margin-right: auto;
}

h1.search{
width:1000px;
background-color: darkgrey;
margin-left: auto;
margin-right: auto;
text-align:center;
margin-top: 0px;
margin-bottom: 0px;
}

form.entry{
padding-top:15px;
padding-bottom:20px;
width:190px;
background-color: white;
margin-left: auto;
margin-right: auto;
}

span{
text-align: right;
background-color: blue;
}

div.result{
padding-top:15px;
padding-bottom:20px;
width:500px;
background-color: yellow;
margin-left: auto;
margin-right: auto;
}
</style>
</head>

<!-- starts the body of the page -->
<body id = "body">

<!-- top banner -->
<div class = "banner" id = "banner">
<div class = "logo"></div>
</div>
<br>
<h1 class = "search">
    Card Search
</h1>
<div class = "searchbox" >
<form class = "entry" action="SearchOrAddProcessing.php" method="post">
    Card Name: <div><input type="text" name="cardname"></div>
    <br>
    Mana Cost: <div><input type="text" name="manacost"></div>
    <br>
    Types: <div><input type="text" name="types"></div>
    <br>
    Card Text: <div><input type="text" name="cardtext"></div>
    <br>
    Power (>=): <div><input type="text" name="power"></div>
    <br>
    Toughness (>=): <div><input type="text" name="toughness"></div>
    <br>
    Loyalty: <div><input type="text" name="loyalty"></div>
    <br>
    <input type="submit" value="Search" name="Search">
    <input type="submit" value="Add" name="Add">
</form>
</div>
<br>
<div <?php if(empty($_GET)){ echo "hidden"; } ?>>
<h1 class = "search">
Result
</h1>
<div class = "searchbox" >
<div class = "result" >
    Card Name: <?php echo $cardDetails["CardName"]; ?>
    <br>
    Mana Cost: <?php echo $cardDetails["ManaCost"]; ?>
    <br>
    Types: <?php echo $cardDetails["Types"]; ?>
    <br>
    Card Text: <?php echo $cardDetails["CardText"]; ?>
    <br>
    Power: <?php echo $cardDetails["CreaturePower"]; ?>
    <br>
    Toughness: <?php echo $cardDetails["CreatureToughness"]; ?>
    <br>
    Loyalty: <?php echo $cardDetails["PlaneswalkerLoyalty"]; ?>
    <form action="EditOrDeleteProcessing.php" method="post">
    <div hidden>
        <input type="text" name="cardname" <?php echo "value=\"".$cardDetails["CardName"]."\""; ?>>
        <input type="text" name="manacost" <?php echo "value=\"".$cardDetails["ManaCost"]."\""; ?>>
        <input type="text" name="types" <?php echo "value=\"".$cardDetails["Types"]."\""; ?>>
        <input type="text" name="cardtext" <?php echo "value=\"".$cardDetails["CardText"]."\""; ?>>
        <input type="text" name="power" <?php echo "value=\"".$cardDetails["CreaturePower"]."\""; ?>>
        <input type="text" name="toughness" <?php echo "value=\"".$cardDetails["CreatureToughness"]."\""; ?>>
        <input type="text" name="loyalty" <?php echo "value=\"".$cardDetails["PlaneswalkerLoyalty"]."\""; ?>>
    </div>
    <input type="submit" value="Edit" name="Edit">
    <input type="submit" value="Delete" name="Delete">
    </form>
    
</div>
</div>
</div>

</body>
</html>
