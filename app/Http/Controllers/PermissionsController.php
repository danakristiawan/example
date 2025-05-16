<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\DataTables\PermissionsDataTable;
use Spatie\Permission\Models\Permission;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PermissionsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('permission');
    }

    public function create()
    {
        $data = Menu::get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        $menu = $request->check;
        $permission = Permission::create(['name' => $request->name]);
        $permission->menus()->attach($menu);
        return response()->json(['success' => 'Data has been created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        $data = [
            'permission' => $permission,
            'menus' => $permission->menus,
            'allMenus' => Menu::get(),
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate($this->validation());
        $permission->fill($request->post())->save();
        $menu = $request->check;
        $permission->menus()->detach($permission->menus);
        $permission->menus()->attach($menu);
        return response()->json(['success' => 'Data has been updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json(['success' => 'Data has been deleted successfully!']);
    }

    /**
     * Validation the specified resource.
     */
    public function validation()
    {
        return [
            'name' => 'required',
        ];
    }
}
