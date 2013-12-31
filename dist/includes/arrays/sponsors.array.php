<?php

$sponsors = array(
  0 => array(
    'name'      => 'Spiral Engineering',
    'shortcut'  => 'spiral',
    'job'       => 'A service they provided',
    'url'       => 'spiralengineering.co.za',
    'image-type'=> 'png'
    ),
  1 => array(
    'name'      => 'Kingfisher',
    'shortcut'  => 'kingfisher',
    'job'       => 'A service they provided',
    'url'       => 'kingfisher.co.za',
    'image-type'=> 'png'
    ),
  2 => array(
    'name'      => 'Marnu Lombard',
    'shortcut'  => 'marnulombard',
    'job'       => 'Logo design, design and development of the website',
    'url'       => 'marnulombard.com',
    'image-type'=> 'svg'
    ),
  3 => array(
    'name'      => 'PM Africa',
    'shortcut'  => 'pmafrica',
    'job'       => 'A service they provided',
    'url'       => 'pmafrica.com',
    'image-type'=> 'png'
    )

);

$sponsorHTML;
$sponsorIMGHTML;

foreach ($sponsors as $key => $sponsor) {
  $name = $sponsor['name'];
  $shortcut = $sponsor['shortcut'];
  $job = $sponsor['job'];
  $url = $sponsor['url'];
  $ext = $sponsor['image-type'];

  $sponsorIMGHTML .= <<<SPONSORIMGHTML
    <span class="grid__item one-quarter sponsors_img">
      <img src="img/sponsors/{$shortcut}.{$ext}" alt="{$name}" class="max center">
    </span>
SPONSORIMGHTML;

  $sponsorHTML .= <<<SPONSORHTML
    <figure class="one-quarter grid__item">
      <figcaption class=text__center>
        <h5>$name</h5>
        <p>
          $job <br>
          <a href="http://{$url}">$url</a>
        </p>
      </figcaption>
    </figure>
SPONSORHTML;
} // foreach ($sponsors as $key => $sponsor)
?>
