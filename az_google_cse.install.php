<?php

/**
 * @file
 * Install, update and uninstall functions for az_google_cse module.
 */

/**
 * Implements hook_install().
 *
 * Perform actions to set up the site for this module.
 *
 * @see system_install()
 */
function az_google_cse_install() {
    $config_factory = \Drupal::configFactory();
    $config = $config_factory->getEditable('block.block.az_barrio_offcanvas_searchform.settings');
    $config->set('page_id', 'google_cse_search');
    $config->save(TRUE);

    $config = $config_factory->getEditable('bblock.block.az_barrio_search.settings');
    $config->set('page_id', 'google_cse_search');
    $config->save(TRUE);
}
