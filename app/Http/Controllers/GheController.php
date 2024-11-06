<?php

namespace App\Http\Controllers;
use App\Models\Ghe;

use Illuminate\Http\Request;

class GheController extends Controller
{
    public function getData(Request $request)
    {

        $data = Ghe::all();

        return response()->json([
            'data' => $data
        ]);
    }
    public function createData(Request $request)
    {

        Ghe::create([
            'ten_ghe'   => $request->ten_ghe,
            'loai_ghe'  => $request->loai_ghe,
            'trang_thai'=> $request->trang_thai,
            'id_phong'  => $request->id_phong,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm mới ghế thành công!'
        ]);
    }
    public function UpateData(Request $request)
    {

        Ghe::create([
            'ten_ghe'   => $request->ten_ghe,
            'loai_ghe'  => $request->loai_ghe,
            'trang_thai'=> $request->trang_thai,
            'id_phong'  => $request->id_phong,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm mới ghế thành công!'
        ]);
        }
    public function deleteData($id)
        {
            Ghe::find($id)->delete();

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Đã xoá ghế thành công!'
            ]);
        }
}
