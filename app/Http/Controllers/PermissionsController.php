<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\DataTables\PermissionsDataTable;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        Permission::create($request->all());
        return response()->json(['success' => 'Data has been created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return response()->json($permission);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate($this->validation());
        $permission->fill($request->post())->save();
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
