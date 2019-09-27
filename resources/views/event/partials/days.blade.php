
<div class="form-group">
    <label class="col-12 px-0">
        <strong>
            Days Occurred
        </strong>
    </label>
    <small for="form-text text-muted">
        Check on the following days of week when the event occurs
    </small>
    <ul class="list-group">
        @foreach($days as $day)
            <li class="list-group-item d-flex flex-row justify-content-start align-items-baseline">
                <input
                    type="checkbox"
                    id="{{ $day }}"
                    class="mr-2"
                    name="days[{{ $day }}]"
                    value="{{ $day }}"
                    @if (old("days.$day"))
                        checked
                    @endif />
                <label for="{{ $day }}">
                    <strong>
                        {{ ucfirst(substr($day, 0, 3)) }}
                    </strong>
                </label>
            </li>
        @endforeach
    </ul>
</div>
