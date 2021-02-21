<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function create()
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function store(Request $request)
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function show($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function edit($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function update(Request $request, $id)
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function destroy($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }
}
