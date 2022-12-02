<?php

Class User
{
    private string $name;
    private int $age;
    private string $email;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }
    private function setName(string $name)
    {
        $this->name = $name;
    }

    private function setAge(int $age)
    {
        $this->age = $age;
    }
    public function __call(string $method, array $arguments)
    {
        if (!method_exists($this, $method)){
            throw new Exception("Method exists");
        }
        call_user_func_array(array($this, $method), $arguments);
    }
    public function getAll()
    {
        return $this->name . $this->age;
    }
}

try{
    $test = new User('Oleksandr', 23);
    $test1 = $test->getAll();

    $test1 = $test->setEmail();
    echo $test1;
}catch (Exception $e){
    echo '<pre>' . print_r($e->getMessage(), true) . '<pre>';
    die();
}

