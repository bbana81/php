<?php
class Staff
{
    public $name;
    public $age;

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！";
        } else {
            echo "こんにちは、{$this->name}です！","\n";
        }
    }
}
