<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerPromosi extends Model
{
    use HasFactory;
    protected $table = 'banner_promosi';
    protected $primaryKey = 'id';
    public $timestamps = false;
}