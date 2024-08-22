<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.settings.index');
    }


    public function show_admins()
    {
        $users = User::all();

        return view('admin.settings.users.index', compact('users'));
    }

    public function register_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string','unique:users'],
            'role' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'image' => url('/storage/admin/default.png'),
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        User::where('id', '=', $user->id)->update([
            'image' => url('/storage/admin/default.png'),
            'role' => $request['role'],
        ]);

        if ($user) {
            return back()->with('success', "New user is created");
        }else{
            return back()->with('error', "Failed to Register new User");
        }

        abort(500);

    }
}
