@include('assets/navbar')
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">CONTACT</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">FEEL FREE TO CONTACT US</h3>
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

        <div class="nicdark_space40"></div>


        <div class="grid grid_4">

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_yellow extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-location-outline nicdark_rotate"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4>MAIN SCHOOL</h4>                        
                            <div class="nicdark_space20"></div>
                            <p>Times Square 58, New York<br/>(00) 520 990 759</p>
                        </div>
                </div>
            </div>

            <div class="nicdark_space20"></div>


            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_orange extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-address nicdark_rotate"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4>SECONDARY SCHOOL</h4>                        
                            <div class="nicdark_space20"></div>
                            <p>Brodway 358, New York<br/>(00) 520 990 759</p>
                        </div>
                </div>
            </div>

            <div class="nicdark_space20"></div>


            <div class="nicdark_archive1 nicdark_bg_greydark nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-paper-plane-empty nicdark_rotate"></i></a>
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4 class="white">M@IL US</h4>                        
                            <div class="nicdark_space20"></div>
                            <p class="white">info@babykids.com <br/>registration@babykids.com</p>
                        </div>
                </div>
            </div>

        
        </div>


        <div class="grid grid_8">
            
           <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius_top">
                    <h4 class="white nicdark_margin20">CONTACT US</h4>
                    <i class="icon-mail nicdark_iconbg right medium orange"></i>
                </div>
                <div class="nicdark_margin20">
                    <form method="post" action="{{route('home.contact.Create')}}">
                        @csrf
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle"  name= "name" type="text" value="" placeholder="NAME">
                    <div class="nicdark_space20"></div>
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle"  name= "email" type="text" value="" placeholder="EMAIL">
                    <div class="nicdark_space20"></div>
                    <textarea class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle"  name= "message" placeholder="MESSAGE" rows="7"></textarea>
                    <div class="nicdark_space20"></div>
                    <!--<input class="nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white" type="submit" value="SEND">-->
                   
                    <button type="submit" style="border: none;background:none;"> 
                        <a  class=" nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white ">SEND</a>
                    </button>
                </form> 
             </div>
            </div>

        </div>


       

        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->

<!--start section-->
<section class="nicdark_section">
    <div class="nicdark_textevidence">
        <iframe class="nicdark_iframe nicdark_margintop40_negative nicdark_marginbottom90_negative" src="https://mapsengine.google.com/map/embed?mid=zefx5FZI0Z00.kKFANsaMqDXY" height="400" ></iframe>
    </div>
</section>
<!--end section--><!--end-->

<div class="nicdark_space3 nicdark_bg_gradient"></div>
@include('assets.footer')