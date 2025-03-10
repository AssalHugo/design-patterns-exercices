<?php

namespace App;

class MusicBand 
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private array $concerts = [],
        private array $followers = []
    ) {}


    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concert = [
            'date' =>  $date,
            'location' => $location
        ];

        foreach($this->followers as $follower) {
            $follower->notify();
        }
    }

    public function attach($user): void
    {
        $this->followers[] = $user;
    }

    public function detach($user): void
    {
        $this->followers = array_filter($this->followers, function($follower) use ($user) {
            return $follower !== $user;
        });
    }
}