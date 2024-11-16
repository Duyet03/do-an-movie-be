<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function getData()
    {
        $data   =   KhachHang::all();
        return response()->json([
            'data'  =>  $data
        ]);
    }
    public function createData(Request $request)
    {
        $data   =   $request->all();
        KhachHang::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới Khach Hang thành công!'
        ]);
    }
    public function deleteData($id)
    {
        KhachHang::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá Khach Hang thành công!'
        ]);
    }

    public function updateData(Request $request)
    {
        $data   = $request->all();
        KhachHang::find($request->id)->update($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật  thành công!'
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $khach_hang = KhachHang::find($request->id);
        if ($khach_hang) {
            if ($khach_hang->tinh_trang == 1) {
                $khach_hang->tinh_trang = 0;
            } else {
                $khach_hang->tinh_trang = 1;
            }
            $khach_hang->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái khách hàng thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
}
