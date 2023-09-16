<?php
session_start();

    include("connection.php");
    include("functions.php");

 
    
    ?>

<html>
<head>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">


<link rel="stylesheet" href="phoning.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


    <!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
-->
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<!-- <link rel="stylesheet" href="prod.css"> -->



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




<body onload="Check_Page(); comparison(); seconda3();" onclick="hiq_mutin();">

<button id="max_comp">You have reached the maximum number of products to compare</button>



<?php
include("navigimi.php"); 
?>    

<script>
    let hapur = false;
    function hap()
    {
        if(hapur == false)
        {
        document.getElementById("koleksioni").style.display = 'block';
            hapur = true;
    }
    else
    {
        document.getElementById("koleksioni").style.display = 'none';
        hapur = false;
    }
    }
</script>

<script>
    function sorting(sor) 
    {
        var current = window.location.search;
       //console.log("ore");
       let findAsc = current.search('asc');
       let findDes = current.search('desc');
       let findLat = current.search('latest');

       if(findAsc > -1)
       {
        current = current.replace('asc', sor);
        window.location.href="experimenti_final.php"+""+current+"";

       }
       else if(findDes > -1)
       {
        current = current.replace('desc', sor);
        window.location.href="experimenti_final.php"+""+current+"";

       }
       else if(findLat > -1)
       {
        current = current.replace('latest', sor);
        window.location.href="experimenti_final.php"+""+current+"";

       }
       else
       {
        window.location.href="experimenti_final.php?"+sor+""+current+"";

       }
/*
       if( findAsc > -1 || findDes > -1 || findLat > -1)
       {
  
        let find = current.search('latest');
        if(find > -1)
        {
            current = current.replace("latest", "");
        }
        let find1 = current.search("asc");

        if(find1 > -1)
        {
            current = current.replace("asc", "");
        }
        let find2 = current.search("desc");

        if(find2 > -1)
        {
            current = current.replace("desc", "");
        }
        let paging = current.search("page");
        
        if(paging > -1)
        {
           // console.log("ore");
           current = current.substring(0, current.indexOf('page'));

           // current = current.slice(paging-1);
            console.log(current);
        }
        window.location.href="experimenti_final.php"+sor+""+current+"";
*/
    }
</script>





<div class="home_pages" onclick="closeCategory();">
<button><a href="index.php"><div class="hoveringo"><div class="njish"><p>Home</p> <img src="right3.png" style="height:16px; margin-top:3px; margin-left:6px;"></div><div class="topi"><p>Home</p> <img src="right2.png" style="height:16px; margin-top:3px; margin-left:6px;"></div></div> </a></button>
<button><a href="tech.php"><p>Mobile</p> </a></button>
<!-- <button><a><p>Smartphones</p> </a></button> -->
</div>

<div class="ad" style="text-align:center;background-image: url('banner11.jpg'); margin-left: 2%; width: 96%; margin-right: 2%; background-size: 100% 280px; height: 200px; border-radius: 12px; ">
<p style="background: none; color:black; font-weight: bold; padding-top: 60px; margin-left: auto; font-size: 20px;">Need help with finding the product you want?<br> Call us on 210-210-4545 and we will help you</p>
</div>




<div class="seperation">
<div class="filters">
<div class="filtering">
<h2>Filters</h2>

<p onClick="clearing();" class="clear" style="color:blue; cursor:pointer;">Clear</p>
</div>
<script>
    function clearing() {
        window.location.href="experimenti_final.php";
    }
</script>

