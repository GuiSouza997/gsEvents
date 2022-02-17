<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

        $search = !empty(request("search")) ? request("search") : NULL;

        if ($search !== NULL) {
            $events = Event::where(array(
                array("title", "like", "%{$search}%")
            ))->get();
        } else {
            $events = Event::all();
        }

        if (count($events) > 0) {
            return view('welcome', ['events' => $events]);
        } else {
            return view('welcome', ['events' => array()]);
        }
    }

    public function create()
    {

        return view('event.create', ["description" => "Venha criar seu Evento"]);
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->image = "";
        $event->date = "";

        if (isset($request->title) && !empty($request->title)) {
            $event->title = filter_var($request->title, FILTER_SANITIZE_STRING);
        }

        if (isset($request->date) && !empty($request->date)) {
            $event->date = filter_var($request->date, FILTER_SANITIZE_STRING);
        }

        if (isset($request->description) && !empty($request->description)) {
            $event->description = filter_var($request->description, FILTER_SANITIZE_STRING);
        }
        if (isset($request->city) && !empty($request->city)) {
            $event->city = filter_var($request->city, FILTER_SANITIZE_STRING);
        }
        if (isset($request->private)) {
            if (is_numeric($request->private)) {
                $event->private = $request->private;
            }
        }

        if (isset($request->items)) {
            $event->items = $request->items;
        }
        // Upload Image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = $requestImage->getClientOriginalName() . strtotime("now") . '.' . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        if ($event->image == "") {
            return view('event.create', ["result" => "error", "message" => "É necessário inserir uma imagem para o evento."]);
        }

        if ($event->date == "") {
            return view('event.create', ["result" => "error", "message" => "A data está no formato inválido."]);
        }

        $event->save();

        return redirect('/');
    }

    public function show($id)
    {
        $events = Event::findOrFail($id);

        return view('event.show', ['events' => $events]);
    }
}
