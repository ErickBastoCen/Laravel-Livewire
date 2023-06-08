<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Building extends Model
{
    use HasFactory;

    public function departments() {
        return $this->hasMany(Department::class,'id_department');
    }

    public $timestamps = false;

    protected $fillable = ['letter', 'name', 'common_name', 'description', 'references', 'top', 'left', 'width', 'height'];

    public function getImageAttribute($value)
    {
        return 'data:image/jpeg;base64,' . base64_encode($value);
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = file_get_contents($value);
    }
}
