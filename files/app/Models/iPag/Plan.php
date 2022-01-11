<?php

namespace App\Models\iPag;

use App\Models\Tenant;
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
        'ipag_id',
        'uri',
        'description',
    ];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
