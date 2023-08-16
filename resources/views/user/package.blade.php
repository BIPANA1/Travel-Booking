@extends('user.layout.main')
@section('content')

<style>

.card {
    margin: 20px;
    margin-top: 20px;
    max-width: 350px;
    max-height: 432px;
    padding: 36px 34px;
    border-radius: 5px;
    box-shadow: 0 5px 8px 0 rgb(210, 207, 207);
}

.container {
    width: calc(100%/4 -20px);
    /* padding-top: 12px; */
}


.gallery-pack {
    display: flex;
    flex-wrap: wrap;
    margin-left: 10%;
    gap: 3px;
}

.heading-pack{
    text-align: center;
  padding: 10px;
}
h3{
    padding: 8px;
    font-size: 1rem;
}
p{
    font-size: .8rem;
}
img{
   margin-left: 12%;
   height: 200px;
   width: 180px;
}

.btn{
    padding: 5px 6px;
    font-size: 1.5rem;
    border-radius: 3px;
    margin-left:22%; 
}
.box-container {
    margin-bottom: 100px;
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 3rem;
    margin-right: 20px;
    


}

h3{
    text-align: center;
}



</style>

<div class="gallery-pack">

@foreach($destinations as $destination)
<div class="card">
    <div class="container">
        <div class="img-auth">
            <img src="{{asset($destination->image)}}" alt="image" width="100" height="100">
        </div>
        <div class="heading">
            <h3>{{$destination->title}}</h3>
            <p>{{$destination->description}}</p>
            <div> <a href="/book"> <button type="button" class="btn btn-dark btn-sm"> book now </button> </a> </div>
        </div>
    </div>
</div>
@endforeach

</div>


@endsection