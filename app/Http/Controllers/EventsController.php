<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequests\EventStoreRequest;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, EventService $service)
    {
        $events = $service
            ->ascendingDate()
            ->get();

        return view('event.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        EventStoreRequest $request,
        EventService $service
    ) {
        $service->create([
            'name' => $request->get('name'),
            'from_date' => $request->get('from_date'),
            'to_date' => $request->get('to_date'),
            'days' => $request->get('days'),
        ]);

        return redirect()
            ->route('event.create')
            ->with('success-message', 'Event successfully created');
    }
}
