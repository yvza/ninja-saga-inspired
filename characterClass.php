<?php
require_once('./abilityClass.php');

class Character extends Ability{
  protected $role;
  protected $hp = 100;

  public function __construct($role) {
    $this->role = $role;
  }

  public function attack($value) {
    $this->hp -= $value;
    return $this->hp;
  }

  public function heal($value) {
    $this->hp += $value;

    // guard if hp higher than 100
    if ($this->hp > 100) { $this->hp = 100; }
    
    return $this->hp;
  }

  public function getCurrentHp() {
    return $this->hp;
  }

  public function getRole() {
    return $this->role;
  }
}
