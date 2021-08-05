@extends('layout')

@section('content')    
<a href="/room/create"  class="mb-3 py-1 px-5 rounded bg-gray-100 text-gray-800 font-bold">New Room</a>
<table class="w-full">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Floor
            </th>
        </tr>
    </thead>
    <tbody>        
        @foreach ($rooms as $room)        
        <tr>
            <td class="text-center">
                {{ $room->id }}
            </td>
            <td class="w-1/2 text-center"> 
                {{ $room->title }}
            </td>
            <td class="text-center"> 
                {{ $room->floor }}
            </td>
            <td>
                <div class="flex">
                    <a class="p-1 m-1 rounded border border-gray-500 bg-gray-100 text-gray-800" href="/room/{{ $room->id }}">Show</a>
                    <a class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/room/{{ $room->id }}/edit">E</a>
                    <form method="POST" action="room/{{ $room->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">X</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection