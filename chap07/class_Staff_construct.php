<?php

Class Staff{

    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function hello(){
        if (is_null($this->name)) {
            echo "こんにちは！";
        } else {
            echo "こんにちは、{$this->name}です！","\n";
        }
    }
}
    $hana = new Staff("花", 21);
    $taro = new Staff("太郎", 35);

    $hana->hello();
    $taro->hello();
?>