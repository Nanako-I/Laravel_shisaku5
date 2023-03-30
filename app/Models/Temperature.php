<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    // people_idはviewから登録されないのでfillableには入れない
    use HasFactory;
    protected $table = 'temperature';
    protected $fillable = ['people_id','temperature'];
}
