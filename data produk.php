<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{background-color : white} 
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: white;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #4169E1;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #DC143C;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>
<script>
   alert("Selamat Datang Di NBA Store");
  </script>
  <script>
  var nama = prompt("Pilihlah Produk yang anda cari");
  document.write;
 </script>
<div class="header">
 <p><img src="30e52a62-976c-4eb0-9842-65671bc50237__1250X60.webp" style="width:100%;height:50px">  
  <p><img src="bdbe2b06-f075-45ed-af0e-3afabf0c2dee__1600X652.jpg" style="width:100%;height:500px">
 <p><img src="download.png" style="width:300px;height:100px">
 <h1>(NBA Gear At Store - NBA OFFICIAL STORE)</h1>
   <b>Alamat : Jl. Jl. Basuki Rahmat No. 1 Renon Denpasar – Bali, Bali 80211</b>
  </p>
</div>

<div class="topnav">

  <a href="https://www.nbastore.eu/en/#">HOME</a>
  <a href="#">SHOP BY TEAM</a>
  <a href="#">MEN</a>
  <a href="#">WOMEN</a>
  <a href="#">KIDS</a>
  <a href="#">JERSEYS</a>
  <a href="#">T-SHIRTS</a>
  <a href="#">HEADWEAR</a>
  <a href="#">FOOTWEAR</a>
  <a href="#">ACCESSORIES</a>


</div>
<div class="row">
  <div class="column side">
    <h2>NEW PRODUCT!</h2>
    <img src="chicago-bulls-11x11-magnet-set_ss4_p-13316687+u-gsn9dkpdego3rw0muz1t+v-a604397b5d244c829b17851088a2fa8e.webp" alt="Ortus" style="width:300px;height:300px;">
 <h1>Chicago Bulls 11x11 Magnet Set</h1>
 <p> Meneriakkan cinta Anda untuk tim Anda! Apakah Anda sedang mendekorasi rumah Anda atau bersorak dari tepi lapangan, ini adalah cara sempurna untuk menunjukkan dukungan Anda.</p>
 <h2>Rp.780.000,00</h2>
 <h3>Cari Produk</h3>
 <script>
  function cari (){
   var kata = document.formcari.keyword.value;
   var hasil = "https://www.tokopedia.com/solidsport;
   windows.open(hasil, 'tokopedia', config='height=60, width=50,scrollbars=yes location=yes')
   }
 </script>
 <form name="formcari" onSubmit= "cari()">Cari:
 <input name="keyword" size="30" type="text">
 <input type="submit" value="Cari">
 <input type="submit" value="Batal">
 </form>
  </div>
  <div class="column middle">
    <h2>SEMUA PRODUK</h2>
     <img src="denver-nuggets-wilson-nba-team-composite-basketball-size-7_ss4_p-13335412+u-12ps487tk0rkrcir1v1a+v-8d4b549db6914391a68e9f05c345a6c6.webp" alt="Logo" style="width:200px;height:200px;">
  <img src="boston-celtics-wilson-nba-dribbler-super-mini_ss4_p-12052210+u-3q0v3cdzuv342qlsetar+v-4b98e426947447f786f5759870beea1d.webp" alt="Logo" style="width:200px;height:200px;">
  <img src="dallas-mavericks-wilson-nba-dribbler-super-mini_ss4_p-12052226+u-295fgdz97ol0lemf7kfr+v-2d4123176cf64a2e91e5729a62055a2c.webp" alt="Logo" style="width:200px;height:200px;">
  <img src="chicago-bulls-nike-icon-swingman-jersey-custom-unisex_ss4_p-13304098+u-1bnmvuu775wdjk6j9fp8+v-e858b561236249d684c0e5486cb1440a.webp" alt="Logo" style="width:200px;height:200px;">
  <img src="los-angeles-lakers-nike-icon-swingman-jersey-custom-youth_ss4_p-11915615+u-dwuhns92hh4a0jn14ouv+v-3a1d6b3a0f384dad9535623544497b71.webp" alt="Logo" style="width:200px;height:200px;">
  <img src="21-swingman-jersey-icon-edition_pi3774000_ff_3774109-c23b97fdbaaa2e8a02de_full.webp" alt="Logo" style="width:200px;height:200px;">
  
  <img src="nba-nike-lebron-xviii-low-basketball-shoe-bugs-vs-marvin_ss4_p-12053866+u-1i1zmu2eb9o7be9xh0a9+v-d9f9964bf53c4dc5a1b3675b79c01f10.avif" alt="Logo" style="width:200px;height:200px;">
  <img src="golden-state-warriors-stance-graded-player-sock-stephen-curry_ss4_p-12055024+u-lb93pbzlj9j9vq7ydqdd+v-59e65f31692d4f8ebeba4a8979d4628a.webp" alt="Logo" style="width:200px;height:200px;">
   <img src="houston-rockets-stance-shortcut-2-socks-mens_ss4_p-12013554+u-lidnnz89zft7dhvw3ygn+v-85d24685b2f74a3d9efeb8c650db2de2.jpg" alt="Logo" style="width:200px;height:200px;"><p><b>Harga Produk</b></p><p><b>Rp.3.400,000</b></p>
 <h4>Produk yang dicari :</h4>
   <script>
   function daftar(){
   var nama = document.formdaftar.nama.value;
   if(nama == ""){
    alert("nama tidak boleh kosong");
    }
   } 
  </script>
  <form name="formproduk">
   Nama Produk: 
   <input name = "nama produk" size = "40" type = "text">
    <input type="submit" value="Cari">
  </form>
  </div>
  
  <div class="column side">
    <h2>Toko Kami:</h2>
    
    <img src="download.jpg" alt="logosolidsport" style="width:300px;height:200px;">
    <p><b>Alamat :    Jl. Jl. Basuki Rahmat No. 1 Renon Denpasar – Bali, Bali 80211</b> </p>
 <p><b>Buka : Senin - Sabtu (08.00-23.00 WIB)</b></p>
 <p><b>Telepon : 0895-4229-98015</b></p>
 <p><b>Provinsi : Bali</b> </p>

  <img src="download (1).png" alt="logosolidsport" style="width:350px;height:200px;">
  </div>
</div>
 
<div class="footer">
  <p><b>Copyright :M Roy Samsul Akbar All Right Reserved</b></p>
</div>
NBA | NBA G League | WNBA | Global | Teams | NBATV | Video | Mobile | Fantasy | NYC Store | NBA Tickets | CA Supply Chains Act/UK Modern Slavery Act | Site Map | Privacy Policy | Do Not Sell My Personal Information | Terms & Conditions |
<p>NBASTORE.COM is operated by Fanatics Retail Group North, LLC (“FRGN”), or one of its subsidiaries or affiliates (the “Fanatics Entities”) on behalf of NBA Media Ventures, LLC (“NBA”) and/or its affiliated entities (together with the NBA, the “Partner Entities”). ©2013 - 2022, NBA Media Ventures, LLC, FRGN or their respective affiliates and suppliers. All rights reserved. No portion of NBA.com may be duplicated, redistributed or manipulated in any form.</p>
</body>
</html>
