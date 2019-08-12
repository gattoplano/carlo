<?php
namespace Quanta\Qtags;

/**
 * Attributo JSON.
 */
class JsonAttribute extends Qtag {
  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {
    $node = \Quanta\Common\NodeFactory::loadOrCurrent($this->env, $this->getTarget());
    $attr = $node->getAttributeJSON($this->getAttribute('name'));
    if (!empty($this->getAttribute('decode'))) {
      $attr = str_replace('&colon;', ':', $attr);
    }
    return $attr;
  }
}
