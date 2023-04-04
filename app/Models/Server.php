<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Scope;

class Server extends Model
{
    use HasFactory;

    protected $table = 'servers';

    protected $fillable = [
        'ip', 'active',
        'settings', 'comment'
    ];

    protected $casts = [
        'settings' => 'array'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function scopeActive($query)
    {
        $query->where('active', 1);
    }
}
