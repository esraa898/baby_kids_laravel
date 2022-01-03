
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
                      <h4>Create New activity</h4>
                  </div>
              </div>
          </div>
  <form method="post" action="{{route('admin.activity.store')}}"  enctype="multipart/form-data">
    @csrf
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text">title </span>
    </div>
    <input  class="form-control" name="title" type="text">
  </div>
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text"> slug </span>
    </div>
    <textarea class="form-control" name="slug" aria-label="With textarea"></textarea>
  </div>
  <div class="input-group mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text">Icon </span>
  </div>
  <input  class="form-control" name="icon" type="file">
</div>
       <button type="submit" class=" btn btn-info "> Add</button>
  </form>
                  </div>
              </div>
          </div>
      </div>
              </div>
            </div>
  
  @include('Admin/assets/footer')