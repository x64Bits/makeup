<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/new.css">
	<title>Makeup | Ver producto</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-centered col-md-offset-5">
				<div id="modal_container">
					<div id="modal_img">
						<img src="/{{ $product->image_path }}" alt="">
					</div>
					<div id="caption">
						<span id="text_to_copy">
							{{$product->name}} - {{$product->code}} {{$product->price}} COP
						</span>
						<a href="#" id="copy_product" data-clipboard-target="#text_to_copy" data-toggle="tooltip" title="Copiado con exito">Copiar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>	
	<script src="/js/clipboard.min.js"></script>
    <script>
    	new ClipboardJS('#copy_product');
		$('a[data-toggle="tooltip"]').tooltip({
		    animated: 'fade',
		    placement: 'top',
		    trigger: 'click'
		});    	
	</script>
</body>
</html>