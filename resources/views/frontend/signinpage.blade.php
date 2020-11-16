@extends('frontendtemplate')

@section('content') 
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-nontransparent">
  <div class="container">

    <div class="logo float-left">
       <!--  <h1 class="text-light"><a href="index.html"><img src="../../img/logo1.jpg" alt="Logo" class="img-fluid"></a></h1> -->
       <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Logo" class="img-fluid" ></a>

   </div>

   <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 20px;">Sign in</h2>
        <ol>
          <li><a href="{{route('mainpage')}}">Home</a></li>
          <li><a href="{{route('signuppage')}}"> Don't have an account? Sign up</a></li>
      </ol>
  </div>

</div>
</section><!-- End Our Services Section -->
</div>
</header><!-- End Header -->
<main id="main">
    <div class="jumbotron jumbotron-fluid subtitle">
        <div class="container">
          <h1 class="text-center text-white">Welcome to Mr.Pet. It's great to see you! <i class="fas fa-hand-holding-heart ml-2"></i></h1>
      </div>
  </div>
  <div class="container py-5">
    <div class="row my-5">
      <div class="col-md-4 text-center mt-5">
         <img src="{{asset('frontend_asset/images/1.jpg')}}" class="img-fluid ">
         <h6 class="mt-3">Dogs are also Our Family Members!</h6>
     </div>
     <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">{{ __('Please Fill Everything Correctly!') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="pt-3">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-danger px-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link " href="{{ route('password.request') }}" style="color:brown;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            {{-- </div>
            </div> --}}
        </div>
    </div>
</div>
</main>
@endsection