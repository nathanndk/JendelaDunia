<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'author',
        'published_date',
        'publisher',
        'pages',
        'category',
        'photo',
        'price',
        'category_id',
        'created_by',
        'updated_by',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'book_category_id', 'id');
    }
}
