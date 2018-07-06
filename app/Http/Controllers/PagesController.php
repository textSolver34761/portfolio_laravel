<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Project;
use App\ProjectTags;

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
    
    public function businesses(){
        $title = 'Welcome to my online businesses';
        return view('pages.businesses')->with('title',$title);
    }

    public function accountancy(){
        $title = 'Welcome my business accountancy';
        return view('pages.accountancy')->with('title',$title);
    }

    public function work(){
        $title = 'This is my work:';

        /*$jointurelaravel = ProjectTags::find(2);
        $joiturechatbot = ProjectTags::find(3);
        $joitureiot = ProjectTags::find(1);
        $jointurenatif = ProjectTags::find(4);*/

        $projectlaravel = Project::find(2);
        $projectchatbot = Project::find(3); 
        $projectiot = Project::find(1);
        $projectnatif = Project::find(4);

        $projectlaravel = Project::find(2);
        $projectchatbot = Project::find(3);
        $projectiot = Project::find(1);
        $projectnatif = Project::find(4);

        $taglaravel = Tag::find(3);
        $tagchatbot = Tag::find(2);
        $tagiot = Tag::find(4);
        $tagnatif = Tag::find(5);

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

        return view('pages.work')->with('title',$title)->with('laravel', $laravel)->with('iot', $iot)->with('natif', $natif)->with('chatbot', $chatbot);//->with('jointurelaravel', $jointurelaravel);
    }

    public function cgu(){
        $title = 'conditions générales d\'utilisations';
        return view('pages.cgu')->with('title',$title);
    }

    public function tc(){
        $title = 'Terms and Conditions';
        return view('pages.termsconditions')->with('title',$title);
    }
}
