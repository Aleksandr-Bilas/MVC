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
    public function __call(string $email, array $arguments)
    {
        call_user_func_array(
            [$this, 'setEmail'],
            $arguments[0]
        );
        echo $this;
    }
    public function getAll()
    {
        return $this->name . $this->age;
    }
}

try{
    $test = new User('Oleksandr', 23);
    $test1 = $test->getAll();
    echo $test1;
    $test->setEmail();

}catch (Exception $e){
    echo '<pre>' . print_r($e->getMessage(), true) . '<pre>';
    die();
}