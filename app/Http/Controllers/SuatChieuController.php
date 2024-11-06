<?php

namespace App\Http\Controllers;

use App\Models\SuatChieu;
use Illuminate\Http\Request;

class SuatChieuController extends Controller
{
    public function getData()
    {
        $data   =   SuatChieu::all();

        return response()->json([
            'suat'  =>  $data
        ]);
    }

    public function store(Request $request)
    {
        $data   =   $request->all();
        SuatChieu::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới suất thành công!'
        ]);
    }

    public function destroy($id)
    {
        SuatChieu::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá suất thành công!'
        ]);
    }

    public function update(Request $request)
    {
        $data   = $request->all();

        SuatChieu::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật suất thành công!'
        ]);
    }
    public function doiTrangThai(Request $request)
    {
        $suat = SuatChieu::find($request->id);
        if ($suat) {
            if ($suat->tinh_trang == 1) {
                $suat->tinh_trang = 0;
            } else {
                $suat->tinh_trang = 1;
            }
            $suat->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái suất thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }
}
