
<body>

<div class="topnav" id="myTopnav">
    <a href="./index.php" target="_blank" class="active">Home</a>
    <a href="https://join.teamtreehouse.com/techdegree/" target="_blank">Techdegree</a>
    <a href="https://teamtreehouse.com/tracks" target="_blank">Tracks</a>
    <a href="https://teamtreehouse.com/library" target="_blank">Library</a>
    <a href="https://teamtreehouse.com/community" target="_blank">Community</a>
    <a href="https://teamtreehouse.com/support" target="_blank">Support</a>

    <a href="./trial.php" target="_blank" class="right">Free Trial</a>
    <a href="https://teamtreehouse.com/signin?return_to=%2F" target="_blank" class="right">Sign In</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>


<div class="container">
    <form action="/action_page.php">

        <div class="row">
            <h2 style="text-align:center">Login with Social Media or Manually</h2>
            <div class="vl">
                <span class="vl-innertext">or</span>
            </div>

            <div class="col">
                <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a>
                <a href="#" class="google btn">
                    <i class="fa fa-google fa-fw"></i> Login with Google+
                </a>
            </div>

            <div class="col">
                <div class="hide-md-lg">
                    <p>Or sign in manually:</p>
                </div>

                <input type="email" name="EmailAdr" placeholder="@ Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </div>

        </div>

    </form>

</div>

<div class="bottom-container">
    <div class="row">
        <div class="col">
            <a href="#" style="color:white" class="btn">Sign up</a>
        </div>
        <div class="col">
            <a href="#" style="color:white" class="btn">Forgot password?</a>
        </div>
    </div>
</div>

