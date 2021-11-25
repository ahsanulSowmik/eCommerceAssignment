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
    
</head>

<body>
    @include('includes.navigationBar')
        <section id="intro" class="clearfix">
            <div class="container d-flex h-100">
              <div class="row justify-content-center align-self-center">
                <div class="col-md-6 col-12 intro-info order-md-first order-last mt-5 text-center ">
                    <h1 class="text-primary font-weight-bold">Lorem ipsum dolor, sit amet consectetur</h1>
                    <h2 class="text-dark font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, maiores?</h2>
                </div>      
                <div class="col-md-6 col-12 intro-img order-md-last order-first">
                  <img src={{ url('/images/undraw_web_shopping_re_owap.png') }} alt="" class="img-fluid">
                </div>
              </div>
        
            </div>
          </section>

</body>

</html>