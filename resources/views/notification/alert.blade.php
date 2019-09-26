
@if(session()->has('success-message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button 
            type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="list-unstyled mb-0 ml-1">
            <li class=""><span class="glyphicon glyphicon-ok"></span> {{ session()->pull('success-message') }}</li>
        </ul>
    </div>
@elseif (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button 
            type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="ml-1 mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
