<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function getData(){
        $data   =   DanhGia::all();
        return response()->json([
            'data'  =>  $data
        ]);
    }
    public function createData(Request $request){
        $data   =   $request->all();
        DanhGia::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới đánh giá thành công!'
        ]);
    }
    public function deleteData($id)
    {
        DanhGia::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá đánh giá thành công!'
        ]);
    }

    public function updateData(Request $request)
    {
        $data   = $request->all();
        DanhGia::find($request->id)->update($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật đánh giá  thành công!'
        ]);
    }
    public function doiTrangThai(Request $request){
        $danh_gia = DanhGia::find($request->id);
        if($danh_gia) {
            if($danh_gia->tinh_trang == 1) {
                $danh_gia->tinh_trang = 0;
            } else {
                $danh_gia->tinh_trang = 1;
            }
            $danh_gia->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái đánh giá thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
    
}
