<?php

namespace App\Http\Controllers;

use Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminBooking;
use App\Mail\Booking;
use App\Mail\Contact;
use App\Mail\Subscrible;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input())
        {

            // Retrieve the email template required
            // $admin_message = file_get_contents(url('public/assets/email/admin-template.html'));
            // $customer_message = file_get_contents(url('public/assets/email/customer-template.html'));

            ##################################################################################################################

            // Site Settings
            $site_title          = "Hotel Zante";
            $site_url            = "https://eagle-themes.com/zantehotel";
            $facebook_link       = "https://www.facebook.com/eaglethemescom";
            $twitter_link        = "https://twitter.com/";
            $admin_phone         = "18881234567";

            // Email Settings
            $admin_email         = "noreply@eagle-themes.com";
            $admin_subject       = "Hotel Zante - New Reservation";
            $customer_subject    = "Hotel Zante - Booking Details";

            // Output Messages
            $success_mssg        = "Your reservation has been submitted to us.<br> We'll contact you as quickly as possible.";
            $error_mssg          = "An error has occurred. Please check your PHP email configuration.";
            $email_mssg          = "Please enter a valid email!";
            $booking_date        = "You can't depart before you arrive";
            $empty_email         = "Email is empty!<br> Please enter something.";
            $empty_roomtype      = "Room Type is empty!<br> Please enter something.";
            $empty_checkin       = "Arrival Date is empty!<br> Please enter something.";
            $empty_checkout      = "Departure Date is empty!<br> Please enter something.";
            $empty_adults        = "Adults is empty!<br> Please enter something.";
            $empty_children      = "Children is empty!<br> Please enter something.";
            $empty_name          = "Name is empty!<br> Please enter something.";
            $empty_phone         = "Phone Number is empty!<br> Please enter something.";
            $empty_comments      = "Coomments section is empty!<br> Please enter something.";
            $empty_country       = "Country section is empty!<br> Please enter something.";

            ##################################################################################################################

            //Check if its an ajax request, exit if not
            if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

                //Exit script outputting json data
                $output = json_encode(
                array(
                    'type'=>'error',
                    'text' => 'Request must come from Ajax'
                ));

                die($output);
            }

            $request->validate([
                'booking_email'=>'email:rfc,dns',
               'booking_phone'=> 'required',
               'booking_name'=> 'required',
               'booking_checkin'=> 'required',

            ]);


             $sendemail_to_admin =Mail::to(env('AdminMail'))->queue(new AdminBooking($request->all()));

            $sendemail_to_customer = Mail::to($request->booking_email)->queue(new Booking($request->all()));


            if(!$sendemail_to_admin && $sendemail_to_customer)
            {
                $output = json_encode(array('type'=>'error', 'text' => $error_mssg));
                die($output);
            }else{
                $output = json_encode(array('type'=>'message', 'text' => $success_mssg));
                die($output);
            }

        }else{

            $output = json_encode(
                array(
                    'type'=>'error',
                    'text' => 'Request is empty.'
                ));

                die($output);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subcribe(Request $request)
    {
        $value = $request->validate([

            'user_message'=>'required',
            'user_email'=>'required'
        ]);


         Mail::to(env('AdminMail'))->queue(new Subscrible($request->all()));

        die(json_encode(array('type'=>'message', 'text' => 'Your message has been sent successfully. Thank you.')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactMain(Request $request)
    {
        $value = $request->validate([

            'user_name'=>'required',
                        'user_email'=>'required',
                        'user_message'=>'required',
                        'user_phone'=>'required',
                        'user_subject'=>'required',
        ]);


         Mail::to(env('AdminMail'))->queue(new Contact($request->all()));

        die(json_encode(array('type'=>'message', 'text' => 'Your message has been sent successfully. Thank you.')));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
