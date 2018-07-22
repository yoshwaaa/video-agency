<?php 
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


function portfolioContent($params = array()) {
	// default parameters
  extract(shortcode_atts(array(
    'title' => 'WIFI LIGHT SWITCH',
    'client'  => 'Santos Creative',
    'description' => '',
    'listitem1' => '',
    'listitem2' => '',
    'listitem3' => '',
    'listitem4' => '',
    'videosource' => 'LightSwitch.mp4',
    'imagesource' => ''
  ), $params));
  if ($description != '') {
    $portfolioContent = "<div class='hero' style='background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)),url($imagesource); background-position: 50%;'>
  <h1>$title</h1>
  <h2>Client: <span>$client</span></h2>
</div>
<div class='description'>
  <h2><span>-</span>Description</h2>
  <p>$description</p>
  <ul>
      <li>$listitem1</li>
      <li>$listitem2</li>
      <li>$listitem3</li>
      <li>$listitem4</li>
  </ul>
</div>
<div class='video' id='videoBox'>
  <video id='video' controls>
      <source src='$videosource'>
  </video>
</div>";
  } else {
    $portfolioContent = "<div class='hero' style='background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)),url($imagesource); background-position: 50%;'>
  <h1>$title</h1>
  <h2>Client: <span>$client</span></h2>
</div>
<div class='video' id='videoBox'>
  <video id='video' controls>
      <source src='$videosource'>
  </video>
</div>";
  }

  return $portfolioContent;
}

add_shortcode('portfoliocontent', 'portfolioContent');

function portfolioContent2($params = array()) {
	// default parameters
  extract(shortcode_atts(array(
    'title' => 'WIFI LIGHT SWITCH',
    'client'  => 'Santos Creative',
    'description' => 'I attended full sail university and earned my bachelor degree of science in computer animation, graduating in September of 2015. Shortly after graduation, I behan a 3-month internship at full sail university with Eileen Middleton. I then started freelance work for a company called BCBH Technology Services, working on a few projects for the past year. I am now looking forward to my next...I attended full sail university and earned my bachelor degree of science in computer animation, graduating in September of 2015. Shortly after graduation, I behan a 3-month internship at full sail university with Eileen Middleton. I then started freelance work for a company called BCBH Technology Services, working on a few projects for the past year. I am now looking forward to my next...',
    'listitem1' => '3D Animation',
    'listitem2' => 'Art Direction',
    'listitem3' => 'Scripting',
    'listitem4' => 'Character Modeling',
    'videosource' => 'LightSwitch.mp4',
    'imagesource' => ''
  ), $params));

  $portfolioContent2 = "<div class='heroVideo'>
  <h1>$title</h1>
  <h2>Client: <span>$client</span></h2>
            <video id='video' controls>
                <source src='$videosource'>
            </video>
            <div id='videoOverlay'></div>
</div>
<div class='description'>
  <h2><span>-</span>Description</h2>
  <p>$description</p>
  <ul>
      <li>$listitem1</li>
      <li>$listitem2</li>
      <li>$listitem3</li>
      <li>$listitem4</li>
  </ul>
</div>";

  return $portfolioContent2;
}

add_shortcode('portfoliocontent2', 'portfolioContent2');


include('custom-shortcodes.php');

?>