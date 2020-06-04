<?php
  class Template {
    function show($tpl) {
      extract((array) $this);

      include($tpl);
    }
  }

  if ($_SERVER['REQUEST_URI'] != '/') {
    header('Location: /');
    return;
  ;}

  $tmpl = new Template();

  $tmpl->show(__DIR__ . '/inc/index/index-content.html');

  // print($_SERVER['REQUEST_URI']);