<script>
    function price_range(price_category)
    {
        var current = window.location.search;
            var position = current.search("page");
            var exist = current.search("price_min");
    
            if(price_category == 1)
            {
            price_min = 0;
            price_max = 200;
            }
            else if(price_category == 2)
            {
            price_min = 200;
            price_max = 400;
            }
            else if(price_category == 3)
            {
            price_min = 400;
            price_max = 900;
            }
            else if(price_category == 4)
            {
            price_min = 900;
            price_max = 10000;
            }


            if(position > -1)
            {
                var deleto = current.slice(current.indexOf('page')-1);
                //console.log(deleto);
                current = current.replace(deleto,"");

                var curr_min = current.slice(current.indexOf('min')+4);
                var current_min = curr_min.substring(0, curr_min.indexOf('&price'))
                //console.log(current_min);

                var current_max = current.slice(current.indexOf('max')+4);
                //var current_max = curr_min.substring(0, curr_min.indexOf('&price'))
                //  console.log(current_min);

                if(exist > -1)
                {

                if(current_min == '0')
                {
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+25);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 26);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
                else if(current_max == '10000')
                {
                    
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+29);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 30);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
                else
                {
                    
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+27);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 28);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
                }
                else
                {
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
            }
            else
            {
                
                var curr_min = current.slice(current.indexOf('min')+4);
                var current_min = curr_min.substring(0, curr_min.indexOf('&price'))
                    //console.log(current_min);

                var current_max = current.slice(current.indexOf('max')+4);
                //var current_max = curr_min.substring(0, curr_min.indexOf('&price'))
                  //  console.log(current_min);

                if(exist > -1)
                {

                if(current_min == '0')
                {
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+25);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 26);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
                else if(current_max == '10000')
                {
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+29);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 30);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;

                }
                else
                {
                    let rezultati = current.indexOf("price_min");
                    let replacement = current.substring(rezultati-1, rezultati+27);
                    current = current.replace(replacement, "");
                    //current = current.slice(0 , - 28);
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;

                }
                }
                else
                {
                    window.location.href="experimenti_final.php"+current+"?price_min="+price_min+"&price_max="+price_max;
                }
            }

            //console.log()
    }
</script>
<h6> Price Range </h6>

<ul>
    <li>
        <div class="stop">
    <label class="custom-radio-btn">
    <input type="radio" onclick="price_range(1);" name="price" class="form-check-input" value="1" id="price1">
    <span class="checkmark"></span>
</label>
<p> Until 200 &euro; </p>
</div>
    </li>

    <li>
        <div class="stop">
    <label class="custom-radio-btn">
    <input type="radio" onclick="price_range(2);" name="price" class="form-check-input" value="2" id="price2">
    <span class="checkmark"></span>
</label>
<p> 200 - 400 &euro; </p>
</div>
    </li>

    <li>
        <div class="stop">
    <label class="custom-radio-btn">
    <input type="radio" onclick="price_range(3);" name="price" class="form-check-input" value="3" id="price3">
    <span class="checkmark"></span>
</label>
<p> 400 - 900 &euro; </p>
</div>
    </li>

    <li>
        <div class="stop">
    <label class="custom-radio-btn">
    <input type="radio" onclick="price_range(4);" name="price" class="form-check-input" value="4" id="price4">
    <span class="checkmark"></span>
</label>
<p> 900 &euro; and above</p>
</div>
    </li>
</ul>


<h6> Manufacturers</h6>
<ul>
<li>
                <div class="stop">

                    <input onClick="changing('_apple');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="apple" id="apple"><p>apple</p>   
            </div>    
            </li>
            <li>
                <div class="stop">

                    <input onClick="changing('_samsung');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="samsung" id="samsung"><p>samsung</p>   
            </div>    
            </li>
            <li>
                <div class="stop">

                    <input onClick="changing('_motorola');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="motorola" id="motorola"><p>motorola</p>   
            </div>    
            </li>
            <li>
                <div class="stop">

                    <input onClick="changing('_vivo');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="vivo" id="vivo"><p>vivo</p>   
            </div>    
            </li>
            <li>
                <div class="stop">

                    <input onClick="changing('_xiaomi');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="xiaomi" id="xiaomi"><p>xiaomi</p>   
            </div>    
            </li>

            <li>
                <div class="stop">

                    <input onClick="changing('_google');" type="checkbox" name="checkboxCheck" class="form-check-input product_check" value="google" id="google"><p>google</p>   
            </div>    
            </li>
    </ul>

    
    
