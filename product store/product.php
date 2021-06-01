<?php
class product
{
    public $name = "name";
    public $price = 0;
    public $description = "description";
    
    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}