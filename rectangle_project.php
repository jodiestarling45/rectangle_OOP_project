<?php


class rectangle_project
{
    var $wight;
    var $height;

    function _construct($Wight, $Height)
    {
        $this->wight = $Wight;
        $this->height = $Height;

    }
    function get_width(){
        return $this->wight;
    }
    function get_height(){
        return $this->height;
    }
    function get_area(){
        echo $this->height*$this->wight;
    }
    function get_per(){
        echo ($this->wight+$this->height)/2;
    }
    function display(){
        echo "chieu dai la : ".$this->height;
        echo "chieu rong la :".$this->wight;
        echo "chu vi la :";
        $this->get_per();
        echo "dien tich la : ";
        $this->get_area();
    }
}
$Rectangle=new rectangle_project();
$Rectangle->_construct(10,20);
$Rectangle->display();