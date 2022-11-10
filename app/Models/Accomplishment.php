<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomplishment extends Model
{
    use HasFactory;
    protected $table = "Accomplishments";
    protected $fillable = ['no_completed_projects', 'rating'];
}
