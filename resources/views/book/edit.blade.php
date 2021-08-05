@extends('layout')

@section('content')
<form action="/book/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="room_id">Room</label>
        <select name="room_id" >
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}">
                    {{ $room->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="date_from">From Date</label>
        <input type="date" value ="{{ $book->date_from }}"name="date_from">
    </div>
    <div>
        <label for="date_to">To Date</label>
        <input type="date" value ="{{ $book->date_to }}"name="date_to">
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-geen-800" type="submit">Save</button>
</form>
@endsection
