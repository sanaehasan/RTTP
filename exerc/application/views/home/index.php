<html>
        <head>
                <title>Test 0.1</title>
               <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*body styling*/
body{
        font-family: arial;
       
}    
/*header styling*/
.logo {
    
    width: 100%;
    margin-top: 30px;
   
} 
/*banner styling*/
.banner{
    margin-top: -30px;
    background-image: url('../img/banner-large.jpg');
    background-size: 100% 100%;
    width: 100%;
   
    height: 50%;  
}
.banner-centent{
    width: 35%;
    font-size: 35px;
    color: white;
    margin-left:2%;
    
}
.sous-paraghraph{
    font-size: 20px;
    font-style: italic;
}
/*signup form*/
.signup ,.about,.gov,.part,.help{
    
   
    height: 12%;
    width: 100%;
    font-size: 30px;
    color: white;
    padding-top: 20px;
    
}
.signup{
    padding-top: 0.5%;
    margin-top: 0.5%; 
    background-color: #ff8e0a;
}
.about{
   
    background-color: #009EB9;
    margin-top:-16px;
    
}
.gov{
     background-color: #1FACBA;
}
.part{
    background-color: #3FAED6;
}
.help{
    background-color: #53C0E9;
}
.signup-text{
    margin-bottom:0.5%; 
    width: 100%;
    
}
.signup-tri{
  width: 0; 
  height: 0; 
  border-left: 40px solid transparent;
  border-right: 40px solid transparent;
  
  border-top: 40px solid #ff8e0a;  
}
.signup-form{
    background-color: #FFEEDA;
    visibility: hidden;
    display: none;
    
}
.form-centent{
    margin-left:2%;
    
    
}
h2{
    color :#ff8e0a;
   
}
.signup-content-title ,.donate-title{
    color:#ff8e0a;  
    font-size: 30px;
}
.signup-content-text ,.donate-text{
     font-size: 25px;
     color: #455560;
}
.row1, .row2{
   height: 6%;
   width: 90%;
   border: 0px;
}
ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.form-elemets-r1,.form-elemets-r2{
    width: 45%;
    display: inline-block;
 
    
}
.form-elemets-r2{
     position: absolute;
     margin-left: 10%;
}

.wrapper-form{
    width: 100%;
    padding-bottom: 5%;
    
}
.row1-list>li,.row2-list>li{
    margin-top: 3%;
}
/*form buttons*/
.form-submit,.donate-submit{
   
    font-size: 20px;
    background-image: url('../img/icon-arrow.png');
    background-repeat: no-repeat;
    background-position-x: 160px;
    background-position-y: 23px;
    font-size: 25px;
    margin-top: 5%;
   
}
.support-submit,.form-submit,.donate-submit{
    
    background-color: #ff8e0a; 
    border: none;
    color: white;
    padding: 20px 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  
}
label{
   font-size: 20px;
    color: #455560; 
}
textarea{
    height: 150px;
    width: 90%;
    border: 0px;
}
.donate{
   
   background-color: #FFE3C2;
   margin-top: -16px;
   padding-top: 20px;
   padding-left: 2%;
   padding-bottom: 2%;
   visibility: hidden;
   display: none;
}
hr {
  border:none;
  border-top:2px dotted #009EB9;;
  color:#fff;
  background-color:#fff;
  height:2px;
  width:100%;
  margin-top: 20px
}
.support{
    margin-top: 30px;
   
    float: right;
    display:inline;
    
   
}
.support-submit{
       font-size: 16px;
       
       
}

/*copyright style*/
.copy{
    width: 100%;
    float: right;
    font-size: 12px;
    color: #455560;
}

    

