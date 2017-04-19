<?php
  class clsCalc
  {
    public function clsOptel($zijde)
    {
      return $zijde+$zijde;
    }
    public function clsOpper($zijde)
    {
      return $zijde*$zijde;
    }
    public function clsInhoud($zijde)
    {
      return $zijde*$zijde*$zijde;
    }
  }
  $oSom=new clsCalc();
  $optel = $oSom -> clsOptel(10);
  $inhoud= $oSom -> clsInhoud(10);
  $opper= $oSom -> clsOpper(10);

  $optel1 = $oSom -> clsOptel(13);
  $inhoud1= $oSom -> clsInhoud(13);
  $opper1= $oSom -> clsOpper(13);

  $var = "oppervlakte:".$opper."<br/>".$opper1."<br/>".$inhoud."<br/>".$inhoud1."<br/>".$optel."<br/>".$optel1."<br/>"
 ?>
<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
      echo $var;
     ?>
  </body>
</html>
