<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class majors extends Model
{
    use HasFactory;
    protected $table="majors";
    protected $primaryKey="id";
    protected $fillable=["name","companies_id"];

    public function companies(){

        return $this->belongsTo("App\Models\companies","companies_id");

    }

    public function student(){

        return $this->hasMany("App\Models\student","major_id");

    }
}
