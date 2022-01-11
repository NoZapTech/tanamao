<?php

namespace App\Models\iPag;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'is_active',
        'tenant_id',
        'ipag_id',
        'status',
        'order_id',
        'seller_id',
        'toc',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
