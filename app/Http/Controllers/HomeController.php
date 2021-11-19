<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Models\Subscribers;
use App\Models\Vehicle;
use App\Models\Brands;
use App\Models\Booking;
use App\Models\Payment;
use DateTime;

class HomeController extends Controller
{
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
    public function gethome()
    {
        $cars = Vehicle::latest()->paginate(6);
        return view('client.home',['cars'=>$cars]);   
    }
    function getabout(){
        $testimonies = Testimonial::all();

        return view('client.about',['testimonies'=>$testimonies]);
    }function getContact()
    {     
        return view('client.contact');
    }function getCarListings()
    {     
        $total = Vehicle::count('PricePerDay');
        $cars = Vehicle::all();
        $brands = Brands::all();
        $user_Id = Auth::user()->userId;
        $bookings = DB::table('bookings')
            ->join('vehicles', 'bookings.VehicleId', '=', 'vehicles.VehicleId')
            ->join('users', 'users.userId', '=', 'bookings.user_userId')
            ->select('vehicles.*','bookings.*','users.*')
            ->where('bookings.user_userId',$user_Id)->get();
            $bookings->transform(function($i) {
                return (array)$i;
            });
            $array = $bookings->toArray();
        return view(
            'client.carlisting',
            [
                'cars'=>$cars,'brands'=>$brands,
                'total'=>$total,
                'bookings'=>$array
            ]
        );
    }
    function getCarDetails($id)
    {  
        try{
            // $user = DB::table('users')->where('name', 'John')->first();

            $car = Vehicle::find($id);
            $branId = $car->brandId;
            $brand = Brands::find($branId);
            $vehicles = $brand->vehicles;
            return view('client.cardetails',['car'=>$car, 'vehicles'=>$vehicles]);
        }
        catch(Exception $e){
                $notification = array(
                    'message' => 'Ooops!!! Something went, Try again Later', 
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            
        }
    }
    function getChangePassword()
    {     
        return view('client.changepassword');
    }
    function getleavetestmonial()
    {    
        return view('client.leavetestimonial');
    }
    function getMyBookings(){   
        $user_Id = Auth::user()->userId;
        $bookings = DB::table('bookings')
            ->join('vehicles', 'bookings.VehicleId', '=', 'vehicles.VehicleId')
            ->join('users', 'users.userId', '=', 'bookings.user_userId')
            ->select('vehicles.*','bookings.*','users.*')
            ->where([
                'bookings.user_userId'=>$user_Id,
                'bookings.duration'=> false
            ])->get();
            $bookings->transform(function($i) {
                return (array)$i;
            });
            $array = $bookings->toArray();
            $count = count($array);
            if($count > 0){

                // dd($array);  
                return view('client.mybookings',['bookings'=>$array]);
            }
            else{
                return view('client.mybookings',['bookings'=>$array])->with('error','No Cars booked yet');

            }
    }
    function getMyTestimonials(){   $user_Id = Auth::user()->userId;
        $testimonies = $bookings = DB::table('testimonials')
                        ->select('testimonials.*')
                        ->where('user_userId', $user_Id)->get();

        return view('client.mytestimonials',['testimonies'=>$testimonies]);
    }
    function getProfile(){    
        return view('client.profile');
    }
    function getPayments(){
        $user_Id = Auth::user()->userId;
        $total = 0;
        $days = 0;
        $bookings = DB::table('bookings')
            ->join('vehicles', 'bookings.VehicleId', '=', 'vehicles.VehicleId')
            ->join('users', 'users.userId', '=', 'bookings.user_userId')
            ->select('vehicles.*','bookings.*','users.*')
            ->where([
                'bookings.status'=>true,
                'bookings.duration'=>false,
                'bookings.user_userId'=>$user_Id,


                ])->get();
            $bookings->transform(function($i) {
                return (array)$i;
            });
        
            $array = $bookings->toArray();
            $count = count($array);
            if($count > 0){
                foreach ($array as $book) {
                    # code...
                    $fdate = $book['bookingDate'];
                    $tdate = $book['returnDate'];
                    $first_datetime = DateTime::createFromFormat('d-m-Y', $fdate);
                    $last_datetime = DateTime::createFromFormat('d-m-Y', $tdate);
                    $interval = ($first_datetime->diff($last_datetime))->d;
    
                    $car_price =  $book['PricePerDay'];
                    $amount = $interval * $car_price;
                    $item_amount=number_format($amount);
                    $total += $amount;
                    $amounts=number_format($total);
                    
                    
                }
                return view('client.payments',[
                    'amounts'=>$amounts,
                    'amount'=>$amount,
                    'item_amount'=>$item_amount,
                    'items_count'=>$count,
                    'items'=>$array
                ]);

            }
            else{
                $notification = array(
                    'message' => 'No approved booking by the admin\n Please wait until approved.\n Thank You !!!', 
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            }
            
            
        
        
    }
    function PostSearch(Request $req){
        $search_value = $req['searchTxt'];
        $cars = Vehicle::where('VehiclesTitle','like','%'.$search_value.'%')->get();
        // $cars = DB::table('vehicles')
        //     ->select('vehicles.*')
        //     ->where([
        //         'vehicles.VehiclesTitle'=>$search_value,
        //         ])->get();
        dd($cars);
        if(count($cars) > 0)
            return view('client.search',['cars'=>$cars ]);
        else 
            return view ('client.search')->withMessage('No Details found. Try to search again !');
        }


    ////////////////////////////////////POST FUNCS///////////////////////////////
    function postProfile(Request $req)
    {    
        $userId = auth::user()->userId;
            DB::table('users')
                ->where('userId', $userId)
                ->update([
                    'contact' =>$req['mobile'],
                    'dob' =>$req['dob'],
                    'address' =>$req['address'],
                    'city' =>$req['city'],
                    'country' =>$req['country'],
                    
                ]);
                $notification = array(
                    'message' => 'Your profile successfully updated', 
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
        
        
    }
    function postleavetestmonial(Request $req)
    { 
        $userId = auth::user()->userId;
        $username = auth::user()->username;
        $user = User::find($userId);
        $testimony = new Testimonial();
        $testimony->username = $username;
        $testimony->testimonial = $req['testimonial'];
        $testimony->status = true;
        $user->testimonies()->save($testimony);
        $notification = array(
            'message' => 'Testimony Saved ', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    function postContactForm(Request $req){     
        $userId = auth::user()->userId;
        $user = User::find($userId);
        $message = new ContactMessage();
        $message->fullName = $req['fullname'];
        $message->email = $req['email'];
        $message->contact = $req['contactno'];
        $message->message = $req['message'];
        $user->feedbacks()->save($message);
        $notification = array(
            'message' => 'Thank you for your leaving us a message', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function postSubscribers(Request $req)
    {
        $userId = auth::user()->userId;
        $user = User::find($userId);
        $subscriber = new Subscribers();
        $subscriber->subscriberEmail = $req['subscriberemail'];
        $user->subscribers()->save($subscriber);
        $notification = array(
            'message' => 'Subscribed Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function postBookCar(Request $req, $id)
    { 
        try{
            $car = Vehicle::find($id);
            $carID = $car->VehicleId;
            $userId = auth::user()->userId;
            $user = User::find($userId);
            $useremail = $user->email;
            $username = $user->username;
            $booking = new Booking();
            $booking->userEmail = $useremail;
            $booking->user_name = $username;
            $booking->VehicleId = $carID;
            $booking->user_userId = $userId;
            $booking->bookingDate = $req['fromdate'];
            $booking->returnDate = $req['todate'];
            $booking->status = false;
            $booking->duration = false;
            $booking->message = $req['message'];
            $booking->save();
            $notification = array(
                'message' => 'Car added to booked', 
                'alert-type' => 'success'
            );
            return redirect('/my-bookings')->with($notification);
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Ooops!!! Something went Wrong, Booking failed', 
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        
        }



    }
    public function getCancelBooking($id)
    { 
        $booking = Booking::Find($id);
        $booking->delete();
        $notification = array(
            'message' => 'Car removed from booked', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function postPayments(Request $req)
    {
        $user_Id = Auth::user()->userId;
        $payment = new Payment();
        $payment->user_userId = $user_Id;
        $payment->bookingId = $req['bookid'];
        $payment->firstName = $req['fname'];
        $payment->lastName = $req['lname'];
        $payment->paymentAmount = $req['amounts'];
        $payment->address = $req['address'];
        $payment->Contact = $req['contact'];
        $payment->payment_method = $req['paymentMethod'];
        $payment->status = false;
        // dd($payment);
        $payment->save();
        $booking = Booking::Find($req['bookid']);
        $booking->duration = true;
        $booking->save();
        $notification = array(
            'message' => 'Payments made successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    


    

    



}
