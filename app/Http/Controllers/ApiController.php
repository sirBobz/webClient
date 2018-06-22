<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log, Exception;

class ApiController extends Controller
{
	private $stringSort_Url;
	private $isvalidString_Url;
	private $pascalSort_Url;


    public function __construct()
    {
    	$this->stringSort_Url = "http://localhost:8080/api/v1/string-sort";
    	$this->isvalidString_Url = "http://localhost:8080/api//v1/isvalid-string";
    	$this->pascalSort_Url = "http://localhost:8080/api//v1/pascal-sort";
    }



    public function stringSort(Request $request)
    {
        $data = json_encode(array('string' => $request->string));

        $this->sendRequest($data, $url);     
    }


    public function pascalSort(Request $request)
    {
    	$data = json_encode(array('index' => $request->index));
    
    	$this->sendRequest($data, $url);    
    }


    public function isvalidString(Request $request)
    {
    	$data = json_encode(array('string' => $request->string));
    
    	$this->sendRequest($data, $url);    
    }



    public function sendRequest($data, $url)
    {
    	try 
    	  {
 
			// Prepare new cURL resource
			$ch = curl_init('$url');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			 
			// Set HTTP Header for POST request 
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			 
			// Submit the POST request
			echo $result = curl_exec($ch);
			 
			// Close cURL session handle
			curl_close($ch);

    	  } 
    	catch (Exception $e) 
    	  {
    		 Log::error($e);
    	  }
    }
}
