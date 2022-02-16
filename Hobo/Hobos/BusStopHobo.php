<?php

class BusStopHobo implements SmellBehavior,WiseAdvice,SetFireBehavior
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
        echo " Fuel perfume ";
    }
    public function setFire()
    {
        echo "Setting fire by matches ";
    }
    public function giveAdvice()
    {
        echo "People at 6 am will never help even if you are Billionaire";
    }
}