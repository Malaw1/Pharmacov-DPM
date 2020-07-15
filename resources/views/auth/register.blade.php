@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="name" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="name" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>

                            <div class="col-md-6">
                                <select name="corps" id="corps" class="form-control @error('name') is-invalid @enderror">
                                    <option value="Medecin">Medecin</option>
                                    <option value="Pharmacien">Pharmacien</option>
                                    <option value="Dentiste">Dentiste</option>
                                    <option value="Infirmier">Infirmier</option>
                                    <option value="Sage Femme">Sage-Femme</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __('Specialite') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="structure" class="col-md-4 col-form-label text-md-right">{{ __('Structure') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('structure') is-invalid @enderror" name="structure" value="{{ old('structure') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label text-md-right">{{ __('Service') }}</label>

                            <div class="col-md-6">
                                <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service') }}" autocomplete="service" autofocus>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __('Adresse de la Structure') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="adresse" value="{{ old('specialite') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricule" class="col-md-4 col-form-label text-md-right">{{ __('Matricule') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="matricule" value="{{ old('specialite') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="name" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
