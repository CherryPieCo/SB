<?php
namespace common\services;

/**
* GoogleOAuth2Service
*/
class GoogleOAuth2Service extends \nodge\eauth\services\GoogleOAuth2Service
{
	protected $scopes = [
		self::SCOPE_USERINFO_PROFILE,
		self::SCOPE_PROFILE,
		self::SCOPE_EMAIL,
	];

	protected function fetchAttributes()
	{
		$info = $this->makeSignedRequest('https://www.googleapis.com/oauth2/v1/userinfo');

		$this->attributes['id'] = $info['id'];
		$this->attributes['name'] = $info['name'];
		$this->attributes['username'] = $info['username'];
		$this->attributes['email'] = $info['email'];

		if (!empty($info['link'])) {
			$this->attributes['url'] = $info['link'];
		}

		/*if (!empty($info['gender']))
			$this->attributes['gender'] = $info['gender'] == 'male' ? 'M' : 'F';
		
		if (!empty($info['picture']))
			$this->attributes['photo'] = $info['picture'];
		
		$info['given_name']; // first name
		$info['family_name']; // last name
		$info['birthday']; // format: 0000-00-00
		$info['locale']; // format: en*/
	}
}