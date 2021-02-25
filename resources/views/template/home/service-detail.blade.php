<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/view-felona/single-service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 11:29:29 GMT -->
<head>
    @include('template.home.link')
</head>
<body>
    
    
   <!-- Main Header Area Start -->
   @include('template.home.header')
   <!-- Main Header Area End -->
       
       
      <!-- Breadcrumb Area Start -->
      <section class="felona-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Service Details</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Service Details</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Service Details Area Start -->
      <section class="felona-service-details section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="service-details-left">
                     <div class="single-career-sidebar">
                        <div class="quick-contact">
                           <ul>
                              <li><a href="{{url('/service-detail')}}">Refregirator Repair <i class="fa fa-angle-right"></i></a></li>
                              <li><a href="{{url('/service-detail')}}">dishwasher Repair <i class="fa fa-angle-right"></i></a></li>
                              <li class="active"><a href="{{url('/service-detail')}}">Washing Machine Repair <i class="fa fa-angle-right"></i></a></li>
                              <li><a href="{{url('/service-detail')}}">Television Repair <i class="fa fa-angle-right"></i></a></li>
                              <li><a href="{{url('/service-detail')}}">Coffe Maker Repair <i class="fa fa-angle-right"></i></a></li>
                              <li><a href="{{url('/service-detail')}}">Other Appliances Repair <i class="fa fa-angle-right"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="single-career-sidebar">
                        <h3>Service Brochures</h3>
                        <div class="attachment-action">
                           <a href="#"><i class="fa fa-file-pdf-o"></i> Download PDF <i class="fa fa-download"></i></a>
                           <a href="#"><i class="fa fa-file-word-o"></i> Download DOC <i class="fa fa-download"></i></a>
                        </div>
                     </div>
                     <div class="single-career-sidebar">
                        <div class="page-banner">
                           <h3>How can we help you ?</h3>
                           <p>Fusce vulputate eleifend uam sapien. Vestibulum purus quam, risque</p>
                           <h4><i class="fa fa-phone"></i>+917 8124 – 3527</h4>
                           <a href="#" class="felona-btn">Contact Us</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="service-details-right">
                     <div class="single-service-widget clearfix">
                        <div class="single-service-text">
                           <h2>Washing Machine Repair</h2>
                           <p>Fully Automatic Washing Machine Digital Inverter Model And Semi Automatic. We Are Specialists In Washing Machine Repair. </p>
                        </div>
                     </div>
                     <div class="single-service-widget clearfix">
                        <div class="about-service-box">
                           <div class="about-service-left">
                              <img src="{{asset('images/service-2.jpg')}}" alt="about service">
                           </div>
                           <div class="about-service-right">
                              <h3>About Service</h3>
                              <ul>
                                 <li><i class="fa fa-check-circle"></i> Best Data Security</li>
                                 <li><i class="fa fa-check-circle"></i> Qualified Guardst</li>
                                 <li><i class="fa fa-check-circle"></i> Sequre Payment</li>
                              </ul>
                              <ul>
                                 <li><i class="fa fa-check-circle"></i> Yeard of Protection</li>
                                 <li><i class="fa fa-check-circle"></i> Unique Security </li>
                                 <li><i class="fa fa-check-circle"></i> fire safety secure</li>
                              </ul>
                           </div>
                        </div>
                        <div class="single-service-text">
                           <p>We Provide Best Service To Build
                              Your Dream House.</p>
                        </div>
                     </div>
                     <div class="single-service-widget clearfix">
                        <div class="single-service-text">
                           <h3>get this service</h3>
                           <div class="service-get-form">
                              <form>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <p>
                                          <input type="text" placeholder="First Name" />
                                       </p>
                                    </div>
                                    <div class="col-lg-6">
                                       <p>
                                          <input type="text" placeholder="Last Name" />
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <p>
                                          <input type="email" placeholder="Email Address" />
                                       </p>
                                    </div>
                                    <div class="col-lg-6">
                                       <p>
                                          <select class="wide">
                                             <option selected>Service Type</option>
                                             <option>One Time</option>
                                             <option>Monthly</option>
                                             <option>Weeky</option>
                                          </select>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <p>
                                          <textarea placeholder="Optional Message"></textarea>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <p>
                                          <button type="submit" >Get Started</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service Details Area End -->
       
       
     <!-- Footer Area Start -->
     @include('template.home.footer')
     <!-- Footer Area End -->
      
      
     @include('template.home.script')
   </body>

<!-- Mirrored from themescare.com/demos/view-felona/single-service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 11:29:29 GMT -->
</html>

