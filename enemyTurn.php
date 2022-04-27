<?php
function enemyTurn($action, $player, $enemy) {
  $randomValue = rand(20, 40);

  switch($action) {
    case 1: //attack
      $randomBaseAttack = $randomValue;
      echo "Enemy hit you -".$randomBaseAttack."\n";
      $player->attack($randomBaseAttack);
    break;
    
    case 2: //heal
      $randomBaseHeal = $randomValue;
      echo "Enemy Healing +".$randomBaseHeal."\n";
      $enemy->heal($randomBaseHeal);
    break;
  }
}
?>
