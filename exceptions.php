<?php
Class User extends Exception
{

    private int $id;
    private $password;

    public function __construct(int $id, $password)
    {
        $this->setUserData($id, $password);
    }

    public function setUserData(int $id, $password)
    {
        if (strlen($password) <= 8){
            $this->password = $password;
        }else{
            throw new Exception('Password > 8 symbol');
        }
        $this->id = $id;
    }

    public function getUserData()
    {
        return $this->id . '<br>' . $this->password;
    }
}
$user = new User(11, 'qweq');
$user1 = $user->getUserData();
echo $user1;

try{
    $user->setUserData(0, 0);
}catch (Exception $user){
    echo '<pre>' . print_r($user->getMessage(), true) . '<pre>';
}