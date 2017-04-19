<?php
  class clsPlayer
  {
    public $health;
    public function setHealth($health)
    {
      $this->health = $health;
    }

    private function healthaftrek($damage)
    {
      $this->health= $this->health-$damage;
    }
    public function backStab()
    {
      $this->healthaftrek(25);
    }
    public function shoot()
    {
      $this->healthaftrek(50);
    }

    public function areWeHuman()
    {
      if ($this->health > 0) {
        return true;
      }
      else {
        return false;
      }
    }
  }
  $ezio = new clsPlayer();
  $ezio ->setHealth(100);
  $ezio ->backStab();
  $ezio ->shoot();
  $ezio ->backStab();
  $health = $ezio->health;

 ?>

<html>
  <head>
  </head>
  <body>
    <?php if ($) {
      # code...
    }echo $health; ?>;
  </body>
</html>
