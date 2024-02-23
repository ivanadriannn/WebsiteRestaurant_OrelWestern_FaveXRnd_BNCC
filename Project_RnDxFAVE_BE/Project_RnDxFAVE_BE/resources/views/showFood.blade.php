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

    body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
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
                    <p class="card-text">{{$food->category->nama}}</p>
                    <a href=""><button type="button" class="btn btn-primary">ADD</button>
</a>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                            <!-- Set columns width -->
                                <th class="text-center py-3 px-4" style="min-width: 400px;">Makanan & Minuman</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Harga</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Jumlah</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                                <tr>
                                    <td class="p-4">
                                    <div class="media align-items-center">
                                        <img src="{{asset('storage/Food/'.$food->Image)}}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                        <div class="media-body">
                                        <a href="#" class="d-block text-dark">{{$food->Nama}}</a>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4">{{$food->Harga}}</td>
                                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
                                    <td class="text-right font-weight-semibold align-middle p-4">Rp.20000</td>
                                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4">
                    <label class="text-muted font-weight-normal">Promocode</label>
                    <input type="text" placeholder="ABC" class="form-control">
                    </div>
                    <div class="d-flex">
                    <div class="text-right mt-4 mr-5">
                        <label class="text-muted font-weight-normal m-0">Discount</label>
                        <div class="text-large"><strong>Rp.10000</strong></div>
                    </div>
                    <div class="text-right mt-4">
                        <label class="text-muted font-weight-normal m-0">Total price</label>
                        <div class="text-large"><strong>Rp.20000</strong></div>
                    </div>
                    </div>
                </div>

                <div class="float-right">
                    <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                    <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
                </div>

                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
