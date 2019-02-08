<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('index');
    }
    public function getpos(){
        return 'pos list';
    }
    public function createpo(){
        return View('createpo');
    }
    public function changepasswordform(){
        return View('changepasswordform');
    }
    public function changepassword(Request $request){

       $user_id = Auth::user()->id;
        if($request->input('new_password')!=$request->input('c_password')){
            return back()->with('error','Confirm Password must be same as Password!');
        }
        else{
            if($user = DB::table('admins')->where('id', $user_id)->where('password',Hash::make($request->input('old_password')))->first()){
                if(DB::table('admins')->where(['id' => $user_id])->first()->update(['password' => Hash::make($request->input('new_password'))])){
                    return back()->with('error','Password updated successfully!');
                }
            }
            else{
                return back()->with('error','Your  Password does not match your account!');
            }
        }

    }
    public function addpo(Request $request){
        if(DB::table('pos')->insert([
            'po_name' => $request->input('po_name'),
            'password' => Hash::make($request->input('password')),
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
        ])){
            return back()->with('success','POS Added successfully!');
        }
        else{
            return back()->with('error','Something went wrong!');
        }


    }

}