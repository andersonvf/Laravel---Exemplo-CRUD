<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view ('users.index', ['users'=>$users]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $Request)
    {
        User::create($Request->all());
        return redirect()->route('users.index');
    }
    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        if (!empty($users))
        {
            return view ('users.edit', ['users'=>$users]);
        }
        else 
        {
            return redirect()->route('users.index');
        }
    
    }
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
        ];
        User::where('id',$id)->update($data);
        return redirect () ->route('users.index');
    }
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect () ->route('users.index');
    }

}
