<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope="itemscope" itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js">
  <head>
    <title>Grocery Hub - Search </title>
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
  <body class="pg-search pg-interna">   
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
        <div id="popups">
          <div id="product1" class="popup flex">
            <div><a rel="close" href="javascript:void(0)"> <i class="material-icons">&#xE14C;</i></a>
              <div class="flex">
                <div class="flex60">
                  <div class="gallery flex">
                    <div class="flex40"><!-- thumbs --><a href="javascript:void(0)" class="thumb"><img src="./assets/gal-thumb-1.jpg"/></a><a href="javascript:void(0)" class="thumb"><img src="./assets/gal-thumb-2.jpg"/></a><a href="javascript:void(0)" class="thumb"><img src="./assets/gal-thumb-3.jpg"/></a><a href="javascript:void(0)" class="thumb"><img src="./assets/gal-thumb-4.jpg"/></a><!-- categories --><i class="organic categories"><!-- --></i><i class="halal categories"><!-- --></i><i class="low-fat categories"><!-- --></i><i class="local categories"><!-- --></i><!-- review -->
                      <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                    </div>
                    <div class="flex60"><img src="./assets/gal-thumb-g.jpg"/></div>
                  </div>
                </div>
                <div class="flex40">
                  <h3 class="c">Tuscan Bread<br/><span>Organic (400g)</span><i class="heart material-icons">&#xE87E;</i></h3>
                  <p>Vel eu inceptos arcu ullamcorper netus montes a vulputate ipsum a mi adipiscing interdum vestibulum integer praesent viverra.</p>
                  <p><span> <strong>Drained Weight</strong></span><span> <strong>19g</strong></span><span> <strong>Net Weight</strong></span><span> <strong>06g</strong></span></p>
                  <p><span>Tesco</span><span>$1.20</span><span>Waltrose</span><span>$1.60</span><span>Sailsbury</span><span>$1.40</span></p>
                </div>
                <div class="flex50">
                  <p class="c"><b>Details </b><br/><br/> Suspendisse in purus mi accumsan mus in leo scelerisque dis scelerisque erat nunc aliquam per a turpis massa a volutpat venenatis metus.<br/><a href="#" title="More" class="b r">More</a></p><br/>
                  <p class="c"><b>Alergens </b><br/><br/> Suspendisse in purus mi accumsan mus in leo scelerisque dis scelerisque erat nunc aliquam per a turpis massa a volutpat venenatis metus.<br/><a href="#" title="More" class="b r">More</a></p><br/>
                  <p class="c"><b>Ingredients </b><br/><br/> Suspendisse in purus mi accumsan mus in leo scelerisque dis scelerisque erat nunc aliquam per a turpis massa a volutpat venenatis metus.<br/><a href="#" title="More" class="b r">More</a></p><br/>
                  <p class="c"><b>Cuisine </b><br/><br/> Suspendisse in purus mi accumsan mus in leo scelerisque dis scelerisque erat nunc aliquam per a turpis massa a volutpat venenatis metus.<br/><a href="#" title="More" class="b r">More</a></p>
                </div>
                <div class="flex50">
                  <div id="nutrition-facts">
                    <h3>Nutrition Facts</h3>
                    <p>Serving Size 10g<br/>Serving per Container 100g</p>
                    <ul>
                      <li>
                        <ul>
                          <li></li>
                          <li>Average Quantity per Serving</li>
                          <li>Average Quantity per 100g</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Energy</li>
                          <li>673 KJ</li>
                          <li>269 KJ</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Protein <br/><small>-gluten</small></li>
                          <li>8.3g <br/> omg</li>
                          <li>3.3g <br/> omg</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Fat Total <br/><small>-saturated</small></li>
                          <li>8.5g <br/> 5.6g</li>
                          <li>3.4g <br/> 2.3g</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Carbohydrate <br/><small>-sugars</small></li>
                          <li>12.8g <br/> 12.8g</li>
                          <li>5.1g <br/> 5.1g</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Sodium</li>
                          <li>125mg</li>
                          <li>50mg</li>
                        </ul>
                      </li>
                      <li>
                        <ul>
                          <li>Calcium</li>
                          <li>300mg</li>
                          <li>120mg</li>
                        </ul>
                      </li>
                    </ul>
                    <p>% Daily value are based on a 2.000 calorie diet</p>
                  </div>
                  <div class="add-to-cart">
                    <label>Quantity</label><span>
                      <select>
                        <option>1</option>
                        <option>2</option>
                      </select></span><span><a href="javascript:void(0)" class="btn btn_4">View More</a></span>
                  </div>
                </div>
                <div class="flex100">
                  <p><b>Similar Items</b></p>
                  <div class="products">
                    <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                      <p>Tasco Organic (400g)</p>
                      <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">View More</a>
                    </div>
                    <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                      <p>Tasco Organic (400g)</p>
                      <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">View More</a>
                    </div>
                    <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                      <p>Tasco Organic (400g)</p>
                      <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">View More</a>
                    </div>
                    <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                      <p>Tasco Organic (400g)</p>
                      <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ads">
          <div class="wrap"><img src="./assets/freeshipping.png" alt="Free Shipping"/></div>
        </div>
        <div id="breadcrumbs">
          <div class="wrap"><a href="index.php" title="Home">Home</a><a href="#" title="Tesco">Tesco</a><a href="#" title="Go Green">Go Green</a><a href="#" title="Organic">Organic</a></div>
        </div>
        <div id="content">
          <div class="wrap flex stretch">
            <aside>
              <p> <strong>FILTER BY</strong></p>
              <form id="search">
                <p><strong>Search</strong></p>
                <input placeholder="Search type here"/>
                <button> <i class="search"><!-- --></i></button>
              </form>
              <div class="filter">
                <p class="c"><strong class="b l">Lifestyle </strong><i class="b r material-icons arrow-down">&#xE5C5;</i></p>
                <ul>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="organic categories">Organic</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="halal categories">Halal</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="low-fat categories">Low Fat</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="local categories">Local</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="gluten-free categories">Gluten Free	</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="kosher categories">Kosher</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="low-sugar categories">Low Sugar</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="bundled categories">Bundled</i></label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label"><i class="for-fasting categories">For Fasting</i></label>
                  </li>
                </ul>
              </div>
              <div class="filter">
                <p class="c"><strong class="b l">Categories </strong><i class="b r material-icons arrow-down">&#xE5C5;</i></p>
                <ul>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Bakery</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Fresh</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Frozen</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Ready Meals</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Food Cupboard</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Drinks</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Baby</label>
                  </li>
                </ul>
              </div>
              <div class="filter">
                <p class="c"><strong class="b l">Cuisine </strong><i class="b r material-icons arrow-down">&#xE5C5;</i></p>
              </div>
              <div class="filter">
                <p class="c"><strong class="b l">Shops </strong><i class="b r material-icons arrow-down">&#xE5C5;</i></p>
                <ul>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Tesco</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-custom"/>
                    <label class="checkbox-custom-label">Waltrose	</label>
                  </li>
                </ul>
              </div>
              <div class="ads"><img src="./assets/fresh_juice.jpg"/></div>
            </aside>
            <div>
              <div id="searchResults">
                <div class="head">
                  <h3>Search Results<span>10 results</span></h3>
                </div>
                <div class="sort"><i class="material-icons arrow-down">&#xE5C5;</i>
                  <select>
                    <option>Sort by name</option>
                    <option>Sort by relevance</option>
                  </select>
                </div>
                <div class="products">
                  <div id="product1" class="product"><img src="./assets/product_thumb_p.jpg"/>
                    <p>Tasco Organic (400g)</p>
                    <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                    <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                  </div>
                  <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                    <p>Tasco Organic (400g)</p>
                    <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                    <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                  </div>
                  <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                    <p>Tasco Organic (400g)</p>
                    <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                    <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                  </div>
                  <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                    <p>Tasco Organic (400g)</p>
                    <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                    <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                  </div>
                  <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                    <p>Tasco Organic (400g)</p>
                    <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                    <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                  </div>
                </div>
                <ul class="pagination">
                  <li><a href="javascript:void(0)">1</a></li>
                  <li><a href="javascript:void(0)">2</a></li>
                  <li><a href="javascript:void(0)">3</a></li>
                </ul>
              </div>
              <div id="featured">
                <div class="head">
                  <h3>Featured</h3>
                </div>
                <div class="sort"><i class="material-icons arrow-down">&#xE5C5;</i>
                  <select>
                    <option>Sort by name</option>
                    <option>Sort by relevance</option>
                  </select>
                </div>
                <div class="slide">
                  <div class="carousel products">
                    <ul class="slides">
                      <li>
                        <div id="product1" class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="new-products">
                <div class="head">
                  <h3>New Products</h3>
                </div>
                <div class="sort"><i class="material-icons arrow-down">&#xE5C5;</i>
                  <select>
                    <option>Sort by name</option>
                    <option>Sort by relevance	</option>
                  </select>
                </div>
                <div class="slide">
                  <div class="carousel products">
                    <ul class="slides">
                      <li>
                        <div id="product1" class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews</small></span></p>
                        </div>
                      </li>
                      <li>
                        <div class="product"><img src="./assets/product_thumb_p.jpg"/>
                          <p>Tasco Organic (400g)</p>
                          <p><span> <strong>Tasco</strong></span><span> <strong>$1.00</strong></span><span> <strong>Waltrose</strong></span><span> <strong>$1.30</strong></span><small>20p/100g</small></p><a class="btn btn_4">Add to Cart</a>
                          <p><span><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i><i class="leaf"><!-- --></i></span><span><small>25 Reviews	</small></span></p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <aside>
              <div class="ads"><img src="./assets/fresh_juice.jpg"/></div>
              <div class="ads"><img src="./assets/florida_natural.jpg"/></div>
            </aside>
          </div>
        </div>
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