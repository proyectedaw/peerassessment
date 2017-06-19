@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Regístrate</div>
                <div class="panel-body">
                    <form class="form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                    <input type="text" name="nombre" id="nombre" class="form-control input-sm floatlabel" placeholder="Nombre">
                                    @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group{{ $errors->has('apellido_1') ? ' has-error' : '' }}">
                                    <input type="text" name="apellido_1" id="apellido_1" class="form-control input-sm floatlabel" placeholder="Primer apellido">
                                    @if ($errors->has('apellido_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido_1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group{{ $errors->has('apellido_2') ? ' has-error' : '' }}">
                                    <input type="text" name="apellido_2" id="apellido_2" class="form-control input-sm floatlabel" placeholder="Segundo apellido">
                                    @if ($errors->has('apellido_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido_2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                                    <input type="text" name="dni" id="dni" class="form-control input-sm" placeholder="DNI/NIE">
                                    @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pseudonimo" id="pseudonimo" class="form-control input-sm" placeholder="Pseudónimo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="E-mail">
                            @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                          @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
                                     @if ($errors->has('password'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group"> 
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control input-sm" placeholder="Confirmar contraseña">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Registrate" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
