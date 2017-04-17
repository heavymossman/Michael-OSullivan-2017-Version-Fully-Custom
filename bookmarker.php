
  <?php include 'header.php'; ?>

  <body onload="fetchBookmarks()">

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>JS Bookermarker App</h1>
          <p>JS One-page App, storing bookmarks locally</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">


           <div class="jumbotron">
              <h2 class="special">Bookmark Your Favorite Sites</h2>
              <form id="myForm">
                <div class="form-group">
                  <label>Site Name</label>
                  <input type="text" class="form-control" id="siteName" placeholder="Website Name">
                </div>
                <div class="form-group">
                  <label>Site URL</label>
                  <input type="text" class="form-control" id="siteUrl" placeholder="Website URL">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

            <div class="row marketing">
              <div class="col-lg-12">
                <div id="bookmarksResults"></div>
              </div>
            </div>



          
        </div>
      </div>
    </div>
    <!--container-->
 

 <?php include 'footer-bootstrap.php'; ?>
 
    <script src="js/bookmarker.js"></script>

  <?php include 'footer.php'; ?>