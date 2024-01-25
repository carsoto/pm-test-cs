<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public $perPage = 10;
    public $search = '';

    public function index(){
        $data = User::findAll()->paginate($this->perPage);

        return view('users.index', compact('data'));
    }
}
