<?php

namespace App\Services;

use App\Event;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class EventService
{
    private $model;

    /**
     * Constructor class
     */
    public function __construct()
    {
        $this->model = new Event;
    }

    /**
     * Sort by ascending date
     *
     * @return mixed
     */
    public function ascendingDate()
    {
        $this->model = $this->model
            ->orderBy('occurred_at');

        return $this;
    }

    /**
     * Fetch all the events on certain date
     *
     * @return mixed
     */
    public function get()
    {
        return $this->model->get();
    }

    /**
     * Fetch all the events on certain date
     *
     * @return mixed
     */
    public function paginate($count = 10)
    {
        return $this->model->paginate($count);
    }

    /**
     * Create a new event
     *
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes)
    {
        $events = [];
        $days = $attributes['days'];
        $name = $attributes['name'];
        $start = Carbon::parse($attributes['from_date']);
        $end = Carbon::parse($attributes['to_date']);
        $periods = CarbonPeriod::create($start, $end);

        $events[] = [
            'name' => $name,
            'occurred_at' => $start,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        foreach($periods as $period) {
            switch($period->dayOfWeek) {
                case Carbon::MONDAY:
                    if (in_array('monday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::TUESDAY:
                    if (in_array('tuesday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::WEDNESDAY:
                    if (in_array('wednesday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::THURSDAY:
                    if (in_array('thursday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::FRIDAY:
                    if (in_array('friday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::SATURDAY:
                    if (in_array('saturday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
                case Carbon::SUNDAY:
                    if (in_array('sunday', $days)) {
                        $events[] = [
                            'name' => $name,
                            'occurred_at' => $period,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ];
                    }

                    break;
            }
        }

        $events[] = [
            'name' => $name,
            'occurred_at' => $end,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        Event::insert($events);
    }
}
