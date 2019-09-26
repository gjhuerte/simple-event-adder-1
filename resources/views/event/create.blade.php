@extends('layouts.app')

@section('content')
    <div class="row mt-5 ml-5">
        <div class="col-12 border-bottom">
            <h2>Calendar</h2>
        </div>

        <div class="col-12 px-0 row my-5">
            <div class="col-md-6">
                @include('notification.alert')
    
                <div class="card card-body">
                    <form
                        method="post"
                        action="{{ route('event.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                <strong>
                                    Name
                                </strong>
                            </label>
                            <input 
                                type="text"
                                class="form-control"
                                name="name" 
                                placeholder="National Day" />
                        </div>
    
                        <div class="row">
                            <div class="form-group col-md-6 pr-1">
                                <label for="from-date">
                                    <strong>
                                        From
                                    </strong>
                                </label>
                                <input 
                                    type="date"
                                    id="from-date"
                                    class="form-control"
                                    name="from_date" />
                            </div>
                            <div class="form-group col-md-6 pl-0">
                                <label for="to-date">
                                    <strong>
                                        To
                                    </strong>
                                </label>
                                <input 
                                    type="date"
                                    id="to-date"
                                    class="form-control"
                                    name="to_date" />
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="monday">
                                <strong>
                                    Mon
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="monday"
                                name="days[]"
                                value="monday" />
                        </div>
    
                        <div class="form-group">
                            <label for="tuesday">
                                <strong>
                                    Tue
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="tuesday"
                                name="days[]"
                                value="tuesday" />
                        </div>
    
                        <div class="form-group">
                            <label for="wednesday">
                                <strong>
                                    Wed
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="wednesday"
                                name="days[]"
                                value="wednesday" />
                        </div>
                        <div class="form-group">
                            <label for="thursday">
                                <strong>
                                    Thu
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="thursday"
                                name="days[]"
                                value="thursday" />
                        </div>
    
                        <div class="form-group">
                            <label for="friday">
                                <strong>
                                    Fri
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="friday"
                                name="days[]"
                                value="friday" />
                        </div>
    
                        <div class="form-group">
                            <label for="saturday">
                                <strong>
                                    Sat
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="saturday"
                                name="days[]"
                                value="saturday" />
                        </div>
    
                        <div class="form-group">
                            <label for="sunday">
                                <strong>
                                    Sun
                                </strong>
                            </label>
                            <input
                                type="checkbox"
                                id="sunday"
                                name="days[]"
                                value="sunday" />
                        </div>
            
                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form> 
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            @php 
                                $previousDate = null; 
                                $month = null
                            @endphp
                            @foreach($events as $event)

                                @if ($month != optional($event->occurred_at)->format('M Y'))
                                    <tr class="bg-white">
                                        <td colspan="2">
                                            <h3>
                                                {{ optional($event->occurred_at)->format('F Y') }}
                                            </h3>
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td>
                                        @if ($previousDate != $event->occurred_at)
                                            {{ optional($event->occurred_at)->formatLocalized('%b %d') }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $event->name }}
                                    </td>
                                </tr>

                                @php 
                                    $previousDate = $event->occurred_at;
                                    $month = optional($event->occurred_at)->format('M Y');
                                @endphp
                            @endforeach
                        </tbody>
                    </table>

                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
