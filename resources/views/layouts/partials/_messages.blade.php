@if (count($errors) > 0)
<div class="row alert alert-danger" style="">
    <div class="col-xs-12">
        <p>One or more errors were encouneterd after you submitted your listing.</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bold">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif


@if(Session::has('success'))
<div class="row alert alert-success" style="">
    <div class="col-xs-12">
        <p style="margin: 0px; padding: 0px;"><span style="font-weight: bold">Success:</span> {{ Session::get('success') }}</p>
    </div>
</div>
@endif