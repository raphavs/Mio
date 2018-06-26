@extends('layouts.mio_home_app')

@section('content')
<div class="container-fluid">
    <div class="my-home-bp-adjust-position">
        <h1 class="my-doors-header">{{ $door }}</h1>
        <div class="my-user-door-margin">
            <h2 class="my-litte-user-header">{{ $user }}:</h2>
        </div>
        <form action="/home/{{ $door }}/selectuser" class="col-12" onsubmit="return checkValidation()" method="post">
            @csrf
            <div class="my-rights-bg offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 col-sm-10">
                <div class="my-rights-ext-box">
                    <div id="checkboxes-error">
                        <p class="my-error-in-center">Please check your input!</p>
                    </div>
                    <div id="checkboxes-id" class="my-centered-checkboxes">
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="MON" id="customCheck1" @if ($relation_row->mon == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck1">MON</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="TUE" id="customCheck2" @if ($relation_row->tue == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck2">TUE</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="WED" id="customCheck3" @if ($relation_row->wed == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck3">WED</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="THU" id="customCheck4" @if ($relation_row->thu == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck4">THU</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="FRI" id="customCheck5" @if ($relation_row->fri == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck5">FRI</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="SAT" id="customCheck6" @if ($relation_row->sat == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck6">SAT</label>
                            </div>
                        </div>
                        <div class="my-checkboxes">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="SUN" id="customCheck7" @if ($relation_row->sun == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck7">SUN</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-last-right-ext-box">
                    <div class="slidecontainer">
                        <?php
                        $from_time = substr($relation_row->from_time, 0, 2);
                        $from_time = (integer)$from_time;
                        ?>
                        <input type="range" min="0" max="24" step="1" value="{{ $from_time }}" class="slider" name="my-from-range" id="my-from-range">
                        <p id="time-value-from" class="my-range-value">Error</p>
                    </div>
                    <div class="slidecontainer">
                        <?php
                        if ($relation_row->to_time == '23:59:00') {
                            $to_time = 24;
                        } else {
                            $to_time = substr($relation_row->to_time, 0, 2);
                            $to_time = (integer)$to_time;
                        }
                        ?>
                        <input type="range" min="0" max="24" step="1" value="{{ $to_time }}" class="slider" name="my-to-range" id="my-to-range">
                        <p id="time-value-to" class="my-range-value">Error</p>
                    </div>
                </div>
            </div>
            <div class="text-center my-margin-for-save">
                <button type="submit" class="btn btn-save">save changes</button>
            </div>
        </form>
    </div>
</div>
@endsection