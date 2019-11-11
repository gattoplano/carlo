<?php
namespace Quanta\Common;

/**
 * Implements hook_shadow_[FORM_ID].
 *
 * @param Environment $env
 *   The Environment.
 *
 * @param $vars
 *   An array of variables.
 */
function musician_shadow_video_form(Environment $env, &$vars) {
  $vars['shadow']->addTab('Video', file_get_contents($env->getModulePath('musician') . '/tpl/video_form.inc'), 2);
}


/**
 * Implements hook_shadow_[FORM_ID].
 *
 * @param Environment $env
 *   The Environment.
 *
 * @param $vars
 *   An array of variables.
 */
function musician_shadow_disco_form(Environment $env, &$vars) {
  $vars['shadow']->addTab('Video', file_get_contents($env->getModulePath('musician') . '/tpl/disco_form.inc'), 2);
}

/**
 * Implements hook_node_presave().
 *
 * @param Environment $env
 *   The Environment.
 *
 * @param $vars
 *   An array of variables.
 */
function musician_node_presave($env, $vars) {
  $musician_fields = array(
    'video',
  );
  // Cycle musician fields.
  foreach ($musician_fields as $field) {
    if (!empty($vars['data'][$field]) && $vars['data'][$field] != \Quanta\Qtags\FormItem::INPUT_EMPTY_VALUE) {
      $vars['node']->json->{$field} = $vars['data'][$field];
    }
    elseif (!empty($vars['data'][$field]) && $vars['data'][$field] == \Quanta\Qtags\FormItem::INPUT_EMPTY_VALUE) {
      $vars['node']->json->{$field} = '';
    }
  }
}
