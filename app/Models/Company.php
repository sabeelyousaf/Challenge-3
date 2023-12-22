<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Asset;
use App\Models\Employee;
use App\Models\Manager;




class Company extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
    public function asset(){
        return $this->belongsTo(Asset::class,'asset_id','id');
    }
    public function manager(){
        return $this->belongsTo(Manager::class,'manager_id','id');
    }
    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

    public function companyGroups(){
        return $this->belongsTo(Company_Group::class,'company_groups_id','id');
    }

}
