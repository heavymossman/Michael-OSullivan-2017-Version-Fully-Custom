<?php include 'header.php'; ?>

    <style type="text/css">
        
        * {box-sizing:border-box;}
body {background-color: #CCC;}

.bgimg {
    position:fixed;
    top: 0;
    left: 0;
    width:100%;
    z-index:-1;
    opacity:1;
}

.greeting {
    color:black;
    text-shadow: 1px 1px 3px rgba(255,255,255, .5);
    text-align: center;
}

.wikipedia-container {
    float:right;
    width:290px;
    padding:10px;
    margin-right: 10px;
    background-color: rgba(255,255,255,0.7);
}

.nytimes-container {
    padding: 10px;
    margin-right:300px;
    background-color: rgba(255,255,255,0.7);
}

.article-list {
    margin: 0;
    padding: 0;
}

.article {
    list-style-type: none;
    padding:10px;
    border-top: 1px solid #CCC;
}
.article:first-child {
    border-top:none;
}


    </style>

    <form id="form-container" class="form-container">
        <label for="street">Street: </label><input type="text" id="street" value="">
        <label for="city">City: </label><input type="text" id="city" value="">
        <button id="submit-btn">Submit</button>
    </form>

    <hr>

    <h2 id="greeting" class="greeting">Where do you want to live?</h2>


    <div class="wikipedia-container">
        <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
        <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
    </div>


    <div class="nytimes-container">
        <h3 id="nytimes-header">New York Times Articles</h3>
        <ul id="nytimes-articles" class="article-list">What's going on in your new city? Enter an address and hit submit and the NY Times will tell you here!</ul>
    </div>






    <script src="js/libs/jquery.min.js"></script>
    <script src="js/script.js"></script>

  <?php include 'footer.php'; ?>