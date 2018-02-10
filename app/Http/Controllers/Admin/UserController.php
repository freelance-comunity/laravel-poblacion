<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();

        return view('backEnd.admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        return view('backEnd.admin.user.create')
        ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'password' => 'required', 'campus_id' => 'required', ]);
        $input = $request->all();
        $input['password']= Hash::make($request->input('password'));
        User::create($input);

        Session::flash('message', 'Usuario creado.');
        Session::flash('status', 'success');

        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('backEnd.admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');
        return view('backEnd.admin.user.edit', compact('user', 'campuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'password' => 'required', 'campus_id' => 'required', ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        Session::flash('message', 'Usuario actualizado.');
        Session::flash('status', 'success');

        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Session::flash('message', 'Usuario eliminado.');
        Session::flash('status', 'success');

        return redirect('admin/user');
    }

}
