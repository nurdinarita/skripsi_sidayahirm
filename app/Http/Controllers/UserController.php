<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $jumlah_user = $user->count();
        return view('user.index', compact('user', 'jumlah_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // store data user to database 'users'
        try{
            $email = $request->input('email');
            $nama = $request->input('nama');
            $account_status = $request->input('account_status');
            $password = $request->input('password');
            $confirm_password = $request->input('confirm_password');

            if($password == $confirm_password){
                DB::table('users')->insert([
                    'name' => $nama,
                    'email' => $email,
                    'role' => $account_status,
                    'password' => bcrypt($password),
                ]);

                return redirect()->back()->with('success', 'Berhasil menambahkana akun');
            }else{
                return redirect()->back()->with('error', 'Gagal menambahkan akun, password tidak sama');
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->with('error', 'Terjadi kesalahan. Harap cek error Log!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
