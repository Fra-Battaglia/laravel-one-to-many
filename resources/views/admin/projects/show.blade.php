@extends('layouts.admin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="d-flex justify-content-between mb-3">
					<h3 class="fw-bold">DETTAGLIO PROGETTO</h3>
					<a href="{{ route('admin.projects.index') }}"><button class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-2"></i>Torna alla lista progetti</button></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col py-5">
				<h1 class="fw-bold">{{ $project['title'] }}</h1>
				<p>{{ $project['content'] }}</p>
			</div>
		</div>
	</div>
@endsection