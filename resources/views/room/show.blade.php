@extends('layout')

@section('content')
<div><span class="text-sm">Room Name:</span> <span class="text-xl">{{ $room->title }}</span></div>
<div class="mb-5"><span class="text-sm">Room Floor:</span> <span class="text-lg">#{{ $room->floor }}</span></div>
<a href="/room" class="mb-3 py-2 px-5 rounded bg-gray-100 text-gray-800">Back To Main Page List</a>
@endsection
