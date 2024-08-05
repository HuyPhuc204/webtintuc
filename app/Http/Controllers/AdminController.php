<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admins.index');
    }

    public function listCate(){
        $tinTucController = new TinTucController();
        $danhMuc =  $tinTucController->listDanhMuc();
        return view('admins.list-cate', compact('danhMuc'));
    }


    public function create()
    {
        return view('admins.create-cate');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'ten_danh_muc' => 'required|max:255',
        ]);
        DanhMuc::create($data);
        session()->flash('success', 'Thêm danh mục thành công');
        return redirect()->back();
    }
    public function edit($id)
    {
        $danhMuc = DanhMuc::findOrFail($id);
        return view('admins.update-cate', compact('danhMuc'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'ten_danh_muc' => 'required|max:255',
        ]);

        $danhMuc = DanhMuc::findOrFail($id);
        $danhMuc->update($data);
        session()->flash('success', 'Sửa danh mục thành công');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $danhMuc = DanhMuc::findOrFail($id);
        $danhMuc->delete();
        session()->flash('destroy', 'Xóa danh mục thành công');
        return redirect()->route('list-cate');
    }

    public function listTin(){
        $query = DB::table('tins as t')
        ->select('t.*','t.id as id_tin', 'd.*')
        ->join('danh_muc_tins as d', 't.id_danh_muc', '=', 'd.id');

        $data = $query->get();
        return view('admins.list-news', compact('data'));


    }

    public function createTin()
    {
        $danhMucs = DanhMuc::all();
        return view('admins.create-new', compact('danhMucs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTin(Request $request)
    {
        $data = $request->validate([
            'tieu_de' => 'required|string|max:255',
            'tom_tat' => 'required|string',
            'noi_dung' => 'required|string',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_danh_muc' => 'required|exists:danh_muc_tins,id',
        ]);

        if ($request->hasFile('hinh_anh')) {
            $imageName = time() . '.' . $request->hinh_anh->extension();
            $request->hinh_anh->move(public_path('assets/images/all/thumbs/'), $imageName);
            $data['hinh_anh'] = 'assets/images/all/thumbs/'.$imageName;
        }
        TinTuc::create($data);
        session()->flash('success', 'Thêm tin thành công');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editTin(string $id)
    {
        $tinTuc = TinTuc::findOrFail($id);
        $danhMucs = DanhMuc::all();
        return view('admins.update-new', compact('tinTuc', 'danhMucs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTin(Request $request, string $id)
    {
        $data = $request->validate([
            'tieu_de' => 'required|string|max:255',
            'tom_tat' => 'required|string',
            'noi_dung' => 'required|string',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_danh_muc' => 'required|exists:danh_muc_tins,id',
        ]);

        $tinTuc = TinTuc::findOrFail($id);

        if ($request->hasFile('hinh_anh')) {

            if ($tinTuc->hinh_anh && file_exists(public_path('assets/images/all/thumbs/' . $tinTuc->hinh_anh))) {
                unlink(public_path('assets/images/' . $tinTuc->hinh_anh));
            }

            $imageName = time() . '.' . $request->hinh_anh->extension();
            $request->hinh_anh->move(public_path('assets/images/all/thumbs/'), $imageName);
            $data['hinh_anh'] = 'assets/images/all/thumbs/'.$imageName;
        } else {
            $data['hinh_anh'] = $tinTuc->hinh_anh;
        }

        $tinTuc->update($data);
        session()->flash('success', 'Sửa tin thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyTin(string $id)
    {
        $tinTuc = TinTuc::findOrFail($id);


        if ($tinTuc->hinh_anh) {
            $imagePath = public_path('assets/images/all/thumbs/' . $tinTuc->hinh_anh);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $tinTuc->delete();

        session()->flash('destroy', 'xóa tin thành công');
        return redirect()->back();
    }
}
