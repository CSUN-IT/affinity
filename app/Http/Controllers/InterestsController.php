<?php namespace App\Http\Controllers;

use App\Models\User;

class InterestsController extends Controller 
{
	public function listInterest($type='All')
	{
		$table     =  ['research'=>'App\Models\Research','teaching'=> 'App\Models\Teaching','personal'=>'App\Models\Personal','All'=>'App\Models\Interest'];
		$data 	   =  $table[$type]::all();
		$response = [
			'status'  => app('Illuminate\Http\Response')->status(),
			'success' => count($data) > 0 ? true : false,
			'version' => 'attributes-1.0',
			'type'    => "$type-interest",
		];
		if($response['status'] == 200)
		{
			$response['intrest'] = $data;
		}
		else if($response['status'] != 200)
		{
			$response['messages']['server_error'] = 'We encountered an error on our server.';
		}
		else if($response['success'] == false)
		{
			$response['messages']['data'] = 'We could not find any records.';
		}

		return $response;
	}
}