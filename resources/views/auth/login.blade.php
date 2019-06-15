@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">        
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>
                    Por favor ingresa tus datos x fa:
                </b-alert>
                <b-card-text>Header and footers using props.</b-card-text>
                <b-button href="#" variant="primary">Go somewhere</b-button>
                <b-form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <b-form-group
                        id="input-group-1"
                        label="Correo electronico"
                        label-for="email"
                        description="Nunca compartiremos tu correo. Está seguro con nosotros.">
                        <b-form-input
                            id="email"
                            type="email"
                            name="email"
                            required
                            value="{{ old('email') }}"  autofocus
                            placeholder="example@programacion.com">
                        </b-form-input>
                    </b-form-group>                   
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
