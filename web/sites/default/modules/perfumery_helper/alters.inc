<?php

  function perfumery_helper_form_user_login_block_alter(&$form, &$form_state){
    $form['name']['#title'] = 'Nombre de usuario';
    $form['pass']['#title'] = 'Contraseña';
    unset($form['links']['#markup']);
  }