  <?php 

  $home_id     = 'option';
  $home_url    = get_option('home');
  $footerInfo  = get_field('footerInfo',$home_id);
  if(get_field('footerBackground',$home_id)) {
    $footerBackground = get_field('footerBackground',$home_id)['sizes']['hd'];
  }else{
    $footerBackground = get_template_directory_uri().'/images/bg-f.jpg';
  }
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  if($custom_logo_id){
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $logo = $logo[0];
  }else{
    $logo = get_template_directory_uri() . '/images/logo.svg';
  }
  $footerNewsletterLabel = get_field('footerNewsletterLabel',$home_id); 
  $footerNewsletterUrl = get_field('footerNewsletterUrl',$home_id); 
  $footerCopy = get_field('footerCopy',$home_id);    

  ?>

<footer class="footer bg-overlay" style="background-image:url('<?php echo $footerBackground; ?>');">
  <div class="footer-top">
    <div class="container-fluid">
      <div class="content-wrap">
        <div class="single-box footer-logo">
          <div class="img-wrap bg-positive" style="background-image:url('<?php echo $logo; ?>');">
            <a href="<?php echo $home_url; ?>"></a>
          </div>
        </div>
        <div class="single-box">
          <?php echo $footerInfo; ?>
        </div>
        <div class="single-box">
          <div class="link">
            <?php if($footerNewsletterLabel): ?>
              <a href="<?php echo $footerNewsletterUrl; ?>" class="btn-1"><?php echo $footerNewsletterLabel; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="bottom-content">
        <div class="content-wrap">
          <div class="single-box">
            <div class="elevation">
              <p><a href="http://www.elevationweb.org/" target="_blank" title="Website design for nonprofits">Web Design</a> by <a href="http://www.elevationweb.org/our-work/" target="_blank" title="Elevation Web"><span>Elevation</span></a></p>
            </div>
          </div>
          <div class="single-box">
            <div class="copy-r">
              <p><?php echo $footerCopy; ?></p> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>

<?php if(is_home()): ?>  

<script>
  var jQ = jQuery.noConflict();

  jQ(document).ready(function(){
   
  jQ('#home-video').get(0).play();

  setTimeout(function() {
    jQ('#home-video').get(0).play();
  },500);

  });

</script>

<script>
var w = window.innerWidth;

if(w > 991){

  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    loop: false,
    centeredSlides: true,
    slidesPerView: 5,
    initialSlide: 2,
    keyboardControl: true,
    mousewheelControl: false,
    lazyLoading: true,
    preventClicks: false,
    preventClicksPropagation: false,
    lazyLoadingInPrevNext: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    coverflow: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 0,
      slideShadows : false,
    }
  });
}else{
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    loop: false,
    centeredSlides: true,
    slidesPerView: 1,
    initialSlide: 2,
    keyboardControl: true,
    mousewheelControl: false,
    lazyLoading: true,
    preventClicks: false,
    preventClicksPropagation: false,
    lazyLoadingInPrevNext: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    coverflow: {
      rotate: 0,
      stretch: 0,
      depth: 250,
      modifier: 0,
      slideShadows : false,
    }
  });
}

</script>  

<?php endif; ?>
  
</body>
</html>