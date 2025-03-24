<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model {
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'referrer_id',
        'years_experience',
        'current_role',
        'skills',
        'experience_details',
        'github',
        'linkedin',
        'portfolio',
        'availability',
        'resume_path',
    ];
}
