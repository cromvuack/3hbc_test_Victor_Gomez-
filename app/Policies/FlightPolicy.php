<?php

namespace App\Policies;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class FlightPolicy
{
    use HandlesAuthorization;
    public function admin(User $user){
      if($user->hasRole('admin')){
          return true;
      }
      return false;
    }

}
