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
// Unofficial sample for the compute v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Creates and runs virtual machines on Google Cloud Platform.
// API Documentation Link https://developers.google.com/compute/docs/reference/latest/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Compute/v1/rest
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
* $service = new Google_Service_Compute($client); 
****************************************************/

// Single Request.
 $optParams = array(
  'fields' => '*'
);
$results = regionInstanceGroupManagersResizeExample($service, $project, $region, $instanceGroupManager, $size, $optParams);


/**
* Changes the intended size for the managed instance group. If you increase the size, the group schedules actions to create new instances using the current instance template. If you decrease the size, the group schedules delete actions on one or more instances. The resize operation is marked DONE when the resize actions are scheduled even if the group has not yet added or deleted any instances. You must separately verify the status of the creating or deleting actions with the listmanagedinstances method.If the group is part of a backend service that has enabled connection draining, it can take up to 60 seconds after the connection draining duration has elapsed before the VM instance is removed or deleted.
* @service Authenticated Compute service.
* @optParams Optional paramaters are not required by a request.
* @instanceGroupManager Name of the managed instance group.
* @project Project ID for this request.
* @region Name of the region scoping this request.
* @size Number of instances that should exist in this instance group manager.
* @return Operation
*/
function regionInstanceGroupManagersResizeExample($service, $project, $region, $instanceGroupManager, $size, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (instanceGroupManager == null)
			throw new Exception("instanceGroupManager is required.");
		if (project == null)
			throw new Exception("project is required.");
		if (region == null)
			throw new Exception("region is required.");
		if (size == null)
			throw new Exception("size is required.");
		// Make the request and return the results.
		return $service->regionInstanceGroupManagers->ResizeRegionInstanceGroupManagers($project, $region, $instanceGroupManager, $size, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
