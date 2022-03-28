UPDATE dcs.data_rows SET data_type_id = 2, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 1 WHERE id = 12;
UPDATE dcs.data_rows SET data_type_id = 2, field = 'name', type = 'text', display_name = 'Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = null, `order` = 2 WHERE id = 13;
UPDATE dcs.data_rows SET data_type_id = 2, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 3 WHERE id = 14;
UPDATE dcs.data_rows SET data_type_id = 2, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 4 WHERE id = 15;
UPDATE dcs.data_rows SET data_type_id = 3, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 1 WHERE id = 16;
UPDATE dcs.data_rows SET data_type_id = 3, field = 'name', type = 'text', display_name = 'Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = null, `order` = 2 WHERE id = 17;
UPDATE dcs.data_rows SET data_type_id = 3, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 3 WHERE id = 18;
UPDATE dcs.data_rows SET data_type_id = 3, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 4 WHERE id = 19;
UPDATE dcs.data_rows SET data_type_id = 3, field = 'display_name', type = 'text', display_name = 'Display Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = null, `order` = 5 WHERE id = 20;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 22;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'parent_id', type = 'select_dropdown', display_name = 'Parent', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', `order` = 2 WHERE id = 23;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'order', type = 'text', display_name = 'Order', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":1}', `order` = 3 WHERE id = 24;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'name', type = 'text', display_name = 'Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 25;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'slug', type = 'text', display_name = 'Slug', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"slugify":{"origin":"name"}}', `order` = 5 WHERE id = 26;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 27;
UPDATE dcs.data_rows SET data_type_id = 4, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 7 WHERE id = 28;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 29;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'author_id', type = 'text', display_name = 'Author', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 0, `delete` = 1, details = '{}', `order` = 2 WHERE id = 30;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'category_id', type = 'text', display_name = 'Category', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 3 WHERE id = 31;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'title', type = 'text', display_name = 'Title', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 32;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'excerpt', type = 'text_area', display_name = 'Excerpt', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 5 WHERE id = 33;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'body', type = 'rich_text_box', display_name = 'Body', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 6 WHERE id = 34;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'image', type = 'image', display_name = 'Post Image', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', `order` = 7 WHERE id = 35;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'slug', type = 'text', display_name = 'Slug', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:posts,slug"}}', `order` = 8 WHERE id = 36;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'meta_description', type = 'text_area', display_name = 'Meta Description', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 9 WHERE id = 37;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'meta_keywords', type = 'text_area', display_name = 'Meta Keywords', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 10 WHERE id = 38;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'status', type = 'select_dropdown', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}', `order` = 11 WHERE id = 39;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 12 WHERE id = 40;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 13 WHERE id = 41;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'seo_title', type = 'text', display_name = 'SEO Title', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 14 WHERE id = 42;
UPDATE dcs.data_rows SET data_type_id = 5, field = 'featured', type = 'checkbox', display_name = 'Featured', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 15 WHERE id = 43;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 66;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'locale', type = 'text', display_name = 'Locale', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 2 WHERE id = 67;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'name', type = 'text', display_name = 'Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 3 WHERE id = 68;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 4 WHERE id = 69;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 70;
UPDATE dcs.data_rows SET data_type_id = 10, field = 'deleted_at', type = 'timestamp', display_name = 'Deleted At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 71;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 85;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'image', type = 'media_picker', display_name = 'Image', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 2 WHERE id = 86;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'main_text', type = 'text_area', display_name = 'Main Text', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 87;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'banner_text', type = 'text_area', display_name = 'Banner Text', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 4 WHERE id = 88;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'button_text', type = 'text', display_name = 'Button Text', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 5 WHERE id = 89;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'button_link', type = 'text', display_name = 'Button Link', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 6 WHERE id = 90;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'deleted_at', type = 'timestamp', display_name = 'Deleted At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 8 WHERE id = 92;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 9 WHERE id = 93;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 10 WHERE id = 94;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'order', type = 'number', display_name = 'Order', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{"display":{"width":"3"}}', `order` = 7 WHERE id = 104;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 105;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'key', type = 'text', display_name = 'Key', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 3 WHERE id = 107;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'text', type = 'text_area', display_name = 'Text', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 108;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'group', type = 'text', display_name = 'Group', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 2 WHERE id = 132;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 133;
UPDATE dcs.data_rows SET data_type_id = 14, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 134;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 140;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'email', type = 'text', display_name = 'Email', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 2 WHERE id = 141;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'subscribe', type = 'text', display_name = 'Subscribe', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 3 WHERE id = 142;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 1, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 4 WHERE id = 143;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 144;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'lang', type = 'select_dropdown', display_name = 'Lang', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"en","options":{"az":"az","en":"en","ru":"ru"}}', `order` = 7 WHERE id = 146;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'token', type = 'text', display_name = 'Token', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 8 WHERE id = 147;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 172;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'role_id', type = 'text', display_name = 'Role', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 2 WHERE id = 173;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'name', type = 'text', display_name = 'Name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 3 WHERE id = 174;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'email', type = 'text', display_name = 'Email', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 175;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'avatar', type = 'image', display_name = 'Avatar', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 5 WHERE id = 176;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'email_verified_at', type = 'timestamp', display_name = 'Email Verified At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 177;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'password', type = 'password', display_name = 'Password', required = 1, browse = 0, `read` = 0, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 7 WHERE id = 178;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'remember_token', type = 'text', display_name = 'Remember Token', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 8 WHERE id = 179;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'settings', type = 'hidden', display_name = 'Settings', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 9 WHERE id = 180;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 10 WHERE id = 181;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 11 WHERE id = 182;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'user_belongsto_role_relationship', type = 'relationship', display_name = 'Role', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 0, details = '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"categories","pivot":"0","taggable":"0"}', `order` = 12 WHERE id = 183;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'token', type = 'text', display_name = 'Token', required = 0, browse = 0, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 12 WHERE id = 185;
UPDATE dcs.data_rows SET data_type_id = 26, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 188;
UPDATE dcs.data_rows SET data_type_id = 26, field = 'user_id', type = 'number', display_name = 'User Id', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 2 WHERE id = 189;
UPDATE dcs.data_rows SET data_type_id = 26, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 4 WHERE id = 191;
UPDATE dcs.data_rows SET data_type_id = 26, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 192;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 215;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'name', type = 'text', display_name = 'Name', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 216;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'date', type = 'date', display_name = 'Date', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 4 WHERE id = 217;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'content', type = 'rich_text_box', display_name = 'Content', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"6"}}', `order` = 2 WHERE id = 218;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'image', type = 'media_picker', display_name = 'Image', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 11 WHERE id = 219;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 220;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 221;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'excerpt', type = 'text_area', display_name = 'Excerpt', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3","rows":"3"}}', `order` = 7 WHERE id = 222;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'slug', type = 'text', display_name = 'Slug', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"},"slugify":{"origin":"name","forceUpdate":true},"validation":{"rule":"unique:trainings,slug"}}', `order` = 8 WHERE id = 223;
UPDATE dcs.data_rows SET data_type_id = 19, field = 'deleted', type = 'select_dropdown', display_name = 'Deleted', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"false","options":{"true":"true","false":"false"}}', `order` = 6 WHERE id = 226;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 230;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'icon', type = 'text', display_name = 'Icon', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 231;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'title', type = 'text', display_name = 'Title', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 4 WHERE id = 232;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'text', type = 'rich_text_box', display_name = 'Text', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"6"}}', `order` = 2 WHERE id = 233;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'slug', type = 'text', display_name = 'Slug', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{"display":{"width":"3"}}', `order` = 5 WHERE id = 234;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 235;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 7 WHERE id = 236;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'deleted_at', type = 'timestamp', display_name = 'Deleted At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 8 WHERE id = 237;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'order', type = 'text', display_name = 'Order', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 9 WHERE id = 238;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'status', type = 'checkbox', display_name = 'Status', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 11 WHERE id = 239;
UPDATE dcs.data_rows SET data_type_id = 34, field = 'excerpt', type = 'text_area', display_name = 'Excerpt', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 10 WHERE id = 240;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'status', type = 'checkbox', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 9 WHERE id = 241;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'order', type = 'text', display_name = 'Order', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 12 WHERE id = 242;
UPDATE dcs.data_rows SET data_type_id = 12, field = 'status', type = 'checkbox', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 11 WHERE id = 243;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 245;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'icon', type = 'text', display_name = 'Icon', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 2 WHERE id = 246;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'text', type = 'text', display_name = 'Text', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 247;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'value', type = 'text', display_name = 'Value', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 4 WHERE id = 248;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 5 WHERE id = 249;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 250;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'status', type = 'checkbox', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 7 WHERE id = 251;
UPDATE dcs.data_rows SET data_type_id = 35, field = 'order', type = 'text', display_name = 'Order', required = 0, browse = 1, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 8 WHERE id = 252;
UPDATE dcs.data_rows SET data_type_id = 36, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = null, `order` = 1 WHERE id = 253;
UPDATE dcs.data_rows SET data_type_id = 36, field = 'name', type = 'select_dropdown', display_name = 'name', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"facebook","options":{"facebook":"Facebook","instagram":"Instagram","telegram":"Telegram","linkedin":"Linkedin","twitter":"Twitter","google":"Google","vk":"VK","youtube":"Youtube","twitch":"Twitch","odnoklassniki":"Odnoklassniki","skype":"Skype","whatsapp":"Whatsapp","github":"Github","pinterest":"Pinterest"},"display":{"width":"4"}}', `order` = 2 WHERE id = 254;
UPDATE dcs.data_rows SET data_type_id = 36, field = 'link', type = 'text', display_name = 'Link', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"6"}}', `order` = 3 WHERE id = 255;
UPDATE dcs.data_rows SET data_type_id = 36, field = 'status', type = 'checkbox', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 4 WHERE id = 256;
UPDATE dcs.data_rows SET data_type_id = 36, field = 'ordering', type = 'number', display_name = 'Order', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 5 WHERE id = 257;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 260;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'author_id', type = 'text', display_name = 'Author', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 2 WHERE id = 261;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'title', type = 'text', display_name = 'Title', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 262;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'heading', type = 'text', display_name = 'Heading', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 3 WHERE id = 263;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'excerpt', type = 'text_area', display_name = 'Excerpt', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 4 WHERE id = 264;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'body', type = 'rich_text_box', display_name = 'Body', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"5"}}', `order` = 1 WHERE id = 265;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'slug', type = 'text', display_name = 'Slug', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"slugify":{"origin":"title"},"validation":{"rule":"unique:pages,slug"},"display":{"width":"3"}}', `order` = 5 WHERE id = 266;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'meta_description', type = 'text_area', display_name = 'Meta Description', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"5"}}', `order` = 6 WHERE id = 267;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'meta_keywords', type = 'text_area', display_name = 'Meta Keywords', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"5"}}', `order` = 7 WHERE id = 268;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'status', type = 'select_dropdown', display_name = 'Status', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"default":"INACTIVE","options":{"INACTIVE":"DISABLED","ACTIVE":"ACTIVE"},"display":{"width":"2"}}', `order` = 9 WHERE id = 269;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'show_contact', type = 'checkbox', display_name = 'Show Contact Section', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{"display":{"width":"1"}}', `order` = 4 WHERE id = 270;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 10 WHERE id = 271;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 11 WHERE id = 272;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'btnText', type = 'text', display_name = 'Button text', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 12 WHERE id = 273;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'btnColor', type = 'text', display_name = 'Button Color', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 13 WHERE id = 274;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'btnLink', type = 'text', display_name = 'Button Link', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 13 WHERE id = 275;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'image', type = 'image', display_name = 'Page Image', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 2 WHERE id = 276;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'images', type = 'multiple_images', display_name = 'Images', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"5"},"resize":{"width":"800","height":"null"},"quality":"90%","upsize":true}', `order` = 3 WHERE id = 277;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'video', type = 'text', display_name = 'Video', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 8 WHERE id = 278;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'deleted_at', type = 'timestamp', display_name = 'Deleted At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 18 WHERE id = 279;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'key', type = 'text', display_name = 'Key', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 21 WHERE id = 280;
UPDATE dcs.data_rows SET data_type_id = 37, field = 'banner', type = 'media_picker', display_name = 'Banner', required = 0, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"}}', `order` = 22 WHERE id = 281;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'id', type = 'text', display_name = 'Id', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 282;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'detail', type = 'text_area', display_name = 'Detail', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"4","rows":"10"}}', `order` = 2 WHERE id = 283;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'start_time', type = 'timestamp', display_name = 'Start Time', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"2"}}', `order` = 5 WHERE id = 284;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'end_time', type = 'timestamp', display_name = 'End Time', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"2"}}', `order` = 6 WHERE id = 285;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'training_id', type = 'number', display_name = 'Training', required = 1, browse = 0, `read` = 1, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 8 WHERE id = 286;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 10 WHERE id = 287;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 11 WHERE id = 288;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'session_belongsto_training_relationship', type = 'relationship', display_name = 'trainings', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"3"},"model":"App\\\\Models\\\\Training","table":"trainings","type":"belongsTo","column":"training_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}', `order` = 12 WHERE id = 289;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'title', type = 'text', display_name = 'Title', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"5"}}', `order` = 3 WHERE id = 290;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'teacher_id', type = 'text', display_name = 'Teacher Id', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 9 WHERE id = 291;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'persons_count', type = 'text', display_name = 'Persons Count', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"2"}}', `order` = 4 WHERE id = 292;
UPDATE dcs.data_rows SET data_type_id = 24, field = 'surname', type = 'text', display_name = 'Surname', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 293;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'id', type = 'number', display_name = 'ID', required = 1, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 1 WHERE id = 294;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'name', type = 'text', display_name = 'Name', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 3 WHERE id = 296;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'email', type = 'text', display_name = 'Email', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 297;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'avatar', type = 'image', display_name = 'Avatar', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 5 WHERE id = 298;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'email_verified_at', type = 'timestamp', display_name = 'Email Verified At', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 6 WHERE id = 299;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'password', type = 'password', display_name = 'Password', required = 1, browse = 0, `read` = 0, edit = 1, `add` = 1, `delete` = 0, details = '{}', `order` = 7 WHERE id = 300;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'remember_token', type = 'text', display_name = 'Remember Token', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 8 WHERE id = 301;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'settings', type = 'hidden', display_name = 'Settings', required = 0, browse = 0, `read` = 0, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 9 WHERE id = 302;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'created_at', type = 'timestamp', display_name = 'Created At', required = 0, browse = 1, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 10 WHERE id = 303;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'updated_at', type = 'timestamp', display_name = 'Updated At', required = 0, browse = 0, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 11 WHERE id = 304;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'token', type = 'text', display_name = 'Token', required = 0, browse = 0, `read` = 1, edit = 0, `add` = 0, `delete` = 0, details = '{}', `order` = 12 WHERE id = 307;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'profession', type = 'text', display_name = 'Profession', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 14 WHERE id = 309;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'surname', type = 'text', display_name = 'Surname', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 311;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'father', type = 'text', display_name = 'Father', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 4 WHERE id = 312;
UPDATE dcs.data_rows SET data_type_id = 39, field = 'phone', type = 'text', display_name = 'Phone', required = 1, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{}', `order` = 6 WHERE id = 313;
UPDATE dcs.data_rows SET data_type_id = 31, field = 'cert_prefix', type = 'text', display_name = 'Cert Prefix', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"1"}}', `order` = 10 WHERE id = 314;
UPDATE dcs.data_rows SET data_type_id = 38, field = 'cert_expired_at', type = 'timestamp', display_name = 'Cert Expired At', required = 0, browse = 1, `read` = 1, edit = 1, `add` = 1, `delete` = 1, details = '{"display":{"width":"2"}}', `order` = 7 WHERE id = 315;
