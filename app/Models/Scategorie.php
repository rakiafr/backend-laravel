<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        "nomscategorie","imagescategorie","categorieId"];

        public function categorie(){
            return $this->belongsTo(Categorie::class,"categorieId");//scategorie belongsto categorie
        }
        public function article(){
            return $this->hasMany(article::class,'scategorieID');
        }
}
