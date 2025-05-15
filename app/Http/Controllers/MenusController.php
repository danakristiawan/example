<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\DataTables\MenusDataTable;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class MenusController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index(MenusDataTable $dataTable)
    {
        return $dataTable->render('menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        Menu::create($request->all());
        return response()->json(['success' => 'Data has been created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return response()->json($menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate($this->validation());
        $menu->fill($request->post())->save();
        return response()->json(['success' => 'Data has been updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json(['success' => 'Data has been deleted successfully!']);
    }

    /**
     * Validation the specified resource.
     */
    public function validation()
    {
        return [
            'icon' => 'required',
            'name' => 'required',
            'url' => 'required',
        ];
    }
}
