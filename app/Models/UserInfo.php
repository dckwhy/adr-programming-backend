<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'province', 'city', 'date_accessed', 'time_accessed', 'user_device', 'user_browser', 'user_os', 'user_ip', 'user_screen_res', 'user_type'];
}
