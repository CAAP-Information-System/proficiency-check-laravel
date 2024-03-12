<!-- resources/views/proficiencies/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Proficiency Details</h1>

    <!-- Display proficiency details based on your requirements -->

    <a href="{{ route('proficiencies.edit', $proficiency->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('proficiencies.destroy', $proficiency->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
