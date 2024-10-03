<?php
// src/GreetingGenerator.php
namespace App;

class GreetingGenerator
{
    public function getRandomGreeting(): string
    {
        $greetings = ['Hey', 'Yo', 'Aloha'];
        return $greetings[array_rand($greetings)];
    }
}