<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

class EventsController extends Controller
{
    //
    // public function index()
    // {
    //     $events = [];
    //     $data = Event::all();
    //     if($data->count()) {
    //         foreach ($data as $key => $value) {
    //             $events[] = Calendar::event(
    //                 $value->title,
    //                 true,
    //                 new \DateTime($value->start_date),
    //                 new \DateTime($value->end_date.' +1 day'),
    //                 null,
    //                 // Add color and link on event
	   //              [
	   //                  'color' => '#f05050',
	   //                  'url' => 'pass here url and any route',
	   //              ]
    //             );
    //         }
    //     }
    //     $calendar = Calendar::addEvents($events);
    //     return view('fullcalender')->with('calendar',$calendar);
    // }
    public function store(Request $request)
    {
        // $event= new Event();
        // $event->title=$request->get('title');
        // $event->description=$request->get('description');
        // $event->start_date=$request->get('startdate');
        // $event->end_date=$request->get('enddate');
        // $event->save();

        $event = \Calendar::event(
		    $request->title, //event title
		    true, //full day event?
		    $request->startdate, //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
		    $request->enddate, //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg), //optional event ID
			[
				'url' => route('event.show',['id'=>$event->id])
			]
		);

        return redirect()->back()->with('success', 'Event has been added');
    }
    public function show($id)
    {
    	$event=Event::find($id);
    	return view('admin.showEvent')->with('event',$event);
    }
    public function update(Request $request)
    {
    	$id=decrypt($request->id);

    	$event=Event::find($id);

    	$event->title=$request->title;
    	$event->description=$request->description;
    	$event->start_date=$request->startdate;
    	$event->end_date=$request->enddate;

    	$event->save();

    	return redirect()->back();

    }
    public function delete($id)
    {
    	$event=Event::find(decrypt($id));
    	$event->delete();

    	return redirect()->route('app.calendar');
    }
}
