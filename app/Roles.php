<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }

    public function isAdmin() {
        return $this->user_role == 1 ? TRUE : FALSE;
    }

    public function isRider() {
        return $this->user_role == 2 || $this->user_role == 2 ? TRUE : FALSE;
    }

    public function userRole() {
        return $this->belongsTo(User::class);
    }

//    public function hasRole($id) {
//        return $this->user_role == $id ? TRUE : FALSE;
//    }

    public function isCustomer() {
        return $this->user_role == 3 ? TRUE : FALSE;
    }

}
