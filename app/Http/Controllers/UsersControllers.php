<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UsersControllers extends Controller
{
    public function index(Request $request)
    {   
        // $roles = User::select('id','role')->get();
        if ($request->ajax()) {
                $data = User::select('*');
                return Datatables::of($data)
                        ->addIndexColumn()
                        // ->addColumn('verif', function($data){
                        //     if (isset($data->email_verified_at)) {
                        //         $Date = Carbon::createFromFormat('Y-m-d H:i:s', $data->email_verified_at)->format('d-m-Y');
                        //     }else{
                        //         $Date ="Belum terverifikasi";
                        //     }
                        //     return $Date;
                        // })
                        // ->addColumn('action', function($user){
                        //     return view('users.actions', compact('user'));
                        // })
                        // ->rawColumns(['action'])
                        ->make(true);
            }
            // dd($roles);
        return view('users.index');
    }
}
