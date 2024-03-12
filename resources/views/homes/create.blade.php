
@extends('layouts.app')

@section('content')
    <h1>Create New Proficiency</h1>

    <form action="{{ route('proficiencies.store') }}" method="POST">
        @csrf
        <!-- Add form fields based on your requirements -->
        <button type="submit" class="btn btn-success">Create Proficiency</button>
    </form>
@endsection
