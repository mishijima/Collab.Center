<?php

class FileHelper {

	protected static $tempPath;

	public static function removeFile($fileLocation)
	{
		if(file_exists($fileLocation))
		{
			@unlink($fileLocation);
		}
	}

	public static function validateTempPath()
	{
		if(!isset(self::$tempPath) || empty(self::$tempPath))
		{
			self::$tempPath = public_path() . DIRECTORY_SEPARATOR . 'temp';
		}

		if(!is_dir(self::$tempPath))
		{
			mkdir(self::$tempPath, 0777, TRUE);
		}
		elseif(!is_writable(self::$tempPath))
		{
			throw new Exception('The specified temp path is not writable');
		}
	}

  public static function setTempPath($path)
	{
		self::$tempPath = $path;
	}

	public static function getTempPath()
	{
		return self::$tempPath;
	}
}