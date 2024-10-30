<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function getData(){
        $data   =   HoaDon::all();

        return response()->json([
            'status'      =>  true,
            'hoa_don'  =>  $data
        ]);
    }

    public function store(Request $request)
    {
        $data   =   $request->all();
        HoaDon::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới dịch vụ thành công!'
        ]);
    }

    public function destroy($id)
    {
        HoaDon::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá dịch vụ thành công!'
        ]);
    }
    

    public function update(Request $request)
    {
        $data   = $request->all();

        HoaDon::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật dịch vụ thành công!'
        ]);
    }
}
