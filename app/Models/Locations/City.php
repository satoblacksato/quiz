<?php


namespace App\Models\Locations;


use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    protected $fillable = [
        'description','state_id'
    ];
    
    
    public function state(){
        return $this->belongsTo(State::class);
    }
}