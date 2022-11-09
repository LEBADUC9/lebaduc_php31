<?php
    class Infor{
        var $name;
        var $sex;
        var $birthtday;
        var $country;
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }
    
?>