</div>

    <script>
        function changing(manufacturer)
        {
            var current = window.location.search;
            var position = current.search("page");
            var exist = current.search(manufacturer);

            if(exist >-1)
            {
                let rem_existing = current.replace(manufacturer,"");
                if(position > -1)
                {
                    var pozita = rem_existing.search("page"); 
                    let remova = rem_existing.slice(pozita-1);
                    console.log(remova)
                    rem_existing = rem_existing.replace(remova, "");
                }

                //rem_existing = current.replace("page=","");

                window.location.href="experimenti_final.php"+rem_existing+"";

            }
            else
            {
               if(position > -1)
                {
                var current_before_page = current.substring(0, current.indexOf('page'));
                current_before_page = current_before_page.substring(1);

                current_before_page = "?" + manufacturer + current_before_page;
                window.location.href="experimenti_final.php"+current_before_page+"";
                }
                else
                {
                    if(current)
                    {
                        current = current.substring(1);
                        current = "?" + manufacturer + current;
                        window.location.href="experimenti_final.php"+current+"";
                    }
                    else
                    {
                        current = "?" + manufacturer + current;
                        window.location.href="experimenti_final.php"+current+"";
                    }
                }
            }
        }

        function getParameter(parameterName){
            let parameters = new URLSearchParams(window.location.search);
            if(parameters.get(parameterName))
            {
                return parameters.get( parameterName );
            }
            else
            {
                return "";
            }
        }
        </script>
    <div id="result">
    

    <?php 
    $url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
 
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  



    $num_per_page = 11;

    $tokeni = "page=";
    $index = strpos($url, $tokeni);
    if($index !== false)
    {
    $rezultati = substr($url, $index+ strlen($tokeni));
    //echo $rezultati;
    $page = $rezultati;
    }
    else
    {
        $page = 1;
    }
   // echo $_GET['page'];
    //if(isset($_GET['page']))
    //{
        //$page=$_GET['page'];
     //   echo $page;
    //}
    //else
    //{
      //  $page=1;
       // echo "legen";
    //}
    
    $start_from=($page-1)*11;

    $sql = "SELECT * FROM product where aproval = '1' ";

    $price_range1 = strpos($url, "price_min=0");
    $price_range2 = strpos($url, "price_min=200");
    $price_range3 = strpos($url, "price_min=400");
    $price_range4 = strpos($url, "price_min=900");



    $search_samsung = strpos($url,"samsung");
    $search_apple = strpos($url,"apple");
    $search_xiaomi = strpos($url,"xiaomi");
    $search_motorola = strpos($url,"motorola");
    $search_vivo = strpos($url,"vivo");
    $search_google = strpos($url,"google");
    
    $search_asc = strpos($url, "asc");
    $search_desc = strpos($url, "desc");
    $search_latest = strpos($url, "latest");

    if($url == "http://localhost/Business/experimenti_final.php")
        {

        }
        else
        {
    //echo $search_samsung;
    $manufact = array("", "", "", "", "", "");
    if($search_samsung > -1)
    {
        //$sql .= "AND manufacturer IN ('samsung')";
        $manufact[0] = "samsung";
    }
    else
    {
        $manufact[0] = "";
    }

    if($search_apple > -1)
    {
        //$sql .= "AND manufacturer IN ('apple')";
        $manufact[1] = "apple";
    }
    else
    {
        $manufact[1] = "";
    }

    if($search_xiaomi > -1)
    {
        //$sql .= "AND manufacturer IN ('apple')";
        $manufact[2] = "xiaomi";
    }
    else
    {
        $manufact[2] = "";
    }

    if($search_motorola > -1)
    {
        //$sql .= "AND manufacturer IN ('apple')";
        $manufact[3] = "motorola";
    }
    else
    {
        $manufact[3] = "";
    }

    if($search_vivo > -1)
    {
        //$sql .= "AND manufacturer IN ('apple')";
        $manufact[4] = "vivo";
    }
    else
    {
        $manufact[4] = "";
    }

    if($search_google > -1)
    {
        //$sql .= "AND manufacturer IN ('apple')";
        $manufact[5] = "google";
    }
    else
    {
        $manufact[5] = "";
    }
    $manufacting =  implode("','", $manufact);
    if($manufact[0] == "" and $manufact[1] == "" and $manufact[2] == "" and $manufact[3] == "" and $manufact[4] == "" and $manufact[5] == "" )
    {
    }
    else{   
    
    $sql .= "AND manufacturer IN('".$manufacting."')";
    }
        }

    //$sql_total = mysqli_query($con, $sql);

    if($price_range1 > -1)
    {
        $sql .= "AND price_category IN('1')";
    }
    else if($price_range2 > -1)
    {
        $sql .= "AND price_category IN('2')";
    }
    else if($price_range3 > -1)
    {
        $sql .= "AND price_category IN('3')";
    }
    else if($price_range4 > -1)
    {
        $sql .= "AND price_category IN('4')";
    }




    if($search_asc > -1)
    {
        $sql .= "ORDER BY price ASC ";

    }
    else if($search_desc > -1)
    {
        $sql .= "ORDER BY price DESC ";

    }

    $sql_runing = mysqli_query($con, $sql);

    $sql .= "LIMIT $start_from, $num_per_page";

    $sql_run = mysqli_query($con, $sql);

    $total_record = mysqli_num_rows($sql_runing);
    

    $total_pages = ceil($total_record/$num_per_page);

