
    <?php include 'header.php'; ?>



    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Youtube Custom API Search Engine</h1>
          <p>A simple fully custom Youtube Search Engine with API feed </p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          
        <h2>Polsear Search</h2>
        <p>Show all the videos from any Youtube Channel instantly</p>

          <div class="row">

            <div class="col-lg-9">
              <form id="search-form" name="search-form" onsubmit="return search()">
                <div class="input-group fieldcontainer">
                  <input type="search" class="search-field" placeholder="Search for..." id="query">
                  <span class="input-group-btn">
                    <button class="btn btn-danger btn-lg" type="submit" name="search-btn" id="search-btn">Go!</button>
                  </span>
                </div>
              </form>
            </div>
          </div>

         

          <div id="results" class="py-2">


          </div>


          <div id="buttons"></div>


      </div>
    </div></div>

  <?php include 'footer-bootstrap.php'; ?>
 
  <script src="js/youtubesearch.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


   


    <script type="text/javascript">
      $(document).ready(function() {
        $(".various").fancybox({
          maxWidth  : 800,
          maxHeight : 600,
          fitToView : false,
          width   : '70%',
          height    : '70%',
          autoSize  : false,
          closeClick  : false,
          openEffect  : 'none',
          closeEffect : 'none'
        });
      });
    </script>


     <?php include 'footer.php'; ?>