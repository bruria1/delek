USE CASE
--------
You have a hierarchically structured taxonomy (tree, nested children, etc.), 
and you want to populate a term field with the correct path of nested terms.
Especially useful if you have duplicate term names in different places.

USAGE
-----
Takes a string of hierarchical taxonomy terms (with possible multiple hierarchies) and returns the correct TIDs.
Imports to only one vocabulary.
Returns all TIDs in the hierarchical path.
You must import to a term reference field.  The correct vocabulary is set from the target term reference field.

Does not create new taxonomy terms. See * below for more info.

Works correctly when terms share a name at different points in a taxonomy hierarchy.
Will not work if terms at the same level under a parent term share the same name.

Multiple hierarchies:
On the Feeds Mapping UI, you can configure two different separators: one to separate different hierarchies, 
and one to separate terms within a hierarchy.
Default is pipe "|" to separate hierarchies, and greater than ">" to separate terms.
Do not use feeds tamper explode; custom explosion is built in and can be configured on the mapping UI.

Example taxonomy structure (within one vocabulary):
 	fruit (tid 1)
 		red (tid 3)
 			apple (tid 7)
 			tomato (tid 8)
 		yellow (tid 4)
 			banana (tid 9)
	vegetables (tid 2)
 		red (tid 5)
 			tomato (tid 10)
 		yellow (tid 6)
 			squash (tid 11)

Example data from whatever your source is:
	fruit>red>tomato|vegetables>red>tomato

This mapper would return the following tids for the example data:
  1,3,7,2,5,10

* Does not create taxonomy terms.
Would need to create a feeds processor plugin, ex: "class FeedsHierarchicalTermProcessor extends FeedsTermProcessor {...}"
 	Could use feeds/plugins/FeedsTermProcessor.inc as an example.
 	https://drupal.org/node/622700
 	http://drupalcontrib.org/api/drupal/contributions!feeds!feeds.api.php/7

If your site has a language set and this plugin is not working, change language in CONFIGURATION section of feeds_taxonomy_hierarchy_set_target.


DEPENDENCIES
------------
Feeds
Taxonomy


INSTALLATION
------------
Same as any other module.


ATTRIBUTION
-----------
Based off of Sandbox Project Feeds Taxonomy Hierarchy
https://drupal.org/sandbox/manarth/1540722
http://drupalcode.org/sandbox/manarth/1540722.git/commit/1c78304e2cd6a9dc8d54c95dcde642a9d1cf11e2
Marcus Deglos


SPONSORSHIP
-----------
Sponsored by Pixeldust Interactive 
http://www.pixeldust.net/
