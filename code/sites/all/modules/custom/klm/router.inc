<?php
function router()
{
    $path = request_path();
    switch ($path) {
        case 'brief-view':
            $page = array(
                '#markup' => theme('brief-view', array()),
            );
            break;
        case 'artifact-view':
            $page = array(
                '#markup' => theme('artifact-view', array()),
            );
            break;
        default:
            $page = array(
                '#markup' => "<div>Hello, world</div>",
            );
            break;
    }
    return $page;
}