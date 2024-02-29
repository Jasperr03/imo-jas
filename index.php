<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imo-jas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/img/creative-pencil-logo-design-vector-removebg-preview.png" rel="icon">
 </head>

<Style>
   .topnav{
    overflow: hidden;
    background-color: #404be3;
   }

   .topnav a{
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    margin-top: 15;
   }

   .topnav-right{
    float: right;
   }

   .logo {
    padding-left: 10;
    text-align: center;
    float: left;
    margin-top: 10;
   }

   .artlogo {
    height: 100px;
    width: 100px;
   }

   .row{
    background-color: #d8f1f3;
    padding-top: 10;
    display: flex;
   }

   .article-div{
    padding-top: 10;
    
    
    width: auto;
   }

   .artist{
    height: 350
   }
   .artist2{
    height: 250
    
   }


   .row2{
    background-color: #d8f1f3;
    padding-top: 10;
    display: flex;
    overflow: auto;
   }

   .row2 p{
    padding-top: 5;
    padding-left: 5;
    text-align: justify;
    
   }

   .dropdown {
        float: right;
        padding-right: 50;
    }

    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    padding-right: 10;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}
    
    .dropdown:hover .dropdown-content {
    display:block;
    padding-right: 10;
    }

    .dropdown:hover .dropbtn {
    background-color: #3e8e41;
    }
</Style>
<body>
    <!--Header Navigation-->
    <div class="topnav container-fluid">
        <div class="logo">
                <img class="artlogo" src="assets/img/creative-pencil-logo-design-vector-removebg-preview.png" alt="creative-pencil-logo">
        </div>
        <div class="topnav-right">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About</a>   
        </div>
    </div>
    <div>
    <div class="dropdown">
            <button class="dropbtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
            </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div> 
    </div>
    <!--Main Content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
                <div class="col-sm-4">
                <h3>Column 3</h3>        
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>

    <div class="container mt-5">
        <div class="row2">
           <div class="col-sm-4">
                <h1 style="padding-left: 10">Art 1</h1>
                <img class="artist2" style="padding-left: 10;" src="assets/img/close-up-artist-sketch.jpg" alt="close-up-artist-sketch.jpg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
           </div>
           <div class="col-sm-4">
                <h1 style="padding-left: 10">Art 2</h1>
                <img class="artist2" style="padding-left: 10;" src="assets/img/close-up-artist-sketch.jpg" alt="close-up-artist-sketch.jpg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
           </div>
           <div class="col-sm-4">
                <h1 style="padding-left: 10">Art 3</h1>
                <img class="artist2" style="padding-left: 10;" src="assets/img/close-up-artist-sketch.jpg" alt="close-up-artist-sketch.jpg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
           </div>
        </div>
    </div>
    </div>
</body>
</html>