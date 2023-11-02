<?php

namespace App\Http\Controllers;

use App\Mail\authemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class authcontroller extends Controller
{
    function index()
    {
        return view('login');
    }
    function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth');
    }
    function login(Request $request) {
        // 
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib di isi',
            'password.required' => 'Password Wajib di isi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->email_verified_at === null) {
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('admin')->with('success','Haii Jihad Bagaimana Kabarmu hari ini?');
                } elseif (Auth::user()->role === 'osis') {
                    return redirect()->route('osis')->with('success','Login Sebagai Pengurus');
                } elseif (Auth::user()->role === 'pembina') {
                    return redirect()->route('pembina')->with('success','Login Sebagai Pembina Eskul');
                } elseif (Auth::user()->role === 'siswa') {
                    return redirect()->route('siswa')->with('success','Login Sebagai Siswa');
                }
            } else {
                Auth::logout();
                return redirect()->route('auth')->withErrors('Akun Anda Belum Aktif. Harap Verifikasi terlebih dahulu');
                
            }
            return "Login Success ";
        }else{
            return redirect()->route('auth')->withErrors('Email Atau Password Salah');
        }
    }
    function create() {
        // 
        return view('register');
        
    }

    function register(Request $request) {
        // 
        $str = Str::random(100);
        $inforegister = $request->validate([
            'nisn' => 'required|max:10',
            'name' => 'required',
            'jurusan' => 'required',
            'eskul' => 'required',
            'no_hp' => 'required',
            'almt' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'nisn.required' => 'nisn Wajib di isi max 10 karakter',
            'name.required' => 'nama Wajib di isi',
            'jurusan.required' => 'jurusan Wajib di isi',
            'eskul.required' => 'ekstrakulikuler Wajib di isi',
            'no_hp.required' => 'nomer hp Wajib di isi',
            'almt.required' => 'harap isi alamat terlebih dahulu',
            'email.required' => 'Email Wajib di isi',
            'password.required' => 'Password Wajib di isi',
        ]);

        // $inforegister =[
        //     'nisn' => $request->nisn,
        //     'name' => $request->name,
        //     'jurusan' => $request->jurusan,
        //     'eskul' => $request->eskul,
        //     'no_hp' => $request->no_hp,
        //     'almt' => $request->almt,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'verify_key' => $str,
        // ];

        $inforegister['verify_key'] = uniqid();
        $inforegister['password'] = Hash::make($request->password);

        User::create($inforegister);

        // $detail = [
        //     'name' => $inforegister['name'],
        //     'role' => 'user',
        //     'datetime' => date('Y-m-d H:i:s'),
        //     'website' => 'OSIS PGRI 1 Cimahi ',
        //     'url' => 'https://' . $request()->getHttpsHost() . "/" . "verify/" . $inforegister['verify_key'],
        // ];
        // Mail::to($inforegister['email'])->send(new authemail($detail));

        return redirect()->route('auth')->with('success','Link Verifikasi telah di kirim ke email anda. cek email untuk melakukan verifikasi!');
    }
    function verify($verify_key){
        $keychek = User::select('verify_key')->where('verify_key')->exists();

        if ($keychek) {
            $user = User::where('verify_key',$verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            return redirect()->route('auth')->with('succsess','Verifikasi Berhasil.akun anda sudah aktif.');
            
        }else{
            return redirect()->route('auth')->with('Keys Tidak Valid. pastikan telah melakukan ')->withInput();

        }
    }
}
