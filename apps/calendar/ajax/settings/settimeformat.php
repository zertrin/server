<?php
/**
 * Copyright (c) 2011 Georg Ehrke <ownclouddev at georgswebsite dot de>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */
 
OC_JSON::checkLoggedIn();
if(isset($_POST["timeformat"])){
	OC_Preferences::setValue(OCP\USER::getUser(), 'calendar', 'timeformat', $_POST["timeformat"]);
	OC_JSON::success();
}else{
	OC_JSON::error();
}
?> 
 
