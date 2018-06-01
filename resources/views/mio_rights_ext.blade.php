@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div class="my-user-door-margin">
    <h2 class="text-center font-weight-bold">{{ $user }}:</h2>
</div>
<form action="{{ route('home.managedoor.selectuser.rights.ext.store') }}" class="col-12 last-block-margin-home" method="post">
    @csrf
    <div class="my-rights-bg offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 col-sm-10">
        <div class="offset-lg-1 col-lg-10 offset-md-1 col-md-10 my-rights-ext-box">
            <div class="my-centered-checkboxes">
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($mon == 1)
                            <input type="checkbox" class="custom-control-input" name="MON" id="customCheck1" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="MON" id="customCheck1">
                        @endif
                        <label class="custom-control-label" for="customCheck1">MON</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($tue == 1)
                            <input type="checkbox" class="custom-control-input" name="TUE" id="customCheck2" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="TUE" id="customCheck2">
                        @endif
                        <label class="custom-control-label" for="customCheck2">TUE</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($wed == 1)
                            <input type="checkbox" class="custom-control-input" name="WED" id="customCheck3" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="WED" id="customCheck3">
                        @endif
                        <label class="custom-control-label" for="customCheck3">WED</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($thu == 1)
                            <input type="checkbox" class="custom-control-input" name="THU" id="customCheck4" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="THU" id="customCheck4">
                        @endif
                        <label class="custom-control-label" for="customCheck4">THU</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($fri == 1)
                            <input type="checkbox" class="custom-control-input" name="FRI" id="customCheck5" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="FRI" id="customCheck5">
                        @endif
                        <label class="custom-control-label" for="customCheck5">FRI</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($sat == 1)
                            <input type="checkbox" class="custom-control-input" name="SAT" id="customCheck6" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="SAT" id="customCheck6">
                        @endif
                        <label class="custom-control-label" for="customCheck6">SAT</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        @if ($sun == 1)
                            <input type="checkbox" class="custom-control-input" name="SUN" id="customCheck7" checked>
                        @else
                            <input type="checkbox" class="custom-control-input" name="SUN" id="customCheck7">
                        @endif
                        <label class="custom-control-label" for="customCheck7">SUN</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-last-right-ext-box">
            <div class="slidecontainer">
                <?php
                    $from_time = substr($from_time, 0, 2);
                    $from_time = (integer)$from_time;
                ?>
                <input type="range" min="0" max="23" step="1" value="{{ $from_time }}" class="slider" name="my-from-range" id="my-from-range">
                <p id="time-value-from" class="text-center font-weight-bold">Error</p>
            </div>
            <div class="slidecontainer">
                <?php
                    if ($to_time == '23:59:00') {
                        $to_time = 24;
                    } else {
                        $to_time = substr($to_time, 0, 2);
                        $to_time = (integer)$to_time;
                    }
                ?>
                <input type="range" min="1" max="24" step="1" value="{{ $to_time }}" class="slider" name="my-to-range" id="my-to-range">
                <p id="time-value-to" class="text-center font-weight-bold">Error</p>
            </div>
        </div>
    </div>
    <div class="text-center my-margin-for-save">
        <button type="submit" class="btn btn-save">save changes</button>
    </div>
</form>
<script type="text/javascript">
    var from_slider = document.getElementById("my-from-range");
    var from_output = document.getElementById("time-value-from");
    from_output.innerHTML = from_slider.value.toString() + " h";
    from_slider.oninput = function()
    {
        from_output.innerHTML = this.value.toString() + " h";
    };
    var to_slider = document.getElementById("my-to-range");
    var to_output = document.getElementById("time-value-to");
    to_output.innerHTML = to_slider.value.toString() + " h";
    to_slider.oninput = function()
    {
        to_output.innerHTML = this.value.toString() + " h";
    }
</script>
@endsection