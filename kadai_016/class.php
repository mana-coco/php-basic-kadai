<?php
class Food{
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function set_price(int $price){
        $this->price = $price;
    }

    public function show_price(){
        echo $this->price . '<br>';
    }

    public function getPrice(){
        return $this->price;
    }
}

class Animal{
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function set_height(int $height){
        $this->height = $height;
    }

    public function show_height(){
        echo $this->height . '<br>';
    }

    public function getHeight(){
        return $this->height;
    }
}

$food = new Food('potato', 250);
print_r($food);
echo '<br>';

$animal = new Animal('dog', 60, 5000);
print_r($animal);
echo '<br>';

echo $food->getPrice();
echo '<br>';

echo $animal->getHeight();
echo '<br>';
?>