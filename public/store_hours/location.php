
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Contact Us</h1>
                        <p>Please feel free to contact us via the easiest method for you:
                        <br>Email: service@greenpointwineandspirits.com
                        <br>Phone: 353-848-3240</p>

                        <h3>Hours of Operation:</h3>
                        <p>Monday-Thursday 12:00 pm - 9:00 pm
                        <br>Friday-Saturday 12:00 pm - 10:00 pm
                        <br>Sunday 12:00 pm - 8:00 pm</p>
                        
                        <h3>Our Location</h3>
                        <p>Greenpoint Wines and Spirits is located at:
                            <br> 504 Meeker Avenue
                            <br>Greenpoint, NY 11385</p>
                        
                        <div id="map" class="hidden-xs">
                            <script>
                            function initMap() {
                                var uluru = {
                                    lat: 40.7201347,
                                    lng: -73.9436941
                                };
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 18,
                                    center: uluru
                                });
                                var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                });
                            }
                            </script>
                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCB_eMa4QDOPtFNjY95IdkJ3yYNkowSjs&callback=initMap">
                            </script>
                        </div>
                     </div>
                </div>
       