<?php

namespace App\Http\Controllers;

use App\Http\Requests\TranslationRequest;

class TranslatorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function translate(TranslationRequest $request)
    {
        return view('index')->with([
            'text' => $request->text,
            'translation' => $this->translateText($request->text),
        ]);
    }
}
