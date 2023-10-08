<?php 
$title = "Shops on Rent";
include("assets/includes/header.php");
?>
<section>
	

    <section class="profil  py-5 ">
     <div class="container">
        <h1 class="h2"><?php echo $title; ?></h1>
        <div class="row">
           <div class="col-md-8">
              <div class="slider">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div style="border-radius: 0.25rem;" class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="d-block w-100" style="height: 290px" src="assets/images/rent-shop.jpeg" alt="rent-shop.jpeg">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="olanaklar-kutu">
                 <div class="olanaklar">
                    <h4 class="pb-3">Convenience available:</h4>
                    <ul class="yacht-info__list ">
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid"> 24 hours Electricity with seperate Meter</span>
                      </li>
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid"> 24 hours running water.</span>
                      </li>
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid"> All Commercial shops </span>
                      </li>
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid">  Main road touch </span>
                      </li>
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid"> Seperate Parking</span>
                      </li>
                      <li>
                          <img src="assets/images/home.png" class="arac-icon" alt="Kiwi standing on oval">
                          <span class="vertical-align-mid"> Security Gaurd</span>
                      </li> 
                    </ul>
                 </div>
              </div>
            </div>
          <div class="col-md-4">
           <img class="card-img-top" src="assets/images/rent-shop-2.jpeg" alt="Card image cap">
           <div class="card-body">
               <h2 class="h3 text-success">Site Address :</h2>
               <p class="card-text text-danger text-center"> Shree Ganesh Appartment<br>palshi(shahar) aurangabad</p> 
           </div>
          </div>
        </div>
    </div>
   </section>
</section>
<?php
include("assets/includes/footer.php");
?>