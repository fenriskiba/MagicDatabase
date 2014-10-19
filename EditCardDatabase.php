<?php
$connection=mysqli_connect("localhost","gic1","databaseclass","DatabaseManagement");

$result = mysqli_query($connection, "UPDATE MagicCards
                                        SET CardName='".$_POST["cardname"]."',
                                            ManaCost='".$_POST["manacost"]."',
                                            Types='".$_POST["types"]."',
                                            CardText='".$_POST["cardtext"]."',
                                            CreaturePower=".$_POST["power"].",
                                            CreatureToughness=".$_POST["toughness"].",
                                            PlaneswalkerLoyalty=".$_POST["loyalty"]."
                                      WHERE CardName='".$_POST["originalcardname"]."'
                                        AND ManaCost='".$_POST["originalmanacost"]."'
                                        AND Types='".$_POST["originaltypes"]."'
                                        AND CardText='".$_POST["originalcardtext"]."'
                                        AND CreaturePower=".$_POST["originalpower"]."
                                        AND CreatureToughness=".$_POST["originaltoughness"]."
                                        AND PlaneswalkerLoyalty=".$_POST["originalloyalty"]);
                                        
mysqli_close($connection);

header('Location: CardEdit.php');
?>
