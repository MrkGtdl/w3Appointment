@extends('auth.layouts')

@section('content')

<div class="justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">

                <div class="row justify-content-center mt-2">
                    <div class="form-outline w-50 ">
                        <label class="form-check-label" for="inlineCheckbox7">Location</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>--Select Location--</option>
                            <option value="clinic">Clinic</option>
                            <option value="hospital">Hospital</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="days" class="col-md-4 col-form-label text-md-end text-start">Days</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="mon" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Mon</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tue" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Tue</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="wed" id="inlineCheckbox3" value="1" >
                        <label class="form-check-label" for="inlineCheckbox3">Wed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="thu" id="inlineCheckbox4" value="1" >
                        <label class="form-check-label" for="inlineCheckbox4">Thu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="fri" id="inlineCheckbox5" value="1" >
                        <label class="form-check-label" for="inlineCheckbox5">Fri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sat" id="inlineCheckbox6" value="1" >
                        <label class="form-check-label" for="inlineCheckbox6">Sat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sun" id="inlineCheckbox7" value="1" >
                
                    </div>

                    <div class="row justify-content-center mt-2">
                        <div class="form-outline w-25">
                            <label class="form-check-label" for="time_from">From</label>
                            <input type="time" class="form-control" name="time_from">
                        </div>
                        <div class="form-outline w-25">
                            <label class="form-check-label " for="time_to">To</label>
                            <input type="time" class="form-control" name="time_to">
                        </div>
                    </div>

                    <div class="mb-3 row mt-2">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Save">
                    </div>

                </div>
            </form>
        </div>
    </div>    
</div>
    
@endsection