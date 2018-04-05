<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Tag;
use App\Project;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my personal website';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'You whant to know more about me?';
        return view('pages.about')->with('title',$title);
    }

    public function contact(){
        $title = 'Contact me!';
        return view('pages.contact')->with('title',$title);
    }

    public function blog(){
        $title = 'Welcome to my blog';
        return view('pages.blog')->with('title',$title);
    }

    public function work(){
        $title = 'This is my work';
        $images = Image::all();
        $tags = Tag::all();
        $projects = Project::all();
        return view('pages.work')->with('title',$title)->with('projects', $projects)->with('images', $images)->with('tags', $tags);
    }
}
