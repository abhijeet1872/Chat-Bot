<?php session_start();

?>
<!DOCTYPE html>
<html>

<head>

    <style>
        body {
            font-size: 28px;
            background-color: #cccccc;
        }

        #centered {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #1598d4;
            font-family: Papyrus;
            font-size: 20;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(255, 230, 0);
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: rgb(9, 186, 218);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: rgb(247, 178, 30);
        }

        .active {
            background-color: rgb(0, 255, 255);
        }


        h2 {
            position: relative;
            left: 400px;
        }

        #imgh {
            padding: 14px 16px;
        }

        #imgh:hover {
            opacity: 0.5;
            filter: alpha(opacity=50);

        }

        div.backgroundimg {

            background: url("https://lowvelder.co.za/wp-content/uploads/sites/44/2015/10/maths_1.jpg");
            background-color: #cccccc;
            /* Used if the image is unavailable */
            height: 700px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }


        div.topicimg {
            position: relative;
            left: 360px;
        }


        /* Staettrtt*/

        .dropdown {
            float: left;
            overflow: hidden;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .button_container {
            position: relative;
            float: right;
            left: 0;
            right: 0;
            top: 30%;
        }

        .btn {
            border: none;
            display: block;
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
            outline: none;
            overflow: hidden;
            position: relative;
            color: #000000;
            font-weight: 700;
            font-size: 20px;
            background-color: rgb(255, 230, 0);
            padding: 17px 60px;
            margin: 0 auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.20);
        }

           .button_container1 {
            position: relative;
            left: 750px;
            top: 30%;
        }

        .btn1{
            color: #fff !important;
            text-transform: uppercase;
            background: #60a3bc;
            padding: 20px;
            border-radius: 50px;
            display: inline-block;
            border: none;
        }

        .btn1:hover {
            text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
            transition: all 0.4s ease 0s;
}

        .btn span {
            position: relative;
            z-index: 1;
        }

        .btn:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 490%;
            width: 140%;
            background: #78c7d2;
            -webkit-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
            transform: translateX(-98%) translateY(-25%) rotate(45deg);
        }

        .btn:hover:after {
            -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
            transform: translateX(-9%) translateY(-25%) rotate(45deg);
        }

        div.aboutus {
          
        background: url("hhttp://www.collab2.co.za/wp-content/uploads/2017/06/contact-us-background.jpg");
       background-color: #cccccc; /* Used if the image is unavailable */
        height: 300px; /* You must set a specified height */
       background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
       }
       #abthead{
        position:relative;
        left:590px;
         font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px;
        font-weight: bold;
        color: rgb(9, 54, 255);
       }

         #abtimg{padding: 14px 16px;
       position:relative;
        left:600px;}

                  #about{
                font-size: 22px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                 color:rgb(17, 179, 219);
            }
    </style>
</head>

