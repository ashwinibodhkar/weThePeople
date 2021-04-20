<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('title'); ?> - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php echo $__env->make('auth.authLayout.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('customcss'); ?>
  
</head>

<body>
<?php echo $__env->make('auth.authLayout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container" >
              <div class="carousel-content" >
                
                <div class="carousel-text text-left ">
                  <h2 style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.  </h2>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item " style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container" >
              <div class="carousel-content" >
                
                <div class="carousel-text text-left ">
                  <h2 style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.  </h2>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item " style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container" >
              <div class="carousel-content" >
                
                <div class="carousel-text text-left ">
                  <h2 style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.  </h2>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Hero -->

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('auth.authLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php echo $__env->make('auth.authLayout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('customjs'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\weThePeople\wepeople\resources\views/auth/authLayout/mainlayout.blade.php ENDPATH**/ ?>