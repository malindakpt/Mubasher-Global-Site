�ǹY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:457:"SELECT t.translation_id, t.element_id, t.language_code, t.source_language_code, t.trid, t.element_type
				    FROM wp_icl_translations t
				JOIN wp_posts p
					ON t.element_id = p.ID
						AND t.element_type = CONCAT('post_', p.post_type)
				    JOIN wp_icl_translations tridt
				      ON tridt.element_type = t.element_type
				      AND tridt.trid = t.trid
				    WHERE  tridt.element_id IN (923,924,925,926,927,928,929,931,932,933,934,936,937,1918)";s:11:"last_result";a:27:{i:0;O:8:"stdClass":6:{s:14:"translation_id";s:3:"131";s:10:"element_id";s:3:"923";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"15";s:12:"element_type";s:18:"post_nav_menu_item";}i:1;O:8:"stdClass":6:{s:14:"translation_id";s:2:"15";s:10:"element_id";s:2:"25";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"15";s:12:"element_type";s:18:"post_nav_menu_item";}i:2;O:8:"stdClass":6:{s:14:"translation_id";s:3:"132";s:10:"element_id";s:3:"924";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"36";s:12:"element_type";s:18:"post_nav_menu_item";}i:3;O:8:"stdClass":6:{s:14:"translation_id";s:2:"37";s:10:"element_id";s:2:"61";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"36";s:12:"element_type";s:18:"post_nav_menu_item";}i:4;O:8:"stdClass":6:{s:14:"translation_id";s:3:"133";s:10:"element_id";s:3:"925";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"35";s:12:"element_type";s:18:"post_nav_menu_item";}i:5;O:8:"stdClass":6:{s:14:"translation_id";s:2:"36";s:10:"element_id";s:2:"60";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"35";s:12:"element_type";s:18:"post_nav_menu_item";}i:6;O:8:"stdClass":6:{s:14:"translation_id";s:3:"134";s:10:"element_id";s:3:"926";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"16";s:12:"element_type";s:18:"post_nav_menu_item";}i:7;O:8:"stdClass":6:{s:14:"translation_id";s:2:"16";s:10:"element_id";s:2:"26";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"16";s:12:"element_type";s:18:"post_nav_menu_item";}i:8;O:8:"stdClass":6:{s:14:"translation_id";s:3:"135";s:10:"element_id";s:3:"927";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"18";s:12:"element_type";s:18:"post_nav_menu_item";}i:9;O:8:"stdClass":6:{s:14:"translation_id";s:2:"18";s:10:"element_id";s:2:"29";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"18";s:12:"element_type";s:18:"post_nav_menu_item";}i:10;O:8:"stdClass":6:{s:14:"translation_id";s:3:"136";s:10:"element_id";s:3:"928";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"39";s:12:"element_type";s:18:"post_nav_menu_item";}i:11;O:8:"stdClass":6:{s:14:"translation_id";s:2:"40";s:10:"element_id";s:2:"64";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"39";s:12:"element_type";s:18:"post_nav_menu_item";}i:12;O:8:"stdClass":6:{s:14:"translation_id";s:3:"137";s:10:"element_id";s:3:"929";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"40";s:12:"element_type";s:18:"post_nav_menu_item";}i:13;O:8:"stdClass":6:{s:14:"translation_id";s:2:"41";s:10:"element_id";s:2:"65";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"40";s:12:"element_type";s:18:"post_nav_menu_item";}i:14;O:8:"stdClass":6:{s:14:"translation_id";s:3:"139";s:10:"element_id";s:3:"931";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"19";s:12:"element_type";s:18:"post_nav_menu_item";}i:15;O:8:"stdClass":6:{s:14:"translation_id";s:2:"19";s:10:"element_id";s:2:"30";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"19";s:12:"element_type";s:18:"post_nav_menu_item";}i:16;O:8:"stdClass":6:{s:14:"translation_id";s:3:"140";s:10:"element_id";s:3:"932";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"20";s:12:"element_type";s:18:"post_nav_menu_item";}i:17;O:8:"stdClass":6:{s:14:"translation_id";s:2:"20";s:10:"element_id";s:2:"31";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"20";s:12:"element_type";s:18:"post_nav_menu_item";}i:18;O:8:"stdClass":6:{s:14:"translation_id";s:3:"141";s:10:"element_id";s:3:"933";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"21";s:12:"element_type";s:18:"post_nav_menu_item";}i:19;O:8:"stdClass":6:{s:14:"translation_id";s:2:"21";s:10:"element_id";s:2:"32";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"21";s:12:"element_type";s:18:"post_nav_menu_item";}i:20;O:8:"stdClass":6:{s:14:"translation_id";s:3:"142";s:10:"element_id";s:3:"934";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"41";s:12:"element_type";s:18:"post_nav_menu_item";}i:21;O:8:"stdClass":6:{s:14:"translation_id";s:2:"42";s:10:"element_id";s:2:"66";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"41";s:12:"element_type";s:18:"post_nav_menu_item";}i:22;O:8:"stdClass":6:{s:14:"translation_id";s:3:"144";s:10:"element_id";s:3:"936";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"44";s:12:"element_type";s:18:"post_nav_menu_item";}i:23;O:8:"stdClass":6:{s:14:"translation_id";s:2:"45";s:10:"element_id";s:2:"69";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"44";s:12:"element_type";s:18:"post_nav_menu_item";}i:24;O:8:"stdClass":6:{s:14:"translation_id";s:3:"145";s:10:"element_id";s:3:"937";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"22";s:12:"element_type";s:18:"post_nav_menu_item";}i:25;O:8:"stdClass":6:{s:14:"translation_id";s:2:"22";s:10:"element_id";s:2:"33";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"22";s:12:"element_type";s:18:"post_nav_menu_item";}i:26;O:8:"stdClass":6:{s:14:"translation_id";s:3:"244";s:10:"element_id";s:4:"1918";s:13:"language_code";s:2:"ar";s:20:"source_language_code";N;s:4:"trid";s:3:"133";s:12:"element_type";s:18:"post_nav_menu_item";}}s:8:"col_info";a:6:{i:0;O:8:"stdClass":13:{s:4:"name";s:14:"translation_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:13:"language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:20:"source_language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:4:"trid";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:12:"element_type";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:18;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:27;s:10:"return_val";i:27;}