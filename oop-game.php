<?php
class clsPlayer
{
  private $health;
  private $wl;
  private $dps;
  private $armor;
  private $name;

  public function __construct($health, $name, $dps, $wl, $armour)
  {
    $this->health = $health;
    $this->name = $name;
    $this->dps = $dps;
    $this->wl = $wl;
    $this->armor = $armour;
  }

  public function __destruct()
  {
    echo "a";
  }

  public function Info()
  {
    return "Health:$this->health - WantedLevel: $this->wl -Armor: $this->armor<br/>";
  }

  private function healthaftrek($damage)
  {
    $this->health= $this->health - $damage;
  }

  public function Stab()
  {
    $dmg = 25-$this->armor;
    $this->healthaftrek($dmg);
    $this->wlrise(3);
    $this->armordown(5);
  }

  public function shoot()
  {
    $dmg = 50-$this->armor;
    $this->healthaftrek($dmg);
    $this->wlrise(5);
    $this->armordown(10);
  }

  public function Vitality()
  {
    $this->healthaftrek($this->health);
  }

  public function wlrise($wantedlvl)
  {
    if ($wantedlvl<=10) {
      $this->wl=$this->wl+$wantedlvl;
    }
    else {
      return false;
    }
  }

  public function wllower($wantedlvl)
  {
    $wantedlvl=$wantedlvl-1;
  }

  public function armorup()
  {
    $this->armor = $this->armor+10;
  }

  public function armordown($admg)
  {
    $this->armor= $this->armor-$admg;
  }

  private function areWeHuman()
  {
    if ($this->health > 0) {
      return true;
      echo $game-> Info();
    }
    else {
      return false;
      echo "WASTED";

    }
  }
}
$game= new clsPlayer(100,"ezio",10,0,0);
echo $game-> Info();
$game->armorup();
$game->Stab();
echo $game-> Info();


?>
<DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  </body>
  </html>
