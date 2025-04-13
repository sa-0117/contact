<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }
    

    public function confirm(Contactrequest $request)
    {
        if ($request->input('action') === 'back') {
            return redirect()->route('index')->withInput();
        }      

        $contact = $request ->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building', 'category_id', 'detail']);

        $category = Category::find($contact['category_id']);

        $categoryName = $category ? $category->content : '';

        $genderMap = ['1' => '男性', '2' => '女性', '3' => 'その他'];
        $genderName = $genderMap[$contact['gender']]?? '未指定';

        return view('confirm', compact('contact','categoryName','genderName'));
    }

    public function store(ContactRequest $request)
    {   
        if ($request->input('action') === 'back') {
            return redirect('/')->withInput();
        }

        $contact = $request ->only(['first_name',   'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building', 'category_id', 'detail']);

        $contact['tell'] =$request->tel1 . $request->tel2 . $request->tel3;

        Contact::create($contact);
        
        return view('thanks');
    }
}
