<?php

/**
 * Read users from file
 * @param array $config
 * @throws Exception
 * @return array: $users | FALSE
 */
function readUsers($config)
{	
	$userFilename = $config['production']['userFilename'];
	try
	{
		if (!file_exists($userFilename)) {
			throw new Exception('Imposible Leer Usuarios.');
		}
		$users = readDataFromFile($userFilename);
		return $users;
	}
	catch (Exception $e)
	{
	    echo 'Excepcion capturada: ',  $e->getMessage(), "\n";
	    return FALSE;
	}
}

/**
 * Read id user from file
 * @param integer $id
 * @param array $config
 * @return array $user
 */
function readUser($id, $config)
{
	$userFilename = $config['production']['userFilename'];
	
	$dataArray = readDataFromFile($userFilename);
	$user = $dataArray[$_GET['id']];
	
	return $user;
}

/**
 * Delete user from file
 * @param integer $id
 * @param array $config
 * @return void
 */
function deleteUser($id, $config)
{
	$userFilename = $config['production']['userFilename'];
	$uploadDir = $config['production']['uploadDirectory'];
	
	$user = readUser($id, $config);
	$users = readUsers($config);
	deleteFile($user[11], $uploadDir);
	unset($users[$_POST['id']]);
	writeDataToFile($userFilename, $users, TRUE);
	
	return;
}