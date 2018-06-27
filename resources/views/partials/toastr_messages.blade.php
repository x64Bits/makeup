
{{-- Al cargar la imagen --}}
@if(Session::has('message'))
	<script>
		toastr.{{ Session::get('type') }}('{{ Session::get('message') }}')
	</script>
@endif