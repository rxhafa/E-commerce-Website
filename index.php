
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="navigation.css">


        <title>Skroutz.gr: Buy with ease & safety</title>

        <!-- This is for the search icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- social media icon library-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End search icon -->

        <!-- Grid icon-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


        <!-- Alfa Slab One Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- Roboto Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    
        <!-- PopUp -->

    
    </head>
    <body>

        <!-- Category Popup-->
        <div id="myCategory" class="category">
            <div class="catBack" onclick="closeCategory()"></div>
            <div class="category-content">
            <div class="columnOne">
                <div class="cats one">
                    <img class="icon" src="silver.jpg">
                    <p>Technology</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats one">
                    <img class="icon" src="appliances.jpg">
                    <p>House Appliances</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats one">
                    <img class="icon" src="computer.jpg">
                    <p>Computers</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats one">
                    <img class="icon" src="tablets.jpg">
                    <p>Tablets</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats one">
                    <img class="icon" src="sound.jpeg">
                    <p>Sound-Speakers</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats">
                    <img class="icon" src="wearables.jpg">
                    <p>Smartwatches</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats">
                    <img class="icon" src="image.jpeg">
                    <p>Televisions</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats">
                    <img class="icon" src="phoning.jpg">
                    <p>Phoning</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats">
                    <img class="icon" src="electronics.jpg">
                    <p>electronics</p>
                    <img class="great" src="greater.png">
                </div>
                <div class="cats">
                    <img class="icon" src="play.jpg">
                    <p>Gaming</p>
                    <img class="great" src="greater.png">
                </div>
        
                
            </div>
            <div class="columnTwo">
                <div class="sub-cat">
                    <img src="phoning.jpg">
                    <ul>
                        <li class="SubTitle">Mobile</li>
                        <li class="specificprod">Smartphones, Phone Cases, Bluetooth...</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="computer.jpg">
                    <ul>
                        <li class="SubTitle">Electronic Computers</li>
                        <li class="specificprod">PC Hardware, Peripherals...</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="play.jpg">
                    <ul>
                        <li class="SubTitle">Gaming</li>
                        <li class="specificprod">Gaming peripherals, Electronic Games...</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="electronics.jpg">
                    <ul>
                        <li class="SubTitle">Electronic components</li>
                        <li class="specificprod">Energy, Cables, Microelectronics</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="sound.jpeg">
                    <ul>
                        <li class="SubTitle">Sound</li>
                        <li class="specificprod">Speakers, Earphones, Home Cinema & Hi-fi Equipment</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="image.jpeg">
                    <ul>
                        <li class="SubTitle">Image</li>
                        <li class="specificprod">Televisions & Accessories, Multimedia Devices...</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="wearables.jpg">
                    <ul>
                        <li class="SubTitle">Wearables</li>
                        <li class="specificprod">Smartwatches, Accessory Wearables, Activity Trackers</li>
                    </ul>
                </div>
                <div class="sub-cat">
                    <img src="tablets.jpg">
                    <ul>
                        <li class="SubTitle">Tablets & Accessories</li>
                        <li class="specificprod">Tablets, Tablet Cases, Screen Protection Tablet</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!-- Cart Popup -->
        <div id="myCart" class="cart-popup">
            <div class="back" onclick="closeCart()"> </div>
            <div class="cart-content">
            <p class="p1">your cart (0)</p>
            <img src="cart-pop.png">
            <p class="p2">Your cart is empty</p>
            <p class="p3">Do your online shopping safely here: Skroutz offers the best price deals</p>
            <p class="p4"><a>Learn more about Skroutz here </a></p>
            </div> 
        </div>


    <!--PC Screen navigation -->
    <nav class="navbar-links">
    
    <ul>
        <a href="sign_up.php">SignIn / SignUp</a>
        <button class="cart cart-click"  onclick="openCart()"><img class="cart-click" src="cart3.jpg"></button>
    </ul>
    </div>
    </nav>
    <!-- Mobile Screen navigation -->
    <nav class="navbar-mobile">
                <ul>
                <label class="logo"><a href="navigation.html">Skroutz</a></label>
                <a href="#" class="user">
                <img src="person.png">
                </a>
    </ul>
    </nav>
    <form class="searching">
        <input type="text" placeholder="Search" class="search">
        </form>







