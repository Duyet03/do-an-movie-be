<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function getData(){
        $data   =   ChucVu::all();
        return response()->json([
            'data'  =>  $data
        ]);
    }
    public function createData(Request $request){
        $data   =   $request->all();
        ChucVu::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới chức vụ thành công!'
        ]);
    }
    public function deleteData($id)
    {
        ChucVu::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá chức vụ thành công!'
        ]);
    }

    public function updateData(Request $request)
    {
        $data   = $request->all();
        ChucVu::find($request->id)->update($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật chứ vụ  thành công!'
        ]);
    }
    public function doiTrangThai(Request $request){
        $chuc_vu = ChucVu::find($request->id);
        if($chuc_vu) {
            if($chuc_vu->tinh_trang == 1) {
                $chuc_vu->tinh_trang = 0;
            } else {
                $chuc_vu->tinh_trang = 1;
            }
            $chuc_vu->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái chức vụ thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
}
