@if ($errors->any())
    <div class="alert alert-danger alert-icon alert-dismissible alert-fill">
        <em class="icon ni ni-cross-circle"></em> <strong>Failed</strong>!
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session("success"))
    <div class="alert alert-success alert-icon alert-dismissible alert-fill">
        <em class="icon ni ni-check-circle"></em> <strong>Success</strong>!
        {{ session("success") }}
    </div>
@endif
