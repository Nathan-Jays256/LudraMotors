<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brands;
use App\Models\Booking;
use App\Models\User;
use App\Models\ContactMessage;
use App\Models\Testimonial;
use App\Models\Subscribers;
use App\Models\Payment;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function getDashboard()
    { 
        $user_total = User::count('username');  
        $car_total = Vehicle::count('PricePerDay');  
        $booking_total = Booking::count('bookingId');  
        $brands_total = Brands::count('brandId');  
        $feeds_total = ContactMessage::count('ID');  
        $testimony_total = Testimonial::count('ID');  
        $subscribers_total = Subscribers::count('ID');  
        $payments_total = Payment::count('paymentId');  
        return view('Admin.dashboard',[
            'car_total'=>$car_total,
            'user_total'=>$user_total,
            'booking_total'=>$booking_total,
            'brands_total'=> $brands_total,
            'feeds_total'=>$feeds_total,
            'testimony_total'=>$testimony_total,
            'subscribers_total'=>$subscribers_total,
            'payments_total'=> $payments_total 
        ]);
    }
    function getcreateCar()
    {     
        $brands = Brands::all();
        return view('Admin.createcar', ['brands'=>$brands]);
    }
    function getmanagecars()
    {   $cars = Vehicle::all();
        $count = Vehicle::count('PricePerDay'); 
        return view('Admin.managecars', ['cars'=>$cars,'count'=>$count ]);
    }
    function getDeleteCar($id)
    { 
        $car = Vehicle::Find($id);
        $car->delete();
        $notification = array(
            'message' => 'Vehicle deleted', 
            'alert-type' => 'warning'
        );
        return redirect()-> back()->with($notification);
    }
    function getcreateBrand()
    {     
        return view('Admin.create-brand');
    }
    function getmanageBrand()
    {     
        $brands = Brands::all();
        return view('Admin.manage-brand',['brands'=>$brands]);
    }
    function getDeleteBrand($id)
    { 
        $brand = Brands::Find($id);
        $brand->delete();
        $notification = array(
            'message' => 'Car brand deleted', 
            'alert-type' => 'warning'
        );
        return redirect()-> back()->with($notification);
    }
    
    function getManageBookings()
    {     
        $bookings = Booking::all();
        return view('Admin.manageBooking',['bookings'=>$bookings]);
    }
    function getDeleteBookings($id)
    { 
        $booking = Booking::Find($id);
        $booking->delete();
        $notification = array(
            'message' => 'Booking deleted', 
            'alert-type' => 'warning'
        );
        return redirect()-> back()->with($notification);
    }
    function getManagePayments()
    {     
        $payments = Payment::all();
        return view('Admin.managepayments',['payments'=>$payments]);
    }
    
    function getRegUsers()
    {     
        $users = User::all();
        return view('Admin.manageUsers',['users'=>$users]);
    }
    
    function getClientFeedbacks()
    {     
        $Feeds = ContactMessage::all();
        return view('Admin.manageFeedbacks',['feeds'=>$Feeds]);
    }
    function getFeedbacksDetails($id)
    { 
        $message = ContactMessage::Find($id);
        return view('Admin.feedbackdetails',['message'=>$message]);
    }
    
    function getManageTestimonials()
    {     
        $testimonies = Testimonial::all();
        return view('Admin.manageTestimonials',['testimonies'=>$testimonies]);
    }
    function getDeleteTestimony($id)
    { 
        $testimony = Testimonial::Find($id);
        $testimony->delete();
        $notification = array(
            'message' => 'Testimony deleted', 
            'alert-type' => 'warning'
        );
        return redirect()-> back()->with($notification);
    }
    function getTestimonialDetails($id)
    { 
        $testimony = Testimonial::Find($id);
        return view('Admin.testimonialdetails',['testimony'=>$testimony]);
    }
    
      
    function getManageSubscribers()
    {     
        $subscribers = Subscribers::all();
        return view('Admin.manageSubscribers',['subscribers'=>$subscribers]);
    }
    function getAdminLogin()
    { 
        return view('Admin.login-Admin');
     } 
    function getChangePassword(){
        return view('Admin.changepassword');
    }

    

    /////////////////////////////////////POST METHODS///////////////////

    function postChangePassword(Request $req)
    { 
        $oldpass = $req['oldpass'];
        $newpass = $req['newpass'];
        $confirm = $req['confirm'];
        $id = Session::get('user')['adminId'];
        // dd($id);
        $admin = Admin::Find($id);
        if($newpass != $confirm ){
            $notification = array(
                'message' => 'Passwords donot match!!!', 
                'alert-type' => 'error'
            );
            return redirect()-> back()->with($notification);
        }
        else{
            if(!$admin){
                $notification = array(
                    'message' => 'Wrong Password', 
                    'alert-type' => 'error'
                );
                return redirect()-> back()->with($notification);
            }
            else{
                $admin->password = $newpass;
                $admin->save();
                $notification = array(
                    'message' => 'Password changed Successfully!!', 
                    'alert-type' => 'success'
                );
                return redirect('/admin')->with($notification);
            }
        }
        


    }
    function AdminLogout(Request $req)
    { 
        Session::forget('user');
        return redirect('/admin');  
    }
    function postAdminLogin(Request $req)
    { 
        $username = $req['username'];
        $pass = $req['pass'];
        $user = Admin::where
        ([
            'username'=>$username,
            'password'=>$pass,
        ])->first();
        if(!$user){
            $notification = array(
                'message' => 'Incorrect Password', 
                'alert-type' => 'error'
            );
            return redirect()-> back()->with($notification);
        }
        else{
            $req->session()->put('user', $user);
            $notification = array(
                'message' => 'Logged in as '.$username, 
                'alert-type' => 'success'
            );
            return redirect('/admin-dashboard')->with($notification);
        }

    }    
    function postcreateBrand(Request $req)
    {     
        $brand = new Brands;
        $brand -> brandName =  $req->input('brand');
        $brand->save();
        $notification = array(
            'message' => 'Vehicle Brand created.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

        
    }
    function postcreateCar(Request $req)
    {     
        try{
            $req->validate([
                'img1' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'img2' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'img3' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'img4' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                'img5' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
                           
                ]);
                
    
                if($file = $req->hasFile('img1')) {
                    $file = $req->file('img1') ;
                    $fileName = $file->getClientOriginalName() ;
                    $destinationPath = public_path().'/uploads/carImages';
                    $file->move($destinationPath, $fileName);
    
                }    
                if($file1 = $req->hasFile('img2')) {
                    $file1 = $req->file('img2') ;
                    $fileName1 = $file1->getClientOriginalName() ;
                    $destinationPath = public_path().'/uploads/carImages';
                    $file1->move($destinationPath, $fileName1);
    
                };
        
                    if($file2 = $req->hasFile('img3')) {
                        $file2 = $req->file('img3') ;
                        $fileName2 = $file2->getClientOriginalName() ;
                        $destinationPath = public_path().'/uploads/carImages';
                        $file2->move($destinationPath, $fileName2);
        
                    }
                    if($file3 = $req->hasFile('img4')) {
                        $file3 = $req->file('img4') ;
                        $fileName3 = $file3->getClientOriginalName() ;
                        $destinationPath = public_path().'/uploads/carImages';
                        $file3->move($destinationPath, $fileName3);
        
                    }
                    if($file4 = $req->hasFile('img5')) {
                        $file4 = $req->file('img5') ;
                        $fileName4 = $file4->getClientOriginalName() ;
                        $destinationPath = public_path().'/uploads/carImages';
                        $file4->move($destinationPath, $fileName4);
        
                    }

                # code...
                $brand = $req->input('brandname');
                $vehicle = Vehicle::create([
                    'brandId'=> $brand,
                    'VehiclesTitle'=> $req->input('vehicletitle'),
                    'VehiclesOverview'=> $req->input('overview'),
                    'PricePerDay'=> $req->input('priceperday'),
                    'FuelType'=> $req->input('fueltype'),
                    'ModelYear'=> $req->input('modelyear'),
                    'SeatingCapacity'=> $req->input('seatingcapacity'),
                    'Vimage1'=> $fileName,
                    'Vimage2'=> $fileName1,
                    'Vimage3'=> $fileName2,
                    'Vimage4'=> $fileName3,
                    'Vimage5'=> $fileName4,
                    'AirConditioner'=> $req->input('airconditioner') ? true : false,
                    'PowerDoorLocks'=> $req->input('powerdoorlocks') ? true : false,
                    'AntiLockBrakingSystem'=> $req->input('antilockbrakingsys') ? true : false,
                    'BrakeAssist'=> $req->input('brakeassist') ? true : false,
                    'PowerSteering'=> $req->input('powersteering') ? true : false,
                    'DriverAirbag'=> $req->input('driverairbag') ? true : false,
                    'PassengerAirbag'=> $req->input('passengerairbag') ? true : false,
                    'CDPlayer'=> $req->input('cdplayer') ? true : false,
                    'CentralLocking'=> $req->input('centrallocking') ? true : false,
                    'CrashSensor'=> $req->input('crashcensor') ? true : false,
                    'LeatherSeats'=> $req->input('leatherseats') ? true : false
                    
                    
                ]);

            
                $notification = array(
                    'message' => 'Vehicle created successfully!. ', 
                    'alert-type' => 'success'
                );
                return redirect()-> back()->with($notification);
            }
            catch(Exception $e){
                $notification = array(
                    'message' => 'Ooops!!! Something went, Try again Later', 
                    'alert-type' => 'warning'
                );
            }
    }
    function postApproveBooking($id){
        $booking = Booking::Find($id);
        $booking->status = true;
        $booking->save();
        $notification = array(
            'message' => 'Booking Approved', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
    function postDispproveBooking($id){
        $booking = Booking::Find($id);
        $booking->status = false;
        $booking->save();
        $notification = array(
            'message' => 'Booking disapproved', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    function postConfirmPayment($id){
        $payment = Payment::Find($id);
        $payment->status = true;
        $payment->save();
        $notification = array(
            'message' => 'Payment Confirmed', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        
    }
    
}
