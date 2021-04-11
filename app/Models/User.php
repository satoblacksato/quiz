<?php

namespace App\Models;

use App\Models\Locations\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use \OwenIt\Auditing\Auditable, HasFactory, Notifiable;
    
    protected $appends=['age'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'nui',
        'birthdate',
        'city_id', 'phone'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at'
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin'          => 'boolean',
        'birthdate'         => 'date'
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Relations city by user
     */
    public function city()
    {
        return $this->belongsTo( City::class );
    }
    
    /**
     * @param $query
     * @return mixed
     * @method scopeFiltersOrder: options by order data users
     */
    public function scopeFiltersOrder( $query )
    {
        if ( request()->has( 'orderField' ) && request()->has( 'orderBy' ) ) {
            if ( in_array( request( 'orderBy' ), [ 'asc', 'desc' ] ) ) {
                if ( in_array( request()->get( 'orderField' ), $this->fillable ) ) {
                    return $query->orderBy( request( 'orderField' ), request( 'orderBy' ) );
                }
                if (request()->get( 'orderField' )=='age') {
                    return $query->orderBy( 'birthdate', request( 'orderBy' ) );
                }
                if (request()->get( 'orderField' )=='state_id') {
                    return $query->orderBy( 'states.id', request( 'orderBy' ) );
                }
                if (request()->get( 'orderField' )=='country_id') {
                    return $query->orderBy( 'countries.id', request( 'orderBy' ) );
                }
            }
        }
    }
    
    /**
     * @param $query
     * @return mixed
     * @method scopeFiltersFields: options by filters data users
     */
    public function scopeFiltersFields( $query )
    {
        if (request()->has( 'filter' )) {
            $query->where('name','like',"%".request('filter')."%")
                ->orWhere('nui','like',"%".request('filter')."%")
                ->orWhere('email','like',"%".request('filter')."%")
                ->orWhere('phone','like',"%".request('filter')."%");
        }
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * @method emails: Get Email by User
     */
    public function emails(){
        return $this->hasMany(Email::class);
    }
    
    /**
     * @return
     * Value Append age in user
     */
    public function getAgeAttribute()
    {
        return $this->birthdate->diffInYears(\Carbon\Carbon::now());
        
    }
}
