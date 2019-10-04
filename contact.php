  <!-- Start Sample Area -->
  <section class="sample-text-area">

        <div class="container" id="buy">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" id="contact">
                    <h3 class="text-heading title_color  " style="color:#ffb606;">ติดต่อเรา</h3>
                        <h5>
                           ร้านขนมแม่นา ซอย กรุงเทพกรีฑา 7 แขวง หัวหมาก เขตบางกะปิ กรุงเทพมหานคร 10240
                           
                           <br>* เวลาทำการจันทร์- อาทิตย์ <br>ตั้งแต่ 9.00 น. จนถึง 16.30 น.
                        </h5>
                    </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" >
                <section style="padding-bottom: 0px;padding-top: 0px;">

                    <iframe id="map"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZEVlFGU3e-IavlW5izHVeGY3dEpfZchE&q=ซอย+กรุงเทพกรีฑา+7+แขวง+หัวหมาก+เขตบางกะปิ+กรุงเทพมหานคร+10240" allowfullscreen>
                    </iframe>


                </section>
        </div>
    <!-- Map Area End -->
               
            </div>
        </div>
    </section>
    <!-- End Sample Area -->
    <script type="text/javascript">

    $( document ).ready(function() {
    initialize();
    });
    function initialize() {
        var width_div = $("#contact").width();
        var height_div = $("#contact").height() > 336 ? 336 : $("#contact").height();
        
        $("#map").width(width_div);
        $("#map").height(height_div);
    }

    $( window ).resize(function() {
        initialize();
    });
    $(document).ready(function(){ $('body').find('img[alt$="www.000webhost.com"]').remove(); }); 
    </script>