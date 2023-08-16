@extends('user.layout.main')
@section('content')

<style>
  

    .form-book {
        width: 450px;
        height: 500px;
        margin: auto;
        padding: 25px;
        border: 1px solid #f9f6f6;
        border-radius: 8px;
        margin-top: 5%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        background-color: white;

    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="file"] {
        width: 80%;
        margin: 25px;
        padding: 10px 15px;
        border-radius: 5px;
        border-bottom: .1rem solid var(--light-black);

    }

    input[type="date"] {
        padding: 20px 10px;
        border-radius: 5px;
        margin-right: 10px;
        color: rgb(142, 129, 129);
    }

    label {
        color: rgb(12, 12, 12);

    }

    input[type="submit"] {
        margin-left: 30%;
        margin-top: 10%;
        padding: 10px 48px;
        border-radius: 10px;
        background-color: rgb(187, 163, 187);
        font-weight: 600;

    }

    .form input[type="submit"]:hover {
        background-color: rgb(138, 80, 138);
    }

    .div1 {
        display: flex;
    }

    h3 {
        text-align: center;
    }

    .div2 {
        display: flex;
        margin: 10px;

    }
</style>

<form class="form-book" action="/booking" method="post" enctype="multipart/form-data">
    @csrf
    <div class="">
        <h3>Book now</h3>
    </div>

    <div class=div1>
        <!-- <label> Name </label> -->
        <input type="text" name="name" placeholder="Name" />

        <!-- <label> Email </label> -->
        <input type="email" name="email" placeholder="Email" />
    </div>
    <div class="div1">

        <!-- <label> Address </label> -->
        <input type="text" name="address" placeholder="Address" />

        <!-- <label> phone number </label> -->
        <input type="number" name="phone" placeholder="phone" />

    </div>
    <div class="div1">
        <!-- <label> where to </label> -->
        <input type="text" name="where" placeholder=" Where to" />

        <!-- <label> where to </label> -->
        <input type="number" name="how" placeholder="How many" />

    </div>
    <div class="div2">
        <label> Arrival: </label>
        <input type="date" name="arrival" placeholder="Arrival" />
        <!-- </div>
           <div class=""> -->
        <label> Leaving: </label><br>
        <input type="date" name="leaving" placeholder="leaving" />

    </div>

    <div>
        <input type="submit" value="Submit">
    </div>

</form>


@endsection