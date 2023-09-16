<?php
session_start();

    include("connection.php");
    include("functions.php");

 
    
    ?>
<html>
    <head>
        <style>

    p.mainSpec {
        margin-top: 30px;
        font-size: 20px;
    }
    .home_pages {
        padding-left: 2%;
        padding-right: 2%;
        width: 100%;
        height: 70px;
        margin-top: 0px;
        padding-bottom: 20px;
    }

    .home_pages button {
    height: 50px;
    background-color: #f1f0f0;
    width: auto;
    padding-right: 6px;
}

.home_pages a {
    display: inline-flex;
    background-color: #f1f0f0;
    color: black;
}
.hoveringo {
    display: inline-flex;
    position: relative;
}

.njish {
    display: inline-flex;
    color: rgb(183, 174, 174);
}

.topi {
    display: inline-flex;
    position: absolute;
    opacity: 0;
}

.home_pages p {
    background-color: #f1f0f0;
    color: rgb(183, 174, 174);
}

.topi p {
    color: black;
}

            .spec1 p, .spec3 p, .spec5 p{
                background: #e2dddd;
            }
            
            .card-content{
                display: inline-flex;
                padding-left: 30px;
                padding-right: 30px;
                width: 100%;
            }

            img.phone_pics {
                width: 110px;

                display: block;
                margin: auto;
                height: 140px;
            }
            .prod_link {
                color: black;
                font-size: 15px;
                background:none;

                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3; /* start showing ellipsis when 3rd line is reached */
                white-space: pre-wrap;
            }
            .link {
                display: block;
                height:content-fit;
                background:none;
            }
            .name {
                background:none;
                margin-top: 20px;
            }
            .part {
                background:none;
            }
            .prod {
                background:none;
                color: black;
                font-size: 15px;
                width:100%;
                padding-left: 5%;
                text-overflow: ellipsis;
            }
            p.Sname {
                font-size: 13px;
                color: gray;
                margin-top: 14px;
                padding-top: 14px;
                padding-left: 20px;
                padding-bottom: 10px;
            }

            #characteriestics p {
                padding-left: 20px;
                padding-bottom: 14px;
            } 
            .full_product {
                width: 16%;
            }
            .product
            {
                background:white;
                height: 306px;
                width: 100%;
                margin-right: 14px;
                border-radius: 8px;
                position:sticky;
                top:0;
            }
            .spec1 {
              /*  height: 200px; */
            }
            .number {
                font-weight: bold;
                background:none;
                font-size: 16px;
            }
            .from {
                background:none;
                font-size: 14px;
            }
            .price {
                background:none;
                margin-top: 16px;
            }
            .g2 {
                opacity:0;
            }
            .g2:hover {
                opacity:1;
            }

            .topi:hover {
                opacity:1;
            }
            </style>
</head>
    <body onload="dimensions();">
        <?php 
        include("navigimi.php");
        ?>


<?php

  $url =  isset($_SERVER['HTTPS']) &&
  $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  


$comp_number = substr_count($url, "_");

$first = strpos($url, "php");
$first += 9;
$cutted = substr($url, $first);

$products = array("", "", "", "", "", "");

//echo $cutted;
//echo "<br>";
for($i=0; $i<=$comp_number; $i++)
{
    if($i < $comp_number)
    {
    $products[$i] = strstr($cutted, '_', true );
    }
    else if($i == $comp_number)
    {
        //echo $cutted;
        //echo "<br> legen <br>";
        $products[$i] = $cutted;
    }
    $cutted = strstr($cutted, '_' );
    $cutted = substr($cutted, 1);

    
}
//$cutted = strstr($cutted, '_' );
//echo $cutted;

//echo "<br>";
/*
for($y=0; $y<=$comp_number; $y++)
{
    echo $products[$y];
    echo "<br>";
}


echo "<br>";
*/
?>
<script>
    function go_back()
    {
        window.location.href="experimenti_final.php";
    }
    </script>
<div class="home_pages" onclick="closeCategory();">
<button><a href="index.php"><div class="hoveringo"><div class="njish"><p>Home</p> <img src="right3.png" style="height:16px; margin-top:0px; margin-left:6px;"></div><div class="topi"><p>Home</p> <img src="right2.png" style="height:16px; margin-top:3px; margin-left:6px;"></div></div> </a></button>
<button><a href="tech.php"><div class="hoveringo"><div class="njish"><p>Mobile</p><img src="right3.png" style="vertical-align: middle;height:16px; margin-top:0px; margin-left:6px;"></div><div class="topi"><p>Mobile</p> <img src="right3.png" style="height:16px; margin-top:0px; margin-left:6px;"> </div> </div></a></button>
<button><a href="experimenti_final.php"><p>Phones</p> </a></button>

<!-- <button><a><p>Smartphones</p> </a></button> -->
</div>

