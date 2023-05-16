<?php

class Animal{
    public $nama;
    public $jenis;
    

    public function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;  

        
    }
    public function getInfo(){
        echo 'Hewan ini adalah '.$this->nama.' jenis '.$this->jenis ;
    }

    
}

class Cat extends Animal {
    public $nama;
    public $jenis;
    public $sifat;
    public $hidup;
    public $makanan;

    public function __construct($nama){
        
        echo 'Hewan ini adalah '.$this->nama = $nama;
        echo ' jenis ' .$this->jenis = ' Kucing ';
        
    }

    public function getInfo(){
        $this->sifat = ' suka bermain dan bersih';
        $this->hidup = ' Darat';
        $this->makanan = ' Ikan Asin';
        return $this->jenis." adalah hewan yang ".$this->sifat.". Tempat Hidupnya yaitu di ".$this->hidup.". Makanan Kesukaannya yaitu ".$this->makanan;
        }

}

class Dog extends Animal{
    public $nama;
    public $jenis;
    public $sifat;
    public $hidup;
    public $makanan;


    public function __construct($nama){
        echo 'Hewan ini adalah '.$this->nama = $nama;
        echo ' jenis ' .$this->jenis = ' Anjing ';

    
    }
    public function getInfo(){
        $this->sifat = ' setia dan cerdas';
        $this->hidup = ' Darat';
        $this->makanan = ' Daging';
        return $this->jenis." adalah hewan yang ".$this->sifat.". Tempat Hidupnya yaitu di ".$this->hidup.". Makanan Kesukaannya yaitu ".$this->makanan;
    }
}


$animal = new Animal(' Harimau ', ' Karnivora ');
echo $animal->getInfo()."<br>";

$cat = new Cat('Kitty');
echo $cat->getInfo()."<br>";

$dog = new Dog('Buddy');
echo $dog->getInfo()."<br>";





