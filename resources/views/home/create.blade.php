
@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ url('css/create-form.css') }}">
@section('content')
<div class="container">
    <h2>Create Proficiency Record</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('proficiency.store') }}" method="POST">
        @csrf

        <!-- Date of Notification -->
        <!-- Date of Notification -->
        <div class="form-group">
            <label for="date_of_notification" class="create-label">Date of Notification:</label>
            <input type="date" name="date_of_notification" class="form-control @error('date_of_notification') is-invalid @enderror" required>
            @error('date_of_notification')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Person Notified -->
        <div class="form-group">
            <label for="person_notified" class="create-label">Person Notified:</label>
            <input type="text" name="person_notified" class="form-control @error('person_notified') is-invalid @enderror" required>
            @error('person_notified')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date/Time Scheduled -->
        <div class="form-group">
            <label for="date_time_scheduled" class="create-label">Date/Time Scheduled:</label>
            <input type="datetime-local" name="date_time_scheduled" class="form-control @error('date_time_scheduled') is-invalid @enderror" required>
            @error('date_time_scheduled')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Location & Check Pilot -->
        <div class="form-group">
            <label for="location_check_pilot" class="create-label">Location & Check Pilot:</label>
            <input type="text" name="location_check_pilot" class="form-control @error('location_check_pilot') is-invalid @enderror" required>
            @error('location_check_pilot')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Aircraft (Make, Model) -->
        <div class="form-group">
            <label for="aircraft" class="create-label">Aircraft (Make, Model):</label>
            <input type="text" name="aircraft" class="form-control @error('aircraft') is-invalid @enderror" required>
            @error('aircraft')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Position -->
        <div class="form-group">
            <label for="position" class="create-label">Position (PIC/SIC/SO):</label>
            <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" required>
            @error('position')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Flight Operations -->
        <div class="form-group">
            <label for="flight_operations" class="create-label">Flight Operations (Day, Night, VFR, IFR):</label>
            <input type="text" name="flight_operations" class="form-control @error('flight_operations') is-invalid @enderror" required>
            @error('flight_operations')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Month Due -->
        <div class="form-group">
            <label for="month_due" class="create-label">Month Due (For Prof Check):</label>
            <input type="datetime-local" name="month_due" class="form-control @error('month_due') is-invalid @enderror" required>
            @error('month_due')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Business Name -->
        <div class="form-group">
            <label for="business_name" class="create-label">Business Name:</label>
            <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" required>
            @error('business_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Certificate -->
        <div class="form-group">
            <label for="certificate" class="create-label">Certificate #:</label>
            <input type="text" name="certificate" class="form-control @error('certificate') is-invalid @enderror" required>
            @error('certificate')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Telephone -->
        <div class="form-group">
            <label for="telephone" class="create-label">Telephone:</label>
            <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" required>
            @error('telephone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email" class="create-label">Email:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date -->
        <div class="form-group">
            <label for="date" class="create-label">Date:</label>
            <input type="datetime-local" name="date" class="form-control @error('date') is-invalid @enderror" required>
            @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Signature Company -->
        <div class="form-group">
            <label for="signature_company" class="create-label">Signature of Company Official:</label>
            <input type="text" name="signature_company" class="form-control @error('signature_company') is-invalid @enderror" required>
            @error('signature_company')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Official Name or Company -->
        <div class="form-group">
            <label for="official_name_or_company" class="create-label">Printed Name & Title of Company Official:</label>
            <input type="text" name="official_name_or_company" class="form-control @error('official_name_or_company') is-invalid @enderror" required>
            @error('official_name_or_company')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <section>
            <h1>Documentation Cetification</h1>
            <div class="checkbox-group">
                <div class="form-group">
                    <input type="checkbox" name="option1">
                    <label class="create-label">1. Airman Licence</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="option1">
                    <label class="create-label">2. Medical Certificate</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="option1">
                    <label class="create-label">3. NTC License</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="option1">
                    <label class="create-label">4. ELP Certificate</label>
                </div>
                <div class="form-group">
                    <label class="create-label">5. Others</label>
                    <input type="text" name="option1" class="form-control">
                </div>
            </div>
        </section>
        <section>
            <h1>Proficiency Check Results</h1>
            <div class="checkbox-group">
                <div class="form-group">
                    <div><label for="" class="create-label">1. Oral Check</label></div>
                    <select name="oral_check" class="form-control" style="width: 20%;">
                        <option value="satisfactory">Satisfactory</option>
                        <option value="unsatisfactory">Unsatisfactory</option>
                        <option value="#">Needs further training as indicated</option>
                    </select>
                </div>

                <div class="form-group">
                    <div><label for="" class="create-label">2. Simulator</label></div>
                    <select name="oral_check" class="form-control" style="width: 20%;">
                        <option value="satisfactory">Satisfactory</option>
                        <option value="unsatisfactory">Unsatisfactory</option>
                        <option value="#">Needs further training as indicated</option>
                    </select>
                </div>
                <div class="form-group">
                    <div><label for="" class="create-label">3. Aircraft</label></div>
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
                        <input type="text" name="option1" class="form-control" style="width: 20%;">
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
                <input type="text" name="option1" style="width: 20%;" class="form-control">
            </div>
            <div class="form-group">
                <label>4. Date Check Performed</label>
                <input type="date" name="option1" class="form-control">
            </div>
            <div class="form-group">
                <label>5. Signature of Checker</label>
                <input type="text" name="option1" style="width: 20%;" class="form-control">
            </div>
            <div class="form-group">
                <label>6. Printed Name/Title/License Number</label>
                <input type="text" name="option1" style="width: 20%;" class="form-control">
            </div>
        </section>
        <section>
            <h1>Check Conducted By:</h1>
            <div class="form-group">
                <label>Notes/Remarks</label>
                <input name="" type="text" class="form-control">

                </input>

            </div>
        </section>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
