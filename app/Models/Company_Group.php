<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
class Company_Group extends Model
{
    use HasFactory;
    public $table="company_groups";

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
}
