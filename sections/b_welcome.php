<?php 

  $home_id     = 'option';
  $welcomeText = get_field('welcomeText',$home_id); 

  if(get_sub_field('welcomeImage',$home_id)) {
    $welcomeImage = get_sub_field('welcomeImage',$home_id)['sizes']['hd'];
  }else{
    $welcomeImage = get_template_directory_uri().'/images/bg-b.jpg';
  }  

?>

<section class="b bg-cin" style="background-image:url('<?php echo $welcomeImage; ?>');">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-10">
        <div class="search-wrap">
           <form method="get" id="searchform" class="searchform" action="\">
             <label class="screen-reader-text" for="s">Search for:</label>
             <input type="text" value="" name="s" id="s" placeholder="Search on our Website">
             <input type="submit" id="searchsubmit" value="Search">
           </form>    
        </div>
        <?php echo $welcomeText; ?>
      </div>
    </div>
  </div>          
</section>