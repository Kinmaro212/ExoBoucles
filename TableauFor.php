<?php
$jeu[0]= 'Mario';
$jeu[3]= 'Les sims';
$jeu[1]= 'Zelda';
$jeu[2]= 'Call of duty Black Ops 6';
$jeu[4]= 'Dragon ball Z Sparking 0';
$jeu[5]= 'Rocket League';

$nbJeux = count($jeu);

// echo $nbJeux;

for($i=0; $i<$nbJeux; $i++){
    echo $jeu[$i].'<br>';
}