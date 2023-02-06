<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Session;

class AppointmentController extends Controller
{
    public function index(){
        return view('app_management.index');
    }

    public function dashboard(){
        return view('app_management.dashboard');
    }
    public function allappointment(){
        $user = Appointment::paginate(10);
        return view('app_management.allappointment',[
            'user'=>$user
        ]);
    }

    public function allusers(){
        //select * from User
        $user = User::paginate(10);


        return view('app_management.allusers',[
            'user'=>$user
        ]);
    }
    public function approveappointment(){

        return view('app_management.approveappointment');
    }

    public function bookapp(){
        return view('app_management.bookapp');
    }

    public function abookapp(Request $request)
    {
//        $request->validate([
//            'name'=>'required',
//            'date'=>'required',
//            'time' => 'requires',
//            'appointmentreason' => 'required',
//        ]);

        $app = new Appointment();
        $app->name = $request->name;
        $app->date = $request->date;
        $app->time = $request->time;
        $app->appointmentreason = $request->appointmentreason;
        $app->status = 'pending';

        $res = $app->save();
        if($res){
            return back()->with('success', 'you have booked an appointment successfully');
        }else{
            return back()->with('fail', 'something went wrong');
        }
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status="approved";
        $data->save();
        return redirect()->back();
    }
    public function cancelled($id)
    {
        $data=appointment::find($id);
        $data->status="cancelled";
        $data->save();
        return redirect()->back();
    }
}
