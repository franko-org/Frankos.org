<?php
// Get Price
		$json_string2	= file_get_contents('http://www.frankos.org/coin_api.php?coin_id=33');
		$json2			= json_decode($json_string2);
		$price			= round($json2->usd_value, 4, PHP_ROUND_HALF_UP);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Franko is an opensource distributed autonomous corporation built on top of a blockchain assisted payment network that maintains, secures and audits all corporate shares securely and transparently.">
    <meta name="author" content="https://plus.google.com/u/0/+ChristopherFranko">

    <meta name="robots" content="index, follow">

    <title>Franko | Distributed Autonomous Corporation</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="background-image-overlay"></div>

    <div id="outer-background-container" data-default-background-img="assets/images/other_images/bg5.jpg" style="background-image:url(assets/images/other_images/bg1.jpg);"></div>
    <!-- end: #outer-background-container -->    

    <!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo">
          <a href="#intro" class="link-scroll"><img src="assets/images/other_images/logo.png" alt="Franko"></a>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
		<li class="menu-item scroll"><a class="e-widget" href="https://gleam.io/c8lcs/franko-giveaway" rel="nofollow">Enter to Win 100 FRK</a></li>
          <li id="menu-item-text" class="menu-item scroll"><a href="#text">Franko is..</a></li>
          <li id="menu-item-carousel" class="menu-item scroll"><a href="#carousel">Downloads</a></li>
          <li id="menu-item-grid" class="menu-item scroll"><a href="#grid">Docs</a></li>
          <li id="menu-item-featured" class="menu-item scroll"><a href="#featured">Get/Trade/Use</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a href="#contact">Mailing List</a></li>
		  <li id="menu-item-bounties" class="menu-item scroll"><a href="https://docs.google.com/document/d/1JXVDKeIP340GH8ZJFOCWrJubG9sEgv598C3uLYTPnCE/">Bounties</a></li>
		  <li id="menu-item-media" class="menu-item"><a href="http://www.youtube.com/frankocurrency">Media</a></li>
		  <li id="menu-item-forum" class="menu-item"><a href="http://forum.frankos.org">Forum</a></li>
          <li id="menu-item-blockexplorer" class="menu-item"><a href="http://explorer.frankos.org:3000">Block Explorer</a></li>
          <li id="menu-item-blockexplorer" class="menu-item"><a href="http://coinplorer.com/FRK">Block Explorer 2</a></li>
          <li id="menu-item-frank-price" class="menu-item"><a href="https://www.cryptsy.com/users/register?refid=2108"><strong>₣1 = $<?=$price;?></strong></a></li>
  		  <li id="menu-item-forum" class="menu-item"><a href="https://www.coinbase.com/join/frk">$1 Free BTC</a></li>
          <li id="menu-item-franko-price" class="menu-item"><a href="http://www.frankos.org/collective/" class="link-scroll"><img src="/img/CollectiveEmblemWhite.png" width="100" alt="collective"></a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg1.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                    <center>
                        <img src="/img/CollectiveEmblemWhite.png" alt="the collective">
                        <h1>Franko</h1>
                    </center>
                  <p>More than just a Crypto Currency. Franko is a new corporate model that promotes financial freedom and global unity for everyone. Non nobis solum, sed omnibus!</p>
                  <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">find out more</a></p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg6.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Franko is..</h1>

                <p class="feature-paragraph"><img data-img-src="assets/images/theme_images/users.png" class="lazy pull-right" alt="Distributed autonomous corporation">Franko is an opensource distributed autonomous corporation built on top of a blockchain assisted payment network that maintains, secures and audits all corporate shares securely and transparently.</p>
                <h4>A Distributed Autonomous Corporation</h4>
                <p>New corporate shares are issued out automatically by the corporation without need for human interference to anyone who can provide proof that an important task has been successfully completed on behalf of the DAC. The major benefit of using a distributed model as opposed to a legacy centralized model is the added fault tolerance. This means there is no central point of failure and consensus is reached by a majority vote rather than an autocratic one.</p>
                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-1');" class="btn btn-outline-inverse btn-sm">read more</a></p>
                
                <div class="content-to-populate-in-modal" id="modal-content-1">
                  <h1>Blockchain</h1>
                  <p><img data-img-src="assets/images/other_images/transp-image4.png" class="lazy rounded_border hover_effect pull-right" alt="blockchain definition">The Franko blockchain is a synchronized public ledger that is stored on a global network of computers.  Blockchains are systems of accounting--that is, of keeping track of things and in this case corporate shares.  They represent a new and superior way of recording and memorializing transactions or of registering data publicly.  There are three primary factors that distinguish the blockchain ledger from an "ordinary" accounting ledger or registration tool:</p>
				  <p>
					<ul>
						<li>The Franko ledger, the blockchain, is "open", meaning that any person in the world with the necessary credentials (that is, who controls shares) is free to make entries in the ledger.</li>
						<li>The Franko blockchain ledger is "distributed" and maintained by the public, rather than centralized and maintained by a "trusted third party" (such as a bank or registrar), meaning that anyone who may wish to do so can store a copy of the ledger on their computer or, theoretically, even print it out and read it.</li>
						<li>The Franko blockchain ledger is secure, meaning that, subject to exceptions that are irrelevant for purposes of this comment, all transactions entered into the ledger are effectively permanent, incorruptible, and irreversible. </li>
					</ul>
				  </p>
                  <p>Thus, blockchain technologies represent the world's first, and perhaps only, solution to the Byzantine Generals Problem ("BGP").  Because this age-old problem of computer science has now been solved, it is possible for the first time in human history to maintain a ledger or register that is both open to the general public and provably secure.</p>
				  <p>Individual corporate shares or fractions thereof are both the technological means by which this distributed ledger is secured and the unit of account used to track entries on the ledger.  To make an entry into the ledger, one must possess, or rather control via a private cryptographic key, at least the smallest available fraction of a share, and very importantly, one must transfer said share (or fraction thereof) to another account as part of making the entry in the ledger or register.  Said another way, every single entry in the corporate ledger requires the transfer of share from one account (called an  "address") on the ledger to another address on the ledger. </p>
				  <p>This requirement that every entry in the Franko blockchain ledger involve the transfer of shares from one address to another is an integral part of the solution to the Byzantine Generals Problem.  Without this requirement, the ledger would be insecure and would quickly fill with spam.  Furthermore, for a variety reasons, it would no longer be possible to keep all distributed copies of the ledger in sync or to incentivize unrelated parties for administering and maintaining the ledger on their computers.</p>
                  <h3>Proof of Task</h3>
                  <p><img data-img-src="assets/images/other_images/transp-image3.png" class="lazy rounded_border hover_effect pull-left" alt="proof of task">A Proof of task is a quantified unit of certainty that an important task or job or work has been successfully completed on behalf of the DAC. Proofs of task can solve a multitude of problems ranging from the Byzantine Generals Problem, paying stake to shareholders, and securing the DAC network against internet outages. Some more exotic forms of work include but are not limited to finding large prime numbers, making data fault tolerant, distributing name servers and creating safe contracts. Proofs of task (hereafter proofs with a lowercase "p") are the way the DAC distributes corporate shares. </p>
                  <p>The key difference between a proof of task vs. a service is, a proof of task creates new corporate shares and a service uses shares already in circulation as a means of payment. For example, the federal reserve is a centralized entity that creates and issues new shares of the us dollar, while McDonald's is a service who pays its employees with dollars for serving hamburgers.  A service will require a stockpile of already issued shares in order to function while a proof system increases the total supply of shares in circulation. Proofs give users the ability to create services. Services increase the value of the shares the proof systems create. The corporation should continue to grow by increasing the number of ways one can earn corporate shares by performing valuable tasks. As the corporation adds more proof systems it becomes less dependent on a single task for survival. </p>
                </div><!-- #modal-content-1 -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg2.jpg">
          <div class="content-wrapper clearfix">

              <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">
                
                <!-- Indicators - slide navigation -->
                <ol class="carousel-indicators title-indicators">
                  <li data-target="#features-carousel" data-slide-to="0" class="active">Windows</li>
                  <li data-target="#features-carousel" data-slide-to="1">Mac</li>
                  <li data-target="#features-carousel" data-slide-to="2">Android</li>
                  <li data-target="#features-carousel" data-slide-to="3">Source</li>
                  <li data-target="#features-carousel" data-slide-to="4">Config file</li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <div class="carousel-text-content">
                      <img src="assets/images/theme_images/windows.png" class="icon" alt="windows">
                      <h2 class="title">Windows</h2><p><a href="https://mega.co.nz/#!rFVHFRKJ!2nWzSuX0F7BvfenCEh0VuBmzntIY7eOieIVskfVscvQ
