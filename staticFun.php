<?php
class Maths {
    public static $PI = 3.14;

    public static function add($a, $b) {
        return $a+$b;
    }

    public static function mul($a, $b) {
        return $a*$b;
    }

    public static function div($a, $b) {
        return $a/$b;
    }

    public static function mod($a, $b) {
        return $a%$b;
    }

    public static function expo($a, $b) {
        return $a ** $b;
    }

    public static function circum($r) {
        return 2 * self::$PI * $r;
    }

}

$add = Maths::add(5,3);
$mul = Maths::mul(6,2);
$expo = Maths::expo(2,3);
$circum = Maths::circum(2);

echo $expo."\n".$circum;

?>