?>

<div class="comparison" id="topini" style="cursor:pointer;display:none; width: content-fit; border-radius: 3px;">
    <div class="comparison_first"style="display:inline-flex;" onclick="compare_page();">
    <img src="compare4.png" style="border-right: 1px solid white; padding:3px 7px 3px 10px;margin:8px 0px 8px 0px;background:none;">
    <p id="resultati" style="display: block; background:none; width: 20px; color: white; font-weight: bold; margin-top: 12px; margin-left: 10px;">
    1
    </p>
    <p style="background: none; color: white; font-weight:bold; margin-top: 12px;margin-right: 12px;"> 
    for comparison
    </p>
</div>
<div class="hoveras">
    <img onclick="delete_comparison();" src="bin.png"  class="first_bin" style=" background:none; cursor:pointer;">
    <img onclick="delete_comparison();" src="bin1.png" class="top_bin" style=" background:none; cursor:pointer;">

</div>    
</div>
    <div class="titles">
    
    <p class="phone_title" onclick="change();">Mobile Phones</p>

    <?php
    $num = "SELECT * FROM product";
    $result = mysqli_query($con, $num);
    $total_records = mysqli_num_rows($result);

        ?>
        <p class="numberino">
            <?php
        echo  $total_record, " products";
        ?>
        </p>


    <div class="butoni">
    <div class="board" onclick="changing('_vivo');" id ="vivo1"><p>Vivo</p> <img src="close.png"></div>
    <div class="board" onclick="changing('_motorola');" id="motorola1"><p>Motorola</p> <img src="close.png"></div>
    <div class="board" onclick="changing('_samsung');" id="samsung1"><p>Samsung</p> <img src="close.png"></div>
    <div class="board" onclick="changing('_apple');" id="apple1"><p>Apple</p> <img src="close.png"></div>  
    <div class="board" onclick="changing('_xiaomi');" id="xiaomi1"><p>Xiaomi</p> <img src="close.png"></div>
    <div class="board" onclick="changing('_google');" id="google1"><p>Google</p> <img src="close.png"></div>
    </div>

    <div class="space">
    </div>

    <div class="pagi">




    <div class="opcionii">
    <div class="defolti" onclick="hap(); mbyllVeten();" id="vetja">
        <p class="single div1" id="veti">
        Latest
</p>
<p class="single div2" style="display:none;">
        Price ascending
</p>
<p class="single div3" style="display:none;">
        Price descending
</p>

<img src="downGray.png">


    </div>
    <div class="koleksioni" id="koleksioni">
        <div class="opcionat" target="1" onclick="sorting('latest');">
        <input type="radio" class="product_check" name="selection" id="selec">
        <label for="selec">
        </label>
            <p>
            Latest
</p> 
<img src="up.png">
        </div>   
        <div class="opcionat" target="2" onclick="sorting('asc');">
        <input type="radio" class="product_check" name="selection" id="seleca">
        <label for="seleca">
        </label>
            <p>
            Price Ascending
</p>
        </div> 
        <div class="opcionat" target="3" onclick="sorting('desc');">

        <input type="radio" class="product_check" name="selection" id="selecb">
        <label for="selecb" href="#!">
        </label>
            <p>
            Price Descending
