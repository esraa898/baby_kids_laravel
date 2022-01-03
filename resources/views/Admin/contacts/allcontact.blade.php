@include('Admin/assets/navbar')
  
  



<div id="content" class="main-content">
           

                <div class="container">

   @if($errors->any())
@foreach($errors->all() as $error)
<h4 class="alert alert-warning">  {{$error}} </h4>
@endforeach
@endif





                   

                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row" id="cancel-row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Contact'S Table</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>message</th>
                                                    <th colspan="2" class="text-center"> Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contact)
                                                <tr>
                                                    <td> {{$contact->name}}</td>
                                                    <td> {{$contact->email}}</td>
                                                    <td> {{$contact->message}}</td>
                                                   
                                                                       
                                                <td class="text-center">
                                                        <form method="post" action="{{route('admin.contacts.delete')}}">
                                                            @csrf 
                                                            @method('DELETE')
                                                            <input type="hidden"name="contactID" value="{{$contact->id}}">
                                                        <button   class="btn btn-success btn-sm my-auto">   
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </button>
                                                     </form>
                                                        </td>
                                                      
                                                
                                              
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
          
@include('Admin/assets/footer')