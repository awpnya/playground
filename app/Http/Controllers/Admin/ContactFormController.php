<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Suitable;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public static function index()
    {
        $data = ContactForm::autoSort()->autoFilter()->paginate();
        $table = Suitable::source($data)->columns(['id', 'name', 'email', 'message', 'kategori' ])->render();
        return view('admin.contact-form.index', compact('table', 'data'));
    }
}
