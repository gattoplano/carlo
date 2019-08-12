<?php
namespace Quanta\Qtags;

/**
 * Video musicali.
 */
class Videos extends Qtag {

  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {
    $this->attributes['sort'] = 'time';
    $dirlist = new \Quanta\Common\DirList($this->env,  $this->getTarget(), 'videos', $this->attributes, 'musician');
    $records = $dirlist->render();
    return $records;
  }
}
