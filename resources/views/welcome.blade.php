<!doctype html>
<html lang="en">


<head>
    
  @include('partials._head')

</head>
<body>

@include('partials._nav')



@include('partials._messages')



  

  
    <div class="col-lg-12">
                  
                 
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="width: 100%";>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="col-lg-12" style="width: 100%;" src="{{ asset('images/5.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/6.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/4.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>  



<div style="width: 100%; background-color: #00ff00; margin-top: 10px;">           
<marquee behavior="scroll" direction="left" style>এখান থেকেই শুরু হোক স্বপ্নের
বাস্তবায়ন। গত ৩৪ বছর ধরে আমরা নিশ্চিত করেছি আমাদের ছাত্রছাত্রীদের সাফল্য।</marquee> 

</div>    
        


    
</body>

@include('partials._footer')

@include('partials._javascript')
    @yield('scripts')

</html>