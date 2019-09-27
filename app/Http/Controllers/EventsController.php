<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Enums\DaysEnum;
use App\Services\EventService;
use App\Http\Requests\EventRequests\EventStoreRequest;

class EventsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, EventService $service)
    {
        $days = DaysEnum::getDays();
        $events = $service
            ->ascendingDate()
            ->paginate();

        return view('event.create', compact(
            'events',
            'days'
        ));
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
