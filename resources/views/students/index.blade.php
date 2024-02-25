@extends('welcome')
@section('Content')
<h1>List of Students</h1>

<ul>
    @foreach ($students as $student)
        <li>{{ $student->id }} / {{ $student->name }} / {{$student->city->name}}</li>
        <li>
            <form action="{{ route('student.destroy', $student )}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
            </form>
        </li>
    @endforeach
</ul>
@stop
