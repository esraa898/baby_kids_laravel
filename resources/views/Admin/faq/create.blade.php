
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
@if(Session::has('done'))
  <h4  class="alert alert-warning">  {{Session::get('done')}} </h4>
@endif
<div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Create New Faq</h4>
                </div>
            </div>
        </div>
<form method="post" action="{{route('admin.faq.store')}}">
  @csrf
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text">Question </span>
  </div>
  <textarea class="form-control"  name="question" aria-label="With textarea"></textarea>
</div>
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <span class="input-group-text"> Answer </span>
  </div>
  <textarea class="form-control" name="answer" aria-label="With textarea"></textarea>
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
    
    
