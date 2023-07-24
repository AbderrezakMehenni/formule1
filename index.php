<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formule 1</title>
</head>

<body>
    <?php

    class Formule1
    {
        private $speed = 0;

        public function drive()
        {
            echo "Vroom vroom à " . $this->speed . " km/h<br>";
        }

        public function shiftGear($increment)
        {
            $this->speed += $increment;
        }
    }

    $myFormule1 = new Formule1();
    $myFormule1->drive();

    $myFormule1->shiftGear(50);
    $myFormule1->drive();

    $myFormule1->shiftGear(30);
    $myFormule1->drive();
    ?>

</body>

</html>