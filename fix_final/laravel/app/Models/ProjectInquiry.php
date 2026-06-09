<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectInquiry extends Model
{
    use HasFactory;

    protected $table = 'project_inquiries';

    protected $fillable = [
        'user_id',
        'shots_id',
        'project_details',
        'target_date',
        'project_budget',
        'recommend_budget',
    ];
}