</p>
        </div>     
    </div>
</div>







    <script>
        function change(){
            text +="?page=3";
        }
        </script>
    <script>
        var text='';
        
                function transition()
    {
        //delay(5000);
        //sleep(5000);
        //setTimeout(transition, 5000);
        document.getElementById("showcasing").style.opacity = "0.5";
        //setTimeout(() => {          window.location.href="compare.php"; }, 5000);
        //}
        text += "?page=2";

        window.location.href="phoning.php"+text+"";
        //document.write('<a href="phoning.php'+text+'">Click </a>');
    }
    </script>

<?php
  //echo $total_pages;
 
//  
//echo $url;
//

$numri = strlen($url);

$newUrl = substr($url, 0, $numri-1);

//
//echo $newUrl;
//

$ans = strpos($url,"page");
echo "<div class='pagin' style='width:100%;'>";

echo "<div class='floating' style='float:right;'>";
if($ans)
{
    if(strpos($url, "page=1"))
    {
    echo "<img id='prevNot' src='right4.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";
    }
    else
    {
        echo "<img onclick='previous();' id='prev' src='right2.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";

    }

    for($i = 1; $i<=$total_pages; $i++)
    {
        echo "<button class='buti'><a href='$newUrl".$i."' id='page'><p id=".$i." style='backround:none;' >".$i."</p></a></button>";
    }
    if(strpos($url,"page=$total_pages"))
    {
    
        echo "<img src='right4.png' style='width:21px; margin-bottom:3px;'>";

    }
    else
    {
        echo "<img onclick='next();' src='right2.png' style='width:21px; margin-bottom:3px;'>";
    }
}
else
{
    echo "<img src='right4.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";

    for($i = 1; $i<=$total_pages; $i++)
    {
        echo "<button class='buti'><a href='$url?page=".$i."' id='page'><p id=".$i." style='backround:none;' >".$i."</p></a></button>";
    }
    if($total_pages == 1)
    {
    
        echo "<img src='right4.png' style='width:21px; margin-bottom:3px;'>";

    }
    else
    {
        echo "<img onclick='next();' src='right2.png' style='width:21px; margin-bottom:3px;'>";
    }
}
echo "</div>";
echo "</div>";
?>






