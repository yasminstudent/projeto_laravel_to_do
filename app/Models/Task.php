<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    //Tarefa pertence a um único usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Tarefa possui a uma única categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
