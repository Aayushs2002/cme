<?php

use Illuminate\Support\Facades\Auth;

function check(){
    $user = Auth::user();
    $check = $user->isSuperUser();
    // dd($check);
    return $check;
}

?>