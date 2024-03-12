@extends('layouts.app')
@section('title','Create Form')
<link rel="stylesheet" type="text/css" href="{{ url('css/create-form.css') }}">
@section('content')
<h1>Documentation Certification</h1>

<form action="#" method="POST">
    <div class="checkbox-group">
        <div class="form-group">
            <label>Airman Licence</label>
            <input type="checkbox" name="option1">
        </div>
        <label class="form-input">
            <input type="checkbox" name="option2">
            Medical Certificate
        </label>
        <label class="form-input">
            <input type="checkbox" name="option3">
            NTC Licence
        </label>
        <label class="form-input">
            <input type="checkbox" name="option3">
            ELP Certificate
        </label>
        <label class="form-input">
            <input type="text" name="option3">
            Others:
        </label>

    </div>
    <button type="submit">Submit</button>
</form>
@endsection
