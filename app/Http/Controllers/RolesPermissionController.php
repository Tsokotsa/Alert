<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesPermissionController extends Controller
{
    public function list_roles_perms()
    {
        return view('roles-and-permissions.index');
    }
}
