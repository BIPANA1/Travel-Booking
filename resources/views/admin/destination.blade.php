@extends('admin.layout.main')
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
        <th>Title</th>
        <th>Message</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($destinations as $destination)
    <tr>
        <td>{{$destination->title}}</td>
        <td>{{$destination->description}}</td>
        <td>
            <img src="{{asset($destination->image)}}" alt="image" width="110" height="90">
        </td>
        <td>
            <button class="w3-button w3-right w3-medium"><a href="/edit/{{$destination->id}}">Edit</a></button>
            <button class="w3-button w3-right w3-medium"><a href="/destroy/{{$destination->id}}">Delete</a></button>
        </td>
    </tr>
    @endforeach
</table>





















@endsection