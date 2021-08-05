@extends('layout')

@section('content')
<form action="/book" method="POST">
    @csrf
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
    <label for="title">Book title</label>
    <input type="text" name="title" 
        class="rounded border border-gray-100 mr-1" />
    </div>
    <div>
        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" 
            class="rounded border border-gray-100 mr-1" />
        </div>
        <div>
            <label for="customer_mobile">Customer Mobile:</label>
            <input type="text" name="customer_mobile" 
                class="rounded border border-gray-100 mr-1" />
            </div>
            <div>
                <label for="price">Book price</label>
                <input type="text" name="price" 
                    class="rounded border border-gray-100 mr-1" />
                </div>
    <div>
        <label for="date_from">From</label>
        <input type="date" value =""name="date_from">
    </div>
    <div>
        <label for="date_to">To</label>
        <input type="date" value =""name="date_to">
    </div>
    <button class="p-1 m-1 rounded border border-green-500 bg-green-100 text-geen-800" type="submit">Save</button>
</form>
@endsection
