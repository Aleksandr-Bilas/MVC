<?php
trait Trait1
{
    public function test(){
        return 1;
    }
}

trait Trait2
{
    public function test(){
        return 2;
    }
}

trait Trait3
{
    public function test(){
        return 3;
    }
}


Class Test
{
    use Trait1, Trait2, Trait3
    {
        Trait1::test insteadof Trait2;
        Trait1::test insteadof Trait3;
        Trait2::test as test2;
        Trait3::test as test3;
    }

//   public function setSum(int $test1, $test2, $test3)
//   {
//       $this->test = $test1; $this->test2 = $test2; $this->test3 = $test3;
//   }
    public function getSum()
    {
        return  $this->test() + $this->test2() + $this->test3();
    }
}

$test = new Test();
echo $test->test();
echo $test->test2();
echo $test->test3() . '<br>';
echo $test->getSum();