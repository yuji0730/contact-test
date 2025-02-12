<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'first_tel', 'middle_tel', 'last_tel', 'address', 'building', 'contact-type', 'detail']);
    return view('confirm', compact('contact'));

  }

  public function store(ContactRequest $request){
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'first_tel', 'middle_tel', 'last_tel', 'address', 'building', 'contact-type', 'detail']);
    Contact::create($contact);
    return view('thanks');
  }
  


  public function Register(RegisterRequest $request)
  {
    return view('login');
  }

  public function login(RegisterRequest $request)
  {
    return view('admin');
  }

  public function admin()
  {
  return view('admin');
  }
  
   public function thanks()
  {
  return view('thanks');
  }
  

   public function search(Request $request)
  {
  $contact = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->date)->get();
  $categories = Category::all();

  return view('admin', compact('contact', 'categories'));
  }



}
