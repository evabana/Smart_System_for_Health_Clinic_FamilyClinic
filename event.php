<?php
  @include('header.php')
?>

<section class="banner_area" style="background-image: url(images/banner-2.jpg);" >
      <div class="banner_inner d-flex align-items-center" >
        <div class="container" >
          <div
          class="banner_content d-md-flex justify-content-between align-items-center " 
          >
          <div class="mb-3 mb-md-0">
              <h2>Events</h2>
              <p>We provide various events for better health</p>
          </div>
          <div class="page_link">
              <a href="index.php">Home</a>
              <a href="event.php">Event</a>
          </div>
      </div>
  </div>
</div>
</section>
<br>
<br>
 <!-- health services open -->
 <div class="service-area area-padding-top">
        <div class="container">
            <!-- <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Awesome<br>
                    Health Service</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Land meat winged called subdue without very light in all years sea appear midst forth image him third there set. Land meat winged called subdue without very light in all years sea appear</p>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                        <span class="fa-3x fa fa-flask" style="color:green" ></span>
                        </span>
                        <h3 class="card-service__title">Neurology Service</h3>
                        <p class="card-service__subtitle">We provide Neurologists with highly trained and capable of diagnosing complex conditions through detailed history and physical examination, including testing of mental status,sensation and coordination</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <!-- <i class="flaticon-tooth"></i> -->
                            <!-- <i class="fas fa-tooth"></i> -->
                            <span class="fa-3x fa fa-heartbeat"  style="color:green"></span>
                            
                        </span>
                        <h3 class="card-service__title">Dental Clinic</h3>
                        <p class="card-service__subtitle">We provide Dentist with highly trained with the modern technology and equipment like X-ray machines, lasers, drills, brushes, scalpels, and other medical tools when performing dental procedures.</p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                        <span class="fa-3x fa fa-hospital-o" style="color:green"></span>
                        </span>
                        <h3 class="card-service__title">Diagnosis Care </h3>
                        <p class="card-service__subtitle">We provide you with the best Diagnosis personals and equipments to finding out a specific disease. A medical professional prescribes a test to make a diagnosis or to exclude possible illness. </p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>


            </div>
        </div>
    </div>  
    <!-- health services close -->


    <br>
    <br>

    <div class="jumbotron container-fluid" style="background-image: url(images/banner-2.jpg);">

<div class="row" >
            <div class="col-md-1">
          
      </div>
             <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5" style="color: white;background-color:#00a400 ">
                      <h2 style="font-family: 'El Messiri', sans-serif; font-size: 20px;"> Special Events </h2>
              <p class="lead" style="font-family: 'El Messiri', sans-serif; font-size: 20px;"> Visit Our clinic to get vacinated for free for everyone  </p>
              <div class="row text-center">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 "  style="background-color: #3391E7;">
                     <div class="row"><div class="col-md-12"><h2 style="font-family: 'El Messiri', sans-serif; font-size: 20px;">Special Offer Till</h2></div></div>
                     <div class="row text-center"  ><div class="col-md-12" id="demo" style="font-size: 1.5em;"></div></div>
                  </div>
              </div>
          </div>
</div>

</div>
<div class="service-area area-padding-top">
        <div class="container">
<div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Awesome<br>
                    Health Service</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                <p>With our diverse team of skilled medical professionals, we are pleased to offer a wide range of services to our patients. Family Clinic pride ourselves on providing personalised, professional, quality healthcare. </p>

                </div>
            </div> 
</div>

<?php
include('footer.php')
?>


<script>
    //countdown ko date setting
    var countDownData = new Date("Sep 31, 2021 10:00:00").getTime();
    //update countdown every 1 sec
    var countDownFunction = setInterval(function() {
        //today's date and time
    var now = new Date().getTime();
    //countdown ko distance
    var distance = countDownData-now;
    //time calculation
    var days = Math.floor(distance / (1000 * 60 * 60 *24));
    var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / (1000));

    //output result in an element with id="demo"
    document.getElementById("demo").innerHTML =  days + "d " +": " + hours + "h " +": " + minutes + "m " +": " + seconds + "s ";
    //countdown sake paxi
    if (distance < 0) {
        clearInterval(countDownFunction);
        document.getElementById("demo").innerHTML = "Expired";
    }

    }, 1000);
</script>
