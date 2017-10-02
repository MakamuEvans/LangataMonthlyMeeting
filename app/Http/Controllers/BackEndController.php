<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Leaders;
use App\Sermon;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function index(){

    }

    public function leaders(){
        $leaders = Category::all();
        return view('backend.leaders', compact('leaders'));
    }

    public function nym(){
        $leaders = Category::where('name', 'Nairobi Yearly Meeting')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('top.yearly', compact('leaders'));
    }

    public function monthlyMeeting(){
        $leaders = Category::where('name', 'Monthly Meeting')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('top.monthly', compact('leaders'));
    }
    public function langata(){
        $leaders = Category::where('name', 'lang\'ata')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.langata', compact('leaders'));
    }
    public function ongataRongai(){
        $leaders = Category::where('name', 'Ongata Rongai')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.nairobi', compact('leaders'));
    }
    public function nairobiWest(){
        $leaders = Category::where('name', 'Nairobi West')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.ongata', compact('leaders'));
    }
    public function sundaySchool(){
        $leaders = Category::where('name', 'Sunday School')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.sunday', compact('leaders'));
    }
    public function usfw(){
        $leaders = Category::where('name', 'U.S.F.W')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.usfw', compact('leaders'));
    }
    public function youth(){
        $leaders = Category::where('name', 'Youth')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.youth', compact('leaders'));
    }
    public function quakerMen(){
        $leaders = Category::where('name', 'QuakersMen')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.quaker', compact('leaders'));
    }

    public function sermons(){
        $sermons = Sermon::all();
        return view('sermons.index', compact('sermons'));
    }
    public function events(){
        $events = Event::all();
        return view('events.index', compact('events'));
    }
    public function gallery(){}
    public function downloads(){}
    public function editLeader($id){
        $leader = Category::findorFail($id);
        return view('backend.editleader', compact('leader'));
    }
    public function adminThemes(){
        $sermons = Sermon::all();
        return view('backend.sermon.index', compact('sermons'));
    }
}
