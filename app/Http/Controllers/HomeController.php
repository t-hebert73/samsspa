<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function sendContactForm(Request $request){
        
        $this->validate($request, [
            'email' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();
        $toEmail = 'samsspathorold@gmail.com';
        $toName = 'Sam Venditti';

        Mail::send(['html' => 'contact-email'], ['email' => $data['email'], 'phone' => $data['phone'], 'comment' => $data['message']], function($message) use ($toEmail, $toName)
        {
            $message->to($toEmail, $toName);
            $message->from('samsspathorold@gmail.com');

            $message->subject('Contact Form Submission');
        });

        echo json_encode(array(
            'status' => 'success',
            'message' => "Thanks for the email! We will respond as soon as we can."
        ));
    }


}
