<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function me(){
        return[
            'nis' => 3103120233,
            'Name' => 'Yardan idzni tsaqif hanavi',
            'Phone' => '082115318329',
            'Class' => 'XII RPL 7'
            
        ];
    }
}
