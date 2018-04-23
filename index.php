<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope="itemscope" itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js">
  <head>
    <title>Grocery Hub - Home </title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="HandheldFriendly" content="true"/>
    <meta name="audience" content="all"/>
    <meta name="keywords" content=" "/>
    <meta name="author" content="Wesley Andrade"/>
    <meta name="resource-type" content="Document"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="index, follow, ALL"/>
    <meta name="GOOGLEBOT" content="index, follow"/>
    <meta name="rating" content="General"/>
    <meta name="revisit-after" content="2 Days"/>
    <meta name="language" content="pt-br"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="canonical" href=" "/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/default.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon-57.png"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>
    <script href="js/modernizr.js" type="text/javascript" media="all"></script>
    <script href="js/selectivizr.js" type="text/javascript" media="all"></script>
    <script href="js/html5shiv.js" type="text/javascript" media="all"></script>
    <script href="js/html5shiv-printshiv.js" type="text/javascript" media="all"></script>
    <script>
      $(document).ready(function(){ 
      	$('header #header nav #lang > li i.material-icons').click(function() { if ($(window).width() < 769) { $(this).closest("ul").toggleClass("opened"); } }); 
      	$('.tabs li a').click(function() { $(this).closest(".tabs").find(".active").removeClass("active"); $(this).parent().addClass("active"); $(this).closest(".tabs").next("div").find("div").not("[data-value='"+$(this).attr("title")+"']").hide(); $(this).closest(".tabs").next("div").find("div[data-value='"+$(this).attr("title")+"']").show(); }); 
      	$( "*" ).each(function() { if($(this).text()=="Completed"){ $(this).css("color","#87bf40"); } });
      	$('#featured .carousel').flexslider({ animation: "slide", animationLoop: false,  itemWidth: 160,  itemMargin: 5,  minItems: 2,  maxItems: 4, controlNav: false, directionNav: true });
      	$('#new-products .carousel').flexslider({ animation: "slide", animationLoop: false,  itemWidth: 160,  itemMargin: 5,  minItems: 2,  maxItems: 4, controlNav: false, directionNav: true });
      	$('.filter .arrow-down').click(function() { $(this).toggleClass("on"); if(!$(this).is(".on")) { $(this).html("&#xE5C5;"); } else { $(this).html("&#xE5C7;"); } $(this).closest(".filter").find("ul").toggleClass("on"); }); 
      	$('.product').click(function() {  $("#popups > *").not("#"+$(this).attr("id")).hide(); $("#popups > *#"+$(this).attr("id")).fadeIn(); $("#popups").fadeIn(); });
      	$('[rel="close"]').click(function() {  $("#popups,#popups > *").fadeOut(); });
      	$('.heart').click(function() {  $(this).toggleClass("toggle"); if(!$(this).is(".toggle")) { $(this).html("&#xE87E;"); } else { $(this).html("&#xE87D;"); } });
      });
    </script>
  </head>
  <body class="pg-home">   
    <div id="wrap">
      <header>
        <div id="opaque" class="circles"><!-- --></div>
        <div id="green" class="circles"><!-- --></div>
        <div id="header">
          <div class="wrap flex">
            <div class="flex50"><a rel="home" href="index.php" title="Groceryhub"><!-- --></a></div>
            <div class="flex50">
              <nav>
                <ul>
                  <li><a href="#" title="Products">Products</a></li>
                  <li><a href="my-account.php" title="My Account">My Account</a></li>
                  <li><a href="my-account.php" title="Login" class="btn btn_default">Login</a></li>
                  <li>
                    <ul id="lang">
                      <li><i class="flag-icon flag-icon-us"></i><a href="?lang=en" title="EN">EN	</a><i class="material-icons">&#xE5C5;</i></li>
                      <li>
                        <ul>
                          <li id="FR"><i class="flag-icon flag-icon-fr"></i><a href="?lang=FR" title="FR">FR</a></li>
                          <li id="EN" class="active"><i class="flag-icon flag-icon-us"></i><a href="?lang=EN" title="EN">EN</a></li>
                          <li id="DE"><i class="flag-icon flag-icon-de"></i><a href="?lang=DE" title="DE">DE</a></li>
                          <li id="CH"><i class="flag-icon flag-icon-ch"></i><a href="?lang=CH" title="CH">CH</a></li>
                          <li id="JP"><i class="flag-icon flag-icon-jp"></i><a href="?lang=JP" title="JP">JP			</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a id="cart" href="javascript:void(0)" title="My Cart"><i class="material-icons">&#xE8CC;<small>3</small></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <main>
        <section id="webdoor">
          <div class="wrap"><img src="assets/ico.png" title="GroceryHUB"/>
            <h1>Eat Fresh, Live Better</h1>
            <h2>Organic, Natural, Sustainable</h2>
            <form>
              <input type="text" placeholder="Enter postcode"/>
              <button class="btn btn_1">start searching</button>
            </form>
          </div>
        </section>
        <section id="what-is-this-site-doing-and-why">
          <div class="wrap flex">
            <div class="flex50"><img src="assets/basket.png"/></div>
            <div class="flex50">
              <h2>What is this site doing and why</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </section>
        <section id="saving">
          <div class="wrap flex">
            <div class="flex50"><img src="assets/save-money.png"/>
              <h2>Save Money</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="" title="Save Money" class="btn btn_2">Save Money</a>
            </div>
            <div class="flex50"><img src="assets/save-time.png"/>
              <h2>Save Time</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="" title="Save Time" class="btn btn_2">Save Time </a>
            </div>
          </div>
        </section>
        <section id="for-retailers">
          <div class="wrap flex">
            <div class="flex50">
              <h2>For Retailers</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="" title="Online Store" class="btn btn_3">Online Store</a>
            </div>
          </div>
        </section>
      </main>
      <footer>
        <div class="flex">
          <div class="flex100">
            <div class="wrap flex">
              <div class="flex20"><a rel="home" href="index.php" title="Groceryhub"><!-- --></a></div>
              <div class="flex80">
                <nav>
                  <ul>
                    <li><a href="#" title="About">About</a></li>
                    <li><a href="products.php" title="Products">Products</a></li>
                    <li><a href="#" title="Blog">Blog</a></li>
                    <li><a href="#" title="FAQ">FAQ</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="flex100">
            <div class="wrap">
              <nav>
                <ul>
                  <li><strong>Press</strong>
                    <ul>
                      <li><a href="#" title="In the News">In the News</a></li>
                      <li><a href="#" title="Press Releases">Press Releases</a></li>
                      <li><a href="#" title="Press Kit">Press Kit</a></li>
                    </ul>
                  </li>
                  <li><strong>Legal</strong>
                    <ul>
                      <li><a href="#" title="Acceptable use Policy">Acceptable use Policy</a></li>
                      <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                      <li><a href="#" title="Terms and Conditions">Terms and Conditions</a></li>
                    </ul>
                  </li>
                  <li><strong>Connect</strong>
                    <ul>
                      <li><a href="#" title="Careers">Careers</a></li>
                      <li><a href="#" title="Developers">Developers</a></li>
                      <li><a href="#" title="Support">Support</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="flex100">
            <div class="wrap">
              <nav id="social">
                <ul>
                  <li><a href="#" title="Facebook" class="zocial-facebook"><!-- --></a></li>
                  <li><a href="#" title="Twitter" class="zocial-twitter"><!-- -->				</a></li>
                  <li><a href="#" title="Linkedin" class="zocial-linkedin"><!-- -->		</a></li>
                  <li><a href="#" title="Google Plus" class="zocial-googleplus"><!-- --></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="flex100">
            <div class="wrap">
              <p>Copyright © 2016 Groceryhub		</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>