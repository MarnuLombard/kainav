<?php

$projects = array(
  0 => array(
    'name'      => 'Harbour Predator',
    'shortcut'  => 'harbour_predator',
    'year'      => '2013',
    'caption'   => 'Short description of the project',
    'url'       => 'harbour-predator-research-project'
  ),
  1 => array(
    'name'      => 'Verreaux’s Eagle Project',
    'shortcut'  => 'black_eagle_project',
    'year'      => '2013',
    'caption'   => 'Short description of the project',
    'url'       => 'verreauxs-eagle-project'
  ),
  2 => array(
    'name'      => 'Verreaux’s Eagle Proposal',
    'shortcut'  => 'black_eagle_proposal',
    'year'      => '2013',
    'caption'   => 'Short description of the project',
    'url'       => 'verreauxs-eagle-proposal'
  )
);

$projectHTML;

foreach ($projects as $key => $project) {
  $name     = $project['name'];
  $shortcut = $project['shortcut'];
  $year     = $project['year'];
  $caption  = $project['caption'];
  $url      = $project['url'];


  $projectHTML .= <<<projectHTML
  <div class="grid__item one-third extra-padding">
  <figure class="thumbnail--wrapper">
    <a class="thumbnail--link {$shortcut}" href="/projects/posts/{$url}">
      <figcaption class="thumbnail--caption">
        <p><strong class="delta">
          $name
        </strong>
        <br>
          $caption
        </p>
      </figcaption>
      <img src="img/projects/{$year}/{$shortcut}_thumb.jpg" class="thumbnail--image center" alt="{$name}">
    </a>
  </figure>
  </div>
projectHTML;
}// foreach ($projects as $key => $project)
?>
