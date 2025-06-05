<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['store', 'date', 'category_id', 'price', 'description'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
