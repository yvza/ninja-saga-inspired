<?php
abstract class Ability {
  abstract public function attack($value);
  abstract public function heal($value);
}
