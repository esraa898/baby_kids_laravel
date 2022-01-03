@include('assets/navbar')

<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-courses">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">COURSES</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">ADDITIONAL COURSES FOR YOUR KIDS</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


      

      
        @foreach($courses as $course )
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center"> 
                <div style="background-image: url('{{ asset($course->img)}}'); background-size:cover;" class="nicdark_archive1 nicdark_radius">
                    <div class="nicdark_filter green nicdark_radius_top">
                        <div class="nicdark_space60"></div>
                        <a href="#" class="nicdark_zoom white nicdark_btn_icon nicdark_bg_greydark big nicdark_radius_circle">{{$course->price}}<br><small>USD</small></a>
                        <div class="nicdark_space60"></div>
                    </div>
                </div>
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">{{$course->name}}</h4>
                </div>
                <div class="nicdark_margin20">
                    <p>{{$course->description}}</p>
                    <div class="nicdark_space20"></div>
                    <a href="single-course.html" class="white nicdark_btn nicdark_bg_green medium nicdark_radius nicdark_shadow nicdark_press">MORE INFO</a>
                </div>
            </div>
        </div>
@endforeach
       
    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->



<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <a class="nicdark_disable_floatright_iphoneland nicdark_disable_floatright_iphonepotr nicdark_btn nicdark_bg_green medium right nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-left-open-outline"></i>&nbsp;&nbsp;&nbsp;PREV</a>
        </div>
        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <a class=" nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_press">NEXT&nbsp;&nbsp;&nbsp;<i class="icon-right-open-outline"></i></a>
        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section--><!--end-->
@include('assets.footer');