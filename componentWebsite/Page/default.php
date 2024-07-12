<!-- PDF viewer container -->
<!-- <div id="pdf-viewer" class="viewer"></div> -->

<!-- <div class="container-md">
    <article>
        <div class="picture">
            <img src="img/ianPicture.png" alt="picture Perfil">
        </div>
        <div class="title">
            <h1>IAN CALBREATH</h1>
            <p>I.T. PROFESSIONAL</p>
        </div>
    </article>
</div> -->

<div class="container">
                   <div class="row home-detail">
                      <div class="col-md-5 animated bounceInLeft hom-img">
                          <img src="assets/images/name.png" alt="">
                      </div>
                        <!-- personal information and link-->
                      <?php
                        $informationGeneral = parse_ini_file("settings.ini",true);
                        
                        echo '<div class="col-md-7 animated bounceInRight homexp">
                           <h5>Hello I am</h5>
                           <h2>'.$informationGeneral["info"]["name"].'</h2>
                           <span>Professional <a >'.$informationGeneral["info"]["role"].'</a> </span>
                           <p>'.$informationGeneral["info"]["sumary"].'</p>
                           
                           <ul class="socil-icon">
                                <li>
                                    <a href="'.$informationGeneral["link"]["facebook"].'"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="'.$informationGeneral["link"]["instagram"].'"><i class="fab fa-instagram"></i></a> 
                                </li>
                                <li>
                                    <a href="'.$informationGeneral["link"]["linkedin"].'"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="'.$informationGeneral["link"]["github"].'"><i class="fab fa-github"></i></a>
                                </li>
                           </ul>
                       </div>
                        <!-- end personal information and link -->
                   </div>

                </div>
          </div>
        </div>
        
        <!--########################### About US Starts Here ###################### -->
        
        <div id="about_us" class="about-us container-fluid">
           <div class="container">
               <div class="session-title row">
                    <h2>About Me</h2>
                    <p>'.$informationGeneral["info"]["about_me"].'</p>
                    <div class="heading-line"></div>
                </div>
                <div class="about-row row">
                   <div class="image-col col-md-4">
                       <img src="img/ianPicture.png" alt="Profile Picture">
                       <a href="resource/ICalbreathPro.pdf" download="ICalbreathPro.pdf" class="btn btn-primary"><i class="fas fa-download"></i> Download CV</a>
                   </div>
                   <div class="detail-col col-md-8">
                       <h2>'.$informationGeneral["info"]["name"].'</h2>
                        <h6>'.$informationGeneral["info"]["role"].'</h6>
                        <p>'.$informationGeneral["info"]["short_sumary"].'</p>
                          <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="info-list">
                                    <ul>
                                        <li><span>City:</span>'.$informationGeneral["info"]["city"].'</li>
                                        <li><span>Study:</span>'.$informationGeneral["info"]["study"].'</li>
                                        <li><span>Website:</span>'.$informationGeneral["info"]["website"].'</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="info-list">
                                    <ul>
                                        <li><span>Degree:</span>'.$informationGeneral["info"]["degree"].'</li>
                                        <li><span>Mail:</span>'.$informationGeneral["info"]["email"].'</li>
                                        <li><span>Phone:</span>'.$informationGeneral["info"]["phone"].'</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>    
            
        </div>';
        
        if ($informationGeneral["services"]["status"] == "true") {
        echo '<!--########################### Services Starts Here ###################### -->
           
          <div id="services"  class="services container-fluid">
           <div class="container">
               <div class="session-title row">
                    <h2>Servcies I Provide</h2>
                    <p>There are many variations of passages of Lorem Ipsum available Lorem Ipsum available but the majority</p>
                    <div class="heading-line"></div>
                </div>
                <div class="services-row row">
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="far fa-file-image"></i>
                            <h4>Graphic Design</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                           <i class="fas fa-desktop"></i>
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fas fa-bullhorn"></i>
                            <h4>Digital Marketing</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fab fa-uikit"></i>
                            <h4>UI/UX Design</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                           <i class="fas fa-suitcase"></i>
                            <h4>Business Analysis</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Mobile App Development</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>';
        }
          
        if ($informationGeneral["skill"]["status"] == true){
        echo '
            <!--########################### Skills Starts Here ###################### -->
         
        <div id="skills" class="skills container-fluid">
            <div class="row">
                <div class="col-md-6 skii-div tech-skill">
                    <div class="title">
                        <h2>Technical Skill</h2>
                        <p>There are many variations available but the majority</p>
                    </div>
                    
                    <ul>
                        <li>
                            <label for="">'.$informationGeneral["skill"]["option_1"].'</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_1"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_1"].'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_2"].'</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_2"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_2"].'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_3"].'</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_3"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_3"].'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_4"].'</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_4"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_4"].'" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         
                    </ul>
                </div>
                <div class="col-md-6 skii-div pro-skill">
                    <div class="title">
                        <h2>Technical Skill</h2>
                        <p>Professional Skills</p>
                    </div>
                     <ul>
                        <li>
                            <label for="">'.$informationGeneral["skill"]["option_5"].'</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_5"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_5"].'" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_6"].'</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_6"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_6"].'" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_7"].'</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_7"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_7"].'" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">'.$informationGeneral["skill"]["option_8"].'</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: '.$informationGeneral["skill"]["avg_skill_8"].'%" aria-valuenow="'.$informationGeneral["skill"]["avg_skill_8"].'" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';  
    }

    if($informationGeneral["testimonial"]["status"] == "true"){
    echo '
         <!--  ************************* Testimonial  Starts Here ************************** -->

     <section id="testimonial" class="customer-serv">
            <div class="container">
                <div class="row session-title">
                    <h2>Happy Customers</h2>
                   
                </div>
    
                <div class="row ro-clo">
                    <div data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p>Classic Aqua water purify is good.Because its cure our purify that is called  health and gives good life. I suggest classic aqua for its best purify of water</p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-01.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Sarath Ali</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4 col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p> have use this product at my home last 1 and half year of this. This product quality is good.Its good quality product for use it can improve water Quality.
                            </p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-02.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Binny Aderson</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4  col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-anijs="if: scroll, on: window, do: bounceInRight animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p>Very essensial product.it is clean and helthy water is mutually most important so that acqa is fufil its quality.our life now a days very tressful and restless</p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-03.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Arjun Samluel</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4 col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </section>';   
    }          
    
    if($informationGeneral["pricing"]["status"] == "true"){
    echo '         
     <!--*************** Pricing Starts Here ***************-->
       <div id="generic_price_table">
       <section class="container-fluid price-tab">
           <div class="container">
                <div class="row session-title">
                   <h2>Our Attractive Pricing</h2>
                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
               </div>
           </div>
           <div class="container">

               <!--BLOCK ROW START-->
               <div class="row price-row">
                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Basic</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">99</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>

                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content active clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Standard</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">199</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>
                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Unlimited</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">299</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>
               </div>
               <!--//BLOCK ROW END-->

           </div>
       </section>

   </div>';
    }
              
              
               
  
    if($informationGeneral["gallery"]["status"] == "true"){
    echo '
    <!--  ************************* Gallery Starts Here ************************** -->
        <div id="portfolio" class="gallery">    
           <div class="container">
              <div class="session-title row">
                    <h2>Portfolio</h2>
                    <p>Take a look at some of our latest work</p>
                    <div class="heading-line"></div>
                </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_09.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_08.jpg" class="img-responsive">
            </div>

            
        </div>
    </div>
       </div>
        <!-- ######## Gallery End ####### -->';
    }        
?>