<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use App\Models\Announcement;
use App\Models\Gallery;
use App\Models\Lecturer;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $lecturers = Lecturer::all();
        // get 3 latest achievments
        $achievments = Achievment::orderBy('id', 'desc')->limit(3)->get();
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $announcements = Announcement::orderBy('id', 'desc')->limit(3)->get();
        $galleries = Gallery::limit(6)->get();
        return view('beranda', compact('lecturers', 'achievments', 'news', 'announcements', 'galleries'));
    }
}
