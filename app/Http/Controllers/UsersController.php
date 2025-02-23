<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(User $user)
    {
        $users = DB::table('users')->get();
        //$users = User::where('is_admin', true)->get()->all();
        // $user->can('viewAny', User::class);
        // echo ($user);
        foreach ($users as $user) {
            $user->name;
           // return $user;
        }
        return $users;
    }
}
