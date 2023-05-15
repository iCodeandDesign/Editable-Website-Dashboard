<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="thecompany.css">
    <title>Document</title>
</head>
<body>

<?php 
                    
    $databaze = mysqli_connect("localhost","root","","projekt") or die ("error");
    $query = "SELECT * FROM world ORDER BY id DESC LIMIT 1";
    $rezultat = mysqli_query($databaze,$query);
                
    $tekst = mysqli_fetch_array($rezultat);
                                    
                                    
    ?>

<div class="nav_main">

<ul>
    <li>The Reason</li>
    <li>The Idea</li>
    <li>The Creator</li>
</ul>

</div>

<header>
        <div class="container1">
            <div class="intro-text">
                <div class="intro-lead-in">Hello Everybody</div>
                <div class="intro-heading">Welcome to our wonderful world.</div>
            </div>
        </div>
    </header>

    <div class="container">

    <div class="exp-phar row">

    <div class="col-md-4" id="col1">
        <h1 class="tlt-exp">~<?php echo $tekst['main_title_1'];?></h1>
        <p class="exp"><?php echo $tekst['sub_title_1'];?>.</p>
    </div>

    <div class="col-md-4" id="col2">
        <h1 class="tlt-exp">~<?php echo $tekst['main_title_2'];?></h1>
        <p class="exp"><?php echo $tekst['sub_title_1'];?>.</p>    
        </div>

    <div class="col-md-4" id="col3">
        <h1 class="tlt-exp">~<?php echo $tekst['main_title_3'];?></h1>
        <p class="exp"><?php echo $tekst['sub_title_1'];?>.</p>    
        </div>

    </div> 
    </div>

    <hr style="width:30%;
               position: relative;
               left:10%;
               padding-bottom:60px;">

        <p id="roadmap">Roadmap</p>

<hr style="width:30%;
               position: relative;
               left:60%;
               padding-bottom:60px;">
<div class="roadmap-main">
<div class="roadmap"> 
<h1>2011</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua
</p>

<svg style="position: relative;left:200%;top:-150px;" height="100" width="100"> <circle cx="50" cy="50" r="40" stroke="darkgreen" stroke-width="2" fill="darkseagreen" /> </svg>

</div>

<div class="roadmap r-second"> 
<h1>2017</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua
</p>

<svg style="position: relative;left:-150%;top:-150px;" height="100" width="100"> <circle cx="50" cy="50" r="40" stroke="darkgreen" stroke-width="2" fill="darkseagreen" /> </svg>

</div>

<div class="roadmap r-third"> 
<h1>2021</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
sed do eiusmod tempor incididunt ut <br>
labore et dolore magna aliqua
</p>

<svg style="position: relative;left:200%;top:-150px;" height="100" width="100"> <circle cx="50" cy="50" r="40" stroke="darkgreen" stroke-width="2" fill="darkseagreen" /> </svg>


</div>

</div>

<hr style="width:30%;
               position: relative;
               left:10%;
               top:850px;
               padding-bottom:60px;">

        <p id="founders">Founders</p>

<hr style="width:30%;
               position: relative;
               left:60%;
               top:850px;
               padding-bottom:60px;">
<div class="container phar">

<div class="exp-phar row">

<div class="col-md-4">
    <h1 class="tlt-found"><?php echo $tekst['name_1'];?></h1>
    <div class="img"><?php echo "<img class='img' src='image/".$tekst['pic_1']."' >";?></div><!--<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.ZShdnbFsw65IGPWr2fPQzwHaJQ%26pid%3DApi%26h%3D160&f=1&ipt=761eb0050f0fd883b3d7bc44ecc3bccf662052e13e511ce4393eb950e8658efc&ipo=images" alt="no-pic"> -->
    <p class="exp-found"><?php echo $tekst['pic_sub_title_1'];?></p>
</div>

<div class="col-md-4">
    <h1 class="tlt-found"><?php echo $tekst['name_2'];?></h1>
     <div class="img"><?php echo "<img class='img' src='image/".$tekst['pic_2']."' >";?></div><!--<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.EVCGXvrjsvMrhfOX3su_FgHaHa%26pid%3DApi%26h%3D160&f=1&ipt=92faafdc45c3740db1dec6cc49a20deede3aeb633eb59e744088d6744b85ec66&ipo=images" alt="no-pic"> -->
    <p class="exp-found"><?php echo $tekst['pic_sub_title_2'];?> </p>    
    </div>

<div class="col-md-4">
    <h1 class="tlt-found"><?php echo $tekst['name_3'];?></h1>
    <div class="img"><?php echo "<img class='img' src='image/".$tekst['pic_3']."' >";?></div><!-- <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.SBLU1f2cBuyErZJqcypZmAHaLG%26pid%3DApi%26h%3D160&f=1&ipt=70b47fe5350e165c0b614befc18e6580cbe6beb67ead92373d31cf21473b309e&ipo=images" alt="no-pic"> -->
    <p class="exp-found"><?php echo $tekst['pic_sub_title_3'];?></p>    
    </div>

</div> 
</div>


               

    

<div class="footer_main">

<p id="p1">All rights reserved to my camera!  | Copyright 2023</p>

<div class="icons"></div>
<div class="icons"></div>
<div class="icons"></div>
<div class="icons"></div>


<p class="footer_par"><span class="links_footer">Privacy Policy</span><span class="links_footer">Terms of Use</span></p>


</div>
    
</body>
</html>