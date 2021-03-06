<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Response;

class RoleController extends Controller
{
    public function index(Request $request){
        $roles=User::whereNull('deleted_at')
                    ->whereRoleId($request->role)
                    ->get();
        return response()->json($roles);
    }

    public function find($roles){
        return $roles=Roles::whereUserId($roles)->first();
    }

    public function list(){
        $roles=Role::whereNull('deleted_at')
                        ->whereNotIn('id',[1])
                        ->get();
        return response()->json($roles);
    }
        
    public function save(Request $request){
        $role=Role::create ($request->all());
        return Response::json($role, 200);
    }

    public function update(Request $request, Role $role){
        $role->update($request->all());
        return Response::json($role, 201);
    }

    public function destroy(User $role){
        $role->deleted_at = now();
        $role->update();
        return response()->json(array('success'=>true));
    }
}