<script>

    function next()
    {
        var current = window.location.search;
        var current_page = current.substr(current.indexOf('page=')+5);
        if(current.indexOf('page=')>-1)
        {
        
        var number_page = Number(current_page);
        number_page += 1;
        var next_one = current.substr(0, current.indexOf('page=')+5);

        if(number_page == 1)
        {
            window.location.href="experimenti_final.php"+current+"?page="+number_page+"";
        }
        else
        {
            window.location.href="experimenti_final.php"+next_one+""+number_page+"";
        }
    }
        else
        {
            number_page = 2;
            window.location.href="experimenti_final.php"+current+"?page="+number_page+"";
        }

        
    }

    function previous()
    {
        var current = window.location.search;
        var current_page = current.substr(current.indexOf('page=')+5);
        var number_page = Number(current_page);
        number_page -= 1;
        //console.log(number_page);
        var previous_one = current.substr(0, current.indexOf('page=')+5);
        window.location.href="experimenti_final.php"+previous_one+""+number_page+"";
    }

    function Check_Page()
    {
        var myKeysValues = window.location.search;
        let minimum1 = myKeysValues.search("price_min=0");
        let minimum2 = myKeysValues.search("price_min=200");
        let minimum3 = myKeysValues.search("price_min=400");
        let minimum4 = myKeysValues.search("price_min=900");

        //console.log(minimum);  
        let existingSam = myKeysValues.search("samsung");
        let existingApp = myKeysValues.search("apple");
        let existingXia = myKeysValues.search("xiaomi");
        let existingGoo = myKeysValues.search("google");
        let existingMot = myKeysValues.search("motorola");
        let existingViv = myKeysValues.search("vivo");


        let find1 = myKeysValues.search("asc");
        let find2 = myKeysValues.search("desc");
        let find3 = myKeysValues.search("latest");
        if(find1 > -1)
        {
            document.getElementById("veti").innerHTML = "Price Ascending";
        }

        if(find2 > -1)
        {
            document.getElementById("veti").innerHTML = "Price Descending";
        }

        if(find3 > -1)
        {
            document.getElementById("veti").innerHTML = "Latest";
        }




        if(minimum1 > -1)
        {
            document.getElementById("price1").checked = true;
        }
        else if (minimum2 > -1)
        {
            document.getElementById("price2").checked = true;
        }
        else if (minimum3 > -1)
        {
            document.getElementById("price3").checked = true;
        }
        else if (minimum4 > -1)
        {
            document.getElementById("price4").checked = true;
        }


     
        if(existingSam > -1)
        {
            document.getElementById("samsung").checked = true;
            document.getElementById("samsung1").style.display = 'inline-flex';

        }
        if(existingApp > -1)
        {
            document.getElementById("apple").checked = true;
            document.getElementById("apple1").style.display = 'inline-flex';

        }
        if(existingXia > -1)
        {
            document.getElementById("xiaomi").checked = true;
            document.getElementById("xiaomi1").style.display = 'inline-flex';

        }
        if(existingGoo > -1)
        {
            document.getElementById("google").checked = true;
            document.getElementById("google1").style.display = 'inline-flex';

        }
        if(existingMot > -1)
        {
            document.getElementById("motorola").checked = true;
            document.getElementById("motorola1").style.display = 'inline-flex';

        }
        if(existingViv > -1)
        {
            document.getElementById("vivo").checked = true;
            document.getElementById("vivo1").style.display = 'inline-flex';
        }
        
        //console.log(myKeysValues);        
        //const urlParams = new URLSearchParams(myKeysValues);
        //console.log(urlParams);
        if(myKeysValues.indexOf('page=')>-1)
        {
        var after = myKeysValues.slice(myKeysValues.indexOf('page=')+5);
        }
        console.log(after);
        before = after*-1;
        console.log(before);
        if(after)
        {
        //console.log(param1);
        document.getElementById(after).style.color = 'rgb(63, 88, 255)';
        document.getElementById(after).style.fontWeight = 'bold';

        document.getElementById(before).style.color = 'rgb(63, 88, 255)';
        document.getElementById(before).style.fontWeight = 'bold';
        }
        else
        {
            
            document.getElementById('1').style.color = 'rgb(63, 88, 255)';
            document.getElementById('1').style.fontWeight = 'bold';
            document.getElementById('-1').style.color = 'rgb(63, 88, 255)';
            document.getElementById('-1').style.fontWeight = 'bold';
        
        }

/*
        if(myKeysValues.indexOf('page=1')>-1)
        {
            document.getElementById('prev').style.display = 'none';
            document.getElementById('prevNot').style.display = 'unset';
        }
        else if(myKeysValues.indexOf('page')>-1)
        {
            document.getElementById('prev').style.display = 'unset';
            document.getElementById('prevNot').style.display = 'none';


        }
        else
        {
            
            document.getElementById('prev').style.display = 'none';
            document.getElementById('prevNot').style.display = 'unset';
        }
       // document.getElementById('prev').style.display = 'none';
*/

    }
</script>
</div>
</div>

<?php

    
    if($sql_run -> num_rows > 0)
    {
        ?>
        <div class="card-content" >
          
            <?php
        while($row = $sql_run-> fetch_assoc())
        {
           
            ?>
            <div class="product <?php echo $row['manufacturer']; ?>" >
            <div class="comp" style="display:inline-flex;position:relative;">
            <img src="compare2.png" onclick="add_comparison('<?php echo $row['product_index']; ?>');" style="width: 24px; margin-left: 194px; margin-bottom:10px;">
            <img src="compare1.png" onclick="add_comparison('<?php echo $row['product_index']; ?>');" id="<?php echo $row['product_index'];?>"class="comp1" style="width: 24px; margin-left: 194px; margin-bottom:10px;">
        </div>
        <div id="<?php echo 'i'. $row['product_index'];?>" style="display:none;"> Added to comparison </div>
            <a href="smartphone.php?product=<?= $row['product_name']; ?>" style="background:white;">
            
                <img class="" src="
                <?php
                echo $row['picture'];
                ?>
" style="width:160px; height:220px; background:white; margin-left:24px; margin-right:24px;">
        </a>
        <div class="part">
        <p class="prod name">
        <a class="prod" href="smartphone.php">
            <?php
            echo  $row['product_name'];
            ?>
</a>
</p>
<p class="prod details">
    <?php
    echo "model: ", $row['manufacturing_year'],", screen: ",$row['screen_type']," ", $row['screen'], "&quot; batery: ",$row['batery'], "mAh";
    ?>
    </p>
        </div>
    <p class="prod price">
    <span style="margin-top: 5px; background: white;">from</span><span style="font-weight: bold; background: white; color: black; font-size: 20px; margin-left:10px;"> <?php echo $row['price']; ?>&euro; </span>
    </p>
            
        </div>
            <?php
            
            
        }
        ?>
        </a>
        </div>
    
        <?php
    }

