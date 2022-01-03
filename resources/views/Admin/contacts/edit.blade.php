
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
  <form method="post" action="{{route('admin.contacts.update')}}">
    @csrf
    @method ('PUT')
    <input type="hidden" name="contactID" value="{{$contact->id}}">
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text">name </span>
    </div>
    <input  class="form-control" name="name" type="text"  value="{{$contact->name}}">
  </div>
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text">email </span>
    </div>
    <input  class="form-control" name="email" type="email"  value="{{$contact->email}}">
  </div>
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text"> message </span>
    </div>
    <textarea class="form-control" name="message" aria-label="With textarea"> {{$contact->message}}</textarea>
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