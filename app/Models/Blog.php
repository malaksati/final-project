<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'description'
    ];

    public function getChangeDateAttribute() {
        return $this->created_at->format('m/d/Y'); // H:i:s
    }
}
