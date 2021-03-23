<?php

namespace Drupal\sitestudio_acsf_keyvalue_storage;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Modifies the Site Studio template storage service.
 */
class SiteStudioKeyValueStorageServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // Set the cohesion.template_storage to the key value storage.
    $container->setAlias('cohesion.template_storage', 'cohesion.template_storage.key_value');
  }

}
