<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Poprzednia',
    'label_next' => 'Następna',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
  ),
  'messages' => 
  array (
    'label.id' => 'Id',
    'label.title' => 'Title',
    'label.tags' => 'Tags',
    'title.task_view' => 'Task #%id%',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
