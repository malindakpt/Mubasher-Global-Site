�ǹY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:354:"	SELECT t.element_id, tax.term_id, tax.taxonomy
													 FROM wp_icl_translations t
				JOIN wp_term_taxonomy tax
					ON t.element_id = tax.term_taxonomy_id
						AND t.element_type = CONCAT('tax_', tax.taxonomy)
													 JOIN wp_terms terms
													  ON terms.term_id = tax.term_id
													 WHERE tax.term_id != tax.term_taxonomy_id";s:11:"last_result";a:0:{}s:8:"col_info";a:3:{i:0;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:7:"term_id";s:5:"table";s:3:"tax";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:8:"taxonomy";s:5:"table";s:3:"tax";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}