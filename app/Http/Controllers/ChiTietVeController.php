<?php

namespace App\Http\Controllers;

use App\Models\ChiTietVe;
use Illuminate\Http\Request;

class ChiTietVeController extends Controller
{
    public function getData(){
        $data   =   ChiTietVe::all();

        return response()->json([
            'status'      =>  true,
            'data'  =>  $data
        ]);
    }

    public function store(Request $request)
    {
        $data   =   $request->all();
        ChiTietVe::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới dịch vụ thành công!'
        ]);
    }

    public function destroy($id)
    {
        ChiTietVe::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá dịch vụ thành công!'
        ]);
    }


    public function update(Request $request)
    {
        $data   = $request->all();

        ChiTietVe::find($request->id)->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật dịch vụ thành công!'
        ]);
    }
}
