<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */

// ex: http://yourdomain.com WITH TRAILING SLASH
@$config['base_url'] = "https://" .  $_SERVER['HTTP_HOST'].'/';

// ex: /sub_dir --> http://yourdomain.com/sub_dir/ WITH TRAILING SLASH
$config['url_extension'] = '~agargiulo/project-bricks/';

// leave blank for mod_rewrite.
// otherwise, include trailing slash
$config['index_page'] = '';

