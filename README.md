# Site Studio ACSF

Adds optimsations to ensure Site Studio operates efficiently with the Acquia Site Factory hosting platform.

## KeyValue Storage

This module switches cohesion template storage to the database as opposed to the file system (current default behavior),
this is to mitigate any performance limitations that may exist as a result of utlilising a distributed filesystem.



_Note: Database utilisation will increase especially during rebuild and sync operations, be aware that using this module
will also increase the size of your database._
