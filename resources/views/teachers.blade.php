@include('assets/navbar')


<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-teachers-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">OUR TEACHERS</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">KNOW OUR BEST EDUCATORS</h3>
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

        <div class="nicdark_space10"></div>

        <div class="grid grid_4">

            <div class="nicdark_archive1 nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">  
                    <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_bluedark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>1</i></a>
        
                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">PEDAGOGICAL STUDY</h4>                        
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet, consec adipiscing elit</p>
                    </div>
                </div>
            </div>
    
        </div>


        <div class="grid grid_4">
            <div class="nicdark_archive1 nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">  
                    <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_greendark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>2</i></a>
        
                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">ASSISTANCE TO DISABLED</h4>                        
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet, consec adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid_4">
            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">  
                    <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_yellowdark medium nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i>3</i></a>
        
                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">MONTESSORI TEACHING</h4>                        
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Lorem ipsum dolor sit amet, consec adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
     
</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">ORANGE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 3-6 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>



       
        @foreach($teachers as $teacher)
        <div class="grid grid_6">
                    
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" height="208px" width= "232px" src="{{asset($teacher->img)}}">
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="single-teacher.html">{{$teacher->name}}</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$teacher->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>
        @endforeach

      


        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section--><!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallax_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="69" data-speed="1000">69</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">TEACHERS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="32" data-speed="1000">32</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">COURSES</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="48" data-speed="1000">48</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LESSONS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="72" data-speed="1000">72</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">ACTIVITIES</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>
            
</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">BLUE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 0-3 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


       @foreach($teachers as $teacher)
        <div class="grid grid_3">
                    
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">

                <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                    <h4 class="white nicdark_margin20">{{$teacher->name}}</h4>
                </div>

                <!-- <img class="nicdark_opacity" alt="" src="{{asset($teacher->img)}}"> -->

                 <div class="nicdark_textevidence nicdark_bg_blue">
                    <h5 class="white nicdark_margin20">{{$teacher->course->name}}</h5>
                    <i class="icon-brush nicdark_iconbg right medium blue"></i>
                </div>
                
                <div class="nicdark_textevidence">
                    <div class="nicdark_margin20">
                        <p>{{$teacher->description}}</p>
                        <div class="nicdark_space20 nicdark_displaynone_ipadpotr"></div>
                        

                        <a title="CURRICULUM" href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_tooltip nicdark_bg_blue medium nicdark_shadow nicdark_radius_circle white nicdark_margin010"><i class="icon-download-outline nicdark_rotate"></i></a>
                        <a title="DOCUMENTS" href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_tooltip nicdark_bg_blue medium nicdark_shadow nicdark_radius_circle white nicdark_margin010"><i class="icon-attach-outline nicdark_rotate"></i></a>
                        <a title="COURSES" href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_tooltip nicdark_bg_blue medium nicdark_shadow nicdark_radius_circle white nicdark_margin010"><i class="icon-mic-outline nicdark_rotate"></i></a>

                    </div>
                </div>

            </div>
        
        </div>
        @endforeach




        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section--><!--end-->
    
@include('assets.footer');