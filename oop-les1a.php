<?php
  //class definieren
  class clsCalc{
    public function som($pX, $pY=1){
      return $pX +$pY;
    }
  }
  $oSom=new clsCalc();
  $var = $oSom -> som(10);
 ?>

<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php echo $var; ?>
  </body>
</html>
