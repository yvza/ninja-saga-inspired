<?php
require_once('./characterClass.php');
require_once('./enemyTurn.php');

// make user interaction, input name
// init player
echo "Input Name: ";
$name = fgets(STDIN);
$player = new Character($name);
echo "Welcome! ".$player->getRole();

// init enemy
$enemy = new Character('enemy');

// run
while($player->getCurrentHp() > 0 && $enemy->getCurrentHp() > 0) {
  
  //display my hp + enemy
  //choose one between attack() and heal()
  echo "\n";
  echo "+------------------------- \n";
  echo "| Your current hp : ".$player->getCurrentHp()."\n";
  echo "| Enemy current hp : ".$enemy->getCurrentHp()."\n";
  echo "+------------------------- \n";
  echo "Choose one : \n";
  echo "1. Attack \n";
  echo "2. Heal \n";
  echo "3. Exit Game \n";
  echo "1, 2 or 3 : ";
  $option = fgets(STDIN);
  echo "\n";

  $random = rand(20, 40);

  switch($option) {
    case 1:
      $randomBaseAttack = $random;
      echo "You hit enemy -".$randomBaseAttack."\n";
      $enemy->attack($randomBaseAttack);

      // automated enemy action
      $randomizeAction = $random;
      enemyTurn($randomizeAction, $player, $enemy);
    break;

    case 2:
      $randomBaseHeal = rand(20, 40);
      echo "Healing yourself +".$randomBaseHeal."\n";
      $player->heal($randomBaseHeal);

      // automated enemy action
      $randomizeAction = rand(1,2);
      enemyTurn($randomizeAction, $player, $enemy);
    break;

    case 3:
      echo "Ok, bye!\n\n";
      exit;

    default:
      echo "gak ada pilihan itu ngap :)) \n\n";
    break;
  }
}

if($player->getCurrentHp() <= 0 || $enemy->getCurrentHp() <= 0) {
  if ($player->getCurrentHp() > $enemy->getCurrentHp()) {
    echo "\nYou Win!\n\n";
  } else {
    echo "\nEnemy Win!\n\n";
  }
}