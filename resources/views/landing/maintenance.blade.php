@extends("layouts.landing")

@section("content")
<x-container class="py-5"  style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;">
	<div class="h1 text-center font-weight-bold py-5 text-white">⏳ CLOSED</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-warning">Stay tune di website kami!</p>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
