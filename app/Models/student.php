<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table="student";
    protected $primaryKey="id";
    protected $fillable=["name","student_number","phone","date_birth","average","major_id","company_id"];

    public function companies(){

        return $this->hasOne("App\Models\companies","companies_id");

    }

    public function majors(){

        return $this->hasOne("App\Models\majors","major_id");

    }
}
