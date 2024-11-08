<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemMoiNhanVienRequest;
use App\Models\ChiTietPhanQuyen;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    public function getData()
    {
        $data = NhanVien::join('phan_quyens', 'nhan_viens.id_chuc_vu', 'phan_quyens.id')
            ->select('nhan_viens.*', 'phan_quyens.ten_quyen')
            ->get();
        return response()->json([
            'data'  =>  $data
        ]);
    }
    public function createData(Request $request)
    {
        $data   =   $request->all();
        $data['password'] = bcrypt($request->password);
        NhanVien::create($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã tạo mới nhân viên thành công!'
        ]);
    }
    public function deleteData($id)
    {
        NhanVien::find($id)->delete();

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã xoá nhân viên thành công!'
        ]);
    }

    public function updateData(Request $request)
    {
        $data   = $request->all();
        NhanVien::find($request->id)->update($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã cập nhật nhân viên thành công!'
        ]);
    }
    public function doiTrangThai(Request $request)
    {
        $nhan_vien = NhanVien::find($request->id);
        if ($nhan_vien) {
            if ($nhan_vien->tinh_trang == 1) {
                $nhan_vien->tinh_trang = 0;
            } else {
                $nhan_vien->tinh_trang = 1;
            }
            $nhan_vien->save();

            return response()->json([
                'status' => true,
                'message' => "Đổi trạng thái nhân viên thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }

    // danng nhap
    public function dangNhap(Request $request)
    {

        // $check = NhanVien::where('email',$request->email)
        //                   ->where('password',$request->password)
        //                   ->first();

        // Câu lệnh này cố gắng xác thực người dùng với guard nhan_vien bằng cách kiểm tra email và mật khẩu được cung cấp. Nếu thông tin đăng nhập đúng,
        // người dùng sẽ được xác thực và phương thức attempt sẽ trả về true. Nếu thông tin đăng nhập không đúng, nó sẽ trả về false.
        // khi mật khẩu mã hóa ở database khi người dùng nhập câu lệnh này xác thực người dùng nhập có đúng với mk trước khi mã hóa
        $check  = Auth::guard('nhan_vien')->attempt(['email' => $request->email, 'password' =>  $request->password]);

        if ($check) {
            $user =  Auth::guard('nhan_vien')->user();
            return response()->json([
                'status'        =>  true,
                // tạo token
                'token'         => $user->createToken('token')->plainTextToken,
                'ho_ten_admin'  => $user->ho_va_ten,
                'avatar_admin'  => $user->avatar,
                'message'       =>  'Đã đăng nhập thành công'
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Tài Khoản hoặc mật khẩu không đúng'
            ]);
        }
    }

    public function kiemTraToken(Request $request)
    {
        // Lấy thông tin từ Authorization : 'Bearer ' gửi lên
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\NhanVien) {
            return response()->json([
                'status'    =>  true,
                'message'   =>  "Oke, bạn có thể đi qua",
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  "Bạn cần đăng nhập hệ thống trước",
            ]);
        }
    }
}