.copy  ul li {
   float:left;
   margin-left: 5px;
}
.copy p {
    float: right;
}
@media only screen and (max-width: 568px) and (min-width: 320px)
 {
.banner{
          background-image: url('../img/banner-small_1.jpg');
      }
.banner-centent{
     width: 60%;
    font-size: 20px;
    
}
.sous-paraghraph{
    font-size: 12px;
   
}
.signup ,.about,.gov,.part,.help{
    font-size: 20px;
}
.signup-content-title ,.donate-title{
     
    font-size: 20px;
}
.signup-content-text ,.donate-text{
     font-size: 16px;
    
}
.form-elemets-r1,.form-elemets-r2{
    width: 90%;
}
.form-elemets-r2{
    position: relative;
    margin-left: 2%;
}
}
@media only screen and (max-width: 1024px) and (min-width: 600px)
{
     .banner-centent{
    width: 60%;
    font-size: 25px;
    
}
.sous-paraghraph{
    font-size: 18px;
   
}
.signup ,.about,.gov,.part,.help{
    font-size: 30px;
}
.signup-content-title ,.donate-title{
     
    font-size: 20px;
}
.signup-content-text ,.donate-text{
     font-size: 20px;
    
}
}
@media only screen and (max-width: 1280px) and (min-width: 800px)
{
.banner-centent{
     width: 35%;
    font-size: 30px;
    
}
.sous-paraghraph{
    font-size: 20px;
   
}
.signup ,.about,.gov,.part,.help{
    font-size: 30px;
}
.signup-content-title ,.donate-title{
     
    font-size: 20px;
}
.signup-content-text ,.donate-text{
     font-size: 20px;
    
}
}
</style>

        </head>
        <body>

            <!-- logo div -->
            <div class="logo" align="center">    
                <img alt="logo" src=<?php echo "../img/logo.png" ?>  />
            </div>
            <hr>
            <!--  banner div -->
            <div class="banner">
              
                <div class="banner-centent"> 
                    <p>Join the national movement to combat body image anxiety and help everyone in the 
                        UK enjoy a healthy and positive
                        attitude to their body.
                    </p>
                    <p class="sous-paraghraph">
                        The Campaign for Body Con dence launches this autumn. Learn more here and sign up 
                        now to be a part of the movement for change.
                    </p>
                </div>
            </div>
            
            <!-- sign up div -->
            <div class="signup" align="center">
                <div class="signup-text"  >Sign up</div>
                <image class="signup-plus" src="../img/icon-plus_1.png" id="form-plus"/>   
            </div>
            
            <div  class="signup-form" align="center" id="signup-form">
            <div class="signup-tri">        
            </div>
            <div align="left" class="form-centent" >
                    <span class="signup-content-title">Sign up</span>
                    <article class="signup-content-text">
                    <p>Enter your contact details here to become part of the Body Confidence Community when the campaign
                    launches in the autumn. 
                    </p>
                    <p>
                     Your details will not be shared with any third parties and we will only contact you about the Campaign for
                     Body Confidence. We’re sorry, but we’re not yet able to respond to any enquiries. 
                    </p>
                    <p>
                        Please enter your details below:
                    </p>
                    </article>
                    
                    <!--sign up form elements-->
                    <form>
                        <div class="wrapper-form">
                        <div class="form-elemets-r1">
                        <ul class="row1-list">
                            <li><label for="firstname">First name</label></li>
                            <li> <input type="text" name="firstname" class="row1"/></li>
                            <li><label for="lastname">Last name</label></li>
                            <li><input type="text" name="lastname" class="row1"/></li>
                            <li><label for="email">email</label></li>
                            <li><input type="email" name="email" class="row1"/></li>
                            <li><label for="question1">  Why are you interested in The Campaign for Body Confidence? </label></li>
                            <li><textarea name="question1" class="row1-text"></textarea ></li>
                        </ul>
                        </div>
                        <div class="form-elemets-r2">
                        <ul class="row2-list">
                            <li><label>Where did you hear about us?</label></li>
                            <li><input type="radio" name="reference" value="Web" /><label for="reference"> Website/ Search engine</label> </li>
                            <li><input type="radio" name="reference" value="Web" /><label for="reference"> Magazine/ Press</label></li>
                            <li><input type="radio" name="reference" value="Web" /><label for="reference">  Friend or family</label></li>
                            <li><input type="radio" name="reference" value="Web" /><label for="reference">  Other (Please specify below)</label></li>
                            <li><textarea name="question2" class="row2-text"></textarea ></li>
                            <li><input type="submit" value="Submit" name="Submit" class="form-submit" /></li>
                        </ul>
                        </div>
                        </div>
                            

                    </form>
            </div>
                
            </div>
            
            <!-- donate button section -->
            <div class="donate" id="donate-form">
                    <span class="donate-title"> Make a donation</span>
                    <p class="donate-text">Please click below if you would like to make a donation or start raising money for the Campaign for Body
                    Confidence. </p>
                    <form> <input type="submit" value="Donate" name="Submit" class="donate-submit" /></form>
            </div>
            <!-- about section -->
            <div class="about" align="center">
                <div class="about-text">About</div>
                <image class="about-plus" src="../img/icon-plus_1.png"/>   
            </div>
            <!-- government section -->
            <div class="gov" align="center">
                <div class="gov-text">Government</div>
                <image class="gov-plus" src="../img/icon-plus_1.png"/>   
            </div>
            <!-- help section -->
            <div class="help" align="center">
                <div class="help-text">Help & Resources</div>
                <image class="help-plus" src="../img/icon-plus_1.png"/>   
            </div>
            <!-- partners section -->
             <div class="part" align="center">
                <div class="part-text">Partners</div>
                <image class="part-plus" src="../img/icon-plus_1.png"/>   
            </div>
            <!-- footer section -->
            <footer>
            <div class="support">
                <form><input type="submit" value="Support the campaign" name="Submit" class="support-submit" /></form>
            </div>
           </footer>
            <!-- copyright section -->
            <div class="copy">
                <ul class="copy-list"><li><em> &copy; body confidence 2017</em></li>
                    <li>|</li>
                    <li><a>Sitemap</a></li>
                    <li>|</li>
                    <li><a>Site Design By Wildwest</a></li>
                </ul>
                <p>The Campaign for Body Confidence is not responsible for the content of external sites</p>
            </div>
<script type="text/javascript">
     document.getElementById('form-plus').addEventListener('click', function (e) {
     var x = document.getElementById('signup-form');
      var y = document.getElementById('donate-form');
    if (x.style.display === 'none') {
        x.style.visibility = 'visible';
        x.style.display = 'block';
        y.style.visibility = 'visible';
        y.style.display = 'block';
    } else {
        x.style.visibility = 'hidden';
        x.style.display = 'none';
        y.style.visibility = 'hidden';
        y.style.display = 'none';
    }
  });
   
      
   
</script>
        </body>
</html>