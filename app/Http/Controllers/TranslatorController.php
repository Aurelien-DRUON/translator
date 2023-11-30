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
            "text" => $request->input('text'),
            "translation" => $this->translation($request->input('text'))
        ]);
    }
    private function translation($text)
    {
        $code = [
            "a" => "c",
            "b" => "x",
            "c" => "f",
            "d" => "p",
            "e" => "a",
            "f" => "l",
            "g" => "j",
            "h" => "r",
            "i" => "o",
            "j" => "u",
            "k" => "z",
            "l" => "h",
            "m" => "b",
            "n" => "k",
            "o" => "i",
            "p" => "v",
            "q" => "d",
            "r" => "n",
            "s" => "q",
            "t" => "w",
            "u" => "t",
            "v" => "m",
            "w" => "y",
            "x" => "e",
            "y" => "g",
            "z" => "s",
        ];
        $text = strtolower($text);
        return strtr($text, $code);
    }
}
