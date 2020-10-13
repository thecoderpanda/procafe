<?php

namespace App\Http\Controllers\Admin;


use App\Application;
use App\Http\Controllers\Controller;
use App\models\Setting;
use App\Models\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ApplicationController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function update_account(Request $request){

        $data = request()->validate([
            'application_name'=>'required',
            'application_email'=>'required',
            'currency_symbol'=>'required',
            'contact_no'=>'required',
            'address'=>'required'
        ]);
        if($request->application_logo !=NULL) {
            $url = $request->file("application_logo")->store('public/account');
            $data['application_logo'] = str_replace("public","storage",$url);
        }else{
            $data['application_logo'] = Application::all()->first()->application_logo;
        }
        if(Application::all()->count()>0)
        {
            if($request->application_logo !=NULL) {
                Storage::delete(str_replace("storage", "public", Application::all()->first()->application_logo));
            }
                Application::destroy(Application::all()->first()->id);
        }
        if(Application::create($data))
            return back()->with("MSG","Record added successfully")->with("TYPE", "success");
        }

        public function update_payment_settings(Request $request){
            $data = $request;
            $data['1'] = isset($request['1']) ? 1:0;
            unset($data['_token']);
//            return $data;
//            return array_count_values($data);


            Setting::whereId(1)->update(['value'=>$data[1]]);
            Setting::whereId(2)->update(['value'=>$data[2]]);
            Setting::whereId(3)->update(['value'=>$data[3]]);
            Setting::whereId(4)->update(['value'=>$data[4]]);

            return back()->with("MSG","Record update successfully")->with("TYPE", "success");


        }

        public function update_account_settings(Request $request){

            $data = request()->validate([
                'name'=>'required',
                'email' => 'unique:users,email,'.auth()->id()
            ]);

            if($request->password == NULL)
                unset($data['password']);
            else
                $data['password'] = Hash::make($request['password']);

            if(User::whereId(auth()->id())->update($data)) {
                return back()->with("MSG", "Account Settings Updated Successfully.")->with("TYPE", "success");
            }

        }


}
