<?php
namespace Quanta\Qtags;

/**
 * Tracks of a Record.
 */
class Tracks extends Qtag {

  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {
    $this->attributes['sort'] = 'weight';
    $this->attributes['list_html_tag'] = 'ol';
    $this->attributes['editable'] = FALSE;
    $this->attributes['asc'] = TRUE;

    $dirlist = new \Quanta\Common\DirList($this->env,  $this->getTarget(), 'tracks', $this->attributes, 'musician');
    $records = $dirlist->render();
    return $records;
  }
}
