<?php

include './view/head.php';

include './view/meta.php';
include './view/link_js_libraries.php';
include './view/link_css_libraries.php';
include './view/title.php';

include './view/head_to_body.php';

if (isMobile()){
	include './controller/body_mobile.php';
} else {
	include './controller/body_fix.php';
}

include './view/link_js_libraries_end.php';

include './view/end.php';

function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}