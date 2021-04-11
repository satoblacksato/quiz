<?php


namespace App\Models\Locations;


use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    
    protected $fillable = [
        'description', 'country_id'
    ];
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    
    public function cities(){
        return $this->hasMany(City::class);
    }
}