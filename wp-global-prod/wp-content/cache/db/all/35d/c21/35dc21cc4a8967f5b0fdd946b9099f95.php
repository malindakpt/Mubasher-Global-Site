���Y<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:374:"
				SELECT t.translation_id, t.language_code, t.element_id, t.source_language_code, t.element_type, NULLIF(t.source_language_code, '') IS NULL AS original 
				, p.post_title, p.post_status
				FROM wp_icl_translations t
					  LEFT JOIN wp_posts p ON t.element_id=p.ID
				WHERE 1  AND ( p.post_status = 'publish' OR p.post_status = 'pending'  )   AND t.trid=121 
				
			";s:11:"last_result";a:2:{i:0;O:8:"stdClass":8:{s:14:"translation_id";s:3:"228";s:13:"language_code";s:2:"ar";s:10:"element_id";s:4:"1190";s:20:"source_language_code";s:2:"en";s:12:"element_type";s:9:"post_page";s:8:"original";s:1:"0";s:10:"post_title";s:27:"سياسة الخصوصية";s:11:"post_status";s:7:"publish";}i:1;O:8:"stdClass":8:{s:14:"translation_id";s:3:"199";s:13:"language_code";s:2:"en";s:10:"element_id";s:4:"1091";s:20:"source_language_code";N;s:12:"element_type";s:9:"post_page";s:8:"original";s:1:"1";s:10:"post_title";s:14:"Privacy Policy";s:11:"post_status";s:7:"publish";}}s:8:"col_info";a:8:{i:0;O:8:"stdClass":13:{s:4:"name";s:14:"translation_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:13:"language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:10:"element_id";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:20:"source_language_code";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"element_type";s:5:"table";s:1:"t";s:3:"def";s:0:"";s:10:"max_length";i:9;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:8:"original";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:27;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}