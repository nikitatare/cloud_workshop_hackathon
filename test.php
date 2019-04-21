<?php
          $username = "root";
          $password = "";
          $database = "food_shop";
          $con = mysqli_connect("localhost",$username,$password,$database);
     if(!$con){
         die("Connection failed: ".mysqli_connect_error());
     }
    
  ?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Food Shop</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        
        <style>
            body{               
                background-repeat: no-repeat;
                background-size: cover; 
            }
            .txt{
                font-family: Georgia Black;
                text-indent:15%;
            }
            .container-fluid{
                background-size: cover;
                background-position: bottom;
            }
            .bgimg{
                background-image: url('image.jpg');
                height: 300px;
            } 
            .title{
                font-size:18px;
            }     
            .det{
                font-size:14px;
            } 
            .tag{
                background-color:rgb(216, 216, 216);
                padding:2px;
                border-radius:3px;
                color: rgb(7, 7, 7);
            }
            .col-sm-2{
                margin: 5px;
                height: 270px;
            }
            .image{
                height: 300px;
                padding: 0%
            }
            .desc{
                margin: 5px;
                height:120px;
            }
            #contain{
                width: 100%;
                padding-left: 100px;
            }
            al{
                width:100%;
                display:flex;
                align-self:center;
            }
            img{
                width:225px;
                height:300px;
            }
            .tile{
                background-color: white;
             
                padding-left: 27px;
                padding-right: 27px;
                padding-top: 12px;
                width: 240px;
                border-radius: 5px;
                border: solid black 0.2px;
                border-bottom: 0.5px;
            }
            .vertical-dist-between-tiles {
                height: 525px;
            }
            .blank{
                width:30px;
            }
            .modal a.close-modal {
                visibility: hidden;
                position: absolute;
                top: 3px;
                right: 3px;
                width: 30px;
                height: 30px;
                color:white;
                text-indent: -9999px;
            }
            .modal {
                display: inline-block;
                vertical-align: middle;
                position: relative;
                z-index: 2;
                max-width: 300px;
                box-sizing: border-box;
                width: 90%;
                background-color: rgba(240,240,240,0.95);
                padding: 15px 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px #000;
                text-align: center;
            }
            .loginbtn{
                color:#1414ff;
                border: 1px solid #1414ff;
                background-color:inherit;
                height: 2.5em;
                width: 5em;
                border-radius:3px;
                font-size:16px;
            }
            
            .loginbtn:hover{
                color:rgb(196, 21, 212);
                background-color:rgb(196, 21, 212);
            }

            .affix {
      			top: 0;
      			width: 100%;
      			z-index: 9999 !important;
  			}
			.affix + .container-fluid {
     			padding-top: 70px;
 			}
            .btn{
                border-top-left-radius:0px;  
                border-top-right-radius:0px;  

            }
            .btn:hover{  
                shadow: 10px;
            }
            a{
                color:black;
                // text-decoration:none; 
            }
            a:hover{
                text-decoration:none;
                color:black;
            }
            .bghover:hover{
                background-color:#d7d7d7;
            }

          
            
        //jssor slider loading skin spin css
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        //jssor slider bullet skin 057 css
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        //jssor slider arrow skin 073 css
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
  

            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        

       
    </head>
    <body > 
   



  



    <!-- navbar styling starts here    -->
        <div class="container-fluid bgimg" >
            
            <b><h1 class="txt">FOOD SHOP</h1> </b>
            <p class="txt">The biggest online food store!</p> 
        
        
            <nav id="navb" data-spy="affix" data-offset-top="280" class="navbar navbar-inverse" >
                <div class="container-fluid">
                    <span class="text-danger">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Foodies</a>
                        </div>
                        <ul class="nav navbar-nav" style="text-indent:0%">
                            <li class=""><a href="second.php">Home</a></li>
                            <li class="dropdown"><a   href="#">Menu <span class="caret"></span></a>
                            </li>
                            
                           
                    
                                <li><a href="#ex1" rel="modal:open">Cart</a></li>
                                <li><a href="#ex1" rel="modal:open"> Profile</a></li>   
                            

                            
                        </ul>
                        <form class="navbar-form navbar-left" action="booksearch.php" method="get">
                            <div class="form-group">
                              <input type="text" class="form-control" name="searchquery" placeholder="Type here!">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </form>
                    </span>
                </div>
            </nav>
        </div>
        <!-- navbar styling ends here -->
        <!--Modal Content-->
       
         
        <div style="background-color: rgb(107, 101, 101); color:rgb(0, 0, 0)">
            
            <div class="container-fluid" id="contain">                
                <br><br>
                
 <!--  <p style="color:white">Search not found. Please try again.</p>-->  
                  
                    


<!-- carousel here -->




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
                     <div>
                        <br>
                                                
                                    <div class="row vertical-dist-between-tiles">';
                                        
                                            <?php 
                                                $sqlq = "SELECT * FROM food_items";
                                                $resultq = mysqli_query($con, $sqlq);
                                                //$num_items = mysqli_num_rows($resultq);
                                                for($i=0; $i<5; $i++){
                                                    $row = mysqli_fetch_array($resultq);
                                                    $pid = $row['purchase_id'];

                                                $sqlq1 = "SELECT cost, item_name FROM food_items WHERE purchase_id = ".$row['purchase_id'];
                                                $result = mysqli_query($con, $sqlq1);
                                                $itemdetails = $result->fetch_assoc();
                                                

                                            echo '
                                            <form>
                                            <div class="col-sm-2 tile" name="itemID" type="submit" value="'.$pid.'" >
                                                  <div class="row image">
                                                        <span><img class="img-responsive" style="width:100%; height: 50%;" src = "'.($row["image_url"]).'"></span>
                                                     <div class = "row desc">
                                                         <p class="title">'.($itemdetails['item_name']).'</p>
                                                         <p class="det">'.($itemdetails['cost']).'</p>
                                                         <p class="det">
                                                         </p>
                                                         <button style="width:240px;margin-left:-17px;" class="btn btn-primary det" type="submit" name="bookID" value="'.$pid.'">View</button>
                                                     </div>
                                                </div>
                                            </div>
                                            </form>'; }
                                            ?>
                                                

                                       
                        
                                        <div class="col-sm-1 blank"></div>
             
                                    </div>
          
                    </div>      

                    <div>
                        <br>
                       <h1 style='color:white;'></h1>";
                            
                                      
                                   
                                        <div class="col-sm-1 blank"></div>';
                            
                                    </div>
                             
                </div>          
            </div>
        </div>   
    </body>
</html>
