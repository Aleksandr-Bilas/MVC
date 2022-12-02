<?php

//require_once __DIR__ . '/exceptions.php';
//require_once __DIR__ . '/traits.php';
//require_once __DIR__ . '/overloading.php';
//
//try {
////    postgresql://[user[:password]@][netloc][:port][/dbname][?param1=value1&...]
//    $pdo = new PDO('pgsql:host=hw-212-db-1;dbname=postgres','root','root');
//    var_dump($pdo);
//}catch (PDOException $exception){
//    echo '<pre>'.print_r($exception->getMessage(), true).'<pre>';
//    die();
//}

class Color
{
    private int $red, $green, $blue;
    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red)->setGreen($green)->setBlue($blue);
    }

    private function setRed(int $red)
    {
        if($red >= 0 && $red <= 255){
            $this->red = $red;
        }else{
            throw new Exception('Change Red');
             }
        return $this;
    }
    public function getRed()
    {
     return $this->red;
    }
    private function setGreen(int $green)
    {
        if ($green >= 0 && $green <= 255) {
            $this->green = $green;
        } else {
            throw new Exception('Change Green');
        }
        return $this;
    }
    public function getGreen()
    {
        return $this->green;
    }
    private function setBlue(int $blue)
    {
        if ($blue >= 0 && $blue <= 255) {
            $this->blue = $blue;
        } else {
            throw new Exception('Change Red');
        }
        return $this;
    }
    public function getBlue()
    {
        return $this->blue;
    }
    public function colorMix(Color $color)
        {
            return ($this->getRed() + $this->getGreen() + $this->getBlue() + $color->getRed() + $color->getGreen() + $color->getBlue()) / 6;
        }
    public function random()
        {
            return new Color(rand(0, 255), rand(0, 255), rand(0, 255));
        }
}

try{
    $color = new Color(200, 200, 200);
    $mixedColor = $color->colorMix(new Color(100, 100, 100));
    echo $mixedColor;
}catch (Exception $exception) {
    echo '<pre>' . print_r($exception->getMessage(), true) . '<pre>';
    die();
}


class RandomColor
{
    public static function random()
    {
        return new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }
}

$r = RandomColor::random();
$random = new RandomColor(0, 0, 0);
$rand = $random->random();
echo '<pre>';
print_r($r);
echo '<pre>';

