<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Carbon\Carbon;

class TinTucController extends Controller
{
    public function tinHot()
    {
        $query = DB::table('tins')
            ->orderBy('luot_xem', 'desc')
            ->orderBy('ngay_dang', 'desc')
            ->limit(3);
        $tinHot = $query->get();
        return $tinHot;
    }

    public function listDanhMuc()
    {
        $query = DB::table('danh_muc_tins');
        $danhMuc = $query->get();
        return $danhMuc;
    }

    public function tinMoiNhat()
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->orderBy('ngay_dang', 'desc')
            ->limit(4);
        $tinMoiNhat = $query->get();
        return $tinMoiNhat;
    }

    public function tinNoiBat()
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->orderBy('t.luot_xem', 'desc')
            ->orderByDesc('binh_luan')
            ->limit(5);
        $tinNoiBat = $query->get();
        return $tinNoiBat;
    }

    public function xemNhieuNhat()
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->orderBy('t.luot_xem', 'desc');

        $xemNhieuNhat = $query->first();
        return $xemNhieuNhat;
    }

    public function listXemNhieuNhat()
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->orderBy('t.luot_xem', 'desc');

        $xemNhieuNhat = $query->get();
        return $xemNhieuNhat;
    }

    public function tinGanDay()
    {
        $homQua = Carbon::yesterday()->toDateString();
        $homNay = Carbon::today()->toDateString();

        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->whereBetween('ngay_dang', [$homQua, $homNay]);


        $tinGanDay = $query->get();
        return $tinGanDay;
    }

    public function showUser($id){
        $user = User::find($id);
        return $user;
    }

    public function index()
    {
        $id = session('id');
        $tinMoiNhat = $this->tinMoiNhat();
        $tinHot = $this->tinHot();
        $danhMuc = $this->listDanhMuc();
        $tinNoiBat = $this->tinNoiBat();
        $xemNhieuNhat = $this->xemNhieuNhat();
        $listXemNhieuNhat = $this->listXemNhieuNhat();
        $tinGanDay = $this->tinGanDay();
        $user = $this->showUser($id);
        return view('clients.index', compact('tinHot', 'danhMuc', 'tinMoiNhat', 'tinNoiBat', 'xemNhieuNhat', 'listXemNhieuNhat', 'tinGanDay', 'user'));
    }

    public function chiTietTin($id)
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->where('t.id', $id);

        $chiTietTin = $query->first();
        return $chiTietTin;
    }

    public function demDanhMuc()
    {
        $query = DB::table('tins as t')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->select('d.ten_danh_muc', DB::raw('COUNT(t.id) as soLuongTin'))
            ->groupBy('d.ten_danh_muc');

        $demDanhMuc = $query->get();
        return $demDanhMuc;
    }

    public function tinCungLoai($id)
    {
        $tin = DB::table('tins')->where('id', $id)->first();

        $query = DB::table('tins as t')
            ->select('t.*','t.id as id_tin', 'd.*')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->where('id_danh_muc', $tin->id_danh_muc)
            ->where('t.id', '!=', $id)
            ->limit(4);

        $tinCungLoai = $query->get();
        // dd($tinCungLoai);
        return $tinCungLoai;
    }

    public function layDanhSachBinhLuan($id)
    {
        $query = DB::table('binh_luans')
            ->select('binh_luans.*', 'users.name as ten_user', 'tins.tieu_de as tieu_de_tin')
            ->join('users', 'binh_luans.id_user', '=', 'users.id')
            ->join('tins', 'binh_luans.id_tin', '=', 'tins.id')
            ->where('binh_luans.id_tin', $id);
        $binhLuan = $query->get();
        return $binhLuan;
    }

    public function show($id)
    {
        $tinHot = $this->tinHot();
        $danhMuc = $this->listDanhMuc();
        $chiTietTin = $this->chiTietTin($id);
        $tinNoiBat = $this->tinNoiBat();
        $tinGanDay = $this->tinGanDay();
        $demDanhMuc = $this->demDanhMuc();
        $tinCungLoai = $this->tinCungLoai($id);
        $binhLuan = $this->layDanhSachBinhLuan($id);
        $user = $this->showUser(session('id'));
        return view('clients.detail-news', compact('tinHot', 'danhMuc', 'chiTietTin', 'tinNoiBat', 'tinGanDay', 'demDanhMuc', 'tinCungLoai', 'binhLuan', 'user'));
    }

    public function tinTheoLoai($idDanhMuc)
    {
        $query = DB::table('tins as t')
            ->select('t.*', 'd.ten_danh_muc', DB::raw('COUNT(b.id) as binh_luan'))
            ->leftJoin('binh_luans as b', 't.id', '=', 'b.id_tin')
            ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id')
            ->groupBy('t.id')
            ->where('id_danh_muc', $idDanhMuc);

        $tinTheoLoai = $query->get();
        return $tinTheoLoai;
    }



    public function listNews($idDanhMuc)
    {
        $tinHot = $this->tinHot();
        $danhMuc = $this->listDanhMuc();
        // $chiTietTin = $this->chiTietTin($id);
        $tinNoiBat = $this->tinNoiBat();
        $tinGanDay = $this->tinGanDay();
        $demDanhMuc = $this->demDanhMuc();
        // $tinCungLoai = $this->tinCungLoai($id);
        $tinTheoLoai = $this->tinTheoLoai($idDanhMuc);
        $user = $this->showUser(session('id'));
        return view('clients.list-news', compact('tinHot', 'danhMuc', 'tinNoiBat', 'tinGanDay', 'demDanhMuc', 'tinTheoLoai', 'user'));
    }
}
