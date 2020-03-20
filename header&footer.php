<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <script src="https://kit.fontawesome.com/1c8d8e89d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,423;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,423;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>



<body>
<style>

  /********************* styling Footer**************************************************************************/

  .wraper-lev{
    width: 80%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;    

    }
    .header-logo-lev a:first-child img{
    height: 2.5rem;
    width: 10rem;
    }
    .header-logo-lev a:nth-child(2) img{
    display: none;
    }
    .header-list-lev{
    display: flex;
    justify-content: flex-end;

    }
    .header-list-lev ul{    
    display: flex;
    justify-content: flex-end;
    align-content: end;
    align-items: center;
    }
    .header-list-lev li{

    display: flex;
    justify-content: flex-end;    
    list-style-type: none;
    text-align: center;
    box-sizing: border-box;
    }
    #gui_nav_bar{
    width: 100%;
    height: 5rem;
    background-color: rgb(255, 255, 255);
    position: fixed;
    display: flex;
    align-items: center;

    }
    .gui_nav_bar_trial{
    border: 2px solid #75daad;
    border-radius: .3rem;

    }
    .gui_nav_bar_trial{
    color: #75daad !important;
    background-color: #fff;
    transition: all .6s;
    }
    .header-list-lev li a {
    padding: 10px;
    color: rgb(149, 149, 149);
    text-decoration: none;
    font-weight: 500; 
    transition: all .3s ;
    outline: none;
    }
    .gui_nav_ul li a:hover{
    color: #1b262c;
    }
    .gui_nav_bar_trial:hover{
    background-color: #75daad;
    color: #fff !important;
    }



  footer{
    background-color: #f3f3f3;
    width: 100%;
    height: 20rem;
    display: flex;
    }
    .part1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 30%;
    }
    .logo-footer{
    width: 12rem;
    display: flex;
    justify-content: center;   
    }
    .logo-footer img{
    width: 100%;
    height: auto;
    }
    .copyright P{
    font-size: 1.2rem;
    color: #999;
    letter-spacing: .15rem;
    }


                /*footer part 2--------*/
    .part2{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    width: 40%;
    }
    .footer-lists, .social-list{
    list-style: none;
    margin: 0rem;
    padding: 0rem;
    }
    .footer-lists-items{
    padding: .1rem;
    margin: .2rem .4rem;
    }
    .footer-lists-items a{
    text-decoration: none;
    color: #999;
    font-size: 1.3rem;
    transition: color .5s;
    cursor: pointer;

    } 
    .footer-lists-items a:hover{
    color: #222;
    }
        /*end of footer part 2-----*/
        /*footer  part 3------*/

    .part3 {
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .social-list{
    display: flex;
    }
    .social-list li a{
    font-size: 2rem;
    padding-left: .9rem;
    color: #222;
    transition: all .5s;
    }
    .social-list li:hover a{ 
    color: rgb(14, 146, 10);
    }
        /*end of footer part 3------*/

@media screen and (max-width:960px){
   

    /**nav bar***/ 

    .wraper-lev{
        justify-content: space-between;
    }

    /*****toggle  styling****/

    .header-logo-lev a:first-child img{
        display: none;
    }
    .header-logo-lev a:last-child img{
        display:inline-block ;
        width: 2.5rem;
    }
    .menu-icon-lev{
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }
    .menu-icon-lev input{
        display: flex;
        width: 40px;
        height: 32px;
        position: absolute;
        cursor: pointer;
        opacity: 0;
        z-index: 2;
    }
    .line1-menu , .line2-menu , .line3-menu{
        display: flex;
        width: 29px;
        height: 2px;
        margin-bottom: 5px;
        position: relative;
        background: #111111;
        border-radius: 3px;
        z-index: 2;
        transform-origin: 5px 0px;
        transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
            background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
            opacity 0.55s ease;
    }
    #menu{
        flex-direction: column;
        justify-content: start;
        position: absolute;
        top: 4rem;
        right: -.1rem;
        z-index: 1;
        opacity: 0;
        width: 100%;
        height: 50rem;
        padding: 5rem 1rem 1rem 1rem;
        transition: all .6S;
        background-color: rgb(255, 255, 255);
    }
    #menu li{
        padding: 2rem;
        border-bottom: 1px solid #999;
    }
footer{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        height: 30REM;
    }
    .part1, .part2, .part3 {
        padding-bottom: 2rem ;
        display: flex;
        flex-direction: column;
        width: 100%;

        
    }
    .footer-lists-items a{
        text-decoration: none;
        color: #999;
        font-size: 1rem;
    } 

    .footer-lists{
        width :100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    }
    /************* grid system media **************/

    @media screen and (max-width: 960px){

.mob0{ display: none; }
.mob1{ width: 8.33%; box-sizing: border-box;}
.mob2{ width: 16.66%; box-sizing: border-box; }
.mob3{ width: 25%; box-sizing: border-box;}
.mob4{ width: 33.33%; box-sizing: border-box;}
.mob5{ width: 41.66%; box-sizing: border-box;}
.mob6{ width: 50%; box-sizing: border-box; }
.mob7{ width: 58.33%; box-sizing: border-box;}
.mob8{ width: 66.66%; box-sizing: border-box; }
.mob9{ width: 75%; box-sizing: border-box;}
.mob10{ width: 83.33%; box-sizing: border-box; }
.mob11{ width: 91.66%; box-sizing: border-box; }
.mob12{ width: 100%; box-sizing: border-box; }
}
@media screen and (min-width: 960px){

.dsk0{ display: none; }
.dsk1{ width: 8.33%;  box-sizing: border-box; }
.dsk2{ width: 16.66%;  box-sizing: border-box;  }
.dsk3{ width: 25%;  box-sizing: border-box; }
.dsk4{ width: 33.33%;  box-sizing: border-box; }
.dsk5{ width: 41.66%;  box-sizing: border-box; }
.dsk6{ width: 50%;  box-sizing: border-box; }
.dsk7{ width: 58.33%;  box-sizing: border-box; }
.dsk8{ width: 66.66%;  box-sizing: border-box; }
.dsk9{ width: 75%;  box-sizing: border-box; }
.dsk10{ width: 83.33%;  box-sizing: border-box; }
.dsk11{ width: 91.66%;  box-sizing: border-box; }
.dsk12{ width: 100%;  box-sizing: border-box; }
}
/*************End of grid system media **************/
</style>

