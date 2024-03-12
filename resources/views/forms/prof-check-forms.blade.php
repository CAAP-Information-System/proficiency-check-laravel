@extends('layouts.app')
@section('title','Create Form')

@section('content')

<form action="#" method="POST">
    <section>
        <h1>Documentation Cetification</h1>
        <div class="checkbox-group">
            <div class="form-group">
                <input type="checkbox" name="option1">
                <label>1. Airman Licence</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="option1">
                <label>2. Medical Certificate</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="option1">
                <label>3. NTC License</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="option1">
                <label>4. ELP Certificate</label>
            </div>
            <div class="form-group">
                <label>5. Others</label>
                <input type="text" name="option1">
            </div>
        </div>
    </section>
    <section>
        <h1>Proficiency Check Results</h1>
        <div class="checkbox-group">
            <div class="form-group">
                <div><label for="">1. Oral Check</label></div>
                <input type="checkbox" name="option1">
                <label>Satisfactory</label>
                <input type="checkbox" name="option1">
                <label>Unsatisfactory</label>
                <input type="checkbox" name="option1">
                <label>Needs further training as indicated</label>
            </div>
            <div class="form-group">
                <div><label for="">2. Simulator</label></div>
                <input type="checkbox" name="option1">
                <label>Satisfactory</label>
                <input type="checkbox" name="option1">
                <label>Unsatisfactory</label>
                <input type="checkbox" name="option1">
                <label>Needs further training as indicated</label>
            </div>
            <div class="form-group">
                <div><label for="">3. Aircraft</label></div>
                <div>
                    <input type="checkbox" name="option1">
                    <label>Satisfactory</label>
                    <input type="checkbox" name="option1">
                    <label>VFR Only</label>
                </div>
                <div>
                    <input type="checkbox" name="option1">
                    <label>IFR with SIC Authorized</label>
                    <input type="checkbox" name="option1">
                    <label>IRF, Autopilot, No SIC</label>
                </div>
                <input type="checkbox" name="option1">
                <label>Needs further training as indicated</label>
            </div>
            <div class="form-group">
                <div>
                    <label for="">4. Re-Establish Landing Currency</label>
                </div>
                <input type="checkbox" name="option1">
                <label>Satisfactory</label>
                <div class="form-group">
                    <label>5. Others</label>
                    <input type="text" name="option1">
                </div>
                <input type="checkbox" name="option1">
                <label>Needs further training as indicated</label>
            </div>
        </div>

    </section>
    <section>
        <h1>Check Conducted By:</h1>
        <div class="form-group">
            <input type="checkbox" name="option1">
            <label>1. CAA-FSIS</label>
        </div>
        <div class="form-group">
            <input type="checkbox" name="option1">
            <label>2. Designated Check Airman</label>
        </div>
        <div class="form-group">
            <label>3. Others</label>
            <input type="text" name="option1" style="width: 20%;">
        </div>
        <div class="form-group">
            <label>4. Date Check Performed</label>
            <input type="date" name="option1">
        </div>
        <div class="form-group">
            <label>5. Signature of Checker</label>
            <input type="text" name="option1" style="width: 20%;">
        </div>
        <div class="form-group">
            <label>6. Printed Name/Title/License Number</label>
            <input type="text" name="option1" style="width: 20%;">
        </div>
    </section>
    <section>
        <h1>Check Conducted By:</h1>
        <div class="form-group">
            <label>Notes/Remarks</label>
            <textarea name="" id="" cols="30" rows="10">

            </textarea>

        </div>
    </section>
    <button type="submit">Submit</button>
</form>
@endsection
