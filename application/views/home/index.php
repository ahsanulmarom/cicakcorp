
        <!-- About -->
        <div class="bagian">
        <div class="container">
        <div class="row">
            <div class="col-lg-12" id="About">
                <h2 class="page-header">
                    ABOUT
                </h2>
            </div>
            <div class="bagian-about col-md-6">
                <img src="<?php echo base_url()?>assets/image/icon.png">
            </div>
            <div class="col-md-6">
                <h4>CICAK CORP merupakan sebuah bla bla bla</h4>
            </div>
        </div>
        </div>
        </div>

        <!-- Service -->
        <div class="bagian" id="Service">
        <div class="container">
        <div class="row">
        	 <div class="col-lg-12" id="About">
                <h2 class="page-header">
                   LAYANAN
                </h2>
            </div>
        	<div class="col-sm-6 col-md-6">
        		<div class="panel panel-default">
<<<<<<< HEAD
=======
                    <div class="panel-heading">
                        <h4>Pre-Order</h4>
                    </div>
>>>>>>> c603dacac3dff699450e606c5387972a4ea024f7
        		<div class="thumbnail">
        			<div class="icon-lay"><span class="  glyphicon glyphicon-calendar"></span></div>
        			<div class="caption">
<<<<<<< HEAD
        				<h3>Pesan Barang Ready Stok</h3>
        				<p>...</p>
        				<p><a href="<?php echo base_url()."Home/category"?>" class="btn btn-primary" role="button">Beli Sekarang</a>
=======
        				<p>Melayani pembuatan pin, blocknote, gantungan kunci, ganci kaca, konveksi, stiker, dan vendel</p>
        				<p><a href="#" class="btn btn-cck" role="button">Pesan sekarang</a></p>
>>>>>>> c603dacac3dff699450e606c5387972a4ea024f7
        			</div>
        		</div>
        		</div>
        	</div>
        	<div class="col-sm-6 col-md-6">
        		<div class="panel panel-default">
<<<<<<< HEAD
        		<div class="thumbnail">
        			<img src="..." alt="...">
        			<div class="caption">
        				<h3>Pesan Sesuai Keinginan Anda</h3>
        				<p>...</p>
        				<p><a href="<?php echo base_url()."Home/customorder"?>" class="btn btn-primary" role="button">Pesan Sekarang</a>
        			</div>
        		</div>
=======
                    <div class="panel-heading">
                        <h4>Ready Stock</h4>
                    </div>
        		<div class="thumbnail">
                    <div class="icon-lay"><span class="glyphicon glyphicon-shopping-cart"></span></div>
                    <div class="caption">
                        <p>Melayani pembuatan pin, blocknote, gantungan kunci, ganci kaca, konveksi, stiker, dan vendel</p>
                        <p><a href="#" class="btn btn-cck" role="button">Lihat Sekarang</a></p>
                    </div>
                </div>
>>>>>>> c603dacac3dff699450e606c5387972a4ea024f7
        		</div>
        	</div>
        </div>
        </div>
        </div>

        <!-- Kontak-->
        <div class="bagian" id="Contact">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-md-4" style="padding-bottom: 20px">
                <h4>Kontak</h4>

                <div class="list-kontak">
                    <a href="#"><i class="fa fa-google"></i> Cicakcorp@gmail.com</a>
                </div>
                <span class="garis"></span>
                <div class="list-kontak">
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> CicakCorp</a>
                </div>
                <span class="garis"></span>
                <div class="list-kontak">
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> Cicak Corp.</a>
                </div>
                <span class="garis"></span>
                <div class="list-kontak">
                    <a href="#"><i class="fa fa-instagram" ></i> CicakCorp</a>
                </div>
                <span class="garis"></span>
                <div class="list-kontak">
                    <a href="#">+621331242342 (Daud)</a>
                </div>
                <span class="garis"></span>
            </div>
            <div class="col-md-4" style="padding-bottom: 20px">
                <h4>Yang Kami Tawarkan</h4>

                <div class="list-kontak">
                    <h5><a href="">Pre-Order</a></h5>
                </div>
                <span class="garis"></span>
                <div class="list-kontak">
                    <h5><a href="">Ready Stock</a></h5>
                </div>
                <span class="garis"></span>
            </div>
            <div class="col-md-4">
            <h5 style="color: white">MAPS</h5>
                <div id="map" style="width:300px;height:300px;background:yellow"></div>
            </div>
        </div>
        </div>
        </div>
        <!-- /.row -->

<?php
$this->load->view("home/footer");
?>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>