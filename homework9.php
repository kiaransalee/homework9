Инкапсуляция - это принцип ООП программирования, который позволяет описать все свойства объекта в одном и том же месте.
Плюсы объектов - можно сокращать время и не писать кучу одинакового кода, просто наследуя какие-то характеристики объекта от класса, а так же повышается безопасность.
Минусы - при неграмотном использовании можно излишне утяжелить код, если писать свой класс для какой-то простой задачи,а так же это сложнее для понимания новичками.

<?php
class Car 
{
   private $price;
   public $color;
   public $name;
   
   function PublicPrice($price) {
   return $this->price * 1.5;
   }
   
   function SetName($name) {
   $this->name=$name;
   }
   
   function SetPrice($price) {
   $this->price=$price;
   }
   
   function SetColor($color) {
   $this->color=$color;
   }
}

$car = new Car();
$car->name='lexus';    
$car->PublicPrice(); 
$car->color;


$car2 = new Car();
$car2 ->color='black';
$car2->SetName();
$car2->PublicPrice;



class TV
{
   public $diagonal;
   public $price;
   public $model;
   
   function SetPrice($price) {
   $this->price=$price;
   }
   
   function SetDiagonal($diagonal) {
   $this->diagonal=$diagonal;
   }
   
   function SetModel($model) {
   $this->model=$model;
   }
   
 }

$TV1= new TV();
$TV1-> price='50000';
$TV1-> SetDiagonal();
$TV1-> SetModel();

$TV2= new TV();   
$TV2-> price='10000';
$TV2-> diagonal=''27"';
$TV2-> SetModel();
   
   
   
class Pen
{
   private $color;
   private $price;
   private $discount;
   
   function GetColor($color) {
   $this->color=$color;
   }

   function GetPrice($price)  {
   $this->price=$price;
   }
   
   function GetDiscount($price) {
   $this->price = ($this->price - ((price*10)/100);
   }
}   

$pen = new Pen();
$pen-> GetColor();
$pen-> GetDiscount();

$pen2 = new Pen();
$pen2->GetPrice();
$pen2->color='black';  
   
class Duck
{
   public color;
   public price;
   
   function MakeSound {
   echo 'Кря!';
   } 
}

$duck = new Duck ();
$duck->color='white';
$duck->$price;

$duck2= new Duck();
$duck2-> MakeSound();

   
class Product 
{
    public $type;
    public $name;
    public $description;
    public $price;   

    function printProduct()
    {
        echo "$this->type \"$this->name\". Описание: $this->description. Цена: $this->price";
    }
}

$product = new Product();
$product->printProduct();

$product2= new Product();
$product2->name='Macbook Pro';
$product2->$price;
