<?php

namespace App\Http\Controllers;

use App\Category;
use App\Download;
use App\Event;
use App\Gallery;
use App\Leaders;
use App\Sermon;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BackEndController extends Controller
{
    public function index()
    {

    }

    public function leaders()
    {
        $leaders = Category::all();
        //dd($leaders[0]->leader->first_name);
        return view('backend.leaders', compact('leaders'));
    }

    public function nym()
    {
        $leaders = Category::where('name', 'Nairobi Yearly Meeting')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('top.yearly', compact('leaders'));
    }

    public function monthlyMeeting()
    {
        $leaders = Category::where('name', 'Monthly Meeting')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('top.monthly', compact('leaders'));
    }

    public function langata()
    {
        $leaders = Category::where('name', 'lang\'ata')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.langata', compact('leaders'));
    }

    public function ongataRongai()
    {
        $leaders = Category::where('name', 'Ongata Rongai')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.nairobi', compact('leaders'));
    }

    public function nairobiWest()
    {
        $leaders = Category::where('name', 'Nairobi West')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('local.ongata', compact('leaders'));
    }

    public function sundaySchool()
    {
        $leaders = Category::where('name', 'Sunday School')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.sunday', compact('leaders'));
    }

    public function usfw()
    {
        $leaders = Category::where('name', 'U.S.F.W')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.usfw', compact('leaders'));
    }

    public function youth()
    {
        $leaders = Category::where('name', 'Youth')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.youth', compact('leaders'));
    }

    public function quakerMen()
    {
        $leaders = Category::where('name', 'QuakersMen')
            ->orderBy('level', 'asc')
            ->get();
        //dd($leaders);
        return view('programs.quaker', compact('leaders'));
    }

    public function sermons()
    {
        $sermons = Sermon::where('type', 'Service')->orderBy('id', 'desc')->paginate(10);
        return view('sermons.index', compact('sermons'));
    }

    public function events()
    {
        $events = Event::orderBy('id', 'desc')->paginate(10);
        return view('events.index', compact('events'));
    }

    public function gallery()
    {
        $gallery = Gallery::orderBy('id', 'desc')->paginate(10);
        return view('gallery.index', compact('gallery'));
    }

    public function downloads()
    {
        $downloads = Download::orderBy('id', 'desc')->paginate(10);
        return view('downloads.index', compact('downloads'));
    }

    public function download($url, $ext)
    {
//        return Response::download(base_path().'/public/galleryimages/'.$id);
        //return Response::download(base_path().'/public/downloads/'.$url);
        return Response::make(file_get_contents(base_path() . '/public/downloads/' . $url), 200, [
            'Content-Type' => 'application/' . $ext,
            'Content-Disposition' => 'inline; filename="' . $url . '"']);

    }

    public function editLeader($id)
    {
        $leader = Category::findorFail($id);
        return view('backend.editleader', compact('leader'));
    }

    public function adminThemes()
    {
        $sermons = Sermon::orderBy('id', 'desc')->get();
        return view('backend.sermon.index', compact('sermons'));
    }

    public function addLeader(Request $request)
    {
        if (isset($request->image)) {
            $file = Input::file('image');

            $originname = $file->getClientOriginalName();

            $filename = pathinfo($originname, PATHINFO_FILENAME);
            $extension = pathinfo($originname, PATHINFO_EXTENSION);
            $name = $filename . '.' . time() . '.' . $extension;

            $size = $file->getSize();
            //dd($size);
            Input::file('image')->move(public_path() . '/leaders/', $name);
        }

        if (Leaders::where('pos_id', $request->pos_id)->exists()) {
            //update
            $leader = Leaders::where('pos_id', $request->pos_id)->first();
            $leader->first_name = $request->first_name;
            $leader->last_name = $request->last_name;
            $leader->contact = $request->contact;
            if (isset($request->image)) {
                $leader->image = $name;
            }
            $leader->save();


        } else {
            //create new
            if (!isset($request->image)) {
                $name = null;
            }
            Leaders::create(array(
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'contact' => $request->contact,

                'image' => $name,
                'pos_id' => $request->pos_id
            ));
        }
        return redirect()->route('leaders')
            ->with('status', 'Successfully Edited Leader');
    }

    public function adminThemesNew()
    {
        return view('backend.sermon.new');
    }

    public function adminNewsEdit(Request $request, $id){
        $news = Event::findorFail($id);
        if ($request->isMethod('get')){
            return view('backend.events.new', compact('news'));
        }

        $news->fill($request->all());
        $news->save();
        return redirect()->route('events')
            ->with('status', 'Event Successfully Edited');
    }

    public function adminThemesEdit(Request $request, $id){
        $sermon = Sermon::findorFail($id);
        if ($request->isMethod('get')){
            return view('backend.sermon.new', compact('sermon'));
        }

        $sermon->fill($request->all());
        $sermon->save();
        return redirect()->route('sermon')
            ->with('status', 'Successful Update');
    }

    public function adminThemesDelete($id){
        $sermon = Sermon::findorFail($id);
        $sermon->delete();
        return redirect()->route('sermon')
            ->with('status', 'Successful Update');

    }

    public function adminThemesAdd(Request $request)
    {
        //dd($request->all());
        $status = false;
        $message = null;
        if ($request->type == 'Monthly Theme' || $request->type == 'Yearly Theme') {
            if (Sermon::where('type', $request->type)->where('period', $request->period)->exists()) {
                $sermon = Sermon::where('type', $request->type)->where('period', $request->period)->first();
                $sermon->title = $request->title;
                $sermon->verse = $request->verse;
                $sermon->description = $request->description;
                $sermon->type = $request->type;
                $sermon->period = $request->period;
                $sermon->save();
                $status = true;
                $message = 'Successfully Updated ' . $request->type;
            }
        }

        if ($request->type == 'Quote') {
            if (Sermon::where('type', $request->type)->exists()) {
                $sermon = Sermon::where('type', $request->type)->first();
                $sermon->description = $request->description;
                $sermon->save();
                $status = true;
                $message = 'Successfully Updated Quote of the day';
            }
        }

        if (!$status) {
            $sermon = Sermon::create($request->all());
            $sermon->save();
            $message = 'Successfully Created ' . $request->type;
        }

        return redirect()->route('sermon')
            ->with('status', $message);

    }

    public function adminNews()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('backend.events.index', compact('events'));
    }

    public function adminNewsNew()
    {
        return view('backend.events.new');
    }

    public function adminNewsDelete($id){
        $news = Event::findorFail($id);
        $news->delete();

        return redirect()->route('events')
            ->with('status', 'Event Successfully deleted');
    }

    public function adminNewsAdd(Request $request)
    {
        //dd($request->all());
        $event = Event::create($request->all());
        $event->save();

        return redirect()->route('events')
            ->with('status', 'Event Successfully added');
    }

    public function adminDownloads()
    {
        $downloads = Download::orderBy('id', 'desc')->get();
        return view('backend.downloads.index', compact('downloads'));
    }

    public function adminDownloadsNew()
    {
        return view('backend.downloads.new');
    }

    public function adminDownloadsDelete($id){
        $download = Download::findorFail($id);
        $download->delete();
        return redirect()->route('downloads')
            ->with('status', 'Successfully Deleted download titled '.$download->title);

    }

    public function adminDownloadsAdd(Request $request)
    {
        if (isset($request->image)) {
            $file = Input::file('image');

            $originname = $file->getClientOriginalName();

            $filename = pathinfo($originname, PATHINFO_FILENAME);
            $extension = pathinfo($originname, PATHINFO_EXTENSION);
            $name = $filename . '.' . time() . '.' . $extension;

            //dd($size);
            Input::file('image')->move(public_path() . '/downloads/', $name);
        }


        Download::create(array(
            'title' => $request->title,
            'url' => $name,
            'description' => $request->description,
            'type' => $extension
        ));

        return redirect()->route('downloads')
            ->with('status', 'Successfully Added download');
    }

    public function adminGallery(){
        $gallery = Gallery::orderBy('id', 'desc')->get();
        return view('backend.gallery.index', compact('gallery'));
    }

    public function adminGalleryDelete($id){
        $gallery = Gallery::findorFail($id);
        $gallery->delete();

        return redirect()->route('gallery')
            ->with('status', $gallery->title.' Successfully Deleted');

    }
    public function adminGalleryNew(){
        return view('backend.gallery.new');
    }
    public function adminGalleryAdd(Request $request){
        $filey = Input::file('images');//$request->file('contentzip');

        if ($filey!=null){
            foreach($filey as $filez){
                $originname= $filez->getClientOriginalName();

                $filename = pathinfo($originname, PATHINFO_FILENAME);
                $extension = pathinfo($originname, PATHINFO_EXTENSION);
                $nameg = $filename.'.'.time().'.' . $extension;

                $filez->move(public_path() . '/gallery/', $nameg);
                $allimages[] = $nameg;
            }
        }

        Gallery::create(array(
            'title'=>$request->title,
            'description'=>$request->description,
            'images'=>implode(',',$allimages)
        ));

        return redirect()->route('gallery')
            ->with('status', 'Gallery Successfully added');
    }
    public function galleryView($id){
        $gallery = Gallery::findorFail($id);
        $images = explode(',', $gallery->images);
        return view('gallery.details', compact('gallery','images'));
    }
    public function eventsview($id){
        $event = Event::findorFail($id);
        return view('events.details', compact('event'));
    }
}
