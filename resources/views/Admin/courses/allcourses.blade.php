@include('Admin/assets/navbar')
  
  



<div id="content" class="main-content">
            <div class="container">

               

 





                   

                    <div class="row layout-top-spacing">
                          @if($errors->any())
@foreach($errors->all() as $error)
<h4 class="alert alert-warning">  {{$error}} </h4>
@endforeach
@endif
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Courses'S Table</h4>
                                            <button class="btn btn-info"> <a href="{{route('admin.course.create')}}" >Add New Course</a> </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th>description</th>
                                                    <th>price</th>
                                                    <th>image</th>
                                                    <th>Teachers</th>
                                                    <th colspan="2" class="text-center"> Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($courses as $course)
                                                <tr>
                                                    <td> {{$course->name}}</td>
                                                    <td> {{$course->description}}</td>
                                                    <td> {{$course->price}}</td>
                                                    <td> <img src= "{{asset( $course->img )}}" width="150px" height="150px"></td>
                                                           
                                                <td class="text-center">
                                                        <form method="post"   action="{{route('admin.course.delete')}}">
                                                            @csrf 
                                                            @method('DELETE')
                                                            <input type="hidden" name="courseID" value="{{$course->id}}">
                                                        <button   class="btn btn-success  btn-sm my-auto">   
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </button>
                                                     </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{route('admin.course.edit',[$course->id])}}" class="btn btn-warning"> Edit</a>
                                                        </td>
                                                
                                              
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
          
@include('Admin/assets/footer')