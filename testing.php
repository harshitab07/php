

class A{
    $a = 1;
    function test(){
        print(this->a)
    }
}

class B extends A{
    $a = 2;
    
    function test(A $test){
        print(this->a)
    }

    function test($arg){
        print(this->a)
    }
}

$ab = new B();

$ab->test($ab);

