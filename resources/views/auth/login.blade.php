<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div class="container">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Authentification</h1>
                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1><i class=""></i> Direction de la pharmacie et du médicament!</h1>
                            <p>©2020 All Rights Reserved. DPM! </p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <div class="row justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1>Create Account</h1>
                        <div class="form-group row">
                            <label for="prenom"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text"
                                       class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                       value="{{ old('prenom') }}" required autocomplete="name" autofocus>

                                @error('prenom')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom"
                                   class="col-md-4 col-form-label text-md-right">{{ __('   Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                                       name="nom" value="{{ old('nom') }}" required autocomplete="name" autofocus>

                                @error('nom')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>

                            <div class="col-md-6">
                                <select name="proffession" id="corps"
                                        class="form-control @error('name') is-invalid @enderror">
                                    <option value="Medecin">Medecin</option>
                                    <option value="Pharmacien">Pharmacien</option>
                                    <option value="Dentiste">Dentiste</option>
                                    <option value="Infirmier">Infirmier</option>
                                    <option value="Sage Femme">Sage-Femme</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialite"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Specialite') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text"
                                       class="form-control @error('specialite') is-invalid @enderror"
                                       name="specialite" value="{{ old('specialite') }}" required
                                       autocomplete="name" autofocus>

                                @error('specialite')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="structure"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Structure') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text"
                                       class="form-control @error('structure') is-invalid @enderror"
                                       name="structure" value="{{ old('structure') }}" required autocomplete="name"
                                       autofocus>

                                @error('specialite')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Service') }}</label>

                            <div class="col-md-6">
                                <input id="service" type="text"
                                       class="form-control @error('service') is-invalid @enderror" name="service"
                                       value="{{ old('service') }}" autocomplete="service" autofocus>

                                @error('service')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialite"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Adresse de la Structure') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text"
                                       class="form-control @error('specialite') is-invalid @enderror" name="adresse"
                                       value="{{ old('specialite') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricule"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Matricule') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text"
                                       class="form-control @error('specialite') is-invalid @enderror"
                                       name="matricule" value="{{ old('specialite') }}" required autocomplete="name"
                                       autofocus>

                                @error('specialite')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text"
                                       class="form-control @error('telephone') is-invalid @enderror"
                                       name="telephone" value="{{ old('telephone') }}" required autocomplete="name"
                                       autofocus>

                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy
                                    and Terms</p>
                            </div>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </div>
</div>
</body>
</html>
