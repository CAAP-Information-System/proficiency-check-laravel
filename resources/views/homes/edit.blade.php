<!-- resources/views/proficiencies/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Proficiency</h1>

    <form action="{{ route('proficiencies.update', $proficiency->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add form fields with current values based on your requirements -->
        <button type="submit" class="btn btn-primary">Update Proficiency</button>
    </form>
@endsection
