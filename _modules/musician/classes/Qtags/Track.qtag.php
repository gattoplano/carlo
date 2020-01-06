<?php
namespace Quanta\Qtags;

/**
 * Tracks of a Record.
 */
class Track extends Qtag {

  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {

    $node = \Quanta\Common\NodeFactory::load($this->env, $this->getTarget());
    return $node->getBody();
  }
}
