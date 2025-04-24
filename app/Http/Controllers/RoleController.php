<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function role(Request $request) {
        $role_id = $request->get('id');
        $role = Role::find($role_id);

       $data = [
           'role' => $role,
           'user' => $role->users
       ];

        return view('role.role', $data);
    }
}