<header>

    <!--start navbar-->
    <nav id="gui_nav_bar">
        <!-- container of nav-->
        <div class="wraper-lev">
            <!--menu toggle-->
            <div class="menu-icon-lev" id="toggleMenuButton" onclick ="burger-menu">
                <!--<input type="checkbox" />-->
                <div class="line1-menu"></div>
                <div class="line2-menu"></div>
                <div class="line3-menu"></div>
            </div>
            <!--end menu toggle-->
            <!-- page logo-->
            <div class="header-logo-lev dsk3">
                <a class="dsk-logo" href="index.php"><img src="https://cdn.freelogovectors.net/wp-content/uploads/2016/12/treehouse-logo.png" alt="veev"></a>
                <a class="mob-logo" href="index.php"><img src="https://webhostingforstudents.com/wp-content/uploads/2014/08/Treehouse-Logo.png" alt="tgvev"></a>
            </div>   
            <!--end page logo-->
            <!-- navigation lists-->
            <div class="header-list-lev dsk7 ">  
                <ul id="menu" class="gui_nav_ul">
                    <li class="first-nav-lev"><a href="https://teamtreehouse.com/techdegree">Techdegree</a></li>
                    <li class="first-nav-lev"><a href="team.index.php">Team</a></li>
                    <li class="third-nav-lev"><a href="signin.php">Sign in</a></li>
                </ul>
                <ul>
                    <li><a class="gui_nav_bar_trial" href="">Free trial</a></li>
                </ul>
            </div>
            <!-- end navigation list-->
        </div>
        <!--end container of nav-->    
    </nav>
</header>
    <!--end of nav-->


     <!---->
     <footer>
        <!--footer part 1 -->
            <div class="part1">
                <div class="logo-footer">
                    <img src="https://cdnifyblog.a.cdnify.io/wp-content/uploads/2014/01/Treehouse-Logo.png" alt="threehouse">
                </div>
                <div class="copyright">
                    <p>&copy;Treehouse Island, Inc.</p>
                </div>
            </div>
        <!--end of footer part 1 -->
        <!--footer part 2-->
            <div class="part2">
                <ul class="footer-lists">
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/about" class="footer-lists-links">About</a></li>
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/jobs" class="footer-lists-links">Creers</a></li>
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/terms" class="footer-lists-links">Terms</a></li>
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/privacy" class="footer-lists-links">Privacy</a></li>
                </ul>
                <ul class="footer-lists">
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/support" class="footer-lists-links">Contact</a></li>
                    <li class="footer-lists-items"><a href="https://blog.teamtreehouse.com/?_ga=2.61778218.762863192.1583781198-645364046.1583781198" class="footer-lists-links">Blog</a></li>
                    <li class="footer-lists-items"><a href="https://teamtreehouse.com/affiliate-program" class="footer-lists-links">Affiliate Program</a></li>
                    <li class="footer-lists-items"><a href="https://join.teamtreehouse.com/talentpath/?_ga=2.61778218.762863192.1583781198-645364046.1583781198" class="footer-lists-links">TalentPath</a></li>
                </ul>
            </div>
            <!--end of footer part 2-->
            <!--footer part 3-->
             <div class="part3">
                 <ul class="social-list">
                    <li><a class="social-item" href="https://fr-fr.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="social-item" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="social-item" href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                    <li><a class="social-item" href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="social-item" href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
                 </ul>
             </div>       
            <!--end of footer part 2-->
    
    
        </footer>
        <!---->

        <script>

            function burgerMenu() {
                var menu = document.getElementById("menu");
                if (menu.style.opacity == 0) {
                    menu.style.opacity = 1;
                } else {
                    menu.style.opacity = 0;
                }
            }

       
        /*function closeMenu{
            var menu = document.getElementById("menu");
            menu.style.opacity = O;

        }*/

        //we gonna catch the selected element (aka menu);
        // by using some javascript methods :)
        // 'n we store it into a variable called toggleMenuButton'
        var btn = document.getElementById("toggleMenuButton");

// then, we add some event listeners on it (in order to catch user events like "click")
// when we click on the selected button, it' s gonna call the burgermenu function, that's what we call a "callback function".
        
        btn.addEventListener("click", burgerMenu);
        //btn.addEventListener("click", closeMenu)
        //btn.removeEventListener("click", burgerMenu);
        
    </script>

</body>
</html>

    