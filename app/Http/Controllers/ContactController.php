<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   // Show Contact Form
   public function showForm()
   {
       return view('contact');
   }

   // Handle Form Submission
   public function submitForm(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required|min:10',
       ]);

       // Send email (optional)
       /* Mail::to('admin@example.com')->send(new ContactMail($request->all())); */

       return back()->with('success', 'Your message has been sent successfully!');
   }
}
