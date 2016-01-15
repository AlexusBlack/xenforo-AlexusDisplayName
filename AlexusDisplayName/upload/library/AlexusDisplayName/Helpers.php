<?php
class AlexusDisplayName_Helpers {
	public static function helperDisplayNameHtml(array $user, $username = '', $rich = false, array $attributes = array()) {

		$userFieldModel = XenForo_Model::create('XenForo_Model_UserField');
		$values = $userFieldModel->getUserFieldValues($user['user_id']);
		$DisplayName = $values['AlexusDisplayName'];

		if($DisplayName != "") {
			$user['username'] = $DisplayName;
		}

		return XenForo_Template_Helper_Core::helperUserNameHtml($user, $username, $rich, $attributes);
	}

	public static function helperRichDisplayName(array $user, $usernameHtml = '') {
		$userFieldModel = XenForo_Model::create('XenForo_Model_UserField');
		$values = $userFieldModel->getUserFieldValues($user['user_id']);
		$DisplayName = $values['AlexusDisplayName'];

		if($DisplayName != "") {
			$user['username'] = $DisplayName;
		}

		return XenForo_Template_Helper_Core::helperRichUserName($user, $usernameHtml);
	}
}

?>