<div class="full_del" style="">
<div class="del_comparison" onclick="go_back();" style="cursor:pointer;display:inline-flex;margin-bottom: 34px;margin-left: 2%; border-radius: 4px;background:rgb(255,0,0); width: 180px;"><img src="bin3.png" style="margin-left: 4px;width: 36px;"><p style="color:white; background:rgb(255,0,0); margin-top:12px; margin-left:4px; font-size: 14px;">Delete comparison</p></div>
<div class="del_comparison g2" onclick="go_back();" style="position: absolute; left:0; cursor:pointer;display:inline-flex;margin-bottom: 34px;margin-left: 2%; border-radius: 4px;background:#B2221F; width: 180px;"><img src="bin4.png" style="margin-left: 4px;width: 36px;"><p style="color:white; background:#B2221F; margin-top:12px; margin-left:4px; font-size: 14px;">Delete comparison</p></div>

</div>
<h2 style="font-size:26px; margin-left: 2%; margin-bottom:38px;font-weight: normal;"> Compare <span style="font-weight: bold;"> Mobile Phones </span> </h4>
<?php

$production = implode("','", $products);
$sql = "SELECT * FROM product WHERE product_index IN ('".$production."')";


$sql_run = mysqli_query($con, $sql);

if($sql_run -> num_rows > 0)
{
    ?>
    <div class="card-content" >
      
        <?php
    while($row = $sql_run-> fetch_assoc())
    {
       
        ?>
        <div class="full_product" id="full">
        <div class="product <?php echo $row['manufacturer']; ?>" >
        
      <!--  <img src="compare2.png" onclick="add_comparison('<?php //echo $row['product_index']; ?>');" style="width: 24px; margin-left: 194px; margin-bottom:10px;">
    -->
    <img src="bin2.png" style="width: 33px; margin-left: 10px; cursor:pointer;" onclick="deletion(<?php echo $row['product_index'];?>);">
        <a href="smartphone.php?product=<?= $row['product_name']; ?>" class="link">
        
            <img class="phone_pics" src="
            <?php
            echo $row['picture'];
            ?>
">
    
    </a>
    <div class="part">
    <p class="prod name">
    <a class="prod_link" href="smartphone.php?product=<?= $row['product_name']; ?>">
        <?php
        echo $row['product_name'];
        ?>
</a>
</p>


<p class="prod price">
<span class="from">from</span><span class="number"> <?php echo $row['price']; ?>&euro; </span>
</p>
        
    </div>
    </div>
    <div id="characteriestics" style="height:content-fit;border-bottom: 1px solid white;">
        
        <p class="mainSpec" style="margin-top: 40px;">Main Specifications</p>
        
          <div class="spec"><p class="Sname">Mobile Phone Type </p><p><?php if($row['phone_type']){ echo $row['phone_type'];} else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Operating System</p><p><?php if($row['operating_system']){ echo $row['operating_system'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">SIM</p><p><?php if($row['sim']){ echo $row['sim'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">Release Date</p><p><?php if($row['manufacturing_year']){ echo $row['manufacturing_year'];}else {echo "-";}?></p></div>
          <div class="spec4"><p class="Sname">Colour</p><p><?php if($row['color']){ echo $row['color'];}else {echo "-";}?></p></div>
          <div class="spec5"><p class="Sname">Weight</p><p><?php if($row['weight(gr)']){ echo $row['weight(gr)'];}else {echo "-";}?></p></div>
          
          <p class="mainSpec">Processor & Memory</p>
          
          <div class="spec"><p class="Sname">Processor Model </p><p><?php if($row['processor_model']){ echo $row['processor_model'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Processor Power</p><p><?php if($row['processor_power(GHz)']){ echo $row['processor_power(GHz)'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Processor Cores</p><p><?php if($row['processor_cores']){ echo $row['processor_cores'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">RAM</p><p><?php if($row['ramGB']){ echo $row['ramGB'];}else {echo "-";} ?></p></div>
          <div class="spec4"><p class="Sname">Capacity</p><p><?php if($row['memoryGB']){ echo $row['memoryGB'];}else {echo "-";}?></p></div>
          <div class="spec5"><p class="Sname">Card Slot</p><p><?php if($row['card_slot']){ echo $row['card_slot'];}else {echo "-";}?></p></div>
          
          <p class="mainSpec">Screen</p>
          
          <div class="spec"><p class="Sname">Size </p><p><?php if($row['screen_size(inches)']){ echo $row['screen_size(inches)'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Resolution</p><p><?php if($row['screen_resolution']){ echo $row['screen_resolution'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Type</p><p><?php if($row['screen_type']){ echo $row['screen_type'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">Handling</p><p><?php if($row['screen_use']){ echo $row['screen_use'];}else {echo "-";}?></p></div>

          <p class="mainSpec">Camera</p>
          
          <div class="spec"><p class="Sname">Rear Camera </p><p><?php if($row['back_camera']){ echo $row['back_camera'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Rear Camera Lenses</p><p><?php if($row['back_camera_lenses']){ echo $row['back_camera_lenses'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Rear Camera Video Resolution</p><p style="padding-bottom:14px; height: 40px;"><?php if($row['back_camera_video']){ echo $row['back_camera_video'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">Rear Camera Flash</p><p><?php if($row['back_camera_flash']){ echo $row['back_camera_flash'];}else {echo "-";}?></p></div>
          <div class="spec4"><p class="Sname">Selfie Camera Lenses</p><p><?php if($row['selfie_camera_lenses']){ echo $row['selfie_camera_lenses'];}else {echo "-";}?></p></div>
          <div class="spec5"><p class="Sname">Features</p><p style="height: 50px;"><?php if($row['capabilities']){ echo $row['capabilities'];}else {echo "-";}?></p></div>

          <p class="mainSpec">Network & Connectivity</p>
          
          <div class="spec"><p class="Sname">Network </p><p><?php if($row['connection_network']){ echo $row['connection_network'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Connectivity</p><p><?php if($row['connectivity']){ echo $row['connectivity'];}else {echo "-";}?></p></div>

          <p class="mainSpec">Batery</p>
          
          <div class="spec"><p class="Sname">Capacity </p><p><?php if($row['batery_capacity(mAh)']){ echo $row['batery_capacity(mAh)'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Detachable</p><p><?php if($row['removable']){ echo $row['removable'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Fast Charging</p><p><?php if($row['fast_charge']){ echo $row['fast_charge'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">Charging Power</p><p><?php if($row['charge_power(w)']){ echo $row['charge_power(w)'];}else {echo "-";}?></p></div>
          <div class="spec4"><p class="Sname">Wireless Charging</p><p><?php if($row['wireless_charging']){ echo $row['wireless_charging'];}else {echo "-";}?></p></div>

          <p class="mainSpec">Additional Specifications</p>
          
          <div class="spec"><p class="Sname">Protection</p><p><?php if($row['protection']){ echo $row['protection'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Sensors</p><p style="height: 50px;"><?php if($row['sensors']){ echo $row['sensors'];}else {echo "-";}?></p></div>
          <div class="spec3"><p class="Sname">Fingerprint Sensor</p><p><?php if($row['fingerprint']){ echo $row['fingerprint'];}else {echo "-";}?></p></div>

          <p class="mainSpec">Dimensions</p>
          
          <div class="spec"><p class="Sname">Length </p><p><?php if($row['length(mm)']){ echo $row['length(mm)'];}else {echo "-";}?></p></div>
          <div class="spec1"><p class="Sname">Width</p><p><?php if($row['width(mm)']){ echo $row['width(mm)'];}else {echo "-";}?></p></div>
          <div class="spec2"><p class="Sname">Thickness</p><p><?php if($row['thickness(mm)']){ echo $row['thickness(mm)'];}else {echo "-";}?></p></div>


          <p class="info">Important information</p>
          <p class="report">
          Specifications are collected from official manufacturer websites. Please verify the specifications before proceeding with your final purchase. If you notice any problem you can <span class="havera" style="color:rgb(71, 123, 245);">report it here</span>.
          </p>
        </div>
    </div>
    

        <?php
        
        
    }
    ?>
    </a>
    </div>

    <?php
}

?>


<?php
    include("footer.php");
    ?>
    </body>
</html>

<script>
function deletion(comparison_id)
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

    if(count == 1)
                {
                    let start = url_comp.search("comp");
                    let end = url_comp.search("//");
                    let deletion = url_comp.substring(start, end+2);

                    url_comp = url_comp.replace(deletion, "");
                    window.location.href="experimenti_final.php";


                }
                else if(count==2)
                {
                    let option1 = url_comp.search("comp=" + comparison_id);
                    let option2 = url_comp.search(comparison_id + "//");
                    if(option1 > -1)
                    {
                        let optioni = comparison_id + "_";
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="compare.php"+url_comp+"";

                    }
                    else if(option2 > -1)
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="compare.php"+url_comp+"";

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
                    window.location.href="compare.php"+url_comp+"";

                    }
                    else if(option2 > -1)
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="compare.php"+url_comp+"";

                    }
                    else
                    {
                        let optioni = "_" + comparison_id;
                        url_comp = url_comp.replace(optioni, "");
                    window.location.href="compare.php"+url_comp;
                    }

                }

}
}
function dimensions()
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

            if(count == 1)
            {
                document.getElementById("full").style.width = "100%";
            }
            if(count == 2)
            {
                //document.getElementById("full").style.width = "50%";
                const full_products = document.querySelectorAll('.full_product');
                full_products.forEach(box => {
                    box.style.width = '50%';
                    box.style.paddingRight = '2%';
                });
            }
            if(count == 3)
            {
                const full_products = document.querySelectorAll('.full_product');
                full_products.forEach(box => {
                    box.style.width = '33%';
                    box.style.paddingRight = '2%';
                });
            }
            if(count == 4)
            {
                const full_products = document.querySelectorAll('.full_product');
                full_products.forEach(box => {
                    box.style.width = '25%';
                    box.style.paddingRight = '2%';
                });            }
            if(count == 5)
            {
                const full_products = document.querySelectorAll('.full_product');
                full_products.forEach(box => {
                    box.style.width = '20%';
                    box.style.paddingRight = '2%';
                });            }
            if(count == 6)
            {
                const full_products = document.querySelectorAll('.full_product');
                full_products.forEach(box => {
                    box.style.width = '16%';
                    box.style.paddingRight = '2%';
                });            }
            

        }

        
    }
</script>