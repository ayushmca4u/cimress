<?php
//error_reporting(0);
// This file is generated by Composer
require_once 'vendor/autoload.php';
$client = new \Github\Client();
//$repositories = $client->api('user')->repositories('ornicar');
//$repos = $client->api('repo')->find('symfony');
$repos = $client->api('repo')->find('symfony', array('language' => 'php'));
if($repos)
{
	try
	{
		foreach($repos as $key => $repo_details)
		{
			foreach($repo_details as $key1 => $repository)
			{
				echo  $repository['type']."==".$repository['url']."\n";
			}
		}
	}
	catch(Exception $e)
	{
		echo  print_r($e);
		echo  "Cound not connect to Gitgub symfony repo or  could not find repo for symfony";
		die;	
	}
}
