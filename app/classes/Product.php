<?php

class Product {
    private $id;
    private $name;
    private $price;
    private $image;

    function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getImage() {
        return $this->image;
    }

    // function printPrice() {
    //     $lang = 'en';
    //     if (isset($_COOKIE['lang'])) {
    //         $lang = $_COOKIE['lang'];
    //     }

    //     $price = $this->price . ' ';

    //     switch($lang) {
    //         case 'en': 
    //             $price = $price . '$';
    //             break;
    //         case 'ro':
    //             $price = $price . 'RON';
    //             break;
    //         default:
    //             $price = $price . '$';
    //     }

    //     return $price;
    // }
}