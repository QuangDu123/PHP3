<?php

namespace App\Http\Controllers;

use App\Models\AnHien;
use App\Models\BinhLuan;
use App\Models\LTin;
use App\Models\ThanhVien;
use App\Models\Tin;
use App\Models\User;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    function admin(){
        $ten_bd = DB::table('loaitin')->where('anHien', '=', 1)->get();

        
        $tnews=DB::table('tin')->count();
        $tBL=DB::table('binhluan')->count();
        $tviews=DB::table('tin')->sum('xem');
        $tuser=DB::table('users')->count();
        return view('Admin.pageAdmin.admin',['tnews'=>$tnews,'ten_bd'=>$ten_bd,'tBL'=>$tBL,'tviews'=>$tviews,'tuser'=>$tuser]);
    }


    public function api_t()
    {
        $so_luong = DB::select('SELECT p.ten, COUNT(p.id) as countPost from tin c JOIN loaitin p ON c.idLT = p.id GROUP BY p.id');
        return response()->json($so_luong, 200);
    }
// BÀI VIẾT-----------------------------------------------
    function addNews(){
        $lt = DB::table('loaitin')->where('anHien', '=', 1)->get();
        return view('Admin.pageAdmin.addNews', ['lt'=> $lt]);
    }
    function addNews_(Request $request){
        $t = new Tin();
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->noiDung = $_POST['noiDung'];
        $t->idLT = $_POST['idLT'];
        $t->anHien = $_POST['anHien'];
        $t->idUser = Auth::User()->id;
        if($request->file('urlHinh')){
            $imgname = $request->file('urlHinh')->store('img');
            $t->urlHinh = $imgname;
        }
        $t->save();
        $alert='Thêm Bài Viết thành công!';return redirect()->back()->with('alert',$alert);
    }
    function listNews(){
        $data = Tin::all();
        return view('Admin.pageAdmin.listNews', ['data'=>$data]);
    }
    function editNews($id){
        $t = Tin::find($id);
        $lt = DB::table('loaitin')->where('anHien', '=', 1)->get();
        return view('Admin.pageAdmin.editNews', ['t'=>$t,'lt'=>$lt]);
    }
    function editNews_(Request $request,$id){
        $t = Tin::find($id);
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->noiDung = $_POST['noiDung'];
        $t->idLT = $_POST['idLT'];
        $t->anHien = $_POST['anHien'];
        if($request->file('urlHinh')){
            Storage::delete(['file', 'otherFile']);
            $hinh = $request->urlHinh->store('img');
            $t->urlHinh = $hinh;
        }
        $t->save();
        $alert='Cập nhật Bài Viết thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/editNews');
    }
    function deleteNews($id){
        $lt = Tin::find($id);
        $lt->delete();
        $alert = 'Xóa Bài Viết thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/listNews');
    }
// TAGS------------------------------
    function addTags(){
        $tin = DB::table('tin')->where('anHien', '=', 1)->get();
        // dd($tin);
        return view('Admin.pageAdmin.addTags', ['tin'=> $tin]);
    }
    function addTags_(){
        $tags = new Tags();
        $tags->noiDung = $_POST['noiDung'];
        $tags->idTin = $_POST['idTin'];
        $tags->anHien = $_POST['anHien'];
        $tags->save();
        $alert='Thêm Tags thành công!';return redirect()->back()->with('alert',$alert); 
    }
    function listTags(){
        $tags = Tags::all();
        return view("Admin.pageAdmin.listTags", ["tags"=>$tags]);
    }
    function editTags($id){
        $tags = Tags::find($id);
        $tin = DB::table('tin')->where('anHien', '=', 1)->get();
        return view("Admin.pageAdmin.editTags", ['tags'=>$tags,'tin'=>$tin ]);
    }
    function editTags_($id){
        $tags = Tags::find($id);
        $tags->noiDung = $_POST['noiDung'];
        $tags->idTin = $_POST['idTin'];
        $tags->anHien = $_POST['anHien'];
        $tags->save();
        $alert='Cập nhật Tags thành công!';return redirect()->back()->with('alert',$alert); 
        return redirect('/admin/editNews');
    }
    function deleteTags($id){
        $tags = Tags::find($id);
        $tags->delete();
        $alert = 'Xóa Tags thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/listTags');
    }
// LOẠI TIN------------------------
    function addLTin(){
        return view('Admin.pageAdmin.addLTin');
    }
    function addLTin_(){
        $lt = new LTin();
        $lt->ten = $_POST['tenLTin'];
        $lt->idanHien = $_POST['anHien'];
        $lt->save();
        $alert='Thêm Loại Tin thành công!';return redirect()->back()->with('alert',$alert);
    }
    function listLTin(){
        $data = LTin::all();
        return view('Admin.pageAdmin.listLTin', ['data' => $data]);
    }
    function editLTin($id){
        $data = LTin::find($id);
        return view('Admin.pageAdmin.editLTin', ['data'=> $data]);
    }
    function editLTin_($id){
        $lt = LTin::find($id);
        $lt->ten = $_POST['tenLTin'];
        $lt->anHien = $_POST['anHien'];
        $lt->save();
        $alert = 'Cập nhật Loại Tin thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/editLTin');
    }
    function deleteLTin($id){
        $lt = LTin::find($id);
        $lt->delete();
        $alert = 'Xóa Loại Tin thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/listLTin');
    }
// BÌNH LUẬN------------
    function listBL(){
        $bl = BinhLuan::all();
        return view('Admin.pageAdmin.listBL', ['bl'=>$bl]);
    }
    function editBL_($id){
        $bl = BinhLuan::find($id);
        if($bl->anHien == 0){
            $bl->anHien = 1;
        }else{
            $bl->anHien = 0;
        }
        $bl->save();
        return redirect('/admin/listBL');
    }
    function deleteBL($id){
        $bl = BinhLuan::find($id);
        $bl->delete();
        $alert = 'Xóa Bình Luận thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('/admin/listBL');
    }
//USER-----------------------------------------------
    function listUser(){
        $user = User::all();
        return view('Admin.pageAdmin.listUser', ['user'=>$user]);
    }
    function editUser($id){
        $user = User::find($id);
        return view('Admin.pageAdmin.editUser',['user'=>$user]);
    }
    function editUser_(Request $request,$id){
        $user = User::find($id);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->vai_tro = $_POST['vaitro'];
        if($request->file('urlHinh')){
            $imgname = $request->file('urlHinh')->store('img');
            $user->urlHinh = $imgname;
        }
        $user->save();
        $alert = 'Cập nhật USER thành công!';return redirect()->back()->with('alert',$alert);
        return view('Admin.pageAdmin.editUser');
    }
    function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        $alert = 'Xóa USER thành công!';return redirect()->back()->with('alert',$alert);
        return view('Admin.pageAdmin.editUser');
    }

}
