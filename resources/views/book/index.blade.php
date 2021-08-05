@extends('layout')

@section('content')    
<a href="/book/create"  class="mb-3 py-1 px-5 rounded bg-gray-100 text-gray-800 font-bold">New Book</a>
<table class="w-full">
    <thead class="text-centered">
        <tr>
            <th>
                 ID
            </th>
            <th>
                Room ID
            </th>
            <th>
                Customer Name
            </th>
            <th>
                Customer Mobile
            </th>
            <th>
                Price
            </th>
            <th>
                From
            </th>
            <th>
                Too
            </th>
        </tr>
    </thead>
    <tbody>        
        @foreach ($books as $book)        
        <tr>
            <td class="text-center">
                {{ $book->id }}
            </td>
            <td class="text-center"> 
                {{ $book->room_id }}
            </td>
            <td class="text-center"> 
                {{ $book->customer_name }}
            </td>
            <td class="text-center">
                {{ $book->customer_mobile }}
            </td>
            <td class="text-center"> 
                {{ $book->price }}
            </td>
            <td class="text-center"> 
                {{ $book->date_from }}
            </td>
            <td class="text-center"> 
                {{ $book->date_to }}
            </td>
            <td>
                <div class="flex">
                    <a class="p-1 m-1 rounded border border-gray-500 bg-gray-100 text-gray-800" href="/book/{{ $book->id }}">Show</a>
                    <a class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/book/{{ $book->id }}/edit">E</a>
                    <form method="POST" action="book/{{ $book->id }}">
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