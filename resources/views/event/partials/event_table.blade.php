
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

    {{ $events->links('vendor.pagination.flat') }}
</div>
