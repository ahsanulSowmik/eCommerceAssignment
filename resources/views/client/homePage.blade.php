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

  <style>
    /* .card {
      padding: 1rem;
      border: 1px solid black;
      margin: 1rem;
    } */

    .flex-card {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 5px;
    }

    .rightFooter{
      padding-left: 15% !important;
      /* margin-right: 2% !important; */
    }

    .rightLeft{
      padding-left: 5% !important;
      /* margin-right: 2% !important; */
    }

    .rightMiddle{
      padding-left: 5% !important;
      /* margin-right: 2% !important; */
    }




    @media screen and (max-width: 680px) {
      /* .flex-card {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      grid-gap: 5px;       */

      .flex-card {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 5px;

      }
    }
  </style>

</head>

<body>
  {{-- @include('includes.navigationBar') --}}
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



  <section id="topHeader" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 col-12 intro-info order-md-first order-last mt-5 text-center ">
          <h1 class="text-primary font-weight-bold">Lorem ipsum dolor, sit amet consectetur</h1>
          <h3 class="text-dark font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, maiores?
          </h3>
        </div>
        <div class="col-md-6 col-12 intro-img order-md-last order-first">
          <img src={{ url('/images/undraw_web_shopping_re_owap.png') }} alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <section class="products m-5">
    <h1 class="text-center font-weight-bold">All Products</h1>
    <div class="container ">
      <div id="productCard" class="flex-card">

      </div>
    </div>
  </section>

  <section id="footer" style="background: rgb(117, 117, 228);">
    <!-- Footer -->
    <footer class="page-footer font-small indigo">
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-3 mx-auto align-items-center " >
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

          {{-- <hr class="clearfix w-100 d-md-none"> --}}
          <div class="col-md-3 mx-auto align-items-center rightMiddle" >
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
          

          {{-- <hr class="clearfix w-100 d-md-none"> --}}
          <div class="col-md-6 mx-auto align-items-center pl-5 rightFooter" >
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

      const container = document.getElementById('productCard');

      var i=0;
      productDetails.forEach((product, idx)=> {

        if(i==6){
          return false;
        }
        // Create card element
        const card = document.createElement('div');
        card.classList = 'card-body';

        // Construct card content
        const content = `
        <div class="card" style="border: 5px solid gray;
      border-radius: 5px;">
    <img class="card-img-top " src=${product.img} alt="Card image cap" style=" width: 50% ; margin-left:15%">
    <div class="card-body ">
      <h5 class="card-title">${product.name}</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">৳${product.price}</small></p>
      <button type="button" class="btn btn-primary al"  onClick="addToCart()" >Add to cart<i class="fas fa-shopping-cart"></i></button>
    </div>
        `;

        
        // Append newyly created card element to the container
          container.innerHTML += content;
         i++;
      })


      function addToCart() {
        
        // const depositInput = document.getElementById('totalProductInCart');
        // const newDepositAmountText = depositInput.innerHTML;
        // const newDepositAmount = parseFloat(newDepositAmountText);
    
        // const newDepositTotal = newDepositAmount+1;

        // console.log(newDepositTotal);    
        // depositInput.innerText = newDepositTotal;

        const productInCart = document.getElementById('totalProductInCart');
        const newproductInCartText = productInCart.innerHTML;
        const newproductInCart = parseFloat(newproductInCartText);
    
        const productInCartTotal = newproductInCart+1;

        console.log(productInCartTotal);    
        productInCart.innerText = productInCartTotal;


      }





    

      
  </script>


</body>

</html>