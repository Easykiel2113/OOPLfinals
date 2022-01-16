
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
Interface  Patient {
	public function GeneralInfo();

}

class generalinfo {
	public $name;
	public $age;
	public $gender;
	public function __construct($name,$age,$gender,$address) {
		$this -> name = $name;
		$this -> age = $age;
	    $this -> gender = $gender;
		$this -> address = $address;
	   
	}
}
class Status {
    public $status;
    public function __construct($nurse){
        $this -> status = $nurse;
    }
}

class sta extends Status implements Patient{
    function GeneralInfo(){
        echo 'Nurse:  '. $this -> status;
    }
}

class info extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender.' '. ' Address: '. $this -> address ;
	  
	
	}
}
class info1 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '.' Address: '.$this -> address;
	  
	
	}
}
class info2 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '.' Address: '. $this -> address;
	  
	
	}
}
class info3 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'  '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '.' Address: '. $this -> address;
	  
	
	}
}
class info4 extends generalinfo  implements Patient {
	function GeneralInfo() {
		echo 'Name:'. $this -> name .'   '.' Age:'. $this -> age .' '. 'Gender:' . $this -> gender .' '.' Address: '. $this -> address;
	  
	
	}
}



$Info = new info(' Hyvor ',12 ,' male ',' Abucay, Bataan');
echo "Date of consultation:   " . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
$sta = new sta('James batong bakal');
$sta ->GeneralInfo();
echo "<br>";
echo "<br>";
echo "<br>";
$Info = new info1(' Ezekiel ', 13 ,' male ',' Samal, Bataan');
echo "Date of consultation:  " . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
$sta = new sta('Lebron batong bakal');
$sta ->GeneralInfo();


echo "<br>";
echo "<br>";
echo "<br>";
$Info = new info2(' Tyron  ',18,' male ',' Orani, Bataan');
echo "Date of consultation:  " . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
$sta = new sta('Wade batong bakal');
$sta ->GeneralInfo();
echo "<br>";
echo "<br>";
echo "<br>";


$Info = new info3(' Diana rose ', 18,' female ',' Balanga City, Bataan');
echo "Date of consultation:  " . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
$sta = new sta('Wong batong bakal');
$sta ->GeneralInfo();
echo "<br>";
echo "<br>";
echo "<br>";

$Info = new info4(' kei ', 18,' female ',' Limay, Bataan');
echo "Date of consultation:  " . date("m/d/y") . "<br>";
echo "Infomation:". "<br>";
$Info -> GeneralInfo();
echo "<br>";
$sta = new sta('Kyle batong bakal');
$sta ->GeneralInfo();




?>


</body>
</html>
