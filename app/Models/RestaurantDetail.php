<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurantDetail extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'business_name',
        'contact_number',
        'representative_name',
        'image',
        'country',
        'state',
        'city',
        'address',
        'zipcode',
        'associated_bank',
        'account_type',
        'account_number',
    ];
    public function countries()
    {
        return $this->belongsTo(Country::class, 'country');
    }
}