<body>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li class="dropdown"><a href="#Topics">Topics</a>
            <div class="dropdown-content">
                <a href="algebra.php">ALGEBRA </a>
                <a href="probab.php">PROBABLITY</a>
                <a href="triangles.php">TRIANGLE</a>
                <a href="trigo.php">TRIGNOMETRY</a>
                <a href="cal.php">CALCULUS</a>
                <a href="square.php">SQUARE</a>
                <a href="matrix.php">MATRIX</a>
                 <a href="sets.php">SETS</a>
                <a href="profit.php">PROFIT AND LOSS</a>
            </div>
        </li>
        <li><a href="#Practice">Practice</a></li>
        <li class="dropdown"><a href="#References">References</a>
            <div class="dropdown-content">
                <a href="https://byjus.com/class-11-12/">NCERT Class 11-12</a>
                <a href="https://byjus.com/class-6-10/">NCERT Class 6-10</a>
                <a href="https://byjus.com/class-4-5/">NCERT Class 4-5</a>
            </div>
        </li>
        <li><a href="#About">About us</a></li>

        <div class="button_container1">
            <button class="btn1" ><span><?php echo $_SESSION["username"] ?></span></button>
        </div>
       

    </ul>

    <div>
        <img src="https://in.ixl.com/dv3/u3pzp3pH5eb1VeBRLP4kdHCoCrg/yui3/home-page/assets/featured-bg-jan-2019-i18n.jpg"
            alt="math" width="1500" height="500">
        <p id="centered">Mathematics Is More Powerful instrument<br/> of Knowledge than any other that has
            been<br/> bequeated to us by human agency.</p>
    </div>
    <h2 style="font-family:courier;"> Lets Explore Mathematics...</h2>


    <div class="backgroundimg">
        <div class="topicimg">


            <a style="text-decoration:none;" href="algebra.php">
                <img alt="algebra"
                    src="http://study.com/cimages/course-image/glencoe-algebra-1-online-textbook-help_135772_large.jpg"
                    width="200" height="200" id="imgh">

            </a>


            <a style="text-decoration:none;" href="probab.php">
                <img alt="probablity" src="https://img.haikudeck.com/mg/9F5A8501-9AB7-44C0-8C7B-9C34606AA45E.jpg"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="trigo.php">
                <img alt="trignometry" src="https://cdn1.byjus.com/wp-content/uploads/2016/06/Trigonometry.png"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <br />
            <a style="text-decoration:none;" href="cal.php">
                <img alt="calculus"
                    src="https://tse1.mm.bing.net/th?id=OIP.sX59usF4qsjydZJwQQv1BQHaE8&pid=15.1&P=0&w=236&h=158e.jpg"
                    width="200" height="200" id="imgh">
            </a>



            <a style="text-decoration:none;" href="profit.php">
                <img alt="profitandloss"
                    src="https://tse1.mm.bing.net/th?id=OIP.WHImK-jpEG8FLwk6Ns9LJQHaGK&pid=15.1&P=0&w=184&h=154"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="matrix.php">
                <img alt="matrix"
                    src="https://tse1.mm.bing.net/th?id=OIP.nivnoJ1eznNtMJ6Ho_r4VwHaEi&pid=15.1&P=0&w=336&h=207"
                    width="200" height="200" right="400" id="imgh">
            </a>
            <br />
            <a style="text-decoration:none;" href="square.php">
                <img alt="square"
                    src="http://clipart-library.com/img/2008830.jpg"
                    width="200" height="200" id="imgh">
            </a>



            <a style="text-decoration:none;" href="triangles.php">
                <img alt="triangle"
                    src="https://image.spreadshirtmedia.com/image-server/v1/compositions/1003656859/views/1,width=650,height=650,appearanceId=506,version=1545139415/this-shirt-playfully-showcases-colorful-dancing-characters-and-provides-a-great-way-for-kids-to-have-fun-learning-about-the-triangle.jpg"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="sets.php">
                <img alt="Sets"
                    src="http://static1.squarespace.com/static/599c51f6be6594b5357b8951/t/599c57e849fc2b0c167af010/1503418344826/SetTheory_Logo_black.jpg?format=1500w"
                    width="200" height="200" right="400" id="imgh">
            </a>
        </div>
    </div>
  <div id="About" style="background:url('http://www.collab2.co.za/wp-content/uploads/2017/06/contact-us-background.jpg')">
        
      
  <h3 id="abthead">ABOUT US</h3>


<img src="https://nptel.ac.in/LocalChapter/Assets/college_logo/846_logo.png"
                   width="150" height="150" id="abtimg">
  <h3 style="position: relative; left:340px;  color:rgb(243, 228, 12); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">DAYANANDA SAGAR COLLEGE OF ENGINEERING</h3>

    <span style="position: relative; left:120px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ARJIT SIRMORYA  </span>
      <span style="position: relative; left:210px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ABHIJEET KUMAR </span>
        <span style="position: relative; left:280px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ANANY MURARI </span>
          <span style="position: relative; left:350px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><a href="chandan.html">CHANDAN KUMAR</a></span><br/>
	
    <span style="position: relative; left:150px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1DS16CS020 </span>
      <span style="position: relative; left:290px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1DS16CS004</span>
        <span style="position: relative; left:430px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1DS16CS017 </span>
          <span style="position: relative; left:550px; color:rgb(18, 241, 241); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1DS16CS030</span>
  
</div>




</body>

</html>