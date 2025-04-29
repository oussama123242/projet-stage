<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // دالة لعرض صفحة الاتصال
    public function index()
    {
        return view('contact');  // تأكد من أن هناك ملف view باسم contact.blade.php
    }
}