<script>
function openCart() {
    document.getElementById("myCart").style.display = "block";
}

function closeCart() {
    document.getElementById("myCart").style.display = "none";
}


//let cartclick = document.querySelector('.cart-click');
   // let cartpopup = document.querySelector('.cart-popup');
   // cartclick.addEventListener("click",()=>{
    //    cartpopup.classList.toggle('new-cart-list');
   // });
   // window.onclick = (event) => {
   // if(!event.target.matches('.cart-click')){
   // if(cartpopup.classList.contains('new-cart-list')){
    //    cartpopup.classList.remove("new-cart-list")
   // }
   // }
 //  }
 </script>







        <label class="logo1"><a class="logo1" href="index.php">skroutz</a></label>

<script> 
function openCategory() {
    document.getElementById("myCategory").style.display = "inline-flex";
}
function closeCategory() {
    document.getElementById("myCategory").style.display = "none";
}
</script>

        <div class="boxContainer">
            <form class="elementsContainer">
                <input type="text" placeholder="Write what you are looking for" class="search">
                <button type="submit" class="sir"><a href="#"><i class="material-icons">search</i></a></button>
                <button type="button" class="men" onclick="openCategory()">
                        <img  src="grid.png" style="background: white; width:26px;"/>
                        <p>Categories</p>
                        <img class="exp" src="expand.png" style="background:white; width:24px;"/>
                    
                </button>

            </form>
            </div>

        

<!-- This is the category popup -->


<script>
    let clickCat = document.querySelector('.cat-click');
    let listCat = document.querySelector('.category');
    clickCat.addEventListener("click",()=>{
        listCat.classList.toggle('new-category');

    });
    window.onclick = (e) => {
        if(!e.target.matches('.cat-click')){
            if(listCat.classList.contains("new-category")){
                listCat.classList.remove("new-category")
            }
        }
    }
</script>

<!-- Product section -->

<section class="product"> 
        
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">
                <img src="images/phones.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Mobile</h2>
                <p class="product-short-description">Smartphones</p>
                <p class="product-short-description">Phone cases</p>
                <p class="product-short-description">Handsfree earphones</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/tv.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Televisions</h2>
                <p class="product-short-description">Tv</p>
                <p class="product-short-description">Monitors</p>
                <p class="product-short-description">Etc...</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/pc.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Computers</h2>
                <p class="product-short-description">PC Hardware</p>
                <p class="product-short-description">Laptops</p>
                <p class="product-short-description">Accessories</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/play.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Gaming</h2>
                <p class="product-short-description">Electronic Games</p>
                <p class="product-short-description">Gaming Components</p>
                <p class="product-short-description">Consoles</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/tablet.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Mobile</h2>
                <p class="product-short-description">Smartphones</p>
                <p class="product-short-description">Phone cases</p>
                <p class="product-short-description">Handsfree earphones</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/laptop.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Mobile</h2>
                <p class="product-short-description">Smartphones</p>
                <p class="product-short-description">Phone cases</p>
                <p class="product-short-description">Handsfree earphones</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/phones.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Mobile</h2>
                <p class="product-short-description">Smartphones</p>
                <p class="product-short-description">Phone cases</p>
                <p class="product-short-description">Handsfree earphones</p>

            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/phones.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Mobile</h2>
                <p class="product-short-description">Smartphones</p>
                <p class="product-short-description">Phone cases</p>
                <p class="product-short-description">Handsfree earphones</p>

            </div>
        </div>

    </div>
