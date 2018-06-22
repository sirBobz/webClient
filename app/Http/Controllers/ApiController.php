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
    	try 
    	{
    		$data = json_encode(array('string' => $request->String));
            $url = $this->stringSort_Url;

            $this->sendRequest($data, $url);   
    		
    	} catch (Exception $e) {
    		Log::error($e);
    	}
          
    }


    public function pascalSort(Request $request)
    {
    	try 
    	{
    		$data = json_encode(array('index' => $request->index));
         	$url = $this->pascalSort_Url;
    
        	$this->sendRequest($data, $url); 

    	} catch (Exception $e) {
    		Log::error($e);
    	}
    	   
    }


    public function isvalidString(Request $request)
    {
    	try 
    	{
    		$data = json_encode(array('string' => $request->String));
        	$url = $this->isvalidString_Url;
    
        	$this->sendRequest($data, $url);    

    	} catch (Exception $e) {
    	
    	   Log::error($e);	
    	}
    	
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
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			Log::info("Request " . $data . " sent " . $url . " Response " . $result . " Response Code " . $httpcode);
			 
			// Close cURL session handle
			curl_close($ch);

    	  } 
    	catch (Exception $e) 
    	  {
    		 Log::error($e);
    	  }
    }
}
