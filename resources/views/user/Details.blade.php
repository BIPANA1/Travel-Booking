@extends('user.layout.main')
@section('content')

<style>
table, th, td {
    border: 1px solid black;
}

table {
    width: 70%;
    height: 70%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-left: 15%;
   
   
}

th {
    background-color: #696161;
    color: #fef8f8;
    padding: 10px;
    text-align: left;
}

td {
    padding: 15px 20px;
    border-bottom: 1px solid #ddd;
}
    </style>

<table>
    <tr>
        <th>Ordered name </th>
        <th>Destination</th>
        <th>Booking Date</th>
        <th>Departure</th>
        <th>Arrival</th>
    </tr>

@foreach($books as $book)
    <tr>
        <td>{{$book->name}}</td>
        <td>{{$book->where}}</td>
        <td>{{$book->created_at}}</td>
        <td>{{$book->leaving}}</td>
        <td>{{$book->arrival}}</td>
    </tr>

    @endforeach
</table>








@endsection