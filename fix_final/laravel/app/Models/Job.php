<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'poster_id',
        'title',
        'company_name',
        'location',
        'job_type',
        'description',
        'description_html',
        'apply_url',
        'company_logo',
        'website',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function poster()
    {
        return $this->belongsTo(User::class, 'poster_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'job_id');
    }

    public function getApplicationsCountAttribute()
    {
        return $this->applications()->count();
    }
}