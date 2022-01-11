<?php

namespace App\Models;

use App\Models\iPag\Subscription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'is_active',
        'user_id',
        'segment',
        'segment_custom',
        'name',
        'cnpj',
        'answerable',
        'answerable_cpf',
        'address_zipcode',
        'address_neighborhood',
        'address_street',
        'address_number',
        'address_complement',
        'address_city',
        'address_state',
        'nozap_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
}
