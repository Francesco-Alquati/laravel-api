<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    protected $fillable =['name', 'slug'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

}
