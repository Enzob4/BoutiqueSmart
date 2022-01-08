<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    use HasFactory;

    private int $id;
    private string $nom, $fabricant, $taille, $type_reseau, $systeme, $connectique, $autonomie, $caracteristiques;

}
