<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::getProducts();
        return view('store.index', compact('products'));
    }
    public function about()
    {
        return view('store.aboutUs');
    }
    public function contact()
    {
        return view('store.contact');
    }
    public function privacy()
    {
        return view('legal.privacy');
    }
    public function cookie()
    {
        return view('legal.cookie');
    }
    public function refund()
    {
        return view('legal.refund');
    }
    public function contactPost(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
            'email' => ['nullable', 'email'],
            'phone' => ['required', 'numeric'],
        ]);
        Contact::create($validated);
        return redirect()->back()->with('success', 'Dear ' . $validated['name'] . ', we have received your message successfully! Someone will be attending to you ASAP!');
    }
}
