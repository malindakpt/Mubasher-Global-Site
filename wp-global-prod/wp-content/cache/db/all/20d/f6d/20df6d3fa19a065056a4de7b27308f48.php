�ǹY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:617:"SELECT t.translation_id, t.element_id, t.language_code, t.source_language_code, t.trid, t.element_type
				    FROM wp_icl_translations t
				JOIN wp_term_taxonomy tax
					ON t.element_id = tax.term_taxonomy_id
						AND t.element_type = CONCAT('tax_', tax.taxonomy)
				    JOIN wp_icl_translations tridt
				      ON tridt.element_type = t.element_type
				      AND tridt.trid = t.trid
				    WHERE  tridt.trid = (SELECT trid FROM wp_icl_translations t
				JOIN wp_term_taxonomy tax
					ON t.element_id = tax.term_taxonomy_id
						AND t.element_type = CONCAT('tax_', tax.taxonomy) WHERE element_id = 6 LIMIT 1)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":6:{s:14:"translation_id";s:3:"127";s:10:"element_id";s:2:"14";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"54";s:12:"element_type";s:12:"tax_nav_menu";}i:1;O:8:"stdClass":6:{s:14:"translation_id";s:3:"127";s:10:"element_id";s:2:"14";s:13:"language_code";s:2:"ar";s:20:"source_language_code";s:2:"en";s:4:"trid";s:2:"54";s:12:"element_type";s:12:"tax_nav_menu";}i:2;O:8:"stdClass":6:{s:14:"translation_id";s:2:"55";s:10:"element_id";s:1:"6";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"54";s:12:"element_type";s:12:"tax_nav_menu";}i:3;O:8:"stdClass":6:{s:14:"translation_id";s:2:"55";s:10:"element_id";s:1:"6";s:13:"language_code";s:2:"en";s:20:"source_language_code";N;s:4:"trid";s:2:"54";s:12:"element_type";s:12:"tax_nav_menu";}}s:8:"col_info";a:6:{i:0;O:8:"stdClass":13:{s:4:"name";s:14:"translation_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:13:"language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:20:"source_language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:4:"trid";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:12:"element_type";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:12;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}