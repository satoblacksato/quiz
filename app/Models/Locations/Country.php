<?php


namespace App\Models\Locations;


use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    
    protected $fillable = [
        'description'
    ];
    
    public function states(){
        return $this->hasMany(State::class);
    }
}