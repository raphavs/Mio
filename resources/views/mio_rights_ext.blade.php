@extends('layouts.mio_home_app')

@section('content')
<div class="my-home-position">
    <h1 class="text-center">{{ $door }}</h1>
</div>
<div class="my-user-door-margin">
    <h2 class="text-center font-weight-bold">{{ $user }}:</h2>
</div>
<form action="{{ route('mio.home') }}" class="col-12 last-block-margin-home">
    <div class="my-rights-bg offset-lg-3 col-lg-6 offset-md-2 col-md-8 offset-sm-1 col-sm-10">
        <div class="offset-lg-1 col-lg-10 offset-md-1 col-md-10 my-rights-box">
            <div class="my-centered-checkboxes">
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">MON</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                        <label class="custom-control-label" for="customCheck2">TUE</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                        <label class="custom-control-label" for="customCheck3">WED</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                        <label class="custom-control-label" for="customCheck4">THU</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
                        <label class="custom-control-label" for="customCheck5">FRI</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
                        <label class="custom-control-label" for="customCheck6">SAT</label>
                    </div>
                </div>
                <div class="my-checkboxes">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                        <label class="custom-control-label" for="customCheck7">SUN</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="big-rights" class="row my-last-right-box">
            <div class="my-outer-div-for-center">
                <div class="my-inner-div-for-center">
                    <div class="row">
                        <div class="row timebox">
                            <label for="time1" class="my-rights-label">From:</label>
                            <div class="my-fixed-timebox-size">
                                <input id="time1" type="time" class="my-input-padding form-control" name="time1">
                            </div>
                        </div>
                        <div class="row timebox">
                            <label for="time2" class="my-rights-label">To:</label>
                            <div class="my-fixed-timebox-size">
                                <input id="time2" type="time" class="my-input-padding form-control" name="time2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="little-rights" class="row my-last-right-box">
            <div class="row timebox-xs col-12">
                <div class="my-outer-div-for-center">
                    <div class="my-inner-div-for-center">
                        <div class="row">
                            <label for="time1" class="my-rights-label">From:</label>
                            <div class="my-fixed-timebox-size">
                                <input id="time1" type="time" class="my-input-padding form-control" name="time1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row timebox-xs col-12">
                <div class="my-outer-div-for-center">
                    <div class="my-inner-div-for-center">
                        <div class="row">
                            <label for="time2" class="my-rights-label">To:</label>
                            <div class="my-fixed-timebox-size">
                                <input id="time2" type="time" class="my-input-padding form-control" name="time2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-margin-for-save">
        <button type="submit" class="btn btn-search save">save changes</button>
    </div>
</form>
@endsection