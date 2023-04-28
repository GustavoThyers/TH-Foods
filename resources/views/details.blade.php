<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="/assets/css/style.css" rel="stylesheet">

    <title>Details</title>
    <style>
        body {
    font-family: 'Roboto Condensed', sans-serif;
      background-color: #1a1814;

}

.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.main-section {
    position: absolute;
    background-color: #1a1814;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}
    </style>


  <!-- Template Main CSS File -->
</head>
<body>

    <div class="container">
    <div class="col-lg-8  p-3 main-section ">
        
        <div class="row text-white hedding m-0 pl-3 pt-0 pb-3">
           Otima escolha! Aqui está o {{$produto->name}}
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="{{ url('/storage/' . $produto->image) }}" class="menu-img" alt="">
                
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail  p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="m-0 p-0">{{$produto->name}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro"> {{$produto->price}} </p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Detalhes do Prato</h5>
                            <span>{{$produto->description}}.</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        
                        <div class="col-lg-12 mt-5">
                            <h6>Quantity :</h6>
                            <input type="number" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <a href="{{route('site.create', $produto->id)}}" class="btn btn-success w-100">Fazer Pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>