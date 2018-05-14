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
        <div class="offset-lg-2 col-lg-8 offset-md-2 col-md-8">
            <div class="row my-rights-box my-centered-checkboxes">
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Mon</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Tue</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Wed</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Thu</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">Fri</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Sat</label>
                </div>
                <div class="custom-control custom-checkbox my-checkboxes">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Son</label>
                </div>
            </div>
            <div class="row my-last-right-box">
                <div class="my-rights-innerbox col-6">
                    <input id="time1-id" type="time" class="my-input form-control" name="time1" placeholder="from ... (time)">
                </div>
                <div class="my-rights-innerbox col-6">
                    <input id="time2-id" type="time" class="my-input form-control" name="time2" placeholder="to ... (time)">
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-margin-for-save">
        <button type="submit" class="btn btn-search save">save changes</button>
    </div>
</form>
@endsection