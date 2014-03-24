Miva PHP Provision Tools - /scripts
=========

Misc scripts I made to assist in development


generate_class_from_xml_fragment.php
----

You can generate a class stub from some xml. Simple structure, requires manual cleanup/additions. Outputs to current working directory with <ClassName>.php.

**Usage:**
```
php generate_class_from_xml_fragment.php /path/to/fragment.xml ClassName
php generate_class_from_xml_fragment.php "<XML></XML>" ClassName
```

generate_test_from_xml_fragment.php
----

You can generate a test class stub from some xml. Simple structure, requires manual cleanup/additions. Outputs to current working directory with <ClassName>Test.php.

**Usage:**
```
php generate_test_from_xml_fragment.php /path/to/fragment.xml ClassName
php generate_test_from_xml_fragment.php "<XML></XML>" ClassName
```
