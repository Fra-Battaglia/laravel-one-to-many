@extends('layouts.admin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col py-5">

				{{-- Errori --}}
				@if ($errors->any())
					<div class="errors">
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				{{-- Form di creazione --}}
				<div class="d-flex justify-content-between mb-3">
					<h3 class="fw-bold">CREA UN NUOVO PROGETTO</h3>
					<a href="{{ route('admin.projects.index') }}"><button class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-2"></i>Torna alla lista progetti</button></a>
				</div>
				<form action="{{route("admin.projects.store")}}" method="POST" class="py-4 comic-form">
					@csrf
					<div class="mb-4">
						<label for="" class="form-label">Titolo</label>
						<input type="text" id="" aria-describedby="" name="title" class="form-control" placeholder="Aggiungi titolo">
					</div>

					<div class="mb-4">
						<label for="" class="form-label">Descrizione</label>
						<textarea rows="5" id="" aria-describedby="" name="content" class="form-control" placeholder="Aggiungi descrizione"></textarea>
					</div>	

					<div class="mb-4">
						<label for="" class="form-label">Linguaggio</label>
						<select name="type_id" id="type_id" class="form-control">
							<option value="">Seleziona linguaggio</option>
							@foreach ($types as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>
					</div>	

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crea progetto</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection