�ǹY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:408:"SELECT t.translation_id, t.element_id, t.language_code, t.source_language_code, t.trid, t.element_type
				    FROM wp_icl_translations t
				JOIN wp_posts p
					ON t.element_id = p.ID
						AND t.element_type = CONCAT('post_', p.post_type)
				    JOIN wp_icl_translations tridt
				      ON tridt.element_type = t.element_type
				      AND tridt.trid = t.trid
				    WHERE  tridt.element_id IN (954,955)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":6:{s:14:"translation_id";s:3:"162";s:10:"element_id";s:3:"954";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"71";s:12:"element_type";s:18:"post_nav_menu_item";}i:1;O:8:"stdClass":6:{s:14:"translation_id";s:2:"72";s:10:"element_id";s:2:"92";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"71";s:12:"element_type";s:18:"post_nav_menu_item";}i:2;O:8:"stdClass":6:{s:14:"translation_id";s:3:"163";s:10:"element_id";s:3:"955";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"72";s:12:"element_type";s:18:"post_nav_menu_item";}i:3;O:8:"stdClass":6:{s:14:"translation_id";s:2:"73";s:10:"element_id";s:2:"93";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"72";s:12:"element_type";s:18:"post_nav_menu_item";}}s:8:"col_info";a:6:{i:0;O:8:"stdClass":13:{s:4:"name";s:14:"translation_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:13:"language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:20:"source_language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:4:"trid";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:12:"element_type";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:18;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}