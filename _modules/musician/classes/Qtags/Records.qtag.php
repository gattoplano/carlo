<?php
namespace Quanta\Qtags;

/**
 * Schede alimenti di Godelicious.
 */
class Records extends Qtag {

  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {
    $this->attributes['sort'] = 'weight';
    $this->attributes['editable'] = FALSE;
    $this->attributes['asc'] = TRUE;
    $this->attributes['sort'] = 'time';
    $dirlist = new \Quanta\Common\DirList($this->env,  $this->getTarget(), 'records', $this->attributes, 'musician');
    $records = $dirlist->render();
    return $records;
  }
}
