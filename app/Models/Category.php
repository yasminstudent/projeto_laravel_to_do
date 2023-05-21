<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    //Categoria pertence a um único usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
