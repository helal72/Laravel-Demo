
@include('frontend.layouts.header')

  <header class="masthead" style="background-image: url('{{asset("User/img/home-bg.jpg")}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

@include('frontend.layouts.nav')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
       
       @yield('main_contant') 
       
      </div>
    </div>
  </div>

  <hr>
  
@include('frontend.layouts.footer')
  
