<?php
session_start();
$selectionOne = array("Atomic", "Steamy", "Slutty", "Rusty", "Witless", "Lumpy",
    "Shitty", "Moist", "Chunky", "Lousy", "Bulbous", "Trashy", "Dumbass",
    "Nerdy", "Dotarded", "Crusty", "Brainless", "Moronic", "Idiotic");
$selectionTwo = array("Hole", "Cunt", "Knob", "Bum", "Turd", "Prick", "Bulge",
    "Ass", "Chute", "Shit", "Rod", "Chode", "Fuck", "Wiener", "Jizz",
    "Panty", "Cock", "Dong");
$selectionThree = array("Tease", "Stick", "Sucker", "Vaccum", "General",
    "Gremlin", "Pixie", "Spasm", "Fiend", "Fungus", "Tunnel", "Corporal", 
    "Raider", "Demon", "Buccaneer", "Tyrant", "Juggler", "Magician", "Fiddle");
$randKeys1 = array_rand($selectionOne, 1);
$randKeys2 = array_rand($selectionTwo, 1);
$randKeys3 = array_rand($selectionThree, 1);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insult Generator</title>
        <link rel="stylesheet" href="css/insultGenerator.css" />
    </head>
    <body>
        <p>
            You are just a
            <?php
            echo $selectionOne[$randKeys1] . " " . $selectionTwo[$randKeys2] . "-" . $selectionThree[$randKeys3];
            ?>
        </p>
        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">Another Insult</a>
    </body>
</html>
