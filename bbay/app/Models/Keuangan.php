<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangan';
    protected $guarded = [];
    const STATUS_CREATED = 'CREATED';
    const STATUS_VERIFIED = 'VERIFIED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_CANCELED = 'CANCELED';

    public function user()
    {
        //cari user dengan id yang sama dengan field dirubah_oleh
        return $this->belongsTo(User::class, 'dirubah_oleh');
    }
}
