@extends('layouts.app')
@section('title','Create Form')
<link rel="stylesheet" type="text/css" href="{{ url('css/create-form.css') }}">
@section('content')
    <h1>Create New Proficiency</h1>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
