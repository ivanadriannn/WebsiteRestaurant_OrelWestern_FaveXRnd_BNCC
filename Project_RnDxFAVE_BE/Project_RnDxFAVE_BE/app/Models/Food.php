<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public $table = "foods";
    protected $fillable = [
        'Nama',
        'Harga',
        'Deskripsi',
        // 'Jumlah',
        // 'Kode',
        // 'Total',
        'Image',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
