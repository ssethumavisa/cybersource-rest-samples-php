<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

function GetIndividualBatchFile()
{
	$commonElement = new CyberSource\ExternalConfiguration();
	$config = $commonElement->ConnectionHost();
	$merchantConfig = $commonElement->merchantConfigObject();
	$apiclient = new CyberSource\ApiClient($config, $merchantConfig);
	$api_instance = new CyberSource\Api\TransactionBatchesApi($apiclient);
	$api_response = list($response,$statusCode,$httpHeader)=null;
	$id="Owcyk6pl";
	try {
		$api_response = $api_instance->getTransactionBatchId($id);
		echo "<pre>";print_r($api_response);
		

	} catch (Cybersource\ApiException $e) {
		print_r($e->getResponseBody());
		print_r($e->getMessage());
    }
}    

// Call Sample Code
if(!defined('DO_NOT_RUN_SAMPLES')){
    echo "GetIndividualBatchFile Samplecode is Running.. \n";
	GetIndividualBatchFile();

}
?>	
