<?php

class TrashHobo implements SmellBehavior, SetFireBehavior, WiseAdvice
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
        echo "I found so it is property of mine which I am selling ";
    }
    public function smell()
    {
        echo " Trash ";
    }
    public function setFire()
    {
        echo "Setting fire by flint ";
    }
    public function giveAdvice()
    {
        echo "Sushi with spoiled fish is the most important thing in the world ";
    }
}