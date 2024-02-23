<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COREL Western</title>
</head>

<style>
    *{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    nav{
        font-weight: bold
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">OREL Western</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-
            controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/list-food">LIST FOOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/create-food">ADD FOOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/create-category">ADD CATEGORY</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Food" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div style="background-color:#F5F5F5">
    <h1 class="text-center" style="font-weight: bold" >LIST FOOD</h1>
    <div class="d-flex mx-5 flex-wrap">
        @foreach($foods as $food)
            <div class="card w-10 my-5 mx-5" style="width: 20rem;"">
                <img src="{{asset('storage/Food/'.$food->Image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$food->Nama}}</b></h5>
                    <p class="card-text">Rp.{{$food->Harga}}</p>
                    <p class="card-text">{{$food->Deskripsi}}</p>
                    {{-- <p class="card-text">JUMLAH: {{$food->Jumlah}}</p>
                    <p class="card-text">JUMLAH: {{$food->Kode}}</p>
                    <p class="card-text">JUMLAH: {{$food->Total}}</p> --}}
                    <p class="card-text">{{$food->category->nama}}</p>
                    <a href="{{route('edit', $food -> id)}}" class="btn btn-success">Edit</a>
                    <form action="/delete-food/{{$food->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button  class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
