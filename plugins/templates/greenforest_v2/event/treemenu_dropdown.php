<?php

use Sunlight\Page\Page;
use Sunlight\Router;

return function (array $args) {
    // toggleable link
    if ($args['page']['node_depth'] > 0) {
        $args['classes'][] = 'dropdown';

        // custom link for dropdown
        if ($args['url'] === null) {
            if ($args['page']['type'] == Page::LINK) {
                $url = _e($args['page']['link_url'] ?? '');
            } else {
                $url = Router::page($args['page']['id'], $args['page']['slug']);
            }
        }

        if ($args['page']['type'] == Page::LINK && $args['page']['link_new_window']) {
            $args['attrs'] .= ' target="_blank"';
        }
        $args['attrs'].=' class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"';

        $link = '<a href="' . _e($url) . "\"{$args['attrs']}>{$args['page']['title']}</a>";

        $args['output'] .= $link;
    }

    // items
    if($args['page']['node_level'] > 0) {
        $args['classes'][] = 'dropdown-item';
    }
};