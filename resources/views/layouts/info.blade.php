@if(count($errors)>0)
    <div class="container">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session('info'))
    <div class="container">
        <div class="alert alert-success">
            <i class="fa fa-check" aria-hidden="true"></i> {{session('info')}}
        </div>
    </div>
@endif