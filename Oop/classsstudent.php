<?php
class student{
    public $name;
    public $roll;

    function setname($name){
            $this ->name = $name;
    }
    function getname(){
        return $this->name;
    }
    function setRoll($roll){
         $this->roll = $roll;
    }
    function getRoll(){
        return $this->roll;
    }
}
    
?>