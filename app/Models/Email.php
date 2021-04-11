<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    
    protected $fillable=[
      'user_id','email','subject','body','is_error'
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    /**
     * @param $query
     * @return mixed
     * @method scopeFiltersFields: options by filters data emails
     */
    public function scopeFiltersFields( $query )
    {
        if (request()->has( 'filter' )) {
            $query->where('emails.email','like',"%".request('filter')."%")
                ->orWhere('emails.subject','like',"%".request('filter')."%")
                ->orWhere('users.name','like',"%".request('filter')."%");
        }
    }
}
