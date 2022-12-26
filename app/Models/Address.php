<?php

namespace App\Models;

use App\Core\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Address extends Model
{
    protected $table = 'addresses';
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class,'user_id');

    }
}
