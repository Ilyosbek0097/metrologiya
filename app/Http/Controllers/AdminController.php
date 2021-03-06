<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Shablon;
use Illuminate\Http\Request;

use PDF;


class AdminController extends Controller
{
    function index(){

        return view('dashboards.admins.index');
       }

       function profile(){
           return view('dashboards.admins.profile');
       }
       function settings(){
           return view('dashboards.admins.settings');
       }

       function updateInfo(Request $request){

               $validator = \Validator::make($request->all(),[
                   'name'=>'required',
                   'email'=> 'required|email|unique:users,email,'.Auth::user()->id,
                   'favoritecolor'=>'required',
               ]);

               if(!$validator->passes()){
                   return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
               }else{
                    $query = User::find(Auth::user()->id)->update([
                         'name'=>$request->name,
                         'email'=>$request->email,
                         'favoriteColor'=>$request->favoritecolor,
                    ]);

                    if(!$query){
                        return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
                    }else{
                        return response()->json(['status'=>1,'msg'=>'Your profile info has been update successfuly.']);
                    }
               }
       }

       function updatePicture(Request $request){
           $path = 'users/images/';
           $file = $request->file('admin_image');
           $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

           //Upload new image
           $upload = $file->move(public_path($path), $new_name);

           if( !$upload ){
               return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
           }else{
               //Get Old picture
               $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

               if( $oldPicture != '' ){
                   if( \File::exists(public_path($path.$oldPicture))){
                       \File::delete(public_path($path.$oldPicture));
                   }
               }

               //Update DB
               $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);

               if( !$upload ){
                   return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
               }else{
                   return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
               }
           }
       }


       function changePassword(Request $request){
           //Validate form
           $validator = \Validator::make($request->all(),[
               'oldpassword'=>[
                   'required', function($attribute, $value, $fail){
                       if( !\Hash::check($value, Auth::user()->password) ){
                           return $fail(__('The current password is incorrect'));
                       }
                   },
                   'min:8',
                   'max:30'
                ],
                'newpassword'=>'required|min:8|max:30',
                'cnewpassword'=>'required|same:newpassword'
            ],[
                'oldpassword.required'=>'Enter your current password',
                'oldpassword.min'=>'Old password must have atleast 8 characters',
                'oldpassword.max'=>'Old password must not be greater than 30 characters',
                'newpassword.required'=>'Enter new password',
                'newpassword.min'=>'New password must have atleast 8 characters',
                'newpassword.max'=>'New password must not be greater than 30 characters',
                'cnewpassword.required'=>'ReEnter your new password',
                'cnewpassword.same'=>'New password and Confirm new password must match'
            ]);

           if( !$validator->passes() ){
               return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
           }else{

            $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

            if( !$update ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
            }
           }
       }


       public function addshablon()
       {
           return view('dashboards.admins.addshablon');
       }
       public function addshablon_form(Request $req)
       {
           $shablon = new Shablon();
           $shablon->xizmat_nomi = $req->xizmat_nomi;
           $shablon->tartib_raqami = $req->tartib_raqami;
           $shablon->amal_qilish_muddati = $req->amal_qilish_muddati;
           $shablon->etalonlar_nomi = $req->etalonlar_nomi;
           $shablon->xujjat_belgilanishi = $req->xujjat_belgilanishi;
           $shablon->metrologik_xizmat_nomi = $req->metrologik_xizmat_nomi;
           $shablon->xizmat_egasi = $req->xizmat_egasi;
           $shablon->tayyorlovchi = $req->tayyorlovchi;
           $shablon->import_mamlakat = $req->import_mamlakat;
           $shablon->parametrlari_nomi = $req->parametrlari_nomi;
           $shablon->xatolik_chegaralari = $req->xatolik_chegaralari;
           $shablon->nomlanishi_zavod_raqami = $req->nomlanishi_zavod_raqami;
           $shablon->normativ_hujjat_nomi = $req->normativ_hujjat_nomi;
           $shablon->turining_tarifi = $req->turining_tarifi;
           $shablon->qiyoslovchi = $req->qiyoslovchi;
           $shablon->sanasi = $req->sanasi;

           $shablon->save();

           return redirect()->route('admin.addshablon');




       }
       public function allshablon()
       {
           $all_data = Shablon::all();
           //view("blog", compact("posts"));
           return view('dashboards.admins.allshablon',compact('all_data'));
       }
       public function download_pdf($id)
       {
           $path = base_path('124.jpg');
           $type = pathinfo($path, PATHINFO_EXTENSION);
           $data = file_get_contents($path);
           $pic = 'data:image/' . $type. ';base64,' . base64_encode($data);
           $shablon = Shablon::find($id);
           $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('dashboards.admins.pdfpage',compact('shablon','pic'));
            // $html = mb_convert_encoding($pdf, 'HTML-ENTITIES', 'UTF-8');
            // $html_decode = html_entity_decode($html);
           $pdf->setPaper('A4','portrait');
           return $pdf->download($id.'.pdf');
       }
       public function print_pdf($id)
       {
           $path = base_path('124.jpg');
           $type = pathinfo($path, PATHINFO_EXTENSION);
           $data = file_get_contents($path);
           $pic = 'data:image/' . $type. ';base64,' . base64_encode($data);
           $shablon = Shablon::find($id);
           $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('dashboards.admins.pdfpage',compact('shablon','pic'));
            // $html = mb_convert_encoding($pdf, 'HTML-ENTITIES', 'UTF-8');
            // $html_decode = html_entity_decode($html);
           $pdf->setPaper('A4','portrait');
           return $pdf->stream($id.'.pdf');
       }
      public function download_qrcode_pdf($id)
      {
        $path = base_path('124.jpg');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type. ';base64,' . base64_encode($data);
        $shablon = Shablon::find($id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('dashboards.admins.pdfpage',compact('shablon','pic'));
         // $html = mb_convert_encoding($pdf, 'HTML-ENTITIES', 'UTF-8');
         // $html_decode = html_entity_decode($html);
        $pdf->setPaper('A4','portrait');
        return $pdf->download($id.'.pdf');
      }
      public function edit_pdf($id)
      {
        $shablon = Shablon::find($id);
        return view('dashboards.admins.edit_pdf',compact('shablon'));
      }
      public function newedit_pdf($id)
      {
        $shablon = Shablon::find($id);
        return view('dashboards.admins.newedit_pdf',compact('shablon'));

      }
      public function edit_form($id,Request $req)
      {
        $shablon = Shablon::findOrFail($id);
        $shablon->xizmat_nomi = $req->xizmat_nomi;
        $shablon->tartib_raqami = $req->tartib_raqami;
        $shablon->amal_qilish_muddati = $req->amal_qilish_muddati;
        $shablon->etalonlar_nomi = $req->etalonlar_nomi;
        $shablon->xujjat_belgilanishi = $req->xujjat_belgilanishi;
        $shablon->metrologik_xizmat_nomi = $req->metrologik_xizmat_nomi;
        $shablon->xizmat_egasi = $req->xizmat_egasi;
        $shablon->tayyorlovchi = $req->tayyorlovchi;
        $shablon->import_mamlakat = $req->import_mamlakat;
        $shablon->parametrlari_nomi = $req->parametrlari_nomi;
        $shablon->xatolik_chegaralari = $req->xatolik_chegaralari;
        $shablon->nomlanishi_zavod_raqami = $req->nomlanishi_zavod_raqami;
        $shablon->normativ_hujjat_nomi = $req->normativ_hujjat_nomi;
        $shablon->turining_tarifi = $req->turining_tarifi;
        $shablon->qiyoslovchi = $req->qiyoslovchi;
        $shablon->sanasi = $req->sanasi;

        $shablon->save();
        return redirect()->route('admin.allshablon');
      }
      public function newedit_form(Request $req)
      {
        $shablon = new Shablon;
        $shablon->xizmat_nomi = $req->xizmat_nomi;
        $shablon->tartib_raqami = $req->tartib_raqami;
        $shablon->amal_qilish_muddati = $req->amal_qilish_muddati;
        $shablon->etalonlar_nomi = $req->etalonlar_nomi;
        $shablon->xujjat_belgilanishi = $req->xujjat_belgilanishi;
        $shablon->metrologik_xizmat_nomi = $req->metrologik_xizmat_nomi;
        $shablon->xizmat_egasi = $req->xizmat_egasi;
        $shablon->tayyorlovchi = $req->tayyorlovchi;
        $shablon->import_mamlakat = $req->import_mamlakat;
        $shablon->parametrlari_nomi = $req->parametrlari_nomi;
        $shablon->xatolik_chegaralari = $req->xatolik_chegaralari;
        $shablon->nomlanishi_zavod_raqami = $req->nomlanishi_zavod_raqami;
        $shablon->normativ_hujjat_nomi = $req->normativ_hujjat_nomi;
        $shablon->turining_tarifi = $req->turining_tarifi;
        $shablon->qiyoslovchi = $req->qiyoslovchi;
        $shablon->sanasi = $req->sanasi;

        $shablon->save();
        return redirect()->route('admin.allshablon');
      }
}
