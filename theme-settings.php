<?php

function bartik_custom_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state)
{
  $form['sample_theme_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Sample Theme Text'),
    '#default_value' => theme_get_setting('sample_theme_text'),
  );
}

