<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public static function Index()
        $contacts = Contact::all(); // Получение всех продуктов из базы данных
        return view('index', compact('contacts'));
}
