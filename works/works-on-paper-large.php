<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content= "David Westhead is a professional artist and lecturer living and working in Poole Dorset. Using variations of oil, acrylic and mixed media to create visually stunning abstract works of art" />
<meta name="keywords" content=" Lecturer, artist, Art, Art History, poole art, Dorset, local art, David Westhead, Dave Westhead, David Whitehead, Dave Whitehead, David Westmead, Dave Westmead" />

<title>Works on paper large - David Westhead - Professional Artist and Lecturer</title>  

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/yamm.css" rel="stylesheet">
<link href="../css/wildstyles.css" rel="stylesheet">
<?php include_once("../includes/analyticstracking.php") ?>

<link rel="stylesheet" href="./vendor/Gallery-2.15.0/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="./vendor/Bootstrap-Image-Gallery-3.1.0/css/bootstrap-image-gallery.min.css">
<link rel="stylesheet" href="./css/site.css">


 <script src="./vendor/jquery-1.11.1.min.js"></script>
 <script src="./vendor/bootstrap-3.1.1/js/bootstrap.min.js"></script>
 <script src="./vendor/imagesloaded.pkgd.min.js"></script>
 <script src="./vendor/Gallery-2.15.0/js/jquery.blueimp-gallery.min.js"></script>
 <script src="./vendor/Bootstrap-Image-Gallery-3.1.0/js/bootstrap-image-gallery.min.js"></script>

    <script src="./js/flickr-jquery.js"></script>
 
</head>

<body>
<?php include("../menu/menu.php"); ?>
<div class="titlewrap">
<div class="container">
		<div class="row">
        <div class="col-md-12">
               <h1>Works on paper large</h1>
         </div>
         </div>
</div>
</div>                  

  <div class="container">
		<div class="row">
        <div class="col-md-12">
        
       
        <p>These paintings explore calligraphic symbols to suggest impressions of landscape and domestic interiors. Accidental marks and textures are worked in with more carefully controlled passages. The process is often repeated until the two become fully-integrated. Memory and experimentation generate these images.</p>

        
        <!-- Gallery thumbnails -->
        <div class="gallery">
            <div class="row">
                <div class="col-xs-12 spinner-wrapper">
                    <div class="spinner"></div>
                </div>
                <div class="gallery-container"></div>
            </div>
        </div>
        
        <p>All paintings in this series are 80cm x 60cm and use a variety of mixed-media. <a href="../prices#WorksonPaperLarge">View prices</a>.</p>
           
        
          			<p>Please <a href="../contact">contact me</a> for any additional information.</p>


        <!-- Blueimp gallery -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                Previous
                            </button>
                            <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>
    
    <?php include("../includes/footer.php"); ?>
    
    

<script type="text/javascript">
        $(function() {
            
            // Set blueimp gallery options.
            $.extend(blueimp.Gallery.prototype.options, {
                useBootstrapModal: false,
                hidePageScrollbars: false
            });

            // Engage gallery.
            $('.gallery').flickr({
                apiKey: 'ab88803cf6c11e7ca2917cf4454e49ff',
                photosetId: '72157643401611995'
            });
        });
</script>
    


</body>
</html>