<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $nama_customer = $request->input('nama_customer');
        $nomor_telepon = $request->input('nomor_telepon');
        $alamat_customer = $request->input( 'alamat_customer');
        $tanggal_lahir = $request->input( 'tanggal_lahir');
        $email_customer = $request->input( 'email_customer');
        $username = $request->input('username');
        $password = Hash::make($request->input('password'));

       $register = Customer::create([
           'nama_customer' => $nama_customer,
           'nomor_telepon' => $nomor_telepon,
           'alamat_customer' => $alamat_customer,
           'tanggal_lahir' => $tanggal_lahir,
           'email_customer' => $email_customer, 
           'username' => $username, 
           'password' => $password
        ]);

        if ($register){
            return response()->json([
                'success' => true,
                'message' => 'Register sukses',
                'data' => $register
            ], 201);
        } else{
             return response()->json([
                'success' => false,
                'message' => 'Register gagal',
                'data' => ''
            ], 400);
        }

    }

}
