<!-- resources/views/proficiencies/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Proficiencies</h1>

    <a href="{{ route('proficiencies.create') }}" class="btn btn-success">Create New Proficiency</a>

    <table class="table">
        <thead>
            <tr>
                <th>Date of Notification</th>
                <th>Person Notified</th>
                <!-- Add other headings based on your requirements -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proficiencies as $proficiency)
                <tr>
                    <td>{{ $proficiency->date_of_notification }}</td>
                    <td>{{ $proficiency->person_notified }}</td>
                    <!-- Add other fields based on your requirements -->
                    <td>
                        <a href="{{ route('proficiencies.show', $proficiency->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('proficiencies.edit', $proficiency->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('proficiencies.destroy', $proficiency->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
