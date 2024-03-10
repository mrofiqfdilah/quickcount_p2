<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voting extends Model
{
    use HasFactory;
    protected $table = 'voting';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function paslon()
    {
        return $this->belongsTo(Paslon::class, 'id_paslon');
    }
}
