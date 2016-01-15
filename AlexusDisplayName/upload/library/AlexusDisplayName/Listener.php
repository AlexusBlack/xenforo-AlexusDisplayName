<?php
class AlexusDisplayName_Listener {
	/**
    * Listen to the "init_dependencies" code event.
    *
    * @param XenForo_Dependencies_Abstract $dependencies
    * @param array $data
    */
    public static function init(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        //Get the static variable $helperCallbacks and add a new item in the array.
        XenForo_Template_Helper_Core::$helperCallbacks += array(
            'displaynamehtml' => array('AlexusDisplayName_Helpers', 'helperDisplayNameHtml'),
            'richdisplayname' => array('AlexusDisplayName_Helpers', 'helperRichDisplayName')
        );
        XenForo_Template_Helper_Core::$helperCallbacks['usernamehtml'] = XenForo_Template_Helper_Core::$helperCallbacks['displaynamehtml'];
        XenForo_Template_Helper_Core::$helperCallbacks['richusername'] = XenForo_Template_Helper_Core::$helperCallbacks['richdisplayname'];
    }
}
?>