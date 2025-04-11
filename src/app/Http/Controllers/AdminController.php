<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
        public function index(Request $request)
{
    $query = Contact::query();

    // 名前 or メールの部分一致
    if ($request->filled('name')) {
        $query->where(function ($q) use ($request) {
            $q->where('first_name', 'like', '%' . $request->name . '%')
              ->orWhere('last_name', 'like', '%' . $request->name . '%')
              ->orWhere('email', 'like', '%' . $request->name . '%');
        });
    }

    // 性別
    if ($request->filled('gender')) {
        $query->where('gender', $request->gender);
    }

    // カテゴリ
    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    // 結果をページネーションしてビューに渡す
    $contacts = $query->paginate(7);
    $categories = Category::all();

    return view('admin.admin', compact('contacts', 'categories'));
    }
}