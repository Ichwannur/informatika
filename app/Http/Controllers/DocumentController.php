<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    public function index()
    {
        $documents = Document::all();
        return view('dokumen', compact('documents'));
    }
}
