<?php
if ($_POST['Search'])
{
    $data = array('cardname'=>$_POST['cardname'],
              'manacost'=>$_POST['manacost'],
              'types'=>$_POST['types'],
              'cardtext'=>$_POST['cardtext'],
              'power'=>$_POST['power'],
              'toughness'=>$_POST['toughness'],
              'loyalty'=>$_POST['loyalty']);

    header('Location: MagicPage.php?'.http_build_query($data));
}
else if ($_POST['Add'])
{
    $connection=mysqli_connect("localhost","gic1","databaseclass","DatabaseManagement");

    $result = mysqli_query($connection, "INSERT INTO MagicCards
                                         VALUES ('".$_POST['cardname']."',
                                                 '".$_POST['manacost']."',
                                                 '".$_POST['types']."',
                                                 '".$_POST['cardtext']."',
                                                 ".$_POST['power'].",
                                                 ".$_POST['toughness'].",
                                                 ".$_POST['loyalty'].");");
    mysqli_close($connection);

    header('Location: CardAdd.php');
}
?>
