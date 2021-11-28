<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}" />
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light  ml-5 mr-5">
    <a class="navbar-brand font-weight-bold" href="#">eCommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active mr-5">
          <a class="nav-link" href="#" id="nav">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active mr-5">
          <a class="nav-link" href="#products" id="nav">Product <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mr-5" href="#" id="nav">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active mr-5">
          <a class="nav-link" href="#" id="nav">Contact <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="margin-top: 8px;">
          <i class="fas fa-shopping-cart"></i>
        </li>
        <li class="nav-item active mr-5" style="margin-top: 8px;">
          <div id="totalProductInCart">0</div>
        </li>
      </ul>

    </div>
  </nav>


  <section class="productDetais">
    <div class="container overflow-hidden">
      <div class="row gx-5">
        <div class="col-md-6 col-12">
          {{-- <div class="p-3 border bg-light">Custom column padding</div> --}}
          <div class="row gx-5">
            <div class="col-md-3 col-3">
              <div class="p-3 border bg-light m-2 ">
                <img src="{{ $productDetails["img"] }}" alt="" style="width: 50px">               
              </div>
              <div class="p-3 border bg-light m-2"><img src="{{ $productDetails["img"] }}" alt="" style="width: 50px"> </div>
              <div class="p-3 border bg-light m-2"><img src="{{ $productDetails["img"] }}" alt="" style="width: 50px"> </div>
            </div>
            <div class="col-md-6 col-6">
              <div class="p-3 border bg-light"><img src="{{ $productDetails["img"] }}" alt="" ></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="p-3 ">
            <div>
              <a href=''><h4>{{ $productDetails["name"] }}</h4></a>
            </div>
            <div>
              <p>Category:{{ $productDetails["category"] }}</p>
            </div>
             <div>
             <p>৳{{ $productDetails["price"] }}</p>
             <button type="button" class="btn btn-primary al" >Add to cart<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="productDescription ">
    <div class="container">

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quaerat unde accusantium voluptas, laboriosam
        atque asperiores? Repudiandae magnam obcaecati vero ducimus, soluta voluptates saepe consequatur voluptatum at!
        Magnam aperiam libero provident deserunt odio illo atque, vitae dolorem sit sunt reiciendis pariatur placeat
        animi voluptate, sapiente nesciunt aliquid in debitis impedit?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ea atque quidem fugit? Dolores corrupti, obcaecati
        molestias sed rerum perspiciatis nostrum illum molestiae consequuntur incidunt aliquam aperiam aut sunt sequi
        quae maiores id modi reprehenderit voluptate expedita blanditiis exercitationem optio mollitia! Nulla suscipit
        maxime delectus provident reprehenderit cupiditate voluptatem illum?
      </p>

    </div>


  </section>
  <section id="footer" style="background: rgb(117, 117, 228);">
    <!-- Footer -->
    <footer class="page-footer font-small indigo">
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-3 mx-auto align-items-center ">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Lorem ipsum dolor sit amet.</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark">Lorem, ipsum dolor.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Verydasd</a>
              </li>
            </ul>
          </div>

          {{--
          <hr class="clearfix w-100 d-md-none"> --}}
          <div class="col-md-3 mx-auto align-items-center rightMiddle">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Lorem ipsum dolor sit amet.</h5>

            <ul class="list-unstyled ">
              <li>
                <a href="#!" class="text-dark">Lorem, ipsum dolor.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Verydasd</a>
              </li>
            </ul>
          </div>


          {{--
          <hr class="clearfix w-100 d-md-none"> --}}
          <div class="col-md-6 mx-auto align-items-center pl-5 rightFooter">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Lorem ipsum dolor sit amet.</h5>

            <ul class="list-unstyled ">
              <li>
                <a href="#!" class="text-dark">Lorem, ipsum dolor.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Loremipsum.</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Verydasd</a>
              </li>
            </ul>
          </div>

        </div>

        <div class="footer-copyright text-center py-3">© 2021 Copyright:
          <a href="#">ahsanulSomwik</a>
        </div>


    </footer>
    <!-- Footer -->
  </section>

  <script>
    var productDetails = @json($productDetails);
         console.log(productDetails);


         const container = document.getElementById('picture');
         const card = document.createElement('div');
        card.classList = 'card-body';

        // Construct card content
        const productPic = `
        <img class="card-img-top " src=${product.img} alt="Card image cap">
        `;

        
        // Append newyly created card element to the container
        productPic.innerHTML += productPic;



  </script>

</body>

</html>