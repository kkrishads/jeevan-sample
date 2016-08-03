<?php
$screen="home";
include 'header.php';
?>

    <section id="main_screen" class="service-item"  >
	
	  <div class="container">
	
	<div class="row">
                <div class="col-xs-12 col-sm-9 wow fadeInDown">

                    <h2>Sponcers / Advertisements</h2> 
                    <div class="tab-wrap" style="border:0px;">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Sponcer - 1</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Sponcer - 2</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Sponcer - 3</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Sponcer - 4</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Sponcer - 5</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="lead"><b>Test</b></h4>
                                               <p class="lead">Sponces or Advertisements Content Here</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>
                                            <div class="media-body">
                                                 <h4 class="lead"><b>Test</b></h4>
                                               <p class="lead">Sponces or Advertisements Content Here</p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane" id="tab3">
                                        <p class="lead">Sponces or Advertisements Content Here</p>   </div>
                                     
                                     <div class="tab-pane" id="tab4">
                                        <p class="lead">Sponces or Advertisements Content Here</p> </div>

                                     <div class="tab-pane" id="tab5">
                                        <p class="lead">Sponces or Advertisements Content Here</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-3">
              <div class="pricing-area text-center">
			  <div class="row">
			  <div class="plan price-six wow fadeInDown">
			   <center>
                        <ul>
                            <li class="heading-six" style="margin-left:0px; padding:5px 5px;">
                                <h2 style="margin:0px; 0px;">User Login</h2>
                               
                            </li>
							<li>
                            <div class="row"  style="border:1px; background-color:#00000000"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label>User ID *</label>
                            <input type="text" name="name" class="form-control" placeholder="User Id" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="email" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Sign In</button>
                        </div>
                        <a href="#">Forgot Password?</a>                   
                    </div>
					</li>
                    </ul>
                </form> 
            </div><!--/.row-->
       
						</center>
						</div>
						</div>
                    </div>
									
									
									</div>
                    </div>
            </div>
	
	
	</div>
           </section><!--/#main-slider-->

 
    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Text Comes Here<br> Text Comes Here</p>
            </div>

        <!--<div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div>row-->
        </div><!--/.container-->
    </section><!--/#services-->
<?php
include 'footer.php';
?>	