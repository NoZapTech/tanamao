<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Plan extends Model
{
    use HasFactory, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'is_active',
        'name',
        'uri',
        'description',
        'amount',
        'frequency',
        'interval',
    ];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
