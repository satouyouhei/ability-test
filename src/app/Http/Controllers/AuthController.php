<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AuthController extends Controller
{
    public function index()
    {   
        $contacts = Contact::simplePaginate(7);
        $categories = Category::all();
        return view('admin',  compact('contacts', 'categories'), ['contacts' => $contacts]);
    }

    public function search(Request $request)
{
  $contacts = Contact::with("category")->GenderSearch($request->gender)->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
  $categories = Category::all();
  

  return view('admin', compact('contacts','categories'));
}

}
