<!-- SLIDER -->
  <div class="slider pure-g">
    @foreach( $slider_images as $slider_image )
      <div class="pure-u-1">
        <img class="slider_img" src="/{{$slider_image->path}}" alt="{{$slider_image->name}}">
      </div>
    @endforeach
  </div>
  <div id="wrapper_to_categories" style="width: 100%; height: 75px;"></div>
<!-- !-END SLIDER -->