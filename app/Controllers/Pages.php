<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Filmjir - Home',
            'active' => '
            <li class="nav-item">
              <a class="nav-link active text-white fw-bolder" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fw-bolder" href="/Pages/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-4 fw-bolder" href="/Films/index">List</a>
            </li>
            '
        ];
        return view('Page/Home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Filmjir - About',
            'active' => '
            <li class="nav-item">
              <a class="nav-link text-white fw-bolder" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white fw-bolder" href="/Pages/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-4 fw-bolder" href="/Films/index">List</a>
            </li>
            '
        ];
        return view('Page/About', $data);
    }
}