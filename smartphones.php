<?php
session_start();

    include("connection.php");
    include("functions.php");


    ?>


<hmtl>
<head>
<link rel="stylesheet" href="prod.css">

<title>Skroutz.gr: Buy with ease & safety</title>

<!-- This is for the search icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- End search icon -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" charset="utf-8"></script>

<!-- Alfa Slab One Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

<!-- Roboto Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>

<nav>

<a class="logo" href="#">skroutz</a>

<div class="searchbar">
<input type="text" placeholder="Search" class="search">
<button type="submit" class="sir"><i class="material-icons">search</i></button>
<button type="button" class="men">
    <i class="material-icons">menu</i>
</button>
</div>

<ul>
<li><a href="sign_up.php">SignIn / SignUp</a></li>
<li class="cart"><button onclick="togglePopup()"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></li>

</ul>
</nav>
<div class="home_pages">
<button><a href="#">Home > </a></button>
<button><a>Mobile > </a></button>
<button><a>Smartphones </a></button>
</div>
<div class="seperation">
<div class="filters">
    <div class="wrappers">
<p class="filt">Filters</p>
<h3>Price Range</h3>
<div class="price-input">
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="2500">
    </div>
    <div class="seperator">-</div>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="7500">
    </div>
</div>
<div class="slider">
    <div class="progress"></div>
</div>
</div>    
<input type="radio" name="range" class="checking"> Up to 200 &euro; <br>
<input type="radio" name="range"> 200 - 400 &euro; <br>
<input type="radio" name="range"> 400 - 800 &euro; <br>
<input type="radio" name="range"> From 850 &euro; and up <br>

<p>Manufacturer</p>
<input type="checkbox" name="" > Samsung <br>
<input type="checkbox" name=""> Apple <br>
<input type="checkbox" name=""> Xiaomi <br>
<input type="checkbox" name=""> Realme <br>
<input type="checkbox" name=""> Google <br>
<input type="checkbox" name=""> Motorola <br> 

<div id="buttons">
<button class="btn" onclick="filterObjects('all')">Show All</button>
<button class="btn" onclick="filterObjects('Samsung')">Samsung</button>
<button class="btn" onclick="filterObjects('apple')">Apple</button>
<button class="btn" onclick="filterObjects('Motorola')">Motorola</button>
<button class="btn" onclick="filterObjects('Xiaomi')">Xiaomi</button>

</div>

</div>
<div class="showCase">
<div class="titles">
<h2>Mobile Phones</h2>
<p>1333 products</p>
<div class="filter-condition">







<select name="" id="select">
<option value="Default"> Popularity </option>
<option value="LowToHigh"> Low to high</option>
<option value="HighToLow"> High to low</option>
</select>
<select name="" id="select">
    <option value="Default"> Popularity </option>
    <option value="LowToHigh"> Low to high</option>
    <option value="HighToLow"> High to low</option>
    </select>
    <div class="pagination">
        <!--
        <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
        <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
        -->
    </div>
</div> 
</div>


    <?php
    $sql = "SELECT * FROM product WHERE aproval = 1 ";
    $sql_run = mysqli_query($con, $sql);

    $price = "SELECT * from product_prices";
    $price_run = mysqli_query($con, $price);
    $topprice = mysqli_fetch_assoc($price_run);


    if($sql_run -> num_rows > 0)
    {
        ?>
        <div class="card-content" >
            <?php
        while($row = $sql_run-> fetch_assoc())
        {
           

            ?>
            <div class="product <?php echo $row['manufacturer']; ?>" data-price="758">
            <a href="smartphone.php">
            <div class="card-image">
                <img class="" src="
                <?php
                echo $row['picture'];
                ?>
" style="width:190px;">
        </div>
        <p class="prod name">
        <a class="prod">
            <?php
        
            echo  $row['product_name'];
            ?>
</a>
</p>
<p class="prod details">
    <?php
    echo "screen: ", $row['screen'],"', batery: ",$row['batery'],"mAh";
    ?>
    <h3 class="prod price" data-price="758"></h3>
                <p class="prod store">in store</p>
        </div>
            
            <?php
            
            
        }
        ?>
        </a>
        </div>
        <?php
    }
    ?>




<script type="text/javascript">
            function getPageList(totalPages, page, maxLength){
                function range(start, end){
                    return Array.from(Array(end - start + 1), (_, i) => i + start);
                }
                
                var sideWidth = maxLength < 9 ? 1 : 2;
                var leftWidth = (maxLength - sideWidth * 2  - 3) >> 1;
                var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

                if(totalPages <= maxLength){
                    return range(1, totalPages);
                }

                if(page <= maxLength - sideWidth - 1 - rightWidth){
                    return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                }
                
                if(page >= totalPages - sideWidth - 1 - rightWidth)
                {
                    return range(1,sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                }

                return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));

            }


            $(function(){
                var numberOfItems = $(".card-content .product").length;
                var limitPerPage = 8; // How many card items visible per page
                var totalPages = Math.ceil(numberOfItems / limitPerPage);
                var paginationSize = 7; // How many page elements visible in the pagination
                var currentPage;

                function showPage(whichPage){
                    if(whichPage < 1 || whichPage > totalPages) return false;
                    currentPage = whichPage;

                    $(".card-content .product").hide().slice((currentPage - 1)* limitPerPage, currentPage * limitPerPage).show();
                    $(".pagination li").slice(1, -1).remove();

                    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                        $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
                    });

                    $(".previous-page").toggleClass("disable", currentPage === 1);
                    $(".next-page").toggleClass("disable", currentPage === totalPages);
                    return true;
                }

                $(".pagination").append(
                    $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
                    $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
                );
                $(".card-content").show();
                showPage(1);
                $(document).on("click", ".pagination li.current-page:not(.active)", function(){
                    return showPage(+$(this).text());
                });
                $(".next-page").on("click", function(){
                    return showPage(currentPage + 1);
                });
                $(".previous-page").on("click", function(){
                    return showPage(currentPage - 1);
                });
            });
        </script>
    

        <script type="text/javascript">
            filterObjects("all");
            function filterObjects(c){
                var x, i;
                x = document.getElementsByClassName("product");
                if(c == "all") c = "";
                for(i = 0; i <x.length; i++)
                {
                    removeClass(x[i],"show");
                    if(x[i].className.indexOf(c) > -1) addClass(x[i], "show")
                }
            }
            
            function addClass(element, name){
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for(i=0; i<arr2.length; i++)
                {
                    if(arr1.indexOf(arr2[i] == -1))
                    {
                        element.className += " " + arr2[i];
                    }
                }
            }

            function removeClass(element, name){
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for(i=0; i < arr2.length; i++)
                {
                    while (arr1.indexOf(arr2[i]) > -1){
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }
        </script>


</body>    
</html>