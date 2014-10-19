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
    header('Location: CardAdd.php');
}
?>
