<?php
if ($_POST['Edit'])
{
    $data = array('cardname'=>$_POST['cardname'],
              'manacost'=>$_POST['manacost'],
              'types'=>$_POST['types'],
              'cardtext'=>$_POST['cardtext'],
              'power'=>$_POST['power'],
              'toughness'=>$_POST['toughness'],
              'loyalty'=>$_POST['loyalty']);

    header('Location: EditCard.php?'.http_build_query($data));
}
else if ($_POST['Delete'])
{
    $connection=mysqli_connect("localhost","gic1","databaseclass","DatabaseManagement");

    $result = mysqli_query($connection, "DELETE FROM MagicCards
                                         WHERE CardName='".$_POST['cardname']."'
                                           AND ManaCost='".$_POST['manacost']."'
                                           AND Types='".$_POST['types']."'
                                           AND CardText='".$_POST['cardtext']."'
                                           AND CreaturePower=".$_POST['power']."
                                           AND CreatureToughness=".$_POST['toughness']."
                                           AND PlaneswalkerLoyalty=".$_POST['loyalty']);
    mysqli_close($connection);

    header('Location: CardDelete.php');
}
?>
