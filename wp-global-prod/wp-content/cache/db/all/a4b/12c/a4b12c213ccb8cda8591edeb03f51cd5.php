���Y<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:266:"
				SELECT ID
				 FROM wp_posts p
	             JOIN wp_icl_translations t
					ON p.ID = t.element_id
						AND t.element_type = CONCAT('post_', p.post_type )  WHERE p.post_type = 'page' AND  p.post_name = 'privacy-policy'
				ORDER BY p.post_parent = 0 DESC
				";s:11:"last_result";a:2:{i:0;O:8:"stdClass":1:{s:2:"ID";s:4:"1091";}i:1;O:8:"stdClass":1:{s:2:"ID";s:4:"1190";}}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:1:"p";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}