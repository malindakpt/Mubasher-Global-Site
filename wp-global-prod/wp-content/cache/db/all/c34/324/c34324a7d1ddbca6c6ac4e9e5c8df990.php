�ǹY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:680:"
									 SELECT post_type, post_name
									 FROM wp_posts p
									 LEFT JOIN wp_icl_translations t
										ON t.element_id = p.ID
										 	AND CONCAT('post_', p.post_type) = t.element_type
									 		AND p.post_type  IN ('post','page' ) 
									 WHERE post_name = 'end-user-agreement'  AND post_type IN ('post', 'page', 'attachment')
									 	AND ( post_status = 'publish'
									 	    OR ( post_type = 'attachment'
									 	         AND post_status = 'inherit' ) )
									 	ORDER BY CASE t.language_code WHEN 'en' THEN 3  WHEN 'ar' THEN 1  ELSE 0 END DESC  ,  CASE p.post_type  WHEN 'page' THEN 2  WHEN 'post' THEN 1  ELSE 0 END DESC 
								     LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":2:{s:9:"post_type";s:4:"page";s:9:"post_name";s:18:"end-user-agreement";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:18;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}