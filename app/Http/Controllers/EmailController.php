<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class EmailController extends Controller
{
    public function create(){
        return view('controlPanel.emails.create');
    }
    public function send(Request $request){
        //dd($request);
        $this->validate($request,[

            'subject'=>'min:3',
            'body'=>'min:3|required'
        ]);
        try {
            $validation = Validator::make(Input::get('to'), array(
                // Custom validation to run rule 'exists:tags,id' on each element of input array
                'to' => 'each:exists,to,email',
            ));
        }catch (\Exception $e){
            $request->session('success','verify email');
        }
        if($validation->passes()) {
            $data = array(
                'to' => $request->to,
                'subject' => $request->subject,
                'bodymessage' => $request->body
            );
        }
        //to access the data array in the view we can used individual items as variables
        // as $email instead of $data['email']
        Mail::send('controlPanel.emails.templates.general', $data,function ($message) use($data){
            $message->from('test@littleflock.org');
            $message->to($data['to']);
            $message->subject($data['subject']);
        });
        $request->session()->flash('success','Your email sent successfully');
        return redirect()->route('emails.create');
    }
}
