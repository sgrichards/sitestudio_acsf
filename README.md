# Site Studio ACSF

A utility module providing a per-site route for leveraging the database template storage feature released in [v6.3.5](https://sitestudiodocs.acquia.com/6.3/user-guide/version-6-3-5-release-details) of [Acquia Site Studio](https://www.acquia.com/products/drupal-cloud/site-studio).

This is useful (but not limited to) hosting platforms that use a distributed filesystem such as [Acquia Site Factory](https://www.acquia.com/products/drupal-cloud/site-factory) where rapid file read/write operations can lead to unexpected behaviours with Site Studio.


## KeyValue Storage

This module switches Site Studio template storage to the database as opposed to the file system (current default behavior) to improve read/write consistency.

Once enabled you will need to run a full Site Studio rebuild to migrate all templates to the database:

    $ drush cohesion:rebuild

or via the UI at: _/admin/cohesion/developer/rebuild_

_Note: Database utilisation will increase especially during rebuild and sync operations, be aware that using this module
will also increase the size of your database._
