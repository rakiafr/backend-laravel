<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        "designation","reference","marque","prix","qtestock","imageart","scategorieID"];
        public function scategorie(){
            return $this->belongsTo(scategorie::class,'scategorieID');
        }
     
}
