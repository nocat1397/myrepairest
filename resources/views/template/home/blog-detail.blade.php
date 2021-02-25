<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/view-felona/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 11:30:01 GMT -->
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
                     <h3>Single Blog</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index-2.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Single Blog</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Blog Page Start -->
      <section class="felona-blog-page-area single-blog-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="blog-page-left">
                     <div class="blog-image">
                        <a href="#">
                        <img src="{{asset('images/blog-page-1.jpg')}}" alt="blog 1" />
                        </a>
                     </div>
                     <div class="blog-desc blog-single-page">
                        <p class="blog-date">26 <span>Jan</span></p>
                        <h3>Dangers of Having High Water Pressure</h3>
                        <div class="blog-post-meta">
                           <ul class="d-flex align-items-center">
                              <li class="dlab-post-name"> <img src="{{asset('images/testimonial.jpg')}}" alt=""> Posted by <a href="#" class="site-button-link">Admin</a></li>
                              <li class="post-author"><i class="fa fa-thumbs-up"></i> <a href="#">18</a> </li>
                              <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">9</a> </li>
                           </ul>
                        </div>
                       <blockquote>
                           <p class="blockquote_desc">
                              There are no secrets to success. It is the result of preparation,
                              hard work, and learning from failure.lorem ipsum dolor sit amet.
                           </p>
                           <h4 class="qoute_meta">- Jhon Doe</h4>
                           <i class="fa fa-quote-left"></i>
                        </blockquote>
                     </div>
                     <div class="post-share-box">
                        <div class="row">
                           <div class="col-md-6 col-sm-6 no-pad-left">
                              <div class="post-share-left">
                                 <p>
                                    tag :
                                    <a href="#">business ,</a>
                                    <a href="#">finance</a>
                                 </p>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="post-share-right">
                                 <p>Share :</p>
                                 <a href="#" class="post_fb">
                                 <i class="fa fa-facebook"></i>
                                 </a>
                                 <a href="#" class="post_twt">
                                 <i class="fa fa-twitter"></i>
                                 </a>
                                 <a href="#" class="post_gl">
                                 <i class="fa fa-google-plus"></i>
                                 </a>
                                 <a href="#" class="post_lknd">
                                 <i class="fa fa-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="felona-comment-list">
                        <div class="comment-group-title">
                           <h3>Comments (03)</h3>
                        </div>
                        <div class="single-comment-item">
                           <div class="single-comment-box">
                              <div class="main-comment">
                                 <div class="author-image">
                                    <img src="{{asset('images/4.jpg')}}" alt="author">
                                 </div>
                                 <div class="comment-text">
                                    <div class="comment-info">
                                       <h4>david kamal</h4>
                                       <p>12 FEB 2019</p>
                                    </div>
                                    <div class="comment-text-inner">
                                       <p>I have experienced best service and satisfying answers from your technicians.</p>
                                       <a href="#">Reply <i class="fa fa-reply"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="single-comment-box reply-comment">
                              <div class="main-comment">
                                 <div class="author-image">
                                    <img src="{{asset('images/5.jpg')}}" alt="author">
                                 </div>
                                 <div class="comment-text">
                                    <div class="comment-info">
                                       <h4>Danial Martin</h4>
                                       <p>12 FEB 2019</p>
                                    </div>
                                    <div class="comment-text-inner">
                                       <p>I will totally recommended MyRepairest.Good facility and staff.</p>
                                       <a href="#">Reply <i class="fa fa-reply"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="single-comment-box">
                              <div class="main-comment">
                                 <div class="author-image">
                                    <img src="{{asset('images/4.jpg')}}" alt="author">
                                 </div>
                                 <div class="comment-text">
                                    <div class="comment-info">
                                       <h4>sumaiya mim</h4>
                                       <p>12 FEB 2019</p>
                                    </div>
                                    <div class="comment-text-inner">
                                       <p>I will totally recommended MyRepairest.Good facility and staff.I have experienced best service and satisfying answers from your technicians.</p>
                                       <a href="#">Reply <i class="fa fa-reply"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="felona-leave-comment">
                        <div class="comment-group-title">
                           <h3>Leave a comment</h3>
                           <p>Your must sing-in to make or comment a post</p>
                        </div>
                        <form>
                           <div class="row">
                              <div class="col-lg-6">
                                 <p>
                                    <input type="text" placeholder="First Name" />
                                 </p>
                              </div>
                              <div class="col-lg-6">
                                 <p>
                                    <input type="email" placeholder="Email Address" />
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
                                    <button type="submit">Post Comment</button>
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-sidebar">
                     <div class="single-blog-sidebar">
                        <h3>Search</h3>
                        <form>
                           <p>
                              <input type="search" placeholder="Keywords...">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </p>
                        </form>
                     </div>
                     <div class="single-blog-sidebar">
                        <h3>categories</h3>
                        <ul class="blog-catagory">
                           <li><a href="#">Apartment <span>(29)</span></a></li>
                           <li><a href="#">Apartment Building <span>(12)</span></a></li>
                           <li><a href="#">Bungalow <span>(22)</span></a></li>
                           <li><a href="#">Corporate House <span>(11)</span></a></li>
                           <li><a href="#">Duplex Villa <span>(12)</span></a></li>
                           <li><a href="#">garage<span>(19)</span></a></li>
                           <li><a href="#">commercial apartment<span>(17)</span></a></li>
                        </ul>
                     </div>
                     <div class="single-blog-sidebar">
                        <h3>Tags</h3>
                        <ul class="Tags-catagory">
                           <li><a href="#">Apartment </a></li>
                           <li><a href="#">Condo </a></li>
                           <li><a href="#">Villa </a></li>
                           <li><a href="#">Bungalow</a></li>
                           <li><a href="#">garage </a></li>
                           <li><a href="#">Electrical </a></li>
                           <li><a href="#">Financial </a></li>
                        </ul>
                     </div>
                     <div class="single-blog-sidebar">
                        <h3>Latest blog</h3>
                        <ul class="recent-blog">
                           <li>
                              <div class="recent-img">
                                 <a href="#">
                                 <img src="{{asset('images/flicker-2.jp')}}g" alt="recent image">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="#">Hot Marketing Trends You Need to Implement</a>
                                 </h4>
                                 <p>23 August 2019</p>
                              </div>
                           </li>
                           <li>
                              <div class="recent-img">
                                 <a href="#">
                                 <img src="{{asset('images/flicker4.jpg')}}" alt="recent image">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="#">Using Hashtag Effectively In Social Media</a>
                                 </h4>
                                 <p>23 August 2019</p>
                              </div>
                           </li>
                           <li>
                              <div class="recent-img">
                                 <a href="#">
                                 <img src="{{asset('images/flicker5.jpg')}}" alt="recent image">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="#">Using Hashtag Effectively In Social Media</a>
                                 </h4>
                                 <p>23 August 2019</p>
                              </div>
                           </li>
                           <li>
                              <div class="recent-img">
                                 <a href="#">
                                 <img src="{{asset('images/flicker1.jpg')}}" alt="recent image">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="#">Hot Marketing Trends You Need to Implement</a>
                                 </h4>
                                 <p>23 August 2019</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="single-blog-sidebar">
                        <h3>Archive</h3>
                        <ul class="blog-catagory">
                           <li><a href="#">August 2018 <span>(29)</span></a></li>
                           <li><a href="#">July 2018 <span>(12)</span></a></li>
                           <li><a href="#">June 2018 <span>(22)</span></a></li>
                           <li><a href="#">May 2018 <span>(11)</span></a></li>
                           <li><a href="#">April 2018 <span>(12)</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog Page End -->
       
       
    <!-- Footer Area Start -->
    @include('template.home.footer')
    <!-- Footer Area End -->
     
     
    @include('template.home.script')
   </body>

<!-- Mirrored from themescare.com/demos/view-felona/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 11:30:19 GMT -->
</html>

