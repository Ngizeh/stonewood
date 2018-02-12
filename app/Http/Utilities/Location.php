<?php

namespace App\Http\Utilities;

class Location
{
    protected static $location = array(
    "Bahati, Nairobi",
    "Buruburu, Nairobi",
    "Dagoretti, Nairobi",
    "Dandora, Nairobi",
    "Eastleigh, Nairobi",
    "Embakasi, Nairobi",
    "Gatwekera, Nairobi",
    "Gigiri,Nairobi",
    "Highridge, Nairobi",
    "Jericho, Nairobi",
    "Kambi Muru, Nairobi",
    "Kangemi, Nairobi",
    "Karen, Nairobi",
    "Kariobangi, Nairobi",
    "Kasarani,Nairobi",
    "Kawangware,Nairobi",
    "Kiambiu, Nairobi",
    "Kibera,Nairobi",
    "Kichinjio,Nairobi",
    "Kilimani, Nairobi",
    "Kileleshwa, Nairobi",
    "Kisumu Ndogo,Nairobi",
    "Kitisuru,Nairobi",
    "Laini Saba,Nairobi",
    "Lang'ata,Nairobi",
    "Lavington, Nairobi",
    "Lindi, Nairobi",
    "Lucky Summer Estate,Nairobi",
    "Madaraka Estate, Nairobi",
    "Makongeni,Nairobi",
    "Mashimoni,Nairobi",
    "Mathare Valley,Nairobi",
    "Matopeni,Nairobi",
    "Mugumoini,Nairobi",
    "Nyari,Nairobi",
    "Pangani, Nairobi",
    "Parklands, Nairobi",
    "Peponi, Nairobi",
    "Pumwani,Nairobi",
    "Raila, Nairobi",
    "Runda, Nairobi",
    "Sarang'ombe, Nairobi",
    "Shilanga,Nairobi",
    "Siranga,Nairobi",
    "South B, Nairobi",
    "South C, Nairobi",
    "Soweto East,Nairobi",
    "Soweto West,Nairobi",
    "Syokimau,Nairobi",
    "Uthiru,Nairobi",
    "Westlands, Nairobi"
    );

    public static function all()
    {
      return static::$location;
    }
}