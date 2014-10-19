<!DOCTYPE html>
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
    Edit Card
</h1>
<div class = "searchbox" >
<form class = "entry" >
    Card Name: <div><input type="text" name="cardname" <?php echo "value=\"".$_GET["cardname"]."\""; ?>></div>
    <br>
    Mana Cost: <div><input type="text" name="manacost" <?php echo "value=\"".$_GET["manacost"]."\""; ?>></div>
    <br>
    Types: <div><input type="text" name="types" <?php echo "value=\"".$_GET["types"]."\""; ?>></div>
    <br>
    Card Text: <div><input type="text" name="cardtext" <?php echo "value=\"".$_GET["cardtext"]."\""; ?>></div>
    <br>
    Power: <div><input type="text" name="power" <?php echo "value=\"".$_GET["power"]."\""; ?>></div>
    <br>
    Toughness: <div><input type="text" name="toughness" <?php echo "value=\"".$_GET["toughness"]."\""; ?>></div>
    <br>
    Loyalty: <div><input type="text" name="loyalty" <?php echo "value=\"".$_GET["loyalty"]."\""; ?>></div>
    <br>
    <input type="submit" value="Save">
</form>
</div>

</body>
</html>
