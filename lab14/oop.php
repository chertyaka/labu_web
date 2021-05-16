<?php

//------------ класи з наслідуванням ---------------- 

    //  class Animal{
    //     protected $name;
    //     protected $color;
    //     protected $weight;
    //     protected $type;

    //     function sayHello(){
    //         echo "Привіт, я містичний ".$this->type." мене звати ".$this->name.". Я маю "
    //         .$this->color." колір і вагу ".$this->weight." кг<br>";
    //     }

    // }    

    // class Cat extends Animal{
    
    //     function __construct (string $name, string $color , int $weight , string $type){
    //         $this->name = $name; 
    //         $this->color = $color;
    //         $this->weight = $weight;
    //         $this->type = $type;
    //     }

    //     function setData (string $name, string $color, int $weight){
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }
    //     function getData (){
    //         echo $this->name."<br>".$this->color."<br>".$this->weight;
    //     }
        
    // }

    // class Procyon extends Animal{
    //     function __construct (string $name , string $color , int $weight , string $type){
    //         $this->name = $name; 
    //         $this->color = $color;
    //         $this->weight = $weight;
    //         $this->type = $type;
    //     }

    //     function setData (string $name, string $color, int $weight){
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }
    //     function getData (){
    //         echo $this->name."<br>".$this->color."<br>".$this->weight;
    //     }    

    // }

// ----------------- інтерфейс --------------

    // interface Animal{
        
    //     public function setData(string $name, string $color, int $weight);
    //     public function getData();
    //     public function sayHello();
    // }    

    // class Cat implements Animal{
    
    //     private $name;
    //     private $color;
    //     private $weight;
    //     private $type;
        
    //     function __construct (string $name , string $color , int $weight, string $type){
    //         $this->name = $name; 
    //         $this->color = $color;
    //         $this->weight = $weight;
    //         $this->type = $type;
    //     }

    //     public function setData (string $name, string $color, int $weight){
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }
    //     public function getData (){
    //         echo $this->name."<br>".$this->color."<br>".$this->weight;
    //     }
    //     public function sayHello(){
    //         echo "Привіт, я містичний ".$this->type." мене звати ".$this->name.". Я маю "
    //         .$this->color." колір і вагу ".$this->weight." кг<br>";
    //     }
    // }

    // class Procyon implements Animal{

    //     private $name;
    //     private $color;
    //     private $weight;
    //     private $type;

    //     function __construct (string $name , string $color, int $weight, string $type){
    //         $this->name = $name; 
    //         $this->color = $color;
    //         $this->weight = $weight;
    //         $this->type = $type;
    //     }

    //     public function setData (string $name, string $color, int $weight){
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }
    //     public function getData (){
    //         echo $this->name."<br>".$this->color."<br>".$this->weight;
    //     }    
    //     public function sayHello(){
    //         echo "Привіт, я містичний ".$this->type." мене звати ".$this->name.". Я маю "
    //         .$this->color." колір і вагу ".$this->weight." кг<br>";
    //     }
    // }

// ------------------- трейти ----------------
// -------- абстрактні класи ----------
// ------- статичні властивості -------


   

    
    class Animal{
            protected $name;
            protected $color;
            protected $weight;
            protected $type;

            function sayHello(){
                echo "Привіт, я містичний ".$this->type." мене звати ".$this->name.". Я маю "
                .$this->color." колір і вагу ".$this->weight." кг<br>";
            }

        }    

        class Cat extends Animal{
        
            function __construct (string $name, string $color , int $weight , string $type){
                $this->name = $name; 
                $this->color = $color;
                $this->weight = $weight;
                $this->type = $type;
            }

            function setData (string $name, string $color, int $weight){
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }
            function getData (){
                echo $this->name."<br>".$this->color."<br>".$this->weight;
            }

            public static function sayBye(){
                echo "Ну все мені пора іти<br>";
            }
            
        }

        class Procyon extends Animal{
                function __construct (string $name , string $color , int $weight , string $type){
                    $this->name = $name; 
                    $this->color = $color;
                    $this->weight = $weight;
                    $this->type = $type;
                }
        
                function setData (string $name, string $color, int $weight){
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
                }
                function getData (){
                    echo $this->name."<br>".$this->color."<br>".$this->weight;
                }    
        
            }
        
// -------- cats -------

$cat1 = new Cat('Мурка', 'рижий', 3, 'кіт');
$cat1->setData("Барсик", "сірий", 2);
$cat1->sayHello();
Cat::sayBye();


// -------- procyon -------

$proc= new Procyon('Паку','коричневий', 4, 'ракун');
$proc->sayHello();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>