?>

<div class="secondPagination" style="width:100%;">
    <div class="secondi" style="float:right;">
<?php

    if($ans)
{
    if(strpos($url, "page=1"))
    {
    echo "<img id='prevNot' src='right4.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";
    }
    else
    {
    echo "<img onclick='previous();' id='prev' src='right2.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";
    }
    
    for($i = 1; $i<=$total_pages; $i++)
    {
    
        echo "<button class='buti'><a href='$newUrl".$i."' id='page'><p id=".-$i." style='backround:none;' >".$i."</p></a></button>";
    }

    if(strpos($url,"page=$total_pages"))
    {
    
        echo "<img src='right4.png' style='width:21px; margin-bottom:3px;'>";

    }
    else
    {
        echo "<img onclick='next();' src='right2.png' style='width:21px; margin-bottom:3px;'>";
    }
}
else
{
        echo "<img src='right4.png' style='width:21px; margin-bottom:3px; transform: rotate(180deg);'>";

    for($i = 1; $i<=$total_pages; $i++)
    {
        echo "<button class='buti'><a href='$url?page=".$i."' id='page'><p id=".-$i." style='backround:none;' >".$i."</p></a></button>";
    }

    if($total_pages == 1)
    {
        echo "<img src='right4.png' style='width:21px; margin-bottom:3px;'>";
    }
    else
    {
        echo "<img onclick='next();' src='right2.png' style='width:21px; margin-bottom:3px;'>";
    }
}
    ?>

</div>
</div>
</div>
</div>

<script>
function add_compare(product) {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };
  $compare_table = "INSERT INTO comparison(product_1) VALUES ('.$f') ";
  request.open("GET", "action_request.php", true);
  request.send();
}
</script>

<?php 

include("footer.php");
?>

</body>



