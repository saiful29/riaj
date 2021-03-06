<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap-5.0.0-beta1-dist/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet"/>
    <title>Register | Seller</title>
</head>
<body>
<div class="d-flex justify-content-center flex-column" style="min-height: 100vh">
    <div class="w-25 mx-auto">
        <ul class="nav nav-tabs">
            <li class="nav-item w-50">
                <a class="nav-link text-center fw-bold" href="{{ route('auth.customer.register') }}">Customer</a>
            </li>
            <li class="nav-item w-50">
                <a class="nav-link active fw-bold text-center"
                   aria-current="page"
                   href="{{ route('auth.seller.register') }}">Seller</a>
            </li>
        </ul>
        <div class="">
            @if(Session::has('message'))
                <p class="alert alert-success font-weight-bold">{{ Session::get('message') }}</p>
            @endif
        </div>
        <form action="{{route('auth.seller.register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="border shadow p-5">
                <div class="border-bottom fw-bold text-center h3 bg-light mb-4 py-3">
                    Seller Registration Form
                </div>
                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                       <span class="input-group-text">
                           <i class="fas fa-store p-1"></i>
                       </span>
                        </div>
                        <input
                            type="text"
                            name="shop_name"
                            class="form-control @error('shop_name') is-invalid @enderror"
                            placeholder="Shop Name"
                            aria-label="ShopName"
                            value="{{ old('shop_name') }}"
                            autofocus
                            aria-describedby="basic-addon1">
                    </div>
                    @error('shop_name')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                       <span class="input-group-text">
                           <i class="fas fa-user p-1"></i>
                       </span>
                        </div>
                        <input type="text"
                               name="proprietor_name"
                               class="form-control  @error('proprietor_name') is-invalid @enderror"
                               placeholder="Proprietor Name"
                               value="{{ old('proprietor_name') }}"
                               aria-label="ProprietorName"
                               aria-describedby="basic-addon2">
                    </div>
                    @error('proprietor_name')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                   <span class="input-group-text">
                       <i class="fa fa-phone-alt p-1"></i>
                   </span>
                        </div>
                        <input type="text" name="mobile"
                               class="form-control @error('mobile') is-invalid @enderror"
                               placeholder="Mobile Number (11 Digit)"
                               value="{{ old('mobile') }}"
                               aria-label="Mobile"
                               aria-describedby="basic-addon3">
                    </div>
                    @error('mobile')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                   <span class="input-group-text">
                       <i class="fa fa-mail-bulk p-1"></i>
                   </span>
                        </div>
                        <input type="text" name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="Email Address"
                               value="{{ old('email') }}"
                               aria-label="Mobile"
                               aria-describedby="basic-addon3">

                    </div>
                    @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                       <span class="input-group-text">
                           <i class="fa fa-map-marked p-1"></i>
                       </span>
                        </div>
                        <input type="text"
                               name="address"
                               class="form-control @error('address') is-invalid @enderror"
                               placeholder="Address (Road no, Police Station, District)"
                               value="{{ old('address') }}"
                               aria-label="Address"
                               aria-describedby="basic-addon4">
                    </div>
                    @error('address')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-image"></i></span>
                        </div>
                        <input type="file"
                               name="shop_image"
                               class="form-control-file @error('address') is-invalid @enderror"
                               id="shop_image"
                               value="{{ old('shop_imaage') }}">

                    </div>
                    @error('shop_imaage')
                    <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                   <span class="input-group-text">
                       <i class="fa fa-key p-1"></i>
                   </span>
                        </div>
                        <label for="password" class="sr-only"></label>
                        <input id="password"
                               type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password"
                               name="password" required autocomplete="new-password">

                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                   <span class="input-group-text">
                       <label for="password-confirm">
                           <i class="fa fa-key p-1"></i>
                       </label>
                   </span>
                    </div>
                    <input id="password-confirm"
                           type="password"
                           class="form-control"
                           placeholder="Retype Password"
                           name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <button class="btn btn-success">Create Account <i class="fa fa-user-plus"></i></button>
                    <div  class="mt-3">
                        <a href="{{ route('auth.seller.login') }}">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
