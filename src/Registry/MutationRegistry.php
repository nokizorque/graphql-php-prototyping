<?php

namespace Prototype\GQL\Registry;

class MutationRegistry
{
	private static $createUser;
	private static $createLocation;

	public static function createUser()
	{
		return self::$createUser ?: (self::$createUser = new CreateUserType());
	}

	public static function createLocation()
	{
		return self::$createLocation ?: (self::$createLocation = new CreateLocationType());
	}
}