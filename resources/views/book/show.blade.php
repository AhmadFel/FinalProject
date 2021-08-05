@extends('layout')

@section('content')
<div>
<h2>Customer Name: {{ @$book->customer_name }}</h2>
<p>Customer Mobile: {{ $book->customer_mobile }}</p>
<h2>Room ID :{{ $book->room_id }}</h2>
<p>Booking Number #{{ $book->id }}</p>
<p>Booking Date from:  {{ $book->date_from }}</p>
<p>Booking Date to:  {{ $book->date_to }}</p>
</div>
<a href="/book" class="font-bold p-6 my-5">Back To Main Page List</a>
@endsection
