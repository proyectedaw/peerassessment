<div class="col-sm-4 col-md-4">
	<h3>{{ trans('languaje.adm_administrar') }}</h3>
	<ul>
		<li class="menu-item"><a href="{{ url('/administrar-usuarios')}}">{{ trans('languaje.adm_usuarios') }}</a></li>
		<li class="menu-item"><a href="{{ url('/administrar-campanyas') }}">{{ trans('languaje.adm_campanya') }}</a></li>
	</ul>
	<a href="{{ url('repartos') }}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span>Asignar</a>
	<a href="{{ url('notas') }}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span>Poner nota</a>
</div>