Include file key" class="btn btn-outline-inverse btn-sm">Mega Download</a></p>
                      <p><a href="https://www.dropbox.com/s/duhesk6rb2bdo3y/franko-qt-v1.0.0.zip" class="btn btn-outline-inverse btn-sm">Dropbox Download</a></p>

                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/theme_images/apple.png" class="icon" alt="franko apple">
                      <h2 class="title">Mac</h2>
                      <p><a href="https://www.dropbox.com/s/pi8c3373quojef4/Franko-MAC-Qt.zip" class="btn btn-outline-inverse btn-sm">Download</a></p>
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/theme_images/android.png" class="icon" alt="franko android">
                      <h2 class="title">Android</h2>
                      <p><a href="https://play.google.com/store/apps/details?id=hashengineering.franko.wallet" class="btn btn-outline-inverse btn-sm">Download</a></p>
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/theme_images/github.png" class="icon" alt="github franko">
                      <h2 class="title">Source</h2>
                      <p><a href="http://www.github.com/franko-org/franko" class="btn btn-outline-inverse btn-sm">View Source</a></p>
                    </div>
                  </div><!-- .item -->
                  
                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/theme_images/github.png" class="icon" alt="franko.conf">
                      <h2 class="title">Franko.conf</h2>
                      <p><a href="https://www.dropbox.com/s/creo4zodzrqxv5x/franko.conf" class="btn btn-outline-inverse btn-sm">Download</a></p>
                    </div>
                  </div><!-- .item -->

                </div><!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

              </div><!-- #about-carousel -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="grid" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title">Docs</h1>
                
                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon glyphicon glyphicon-floppy-disk"></span>
                      <div class="text-content">
                        <h5>Presskit</h5>
                        <p>This archive contains logos and other important information for the press.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon glyphicon glyphicon-list-alt"></span>
                      <div class="text-content">
                        <h5>News</h5>
                        <p>All the latest updates about Franko.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon glyphicon glyphicon-book"></span>
                      <div class="text-content">
                        <h5>Articles</h5>
                        <p>Articles written by the press and others about Franko.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <span class="icon glyphicon glyphicon-file"></span>
                      <div class="text-content">
                        <h5><a href="https://docs.google.com/document/d/1FpgtSvYOewGZMNIdQZUL1mK8GAGj6k3jIrxfzZvUpCc/edit#heading=h.q4mvioqm97ox">Whitepaper</a></h5>
                        <p>A white paper written by Christopher Franko the lead developer of Franko.</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="featured" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">
				
                <h1 class="section-title">Get/Trade/Use</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                  <!-- feature 1 -->
                  <article class="feature-col col-md-4">
                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/theme_images/money.png" class="lazy item-thumbnail" alt="exchanges">
                      </div>
                      <div class="caption">
                        <h5>Exchanges</h5>
                        <p>Click to see a list of all the exchanges trading FRK</p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-6">
					<img data-img-src="assets/images/theme_images/exchanges.png" class="lazy full-width" alt="cryptocurrecy exchanges">
                      <h1>Exchanges</h1>
                      <p>You can buy sell trade FRK at any of these official exchanges<br/></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <!-- caption is optional. To remove it, remove the <h6> below -->
                          <h6 class="caption">Cryptsy</h6>
						  <a href="https://www.cryptsy.com/users/register?refid=2108">
							<img class="lazyOwl" data-src="assets/images/theme_images/cryptsy.png">
						  </a>
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Coins-E</h6>
						  <a href="https://www.coins-e.com/">
                          <img class="lazyOwl" data-src="assets/images/theme_images/coinse.png">
						  </a>
                        </div>
                       
                    </div><!-- #modal-content-6 -->
                  </article>

                  <!-- feature 2 -->
                  <article class="feature-col col-md-4">
                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/theme_images/cubes.png" class="lazy item-thumbnail" alt="Lorem Ipsum">
                      </div>
                      <div class="caption">
                        <h5>Employment / Mining</h5>
                        <p>Work for Franko and earn shares!</p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-7">
					<img data-img-src="assets/images/theme_images/miners.png" class="lazy full-width" alt="shopping with franko">
                       <h1>Employment / Mining</h1>
                      <p>Earn FRK by working for Franko<br/></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <!-- caption is optional. To remove it, remove the <h6> below -->
                          <h6>Mining</h6>
						  <p>Mining is the process of spending computing power to process transactions, secure the network, and keep everyone in the system synchronized together. This process is referred to as "mining" as an analogy to gold mining because it is also a temporary mechanism used to issue new shares of Franko. Unlike gold mining, however, Franko mining provides a reward in exchange for useful services required to operate the corporation. Mining will still be required after the last share of franko is issued.</p>
                        </div>
                        <!-- slide -->
                        <div>
                          <h6>Employment Services</h6>
						  <p>Give a list of places to work for people who already have FRK</p>
                        </div>
                    </div><!-- #modal-content-7 -->
                  </article>

                  <!-- feature 3 -->
                  <article class="feature-col col-md-4">
                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-8');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/theme_images/store.png" class="lazy item-thumbnail" alt="stores">
                      </div>
                      <div class="caption">
                        <h5>Merchants / Services</h5>
                        <p>Buy goods and services with FRK.</p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-8">
                      <img data-img-src="assets/images/theme_images/shopping.png" class="lazy full-width" alt="shopping with franko">
                      <h1>Merchants / Services</h1>
                      <p>User your FRK to buy and sell goods and services.</p>
                    </div><!-- #modal-content-8 -->

                  </article>

                </section><!-- end: .feature-columns -->

              <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg5.jpg">
          <div class="content-wrapper clearfix">
            
              <h1 class="section-title">Mailing List</h1>
              <!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="//myfirstfranko.us4.list-manage.com/subscribe/post?u=7bf9de3f37ddc7556277aa336&amp;id=0a3a89c1ec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<h6>Subscribe to our mailing list and receive important updates and news regarding Franko</h6>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_7bf9de3f37ddc7556277aa336_0a3a89c1ec" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li><a href="https://www.facebook.com/Frankosorg" target="_blank" title="Facebook"><img src="assets/images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
          <li><a href="http://www.twitter.com/frankocurrency" target="_blank" title="Twitter"><img src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
          <li><a href="https://plus.google.com/b/111268799600680131742/111268799600680131742/posts" target="_blank" title="Google+"><img src="assets/images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; 2013-Present Franko | Distributed Autonomous Corporation</div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <!-- background image fix for IE 9 or less
       - use same background as set above to <body> -->
    <!--[if lt IE 9]>
    <script type="text/javascript">
    $(document).ready(function(){
      jQuery("#outer-background-container").backstretch("assets/images/other_images/bg5.jpg");
    });
    </script> 
    <![endif]-->  

    <!-- detect mobile browsers -->
    <script src="assets/js/detectmobilebrowser.js"></script>

    <!-- owl carousel js -->
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Custom functions for this theme -->
    <script src="assets/js/functions.min.js"></script>
    <script src="assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]--> 

  </body>
</html>