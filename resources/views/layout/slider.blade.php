<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="/{{$slider_images[1]->path}}" alt="First slide">
    </div>

    @foreach ( $slider_images as $slider_image )
      <div class="carousel-item">
        <img class="d-block w-100" src="/{{$slider_image->path}}" alt="{{$slider_image->name}}">
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div style="width: 100%; height: 55px;" id="wrapper_to_categories"></div>
</div>