<?php
$user = $_COOKIE["textEditUser"];

$connection=mysqli_connect("db1.cs.uakron.edu","gic1","carroll_1","gic1_isp2013");

$highlight=$_POST["syntax"];

$tabSizeRAW=$_POST["tabsize"];
$tabSize=4;
if($tabSizeRAW=="4 Spaces"){$tabSize=4;}
else{$tabSize=8;}

$tabSpaces=$_POST["spaces"];
if($tabSpaces=="Yes"){$tabSpaces="Y";}
else{$tabSpaces="N";}

mysqli_query($connection, "UPDATE CustSettings
                                SET highlighting='".$highlight."',
                                tabSize='".$tabSize."',
                                tabSpaces='".$tabSpaces."'
                                WHERE userName='".$user."'");

mysqli_close($conneciton);

header ("location: editor.php");

?>
