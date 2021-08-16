<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Donate extends Model
{
    use HasFactory;

    protected $fillable=[
'name',
'email',
'mobile',
'amount',
'message',
'slug',
'form_checked'
];
}
