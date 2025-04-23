<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        return view('home', [
            'links' => $user
                ->links()
                ->orderBy('order', 'asc')
                ->get()
        ]);
    }
}
