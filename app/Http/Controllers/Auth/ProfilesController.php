<?php

namespace App\Http\Controllers;
use App\Model\Profile;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function profile(){
        return $this->hasOne('profile');
    
    }
}

