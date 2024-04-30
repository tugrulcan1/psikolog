<?php

namespace  App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
class FormController extends Controller
{
    public function submitForm(Request $request)
{

		
    $name = $request->input('name');
    $email = $request->input('email');
    $subject = $request->input('subject');
    $phone = $request->input('phone');
    $message = $request->input('message');

    Mail::raw(
        'Mesajı Gönderen: '.$request->name."\n".
        'Kullanıcı Maili: '.$request->email."\n".
        'Kullanıcı Telefonu: '.$request->phone."\n".
        'Konu Başlığı: '.$request->subject."\n".
        'Kullanıcı Mesajı: '.$request->message,
        function($message) use($request) {
            $message->from('psikolog@blogsitesi.com', 'Blog Sitesi');
            $message->to('pskkubracoskun@outlook.com');
            $message->subject('Bir Mesajınız Var');
        }
    );



    return redirect()->back()->with('success', 'Mesajınız İletildi');
}
}