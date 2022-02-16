<?php

class BoxHobo implements SmellBehavior,WiseAdvice,SetFireBehavior
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
        echo "Hitting them with stick";
    }
    public function lootGarbage()
    {
        echo "Searching for bottles and food";
    }
    public  function sellBottles()
    {
        echo "I wound so it is property of mine which I am selling ";
    }
    public function smell()
    {
        echo " Grass smell";
    }
    public function setFire()
    {
        echo "Setting fire by flint ";
    }
    public function giveAdvice()
    {
        echo "Choose boxes from refrigerator they are most comfortable  ";
    }
}