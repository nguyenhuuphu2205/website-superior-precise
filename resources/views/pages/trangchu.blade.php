 @extends('pages.layout.index')
 @section('content')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> <span style="text-shadow: 1px 1px #1a1b1a;">CÔNG TY TNHH SUPERIOR PRECISE</span>
      </h1>
      <h2 style=" text-shadow: 1px 1px #1a1b1a; color:red">{{$thongtinwebsite->mo_ta}}</h2>
      <div class="d-flex">
        <a href="trangchu#about" class="btn-get-started scrollto">Giới thiệu</a>
        <!-- <a href="#about" class="btn-get-started scrollto">Máy in</a> -->
        <a href="https://youtu.be/P7bJHT4adtA" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true" > Video Sản Xuất <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>GIỚI THIỆU</h2>
          <h3>Về Cty Của Chúng Tôi</h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img data-src="assets/img/about.png" class="img-fluid lozad" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-primary">CÔNG TY TNHH SUPERIOR PRECISE</h3>
            <p class="font-italic">
            Với nhiều năm kinh nghiệm, công ty chúng tôi chuyên sản xuất và cung cấp các sản phẩm BOBBIN và các sản phẩm về khuôn ép.
            </p>
            <ul>
            <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5> NHÂN SỰ CHẤT LƯỢNG CAO </h5>
                  <p>Trình độ đại học: 2 người, trình độ cao đẳng: 3 người, kỹ thuật: 3 người, lao động phổ thông: 35 người.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5> CHẤT LƯỢNG VÀ UY TÍN LÀ HÀNG ĐẦU </h5>
                  <p>Kể từ khi thành lập, chúng tôi tuân thủ chính sách kinh doanh cùng thắng bằng chất lượng, uy tín và định hướng theo nhu cầu thị trường</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5> CÔNG NGHỆ TIÊN TIẾN HIỆN ĐẠI </h5>
                  <p> Lấy phát triển sản phẩm làm đầu tàu, chiến lược phát triển dựa trên công nghệ tiên tiến và dịch vụ chân thành, hợp tác trung thực với khách hàng, chung tay vì tương lai. </p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5>SẢN PHẨM BOBBIN NHỰA</h5>
                  <p>Cung cấp đa dạng các sản phẩm Bobbin, đa dạng màu sắc, kích cỡ: Bobbin vòng ngoài 330 vòng, 380 vòng... </p>
                </div>
              </li>

            </ul>
            <p class="text-justify">
            Ngoài ra chúng tôi còn nhận in gia công tất cả các sản phẩm nhựa ép theo yêu cầu của khách hàng, đa dạng mẫu mã, mầu sắc  và kích cỡ.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Khách hàng hài lòng <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Khách hàng thân thiết <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Đúng tiến độ <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Trước tiến độ <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          

          </div>

        </div>

      </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-printer"></i>
              <span data-toggle="counter-up">50</span>
              <p>Loại sản phẩm</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-paper"></i>
              <span data-toggle="counter-up">5210</span>
              <p>Đơn hàng hoàn thành</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-clock-time"></i>
              <span data-toggle="counter-up">210,463</span>
              <p>Giờ sản xuất</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">43</span>
              <p>Nhân viên</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

   

    <section id="thietbi" class="team section-bg">
      @foreach($danhmucnoibat as $danhmuc)
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="text-secondary">SẢN PHẨM</h2>
        <h3 class="text-primary">{{$danhmuc->ten}}</h3>
        
          
        </div>

        <div class="row">
          <?php 
          $i=0;
          ?>
          @foreach($danhmuc->sanPham as $may)
          <?php 
          if($i==4){
          break;
          }
          $i++;
          ?>
          @if(count($danhmuc->sanPham) <= 3)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" >
          @else
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" >
          @endif
            <div class="member">
              <div class="member-img" >
              <img data-src="upload/sanpham/{{$may->hinh_anh}}" class="img-fluid lozad" alt="{{$may->ten_khong_dau}}" style="height: 300px; width:100%">
                <div class="social">
                 
                  <a href="san-pham/{{$may->id}}/{{$may->ten_khong_dau}}"><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info " >
                <h4>{{$may->ten}}</h4>
              <a href="san-pham/{{$may->id}}/{{$may->ten_khong_dau}}">Xem chi tiết</a>
              </div>
            </div>
          </div>
        @endforeach


         

        </div>
        <div class="row justify-content-center">
          <p class=""><a href="danh-muc/{{$danhmuc->id}}/{{$danhmuc->ten_khong_dau}}" class="text-danger">Xem thêm</a></p>
        </div>
        <hr>
        

      </div>
      @endforeach
    </section><!-- End Team Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="vanphong" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2 class="text-secondary">Văn Phòng</h2>
            <h3 class="text-primary">Văn Phòng và Xưởng</h3>
            <!-- <p>Văn Phòng và xưởng của chúng tôi</p> -->
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php 
              $count_san_pham_in =0
              ?>
              @foreach($hinhanhctys as $sp)
              <?php
              if($count_san_pham_in ==3){
              break;
              }
              $count_san_pham_in ++;
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{$sp->ten}} ">
              <img data-src="upload/hinhanhcty/{{$sp->hinh_anh}}"  class="lozad" width="100%" height="450px">
                <div class="portfolio-info">
               <div>
                <h4>{{$sp->ten}}</h4>
                 </div>
                  <a href="upload/hinhanhcty/{{$sp->hinh_anh}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-zoom-in"></i></a>
                  <a href="van-phong/tat-ca" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
                </div>
              </div>

              @endforeach
         
  
  
      
  
          </div>
          <div class="row justify-content-center">
            <p class=""><a href="van-phong/tat-ca" class="text-danger">Xem thêm</a></p>
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="khachhang" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img data-src="assets/img/clients/samsungceo.png" class="testimonial-img lozad" alt="">
            <h3>Gregory-Lee</h3>
            <h4>Giám đốc marketing &amp; CEO Samsung VN</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Chúng tôi rất hài lòng với chất lượng sản phẩm và dịch vụ của công ty. Công ty làm việc rất chuyên nghiệp.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img data-src="assets/img/clients/kazhira-ceo-sony.jpg" class="testimonial-img lozad" alt="">
            <h3>Kazhira</h3>
            <h4>CEO &amp; Founder Sony VN</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Tiến độ sản xuất của công ty rất nhanh, chất lượng vượt ngoài mong đợi. Sẽ thường xuyên hợp tác với công ty.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->

     <!-- ======= Clients Section ======= -->
     <section  class="clients section-bg">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2>Đối Tác</h2>
        
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
          
            <img data-src="assets/img/company/honda.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/samsung.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/sony.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/luxshareict.png" class="img-fluid lozad" alt="">
          </div>


        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LIÊN HỆ</h2>
          <h3><span>Thông Tin Liên Hệ</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Địa chỉ</h3>
              <p>{{$thongtinwebsite -> dia_chi}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>{{$thongtinwebsite->email}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>SĐT</h3>
              <p>{{$thongtinwebsite->sdt}}</p>
              <p>{{$thongtinwebsite->sdt2}}</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            
            <iframe class="mb-4 mb-lg-0 lozad" data-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1315.8450543415663!2d106.0769261522784!3d21.121660436172984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1604543905211!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên của bạn" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="SĐT" data-rule="minlen:9" data-msg="Please enter a valid phone" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ đề" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Nhập nội dung câu hỏi"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi câu hỏi</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    

  </main><!-- End #main -->
 @endsection
 
 