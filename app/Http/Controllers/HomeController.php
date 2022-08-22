<?php

namespace App\Http\Controllers;

use App\Mail\Form as MailForm;
use App\Models\BinhLuan;
use App\Models\Form;
use App\Models\LTin;
use App\Models\Tin;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class HomeController extends Controller
{
    // TRANG HOME 
    function home()
    {
        $tin = DB::select("SELECT tin.*,users.name FROM tin, users WHERE tin.idUser = users.id AND tin.anHien = 1 LIMIT 6");
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        $user = User::all();
        $a1 = DB::select('SELECT tin.*,loaitin.ten, users.name FROM tin,loaitin,users WHERE tin.idLT = loaitin.id AND tin.idUser = users.id AND tin.idLT = 3 AND tin.anHien = 1 ORDER BY xem DESC LIMIT 1');
        $a2 = DB::select('SELECT tin.*,loaitin.ten, users.name FROM tin,loaitin,users WHERE tin.idLT = loaitin.id AND tin.idUser = users.id AND tin.idLT = 4 AND tin.anHien = 1 ORDER BY xem DESC LIMIT 1');
        $a3 = DB::select('SELECT tin.*,loaitin.ten, users.name FROM tin,loaitin,users WHERE tin.idLT = loaitin.id AND tin.idUser = users.id AND tin.idLT = 9 AND tin.anHien = 1 ORDER BY xem DESC LIMIT 1');
        $a4 = DB::select('SELECT tin.*,loaitin.ten, users.name FROM tin,loaitin,users WHERE tin.idLT = loaitin.id AND tin.idUser = users.id AND tin.idLT = 79 AND tin.anHien = 1 ORDER BY xem DESC LIMIT 1');
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        // dd($a1);
        return view('client.page.TrangChu', ['tin' => $tin,'a1' => $a1,'a2' => $a2,'a3' => $a3,'a4' => $a4, 'ltin' => $ltin, 'tags' => $tags, 'popular' => $popular, 'user' => $user]);
    }
    function search()
    {
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        $keyword = $_GET['keyword'];
        $tin = DB::select("SELECT tin.*,users.name FROM tin, users WHERE tin.idUser = users.id AND tin.anHien = 1 AND tin.tieuDe LIKE '%$keyword%' ");
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        return view('client.page.TrangChu', ['tin' => $tin, 'ltin' => $ltin, 'tags' => $tags,'popular' => $popular]);
    }
    function search_category($id)
    {
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        $tin = DB::select("SELECT tin.*,users.name FROM tin, users WHERE tin.idUser = users.id AND tin.anHien = 1 AND tin.idLT =".$id);
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        return view('client.page.TrangChu', ['tin' => $tin, 'ltin' => $ltin, 'tags' => $tags,'popular' => $popular]);
    }
    function search_tags($id)
    {        
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        $tin = DB::select('SELECT tin.*,users.name,tags.noiDung FROM tin,tags,users WHERE tin.id = tags.idTin 
        AND tin.idUser = users.id AND tin.anHien = 1 AND tags.anHien = 1 AND tags.id ='.$id);
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        return view('client.page.TrangChu', ['tin' => $tin, 'ltin' => $ltin, 'tags' => $tags,'popular' => $popular]);
    }
    function about()
    {
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        return view('client.page.about', ['popular' => $popular]);
    }
    function contact(){
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        return view('client.page.contact', ['popular' => $popular]);
    }
    function contact_(){
        $form = new Form();
        $form->name = $_POST['name'];
        $form->email = $_POST['email'];
        $form->noiDung = $_POST['noiDung'];
        $form->save();
        Mail::to("duhqpc02016@fpt.edu.vn")->send(new MailForm());
        $alert='Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!';return redirect()->back()->with('alert',$alert);
    }
    // TRANG TIN TỨC 
    function category()
    {
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 4');
        $tin = DB::select("SELECT tin.id, tin.tieuDe, tin.tomTat, tin.urlHinh, tin.ngayDang, tin.noiDung, tin.idLT, tin.idUser,
            tin.xem, tin.anHien,users.name FROM tin, users WHERE tin.idUser=users.id AND tin.anHien = 1");
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        return view('client.page.TrangChu', ['tin' => $tin, 'ltin' => $ltin, 'tags' => $tags,'popular' => $popular]);
    }
    // function listBlog()
    // {
    //     $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
    //     return view('client.page.listBlog');
    // }
    function Detail($id)
    {
        $popular = DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
        FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 5');
        $listBL = DB::select('SELECT * FROM binhluan WHERE idTin = ' . $id);
        $countBL = DB::select('SELECT COUNT(idTin) AS "Count" FROM binhluan WHERE idTin =' . $id);
        $tags = DB::table('tags')->where('anHien', '=', 1)->get();
        $tagsNews = DB::select('SELECT * FROM `tags` WHERE anHien = 1  AND idTin ='.$id);
        // dd($tagsNews);
        $ltin = DB::table('loaitin')->where('anHien', '=', 1)->get();
        $luotXem = 1;
        $ctTin = Tin::find($id);
        $ctTin_inf = DB::select("SELECT tin.*,users.name FROM tin, users WHERE tin.idUser=users.id AND tin.id =$id");
        $ctTin->xem += $luotXem;
        $ctTin->save();
        return view('client.page.blogDetail', ['ctTin' => $ctTin_inf[0], 'tagsNews' => $tagsNews,'ltin' => $ltin, 'listBL' => $listBL, 'countBL' => $countBL, 'tags' => $tags, 'popular' => $popular]);
    }
    function addBL($id)
    {
        if (isset($_POST['btn'])) {
            $addBL = new BinhLuan();
            $addBL->idTin = $id;
            $addBL->noiDung = $_POST['noiDung'];
            $addBL->hoTen = Auth::User()->name;
            $addBL->hinh = Auth::User()->urlHinh;
            // dd($addBL->hinh);
            $addBL->save();
            $alert = 'Bình luận thành công!';
            return redirect()->back()->with('alert', $alert);
            $ctTin = Tin::find($id);
            $ltin = LTin::all();
            $luotXem = 1;
            $ctTin->xem += $luotXem;
            $ctTin->save();
            return view('client.page.blogDetail', ['ctTin' => $ctTin, 'ltin' => $ltin]);
        } else {
            $ctTin = Tin::find($id);
            $ltin = LTin::all();
            $luotXem = 1;
            $ctTin->xem += $luotXem;
            $ctTin->save();
            return view('client.page.blogDetail', ['ctTin' => $ctTin, 'ltin' => $ltin]);
        }
    }
    // function popular(){
    //     $a = Tin::all()->sortByDesc("xem");
    //     $popular = DB::select('SELECT * FROM tin ORDER BY xem DESC LIMIT 2');
    //     return view('')
    // }


    // ĐĂNG NHẬP ĐĂNG KÍ
    function login()
    {
        return view('client.page.login');
    }
    function register()
    {
        return view('client.page.register');
    }
}
