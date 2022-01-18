
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

class Clinic {

    private $name;
    private $age;
    private $gender;
    private $address;
    private $nurse;

    function __construct($name,$age,$gender,$address,$nurse) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
         $this->nurse = $nurse;
    }

    public function info() {
        return "Name: " . $this->name . "<br>". "Age: ". $this->age . "<br>". "Gender: ".$this->gender .
         "<br>"."Address: ".  $this->address . "<br>". "Nurse: " .  $this->nurse ;
    }
}

$patient1 = new Clinic("Ezekiel",20,"Male","Samal, Bataan", "Ms. Joana Dela Cruz");
echo $patient1->info();
echo "<br>";
echo "Date of consultation:  " . date("m/d/y") . "<br>";
echo "<br>";
echo "<br>";
$patient2 = new Clinic("John Mark",21,"Male","Samal, Bataan","Mr. Juan Dela Cruz");
echo $patient2->info();
echo "<br>";
echo "Date of consultation:  " . date("m/d/y") . "<br>";

?>

</body>
</html>
