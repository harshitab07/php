<?php
function fibonacci(int $n):array {
    $ans = array(0, 1);

    for ($i=2; $i<$n; $i++) {
        $ans[$i] = $ans[$i-2] + $ans[$i-1];
    }

    return $ans;
}

$fs = fibonacci(6);
foreach($fs as $f) {
    echo " ".$f;
}
?>


<!-- using class as argument type in function -->
<?php
class Person {
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

}

function displayInfo(Person $obj) {
    echo "Name: ".$obj->name;
    echo "\nAge: ".$obj->age;
    echo "\nGender: ".$obj->gender;
}

$person = new Person("Mike", 20, "Male");
displayInfo($person);

?>
