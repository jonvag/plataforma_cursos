<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Leer Usuarios')->only('index');
        $this->middleware('can:Editar Usuarios')->only('edit');
    }
   
    public function index()
    {
        return view('admin.users.index');
    }

    
    public function create(User $user)
    {
        return view('admin.users.index');
        
    }

    
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user); 
    }

}
