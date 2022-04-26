<?php
function enemyTurn($action, $player, $enemy) {
  switch($action) {
    case 1: //attack
      $randomBaseAttack = rand(20, 40);
      echo "Enemy hit you -".$randomBaseAttack."\n";
      $player->attack($randomBaseAttack);
    break;
    
    case 2: //heal
      $randomBaseHeal = rand(20, 40);
      echo "Enemy Healing +".$randomBaseHeal."\n";
      $enemy->heal($randomBaseHeal);
    break;
  }
}
?>
