<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "admin":
        break;
    case "site":
        // TODO register all the routes
                
        // append this app's UI folder to the path
        $ui = $f3->get('UI');
        $ui .= ";" . $f3->get('PATH_ROOT') . "vendor/dioscouri/f3-api/src/Api/Site/Views/";
        $f3->set('UI', $ui);
        
        break;
}
?>