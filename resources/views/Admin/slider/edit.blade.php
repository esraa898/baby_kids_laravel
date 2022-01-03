
@include('Admin/assets/navbar')
  
  



  <div id="content" class="main-content">
              <div class="container">
  
                  <div class="container">
     <div class="row layout-top-spacing">
  @if($errors->any())
  @foreach($errors->all() as $error)
  <h4 class="alert alert-warning">  {{$error}} </h4>
  @endforeach
  @endif
 
  <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
      <div class="statbox widget box box-shadow">
          <div class="widget-header">                                
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>Update slider</h4>
                  </div>
              </div>
          </div>
  <form method="post" action="{{route('admin.slider.update')}} "enctype="multipart/form-data">
    @csrf
    @method ('PUT')
    <input type="hidden"name="sliderID" value="{{$slider->id}}">
 
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text">Image </span>
  </div>
  <input  class="form-control" name="image" type="file">
</div>
     <button type="submit" class=" btn btn-info "> Update</button>
</form>
                </div>
            </div>
        </div>
    </div>
            </div>
          </div>

  
  @include('Admin/assets/footer')
      
      
  