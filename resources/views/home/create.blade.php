<!-- resources/views/proficiencies/create.blade.php -->

@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                    <label for="date_of_notification">Date of Notification:</label>
                    <input type="date" name="date_of_notification" class="form-control @error('date_of_notification') is-invalid @enderror" required>
                    @error('date_of_notification')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Person Notified -->
                <div class="form-group">
                    <label for="person_notified">Person Notified:</label>
                    <input type="text" name="person_notified" class="form-control @error('person_notified') is-invalid @enderror" required>
                    @error('person_notified')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date/Time Scheduled -->
                <div class="form-group">
                    <label for="date_time_scheduled">Date/Time Scheduled:</label>
                    <input type="datetime-local" name="date_time_scheduled" class="form-control @error('date_time_scheduled') is-invalid @enderror" required>
                    @error('date_time_scheduled')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Location & Check Pilot -->
                <div class="form-group">
                    <label for="location_check_pilot">Location & Check Pilot:</label>
                    <input type="text" name="location_check_pilot" class="form-control @error('location_check_pilot') is-invalid @enderror" required>
                    @error('location_check_pilot')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Aircraft (Make, Model) -->
                <div class="form-group">
                    <label for="aircraft">Aircraft (Make, Model):</label>
                    <input type="text" name="aircraft" class="form-control @error('aircraft') is-invalid @enderror" required>
                    @error('aircraft')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Position -->
                <div class="form-group">
                    <label for="position">Position (PIC/SIC/SO):</label>
                    <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" required>
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Flight Operations -->
                <div class="form-group">
                    <label for="flight_operations">Flight Operations (Day, Night, VFR, IFR):</label>
                    <input type="text" name="flight_operations" class="form-control @error('flight_operations') is-invalid @enderror" required>
                    @error('flight_operations')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Month Due -->
                <div class="form-group">
                    <label for="month_due">Month Due (For Prof Check):</label>
                    <input type="datetime-local" name="month_due" class="form-control @error('month_due') is-invalid @enderror" required>
                    @error('month_due')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Business Name -->
                <div class="form-group">
                    <label for="business_name">Business Name:</label>
                    <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" required>
                    @error('business_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Certificate -->
                <div class="form-group">
                    <label for="certificate">Certificate #:</label>
                    <input type="text" name="certificate" class="form-control @error('certificate') is-invalid @enderror" required>
                    @error('certificate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Telephone -->
                <div class="form-group">
                    <label for="telephone">Telephone:</label>
                    <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" required>
                    @error('telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date -->
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="datetime-local" name="date" class="form-control @error('date') is-invalid @enderror" required>
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Signature Company -->
                <div class="form-group">
                    <label for="signature_company">Signature of Company Official:</label>
                    <input type="text" name="signature_company" class="form-control @error('signature_company') is-invalid @enderror" required>
                    @error('signature_company')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Official Name or Company -->
                <div class="form-group">
                    <label for="official_name_or_company">Printed Name & Title of Company Official:</label>
                    <input type="text" name="official_name_or_company" class="form-control @error('official_name_or_company') is-invalid @enderror" required>
                    @error('official_name_or_company')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
