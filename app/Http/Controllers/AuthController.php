<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleDangKy;
use App\Http\Requests\RuleDangNhap;
use App\Models\BinhLuan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function register(RuleDangKy $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        session()->flash('success', 'Đăng ký thành công');
        return redirect()->back();
    }

    public function login(RuleDangNhap $request)
    {
        $user = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($user)) {
            $request->session()->put('login', true);
            $request->session()->put('id', Auth::user()->id);
            if (Auth::user()->type === 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->back();
            }
        }

        session()->flash('error', 'Email hoặc password sai');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect()->back();
    }

    public function forgotpass()
    {
        $id = session('id');
        $tinTucController = new TinTucController();
        $danhMuc = $tinTucController->listDanhMuc();
        $tinHot = $tinTucController->tinHot();
        $user = $tinTucController->showUser($id);
        return view('clients.forgotpass', compact('tinHot', 'danhMuc','user'));
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $newPassword = 'user123';
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            session()->flash('error', 'Người dùng không tồn tại');
            return redirect()->back();
        }
        $user->password = Hash::make($newPassword);
        $user->save();
        Mail::send([], [], function ($message) use ($user, $newPassword) {
            $message->to($user->email)
                ->subject('Thông tin mật khẩu mới')
                ->html('<p>Xin chào,' . $user->name . '</p><p>Dưới đây là thông tin mật khẩu mới của bạn:</p><p><strong>Mật khẩu mới:</strong> ' . $newPassword . '</p><p>Vui lòng đăng nhập và thay đổi mật khẩu sau khi đăng nhập.</p><p>Trân trọng,<br>Đội ngũ hỗ trợ của chúng tôi</p>', 'text/html');
        });
        session()->flash('success', 'Lấy lại mật khẩu thành công, chúng tôi đã gửi mail đến bạn');
        return redirect()->back();
    }

    public function binhLuan(Request $request, $id){
        $request->validate(['loibinhluan' => 'required',]);

        BinhLuan::create([
            'id_tin' => $id,
            'id_user' => $request->session()->get('id'),
            'noi_dung' => $request->input('loibinhluan'),
        ]);

        return redirect()->back();
     }
}
