Description: fix typo
 Wrong attribute name in constructor
Author: Olivier Berger <obergix@debian.org>

---
The information above should follow the Patch Tagging Guidelines, please
checkout http://dep.debian.net/deps/dep3/ to learn about the format. Here
are templates for supplementary fields that you might want to add:

Origin: <vendor|upstream|other>, <url of original patch>
Bug: <url in upstream bugtracker>
Bug-Debian: http://bugs.debian.org/<bugnumber>
Bug-Ubuntu: https://launchpad.net/bugs/<bugnumber>
Forwarded: <no|not-needed|url proving that it has been forwarded>
Reviewed-By: <name and email of someone who approved the patch>
Last-Update: <YYYY-MM-DD>

--- php-graphite-1.5.orig/Graphite.php
+++ php-graphite-1.5/Graphite.php
@@ -47,7 +47,7 @@ class Graphite
 
 		$this->loaded = array();
 		$this->debug = false;
-		$this->arc2Config = null;
+		$this->arc2config = null;
 
 		$this->labelRelations = array( 
 			"skos:prefLabel", "rdfs:label", "foaf:name", "dct:title", "dc:title", "sioc:name" );