<script>
    function hiq_mutin()
    {
        document.getElementById("mut").style.display = "none";
    }
    function add_comparison(comparison_id)
    {
        var url_comp = window.location.search;
        //console.log(url_comp);
        var exists = url_comp.search("comp");
        if(exists >-1)
        {
            var count = 1;
            var existing_end = url_comp.search("//");
            for(let i= exists; i< existing_end; i++)
            {
                
                if(url_comp.charAt(i) == '_')
                {
                    count += 1;
                }
            }
            //console.log(count);

            var already = -1;
            var already_one = -1;
            var already_two = -1;
            var already_three = -1;
            var already_four = -1;
            var already_five = -1;
            
            if(count == 1)
            {
                var first = url_comp.substring(exists+5, url_comp.indexOf("//"));
                if(first == comparison_id)
                {
                    var already = 1;
                    console.log(first);
                }
            }
            else if(count == 2)
            {
                //var second = url_comp.substring(exists+5, url_comp.indexOf("_"));
                //console.log(second);

                var second = "comp=" + comparison_id;
                already_one = url_comp.search(second);
                
                var third = comparison_id + "//";
                already_two = url_comp.search(third);
                

            }
            else if(count > 2)
            {
                var comp_id3 = "_" + comparison_id + "_";
                var comp_id5 = comparison_id + "//";
                var already_three = url_comp.search(comp_id3);
                var comp_id4 = comparison_id + "_";
                var already_four = url_comp.search(comp_id4);
                var already_five = url_comp.search(comp_id5);
            }

            if(already_one >-1 || already_two > -1 || already > -1 || already_three > -1 || already_four > -1 || already_five > -1)
            {
                console.log("It fucking is");
                if(count == 1)
                {
                    let start = url_comp.search("comp");
                    let end = url_comp.search("//");
                    let deletion = url_comp.substring(start, end+2);

                    url_comp = url_comp.replace(deletion, "");
                    window.location.href="experimenti_final.php"+url_comp+"";


                }
                else if(count==2)
                {
                    let option1 = url_comp.search("comp=" + comparison_id);
                    let option2 = url_comp.search(comparison_id + "//");
                    if(option1 > -1)
                    {
                        let optioni = comparison_id + "_";
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="experimenti_final.php"+url_comp+"";

                    }
                    else if(option2 > -1)
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="experimenti_final.php"+url_comp+"";

                    }
                }
                else if(count > 2)
                {
                    let option1 = url_comp.search("comp=" + comparison_id);
                    let option2 = url_comp.search(comparison_id + "//");
                    if(option1 > -1)
                    {
                        let optioni = comparison_id + "_";
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="experimenti_final.php"+url_comp+"";

                    }
                    else if(option2 > -1)
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="experimenti_final.php"+url_comp+"";

                    }
                    else
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="experimenti_final.php"+url_comp+"#"+ comparison_id;
                    }

                }
  
            }
            else
            {
                
            if(count == 6)
            {
                document.getElementById("max_comp").style.display = "block";
                setTimeout(disp_none, 4000);
            }
            else
            {
            var newstring = url_comp.slice(0, exists+5) + comparison_id + "_" +url_comp.slice(exists+5);
            window.location.href="experimenti_final.php"+newstring+"#" + comparison_id;
            }
            }
        }
        else
        {
           // console.log("so far good");
           //console.log(comparison_id);
            url_comp = "?comp=" + comparison_id +"//"+ url_comp;
           // console.log(url_comp);
            window.location.href="experimenti_final.php"+url_comp+"";
        }
        
    }



    function disp_none()
    {
        document.getElementById("max_comp").style.display = "none";
    }
    function comparison()
    {
        var get_url = window.location.search;
        var existing = get_url.search("comp");
        var count = 1;
        if(existing>-1)
        {
            document.getElementById('topini').style.display = 'inline-flex';
            var existing_end = get_url.search("//");
            for(let i= existing; i< existing_end; i++)
            {
                if(get_url.charAt(i) == '_')
                {
                    count += 1;
                }
            }
            document.getElementById('resultati').innerHTML = count;

            gradual = get_url.substring(existing);
            
            gradual = gradual.substring(5);
                       // console.log(gradual);

            for(let i=0; i<count; i++)
            {

                let top = gradual.indexOf("_");
               // console.log(top);

                let one = gradual.slice(0, top);
                //console.log(one);
               // console.log(gradual);
                
                if(i == count-1)
                {
                  //  console.log(i);
                    top = gradual.indexOf("//");
                    one = gradual.slice(0,top);
                    //console.log(one);

                    document.getElementById(one).style.opacity= 1;

                }
                else
                {
                    //console.log(one);
                document.getElementById(one).style.opacity= 1;
                }
                gradual = gradual.substring(top+1);
                
            }
            

        }
    }
    function delete_comparison()
    {
        var get_url = window.location.search;
        var existing = get_url.search("comp");
        var existing_end = get_url.search("//");
        var removable = get_url.substring(existing, existing_end+2);
        get_url = get_url.replace(removable, '');
        window.location.href="experimenti_final.php"+get_url+"";

    }

    function compare_page()
    {
        var current_url = window.location.search;

        var comparison_url = current_url.slice(current_url.indexOf('comp='), current_url.indexOf('//')+2);
        window.location.href="compare.php?"+comparison_url+""; 
    }

    
    function seconda3()
    {
        var current_url = window.location.search;
        var exists = current_url.search("#");

        console.log(current_url);
        if(exists>-1)
        {
            var found = current_url.slice(exists);
            console.log(found);
            document.getElementById(found).style.display = "block";
           // setTimeout(document.getElementById(found).style.display = "block";, 4000);
        }    
    }
    
    </script>

