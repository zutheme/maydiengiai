<div class="block-map block">
    <div class="block-map__body">
        <div id="map1" style="width:100%; float:left; height:600px;"></div>
    </div>
</div>
<div class="page-header">
<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <?php custom_breadcrumbs(); ?>
            </nav>
        </div>
        <div class="page-header__title">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
    </div>
</div>
</div>
<div class="block">
<div class="container">
    <div class="card mb-0">
        <div class="card-body contact-us">
            <div class="contact-us__container">
                <div class="row">
                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                        <h4 class="contact-us__header card-title">Địa chỉ</h4>
                        <div class="contact-us__address">
                            <?php echo get_field('contact_address','customizer'); ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h4 class="contact-us__header card-title">Tin nhắn liên hệ</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="form-name">Họ tên</label>
                                    <input type="text" id="form-name" name="firstname" class="form-control" placeholder="Họ tên">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="form-email">Email</label>
                                    <input type="email" id="form-email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="form-subject">Chủ đề</label>
                                <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                            </div> -->
                            <div class="form-group">
                                <label for="form-message">Nội dung</label>
                                <textarea name="note" id="form-message" class="form-control" rows="4"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-register">Xác nhận</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
        var url_icon = '<?php bloginfo('template_directory');?>/images/map-03.png';
    </script>
    <script>
         
    // Initialize and add the map
        function initMap() {
          // The location of Uluru,, 10.788438, 106.678147
          var uluru = {lat: 10.788438, lng: 106.678147};
          // The map, centered at Uluru
          var map1 = new google.maps.Map(
              document.getElementById('map1'), {zoom: 14, center: uluru});
          // The marker, positioned at Uluru
          var marker1 = new google.maps.Marker({position: uluru, map: map1});
        }
        
        function initialize(condition) {
            // create the maps 10.789308, 106.720466, 10.776763, 106.679007
            var latLng1 = new google.maps.LatLng(10.789308, 106.720466);
            var myOptions1 = {
                zoom: 14,
                center: new google.maps.LatLng(10.788438, 106.678147),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
           
            var map1 = new google.maps.Map(document.getElementById("map1"), myOptions1);
            var marker1 = new google.maps.Marker({
                position: latLng1,
                icon: url_icon,
                title: "Khoa hoc online"
            });
            // To add the marker to the map, call setMap();
            marker1.setMap(map1);
           
            // To add the marker to the map, call setMap();
    
             var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading">Phòng khám xương khớp Tickmedical</h1>'+
                  '<div id="bodyContent">'+
                  '<p><b>Phòng khám xương khớp Tickmedical</b></p>'+
                  '<p>Phải đặt được lợi ích của khách hàng lên ngang với lợi ích của chúng ta, khi đó chúng ta mới bắt đầu phát triển</p>'+
                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });
               marker1.addListener('click', function() {
                infowindow.open(map1, marker1);
              });
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV0eYc-TI6hKpAW9XyErnr6AmTtg9dxIA&callback=initialize">
    </script>