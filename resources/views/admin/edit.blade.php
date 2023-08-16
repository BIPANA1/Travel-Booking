@extends('admin.layout.main')
@section('content')
<style>
    .form {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        width: 80%;
        max-width: 400px;
        margin-top: 10%;
        margin-left: 30%;
    }

    .form h3 {
        margin-top: 0;
    }

    .form label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
        margin-top: 4px;
    }

    .form input[type="text"],
    .form input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .card-header {
        width: 100%;
        /* margin-bottom: 10%; */
        padding: 10px  20px;
        color: black;
        font-weight: bold;
       
        text-align: center ;
    }

    .form input[type="submit"] {
        background-color: #333;
        color: #fff;
        width: 100%;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .form input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<form class="form" action="/edit-destination/{{$destination->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header">

        <h3>Edit Destination</h3>
    </div>

    <div>
        <label> Title </label>
        <input type="text" name="title"  value="{{$destination->title}}" />
    </div>


    <div>
        <label> Message </label>
        <textarea type="text" name="description" >{{$destination->description}}</textarea>
    </div>

    <div>
        <label> Image </label>
        <input type="file" name="image">
    </div>

    <div>
        <input type="submit" value="Update">
    </div>

</form>






@endsection