</section>
<!-- Script for the product categories-->
<script src="script.js"></script>
<script src="ads.js"></script>
 <!-- BANNER AD START 
        
 <div class="ads">
    <div class="slidershow middle">
        <div class="slides">
            <input type="radio" name="r" id="r1">
            <input type="radio" name="r" id="r2">
            <div class="slide s1">
            <a href="#"><img src="banner1.jpg" alt=""></a>
            </div>
            <div class="slide">
            <a href="#"><img src="banner2.jpg" alt=""></a>
            </div>
        </div>

    </div>
        <div class="arrows">
            <label class="left" for="r1"><img class="arrow left" src="smaller_than1.png" alt=""></label>
            <label class="right" for="r2"><img class="arrow right" src="greater_than1.png" alt=""></label>
           <!-- <label for="r1" class="arrow left"> &lt</label>
            <label for="r2" class="arrow right"> &gt</label>

 HEEEEEREEE
        </div>        

        <div class="navigation">
            <label for="r1" class="bar lab1"></label>
            <label for="r2" class="bar lab2"></label>
        </div>
    </div>
    <!-- BANNER AD END -->


    <!-- New banner ad-->


    <div class="slider">
        <div class="myslider fade" style="display: block;">
            <div class="txt">
            <h1>IMAGE 1</h1>
            <p>This is the first banner<br> Click here for more</p>
            </div>
            <img src="banner11.jpg">
        </div>
        <div class="myslider fade">
            <div class="txt">
            <h1>IMAGE 2</h1>
            <p>This is the second banner<br> Click here for more</p>
            </div>
            <img src="banner2.jpg">
        </div>
        <div class="myslider fade">
            <div class="txt">
            <h1>IMAGE 3</h1>
            <p>This is the third banner<br> Click here for more</p>
            </div>
            <img src="banner1.jpg">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094</a>
        <a class="next" onclick="plusSlides(1)">&#10095</a>
        <div class="dotsbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

<script src="jsfile.js"></script>






    <div class="brands">
        <p class="manufact">Popular Brands and Manufacturers</p>
        <div class="brand_row">

            <div class="brand-col">
                <p>Mobile</p>
                <ul class="companies">
                    <li>Samsung</li>
                    <li>Xiaomi</li>
                    <li>Apple</li>
                    <li>Sony</li>
                    <li>LG</li>
                    <li>Lenovo</li>
                </ul>

            </div>
            <div class="brand-col">
                <p>TVs</p>
                <ul class="companies">
                    <li>Bosch</li>
                    <li>Woodwell</li>
                    <li>vidaXL</li>
                    <li>Philips</li>
                    <li>Xiaomi</li>
                    <li>Eurolamp</li>
                </ul>
            </div>
            <div class="brand-col">
                <p>Computers</p>             
                <ul class="companies">
                    <li>Logitech</li>
                    <li>Razer</li>
                    <li>Asus</li>
                    <li>Dell</li>
                    <li>Apple Mac</li>
                    <li>HP</li>
                </ul>
            </div>
            <div class="brand-col">
                <p>Gaming</p>
                <ul class="companies">
                    <li>Nintendo</li>
                    <li>Ubisoft</li>
                    <li>Electronic Arts</li>
                    <li>Activision Blizzard</li>
                    <li>PopCap Games</li>
                    <li>Epic Games</li>
                </ul>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="container1">
            <div class="row row1">
                
                <div class="footer-col">
                    <button class="expansion click">
                    <h4>Partners</h4>
                    <div class="upside">
                    <img src="expand.png">
                    </div>
                    </button>
                    <div class="list">
                        <button class="links"><a href="merchant.php">Do you want to start selling from Skroutz?</a></button>
                        <button class="links">Want to start selling but don't have an e-shop?</button>
                        <button class="links">How to partner with us</button>
                    </div>
                    <ul class="foot foot1">
                        <li><a href="merchant.php">Do you want to start selling from Skroutz?</a></li>
                        <li><a href="merchant.php">Want to start selling but don't have an e-shop?</a></li>
                        <li><a href="merchant.php">How to partner with us</a></li>

                    </ul>
                </div>

            
                <div class="footer-col">
                    <button class="expansion clickA">
                    <h4>Buying through skroutz</h4>
                    <div class="upsideA">
                    <img src="expand.png">
                    </div>
                    </button>
                    <div class="listA">
                        <button class="linksA">Advantages for buying through us</button>
                        <button class="linksA">Guaranted purchase Safety</button>
                        <button class="linksA">Return policy</button>
                    </div>
                    
                    <ul class="foot foot1">
                        <li><a href="#">Advantages for buying through us</a></li>
                        <li><a href="#">Guaranted purchase Safety</a></li>
                        <li><a href="#">Return policy</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <button class="expansion cclick" >
                    <h4>Help & Contact</h4>
                    <div class="uupside">
                    <img src="expand.png">
                    </div>
                    </button>
                    <div class="llist">
                        <button class="llinks">About us</button>
                        <button class="llinks">Our services</button>
                        <button class="llinks">Terms of use/privacy policy</button>
                    </div>
                    <ul class="foot foot1">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">Terms of use/privacy policy</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>
                </div>

                <div class="footer-col">
                    <button class="expansion clickB">
                    <h4>Company</h4>
                    <img src="expand.png" class="upsideB">
                    </button>
                    <div class="listB">
                        <button class="linksB">Blog @ Skroutz</button>
                        <button class="linksB">Work @ Skroutz</button>
                        <button class="linksB">Vulnerability Disclosure @ Skroutz</button>
                    </div>
                    <ul class="foot foot1">
                        <li><a href="#">Blog @ Skroutz</a></li>
                        <li><a href="#">Work @ Skroutz</a></li>
                        <li><a href="#">Vulnerability Disclosure @ Skroutz</a></li>


                    </ul>
            </div>

        </div>
        <div class="container1">
            <div class="row1">
                <div class="footer-coll">
                <div class="social-links">
                    <p class="last">Find a store</p>
                    <div class="rest">
                    <img src="store.png" style="width:50px; height:40px"/>
                    <p class="norm"><b style="color:black;">3443</b> stores are at Skroutz </p>
                    </div>
                </div>
                </div>

                <div class="footer-coll">
                <p class="last">Connect with us</p>
                    <div class="social-links">
                    <a href="#"><img src="facebook.png"></a>
                    <a href="#"><img src="twitter.png"></a>
                    <a href="#"><img src="instagram.png"></a>
                    </div>
                </div>

                <div class="footer-coll">
                    <p class="last">Skroutz apps</p>
                    <a href="#"><img src="app_store.png" style="width:240px; height:34px; margin-top: 16px;">
                </div>

                
            </div>

        </div>
        
        <p class="terms">20[0-9]{2} Skroutz Α.Ε. All Rights and Lefts reserved. FAQ - Όροι χρήσης | Πολιτική Απορρήτου | Cookies </p>

    </footer>

