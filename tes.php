
<!DOCTYPE html>
<html>
<head>
  <title>jQuery-cropbox</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1"/>
  <link type="text/css" media="screen" rel="stylesheet" href="jquery.cropbox.css">
  <style type="text/css">
    body {
      font-family : sans-serif;
      font-size   : 13px;
    }
    .results {
      font-family : monospace;
      font-size   : 20px;
    }
  </style>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/responsive-nav/responsive-nav.css" rel="stylesheet">
    <link href="vendor/flexslider/flexslider.css" rel="stylesheet">
    <link href="vendor/eufont/eufont.css" rel="stylesheet">
    <link href="css/gogirl.css" rel="stylesheet">
    <script src="vendor/jquery.js"></script>
    <script src="vendor/jquery-ui.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/hammer.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.6/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.cropbox.js"></script>
  <script type="text/javascript" defer>
    $( function () {
      $( '.cropimage' ).each( function () {
        var image = $(this),
            cropwidth = image.attr('cropwidth'),
            cropheight = image.attr('cropheight'),
            results = image.next('.results' ),
            x       = $('.cropX', results),
            y       = $('.cropY', results),
            w       = $('.cropW', results),
            h       = $('.cropH', results),
            download = results.next('.download').find('a');

          image.cropbox( {width: cropwidth, height: cropheight, showControls: 'auto' } )
            .on('cropbox', function( event, results, img ) {
              x.text( results.cropX );
              y.text( results.cropY );
              w.text( results.cropW );
              h.text( results.cropH );
              download.attr('href', img.getDataURL());
            });
      } );

      $('#select').on('change', function () {
          var size = parseInt(this.value);
          $('.cropimage').each(function () {
            $(this).cropbox({width: size, height: size})
          });
      });

    } );
  </script>
</head>
<body>

  <img class="cropimage" alt="" src="img.jpg" cropwidth="200" cropheight="200"/>
  <div class="results">
    <b>X</b>: <span class="cropX"></span>
    <b>Y</b>: <span class="cropY"></span>
    <b>W</b>: <span class="cropW"></span>
    <b>H</b>: <span class="cropH"></span>
  </div>
  <div class="download">
    <a href="#" download="crop.png">Download</a>
  </div>

  <br/>

  <img class="cropimage" alt="" src="img.jpg" cropwidth="300" cropheight="200"/>
  <div class="results">
    <b>X</b>: <span class="cropX"></span>
    <b>Y</b>: <span class="cropY"></span>
    <b>W</b>: <span class="cropW"></span>
    <b>H</b>: <span class="cropH"></span>
  </div>

  <div class="download">
    <a href="#" download="crop.png">Download</a>
  </div>

  <br/>

  <h4>Change size of every cropbox</h4>

  <select id="select">
    <option value="200" selected>200</option>
    <option value="300">300</option>
  </select>
</body>
