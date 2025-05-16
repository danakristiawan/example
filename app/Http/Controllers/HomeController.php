<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class HomeController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $roles = $user->hasExactRoles(Role::all());
        $landing = Role::findByName('Landing');
        $permissions = $landing->permissions;
        return view('home', compact('user', 'permissions', 'landing'));
    }

    public function test()
    {
        // menyimpan roles, permissions, menus kedalam session
        $user = auth()->user();
        $roles = $user->hasExactRoles(Role::all());
        $sess = [];
        foreach ($user->roles as $role) {
            $role_name = $role->name;
            $permissions = $role->permissions->get();
            foreach ($permissions as $permission) {
                $permission_name = $permission->name;
                $menus = $permission->menus->get();
                foreach ($menus as $menu) {
                    $res = $sess['$role_name']['$permission_name'] = $menu->name;
                    dd($res);
                }

            }
        }
    }
}