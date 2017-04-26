<?php
class wp_materialize_navwalker_mobile extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        /* Check for children */
        $children = get_posts(array(
          'post_type' => 'nav_menu_item',
          'nopaging' => true,
          'numberposts' => 1,
          'meta_key' => '_menu_item_menu_item_parent',
          'meta_value' => $item->ID
          ));

        //Single menu item
        if (!$depth && !$children) {
            $output .= sprintf('<li><a href="%s">%s</a></li>', $item->url, $item->title);
        }

        //Parent menu item
        if (!$depth && $children) {
            $output .= sprintf('<li class="no-padding"><ul class="collapsible collapsible-accordion"><li><a class="collapsible-header waves-effect waves-yellow accent-2">%s</a>', $item->title);
        }

        if ($depth && !$children) {
            if ($this->isFirst($item)) {
                $output .= '<div class="collapsible-body"><ul>';
            }
            $output .= sprintf('<li><a href="%s">%s</a></li>', $item->url, $item->title);
            if ($this->isLast($item)) {
                $output .= '</li></ul></div></ul></li>';
            }
        }
    }

    protected function isLast($post) {
        return $this->sort($post, 'DESC');
    }

    protected function isFirst($post) {
        return $this->sort($post);
    }

    protected function sort($post, $order = 'ASC')
    {
        $children = get_posts(array(
          'post_type' => 'nav_menu_item',
          'nopaging' => true,
          'numberposts' => 1,
          'order' => $order,
          'orderby' => 'menu_order',
          'meta_key' => '_menu_item_menu_item_parent',
          'meta_value' => $post->menu_item_parent,
          ));

        $firstChild = array_shift($children);

        return $firstChild->ID == $post->ID;
    }
}
function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    die;
}
