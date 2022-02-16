<?php

class  RailwayHobo extends  Hobo implements SmellBehavior, WiseAdvice, SetFireBehavior

{
    public function drink()
    {
        echo "I drink Vodka and nothing else matter";
    }
    public function begMoney()
    {
        echo "Please give some money I am hungry";
    }
    public function fightWithDogs()
    {
        echo "Hitting dogs with stick";
    }
    public function lootGarbage()
    {
        echo "Searching for bottles and food";
    }
    public  function sellBottles()
    {
        echo "I found so it is property of mine which I am selling ";
    }
    public function smell()
    {
        echo " Fume ";
    }
    public function setFire()
    {
        echo "Unable to set Fire  ";
    }
    public function giveAdvice()
    {
        echo "Baltica 9 is the most important thing in the world";
    }
}