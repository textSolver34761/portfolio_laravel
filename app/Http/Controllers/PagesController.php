<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ImageProject;
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
        $title = 'This is my work:';

        $projectlaravel = Project::find(2);
        $projectchatbot = Project::find(3); 
        $projectiot = Project::find(1);
        $projectnatif = Project::find(4);

        $projectlaravel = Project::find(2);
        $projectchatbot = Project::find(3);
        $projectiot = Project::find(1);
        $projectnatif = Project::find(4);

        $taglaravel = Tag::find(1);
        $tagchatbot = Tag::find(2);
        $tagiot = Tag::find(3);
        $tagnatif = Tag::find(4);

        $laravel = array(
            'name'=>$projectlaravel->name,
            'description' => $projectlaravel->description,
            'name' =>$taglaravel->name
        );

        $chatbot = array(
            'name' => $projectchatbot->name,
            'description' => $projectchatbot->description,
            'name' => $tagchatbot->name
        );

        $iot = array(
            'name' => $projectiot->name,
            'description' => $projectiot->description,
            'name' => $tagiot->name
        );
        
        $natif = array(
            'name'=>$projectnatif->name,
            'description' => $projectnatif->description,
            'name' =>$tagnatif->name
        );

        return view('pages.work')->with('title',$title)->with('laravel', $laravel)->with('iot', $iot)->with('natif', $natif)->with('chatbot', $chatbot);
    }

    public function cgu(){
        $title = '';
        return view('pages.cgu')->with('title',$title);
    }
}
