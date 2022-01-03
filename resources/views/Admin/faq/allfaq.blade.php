@include('Admin/assets/navbar')
  
  



<div id="content" class="main-content">
            <div class="container">

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
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>FaQ'S Table</h4>
                                            <button class="btn btn-info"> <a href="{{route('admin.faq.create')}}" >Add New Faq</a> </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th colspan="2" class="text-center"> Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($faqs as $faq)
                                                <tr>
                                                    <td> {{$faq->question}}</td>
                                                    <td>{{$faq->answer}}</td>
                                                   
                                                    <td class="text-center">
                                                        <form method="post"  action="{{route('admin.faq.delete') }}">
                                                            @csrf 
                                                            @method('DELETE')
                                                            <input type="hidden"name="faqID" value="{{$faq->id}}">
                                                        <button class="btn btn-sucess">   
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </button>
                                                     </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{route('admin.faq.edit',[$faq->id])}}" class="btn btn-warning"> Edit</a>
                                                        </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
          
@include('Admin/assets/footer')