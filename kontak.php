<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">lokasi perusahaan
                    </h2>
                    <hr>
                </div>
                
                <div class="panel-body text-center">
                        <h4>GTR TOUR AND TRAVEL</h4>
                        <div>
                        Jl. Garuda V no. 287 Blok. B Bekasi Utara Perumahan Babelan Indah<br>
                        Telepon: (021) 8920886 / HP.0857 1001 9398 / 0812 9543 7664<br />
                        Email: GTRTourandTravel@yahoo.com<br />
        

                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
						</div>
                <div class="clearfix"></div>
            </div>
        </div>

  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(-6.317675,107.069641,17);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
