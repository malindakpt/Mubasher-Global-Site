²Ç¹Y<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:344:"
			SELECT
				s.id,
				st.status,
				s.domain_name_context_md5 AS ctx ,
				st.value AS translated,
				s.value AS original,
				s.gettext_context
			FROM wp_icl_strings s
			LEFT JOIN wp_icl_string_translations st
				ON s.id=st.string_id
					AND st.language='ar'
					AND s.language!='ar'
			WHERE s.context = 'WP'
			 LIMIT 1000 OFFSET 0";s:11:"last_result";a:1:{i:0;O:8:"stdClass":6:{s:2:"id";s:1:"1";s:6:"status";N;s:3:"ctx";s:32:"5ff0887b4c486c0329311e8d30610d58";s:10:"translated";N;s:8:"original";s:14:"Mubasher Trade";s:15:"gettext_context";s:0:"";}}s:8:"col_info";a:6:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"id";s:5:"table";s:1:"s";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:6:"status";s:5:"table";s:2:"st";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:3:"ctx";s:5:"table";s:1:"s";s:3:"def";s:0:"";s:10:"max_length";i:32;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:1;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:10:"translated";s:5:"table";s:2:"st";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:8:"original";s:5:"table";s:1:"s";s:3:"def";s:0:"";s:10:"max_length";i:14;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:15:"gettext_context";s:5:"table";s:1:"s";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}