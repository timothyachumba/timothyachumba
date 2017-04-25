<?php

return function($site, $pages, $page) {

  $projects = $pages->find('projects')->children()->visible();

  return compact('projects');

};
