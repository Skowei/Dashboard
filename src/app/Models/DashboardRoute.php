<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class DashboardRoute extends Model
{
    protected $fillable =[
        'icon',
        'name',
        'route',
        'parent_id'
    ];

    public function childrens()
    {
        return $this->hasMany(DashboardRoute::class, 'parent_id', 'id');
    }

    public function isChildren()
    {
        return $this->parent_id != null;
    }

    public function parent()
    {
        return $this->belongsTo(DashboardRoute::class, 'parent_id', 'id');
    }

    public function active()
    {
        return $this->hasOne(DashboardRoute::class, 'parent_id', 'id')->where('route', Route::currentRouteName());
    }
}
