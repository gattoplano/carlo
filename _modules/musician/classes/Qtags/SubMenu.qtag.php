<?php
namespace Quanta\Qtags;

/**
 * Submenu.
 */
class SubMenu extends ListNodes {

  /**
   * Render the Qtag.
   *
   * @return string
   *   The rendered Qtag.
   */
  public function render() {
    $this->attributes['asc'] = 'true';
    $this->attributes['editable'] = 'false';
    $this->attributes['sortable'] = 'true';
    $this->attributes['sort'] = 'weight';
    $this->attributes['filter'] = 'path@!contatti';
    $this->attributes['grid_id'] = 'submenu';
    $this->attributes['grid'] = '{VARIABLE:list_sub_nodes}';
    $this->attributes['grid_list_item'] = '{VARIABLE:list_sub_nodes_items}';

    return parent::render();
  }
}
