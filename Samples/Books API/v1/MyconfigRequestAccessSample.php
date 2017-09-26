﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-09-26
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the books v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Searches for books and manages your Google Books library.
// API Documentation Link https://developers.google.com/books/docs/v1/getting_started
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Books/v1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Books($client); 
****************************************************/

// Single Request.
 $optParams = array(
  'fields' => '*'
);
$results = myconfigRequestAccessExample($service, $source, $volumeId, $nonce, $cpksver, $optParams);


/**
* Request concurrent and download access restrictions.
* @service Authenticated Books service.
* @optParams Optional paramaters are not required by a request.
* @cpksver The device/version ID from which to request the restrictions.
* @nonce The client nonce value.
* @source String to identify the originator of this request.
* @volumeId The volume to request concurrent/download restrictions for.
* @return RequestAccess
*/
function myconfigRequestAccessExample($service, $source, $volumeId, $nonce, $cpksver, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (cpksver == null)
			throw new Exception("cpksver is required.");
		if (nonce == null)
			throw new Exception("nonce is required.");
		if (source == null)
			throw new Exception("source is required.");
		if (volumeId == null)
			throw new Exception("volumeId is required.");
		// Make the request and return the results.
		return $service->myconfig->RequestAccessMyconfig($source, $volumeId, $nonce, $cpksver, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
