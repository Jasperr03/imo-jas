<style>
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
</style>

<div class="topnav container-fluid">
        <div class="logo">
                <img class="artlogo" src="assets/img/creative-pencil-logo-design-vector-removebg-preview.png" alt="creative-pencil-logo">
        </div>
        <div class="topnav-right">
            <a href="index.php">Home</a>
            <a href='gallery.php'>Gallery</a>
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