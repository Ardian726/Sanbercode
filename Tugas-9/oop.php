<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-8 | Sanbercode</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: Poppins;
        }

        ;
    </style>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    class animal
    {
        public $name;
        public $legs = 4;
        public $blood = "No";

        public function __construct($string)
        {
            $this->name = $string;
        }
    }

    $animal1 = new animal("Shaun");

    echo "Name : $animal1->name <br>";
    echo "Legs : $animal1->legs <br>";
    echo "Blood : $animal1->blood <br>";

    echo "<br>";

    class frog extends animal
    {
        public $name;
        public $legs = 4;
        public $blood = "No";
        public $jump = "Hop Hop";

        public function __construct($string)
        {
            $this->name = $string;
        }
    }

    $animal2 = new frog("Buduk");

    echo "Name : $animal2->name <br>";
    echo "Legs : $animal2->legs <br>";
    echo "Blood : $animal2->blood <br>";
    echo "Jump : $animal2->jump<br>";

    echo "<br>";

    class ape extends animal
    {
        public $name;
        public $legs = 2;
        public $blood = "No";
        public $yell = "Auooo";

        public function __construct($string)
        {
            $this->name = $string;
        }
    }

    $animal3 = new ape("Kera Sakti");

    echo "Name : $animal3->name <br>";
    echo "Legs : $animal3->legs <br>";
    echo "Blood : $animal3->blood <br>";
    echo "Yell : $animal3->yell<br>";

    ?>
</body>

</html>