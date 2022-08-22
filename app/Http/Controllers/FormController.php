<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function listForm(){
        $fList = Form::all();
        return view('Admin.pageAdmin.contact.listForm',['fList'=>$fList]);
    }
    function deleteForm($id){
        $fList = Form::find($id);
        $fList->delete();
        $alert = 'Xóa Form thành công!';return redirect()->back()->with('alert',$alert);
        return redirect('Admin.pageAdmin.contact.listForm');
    }
    function profile($id){
        $user = User::find($id);
        // dd($user);
        return view('client.page.profile',['user'=>$user]);
    }
    function profile_(Request $request, $id){
        $user = User::find($id);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        if($request->file('urlHinh')){
            $imgname = $request->file('urlHinh')->store('img');
            $user->urlHinh = $imgname;
        }
        $user->save();
        $alert = 'Cập nhật thông tin thành công!';return redirect()->back()->with('alert',$alert);
        return view('client.page.profile',['user'=>$user]);
    }
    function profileA($id){
        $user = User::find($id);
        // dd($user);
        return view('Admin.pageAdmin.contact.profile',['user'=>$user]);
    }
    function profileA_(Request $request, $id){
        $user = User::find($id);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        if($request->file('urlHinh')){
            $imgname = $request->file('urlHinh')->store('img');
            $user->urlHinh = $imgname;
        }
        $user->save();
        $alert = 'Cập nhật thông tin thành công!';return redirect()->back()->with('alert',$alert);
        return view('Admin.pageAdmin.contact.profile',['user'=>$user]);
    }
}
