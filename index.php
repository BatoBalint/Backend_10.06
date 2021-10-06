<!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yoooo</title>
  </head>
  <style>
    body {
      font-family: arial;
    }

    .card {
      display: inline-block;
      margin: -2px;
      padding: 20px;
      border: 0px;
    }
  </style>
  <body>
    <div>
        <?php
        $lancia = new car();
        $lancia->brand = "lancia";
        $lancia->modell = "2000 berlina";
        $lancia->bgcolor = "#EEE";
        $lancia->pistons = "4";
        $lancia->cc = "1991";
        $lancia->hp = "115";
        $lancia->topSpeed = "175";
        $lancia->fuelEconomy = "10,7";
        $lancia->createCard();

        $alfa = new car();
        $alfa->brand = "alfa";
        $alfa->modell = "2000 spider veloce";
        $alfa->bgcolor = "#EED";
        $alfa->pistons = "4";
        $alfa->cc = "1962";
        $alfa->hp = "133";
        $alfa->topSpeed = "195";
        $alfa->fuelEconomy = "11,9";
        $alfa->createCard();

        ?>
    </div>
    <?php

     ?>
  </body>
  <?php
    class car {
      public $brand = "";
      public $modell = "";
      public $pistons = "";
      public $cc = "";
      public $hp = "";
      public $topSpeed = "";
      public $fuelEconomy = "";
      public $cardbg = "";

      public function createCard() {
        echo "<div class=\"card\" style=\"background-color: $this->bgcolor\">";

        echo "<h2 style=\"text-transform: uppercase\">$this->brand</h2>";
        echo "<h2 style=\"text-transform: uppercase\">$this->modell</h2>";

        echo "<div style=\"text-align: center\">";

        echo "<p>Hengerek szama: $this->pistons</p>";
        echo "<p>Hengerek terfogata: $this->cc cm<sup>3</sup></p>";
        echo "<p>Teljesitmeny: $this->hp</p>";
        echo "<p>Legnangyobb sebesseg: $this->topSpeed</p>";
        echo "<p>Fogyasztas: $this->fuelEconomy</p>";

        echo "</div>";

        echo "</div>";
      }
    }
  ?>
</html>
