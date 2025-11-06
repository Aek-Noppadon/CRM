<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'created_user_id',
        'updated_user_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    // public function departmentUser()
    // {
    //     return $this->hasMany(User::class, 'department_id');
    // }
}
