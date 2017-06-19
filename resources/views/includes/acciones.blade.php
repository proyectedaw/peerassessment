<div class="col-sm-4 col-md-4">
	<h3>{{ trans('languaje.area_opciones') }}</h3>
	<ul>
		<li class="menu-item"><a href="{{ url('/subir-proyecto')}}">{{ trans('languaje.area_accion_subir') }}</a></li>
		<li class="menu-item"><a href="{{ url('/evaluaciones')}}">{{ trans('languaje.area_accion_evaluar') }}</a></li>
		<li class="menu-item"><a href="{{ url('condiciones-evaluacion') }}">{{ trans('languaje.area_condiciones') }}</a>
	</ul>
</div>