<?php include 'header.php'; ?>

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>HTML 5 Games Baby</h1>
          <p></p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

         <button onclick="doIt()" class="btn btn-secondary">GO GRAY</button>

          <canvas id="js-image" width="900" height="500"></canvas>

         
         

      </div>
    </div></div>
    <!--container-->


        <script type="text/javascript">

      var c = document.querySelector('#js-image');
      var ctx = c.getContext("2d");

      var image = new Image();

      image.onload = function() {
        console.log("Loaded Image")
        ctx.drawImage(image, 0, 0, c.width, c.height);
        //makeGrayScale();
      }
    

      var makePixelGrayScale = function (r,g,b,a) {
        var y = (0.3 * r) + (0.59 * g) + (0.11 * b); 
        return {r:y, g:y, b:y, a:y} 
      }

      function makeGrayScale() {

        var r, g, b, a; 

        var imageData = ctx.getImageData(0,0,960, 540); 
        var numPixels = imageData.data.length /4 ; 
        for ( var i = 0; i < numPixels; i++) {
          r = imageData.data[i * 4 + 0];
          g = imageData.data[i * 4 + 1];
          b = imageData.data[i * 4 + 2];
          a = imageData.data[i * 4 + 3];
          pixel = makePixelGrayScale(r,g,b,a); 
          imageData.data[i * 4 + 0] = pixel.r;
          imageData.data[i * 4 + 1] = pixel.g;
          imageData.data[i * 4 + 2] = pixel.b;
          imageData.data[i * 4 + 3] = pixel.a;
        }

        ctx.putImageData(imageData, 0, 0)

      }

      function doIt() {
        var imageData = ctx.getImageData(0,0, 960, 540);
        var length = imageData.data.length / 4;
        for (var i = 0; i < length; i++){
            imageData.data[i * 4 + 0] = 255 - imageData.data[i * 4 + 0];   //Red
            imageData.data[i * 4 + 1] = 255 - imageData.data[i * 4 + 1];   //Green
            imageData.data[i * 4 + 2] = 255 - imageData.data[i * 4 + 2];   //Blue
        }
        // Comment this line to see original image
        ctx.putImageData(imageData, 0, 0);
      }


      image.src = "corbyn1.jpg";

    </script>

    
  <?php include 'footer-bootstrap.php'; ?>

    <?php include 'footer.php'; ?>





