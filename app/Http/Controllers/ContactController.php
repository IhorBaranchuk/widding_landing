<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactForm;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactRequest $req): RedirectResponse
    {
        $res = ContactForm::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'message' => $req->input('message'),
        ]);

        return redirect()->route('home')->with('success','Ваше сообщение успешно отправлено!');
    }

    public function getAll(): View
    {
        return view('reviews',['data' => ContactForm::all()]);
    }

    public function detail($id): View
    {
        return view('review-detail',['data' => ContactForm::find($id)]);
    }

    public function detailUpdate($id): View
    {
        return view('review-detail-update',['data' => ContactForm::find($id)]);
    }

    public function detailDelete($id): RedirectResponse
    {
        $contactForm = ContactForm::find($id)->delete();

        return redirect()->route('reviews')->with('success','Ваше сообщение успешно удалено!');
    }

    public function detailUpdateSubmit($id,ContactRequest $req): RedirectResponse
    {
        $contactForm = ContactForm::find($id);
        $contactForm->name = $req->input('name');
        $contactForm->email = $req->input('email');
        $contactForm->message = $req->input('message');

        $contactForm->save();

        return redirect()->route('review-detail',$id)->with('success','Ваше сообщение успешно обновлено!');
    }
}
