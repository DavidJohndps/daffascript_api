<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    use HasFactory;
    protected $table = 'contact_uses';
    protected $fillable = ['name_customer', 'email', 'no_telp', 'name_company', 'desc'];
}
