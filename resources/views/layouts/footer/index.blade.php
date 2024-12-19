<footer class="footer style1 bg-image-2">
   <div class="footer-top">
      <div class="container">
         <div class="footer--inner">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0 order-md-1 order-2">
                  <div class="footer-widget">
                     <div class="footer-nav">
                        <ul>
                           <li class="menu-item"><a href="{{route('home')}}">Home page</a></li>
                           @foreach ($servicehome as $item)
                           <li class="menu-item"><a href="{{route('serviceList',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 mb-5 mb-md-0 order-md-2 order-1">
                  <div class="footer-widget text-center">
                     <div class="logo mr-bottom-55">
                        <a href="{{route('home')}}" class=""><img src="{{$setting->logo_footer}}" alt="logo"></a>
                     </div>
                     {{-- <form class="newsletter-form" method="post">
                        <div class="form-group">
                           <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-two">
                        <span class="btn-wrap">
                        <span class="text-first">Subscribe</span>
                        <span class="text-second"><i class="bi bi-arrow-up-right"></i> <i class="bi bi-arrow-up-right"></i></span>
                        </span>
                        </button>
                     </form> --}}
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0 order-md-3 order-3">
                  <div class="footer-widget text-md-end">
                     <div class="footer-nav">
                        <ul>
                           <li class="menu-item"><a href="{{route('aboutUs')}}">About Us</a></li>
                           <li class="menu-item"><a href="{{route('duanTieuBieu')}}">Services</a></li>
                           <li class="menu-item"><a href="{{route('lienHe')}}">Contact Us</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer Bottom Part -->
   <div class="footer-bottom">
      <div class="container">
         <div class="footer-bottom-inner">
            <div class="copyright">
               <p><a href="">{{$setting->company}}</a> photography, All Rights Reserved</p>
            </div>
            <div class="social-box style-oval">
               <ul>
                  <li><a href="https://www.facebook.com/" class="bi bi-facebook"></a></li>
                  <li><a href="https://www.instagram.com/" class="bi bi-instagram"></a></li>
                  <li><a href="https://www.linkedin.com/" class="bi bi-linkedin"></a></li>
                  <li><a href="https://www.behance.com/" class="bi bi-behance"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