<section class="menu">
    <a href="#" style="margin-right:5%; margin-left:5%; background-color: white;"><button style="width:auto; border:none; background-color: white;"><img src="home.png" style="width:28px; background-color: white;"></button></a>
    <a href="#" style="margin-right:5%; margin-left:5%; background-color: white;"><button style="width:auto; border:none; background-color: white;"><img src="search.png" style="width:28px; background-color: white;"></button></a>
    <a href="#" style="margin-right:5%; margin-left:5%; background-color: white;"><button style="width:auto; border:none; background-color: white;"><img src="favorite.png" style="width:28px; background-color:white;"></button></a>
    <a href="#" style="margin-right:5%; margin-left:5%; background-color: white;"><button style="width:auto; border:none; background-color: white;"><img src="cart.png" style="width:28px; background-color: white;"></button></a>

</section>

<script>
    let click = document.querySelector('.click');
    let list = document.querySelector('.list');
    let upside = document.querySelector('.upside');
    click.addEventListener("click",()=>{
        list.classList.toggle('newlist');
        upside.classList.toggle('newSide');

    });
</script>

<script>
     let clickA = document.querySelector('.clickA');
    let listA = document.querySelector('.listA');
    let upsideA = document.querySelector('.upsideA');
    clickA.addEventListener("click",()=>{
        listA.classList.toggle('newlistA');
        upsideA.classList.toggle('newSideA');

    });
</script>

<script>
    let cclick = document.querySelector('.cclick');
    let llist = document.querySelector('.llist');
    let uupside = document.querySelector('.uupside');
    cclick.addEventListener("click",()=>{
        llist.classList.toggle('nnewlist');
        uupside.classList.toggle('nnewSide');

    });
</script>

<script>
    let clickB = document.querySelector('.clickB');
    let listB = document.querySelector('.listB');
    let upsideB = document.querySelector('.upsideB');
    clickB.addEventListener("click",()=>{
        listB.classList.toggle('newlistB');
        upsideB.classList.toggle('newSideB');

    });
</script>

</body>
</html>