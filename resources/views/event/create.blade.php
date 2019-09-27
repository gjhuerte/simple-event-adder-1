@extends('layouts.app')

@section('content')
    <div class="mt-5 ml-5 mr-5">
        <div class="card card-body row rounded-0">
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
                                    placeholder="National Day"
                                    value="{{ old('name') }}" />
                            </div>
        
                            <div class="row">
                                <div class="form-group col-md-6 pr-1">
                                    <label for="from-date">
                                        <strong>
                                            From
                                        </strong>
                                    </label>
                                    <custom-date-picker
                                        picker-id="from-date"
                                        picker-class="form-control"
                                        picker-name="from_date"
                                        picker-default-value="{{ old('from_date') }}"
                                    ></custom-date-picker>
                                </div>
                                <div class="form-group col-md-6 pl-0">
                                    <label for="to-date">
                                        <strong>
                                            To
                                        </strong>
                                    </label>
                                    <custom-date-picker
                                        picker-id="to-date"
                                        picker-class="form-control"
                                        picker-name="to_date"
                                        picker-default-value="{{ old('to_date') }}"
                                    ></custom-date-picker>
                                </div>
                            </div>
        
                            @include('event.partials.days')
                
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
                    @include('event.partials.event_table')
                </div>
            </div>
        </div>
    </div>
@endsection
