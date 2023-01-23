<?php

use App\Models\User;

function isAdmin(User $user){
    if($user->username == 'rafa') {
        return true;
    }
    return false;
}