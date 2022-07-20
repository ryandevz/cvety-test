<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use GuzzleHttp\Client;

class LocationController
{
    public function index(RouteCollection $routes)
    {
        try {
            $user_ip = $_SERVER["REMOTE_ADDR"];
            $client = new Client();
    
            $url = "http://ws.cdyne.com/ip2geo/ip2geo.asmx";
    
            $body = "<x:Envelope
                    xmlns:x='http://schemas.xmlsoap.org/soap/envelope/'
                    xmlns:ws='http://ws.cdyne.com/'>
                    <x:Header/>
                    <x:Body>
                        <ws:ResolveIP>
                            <ws:ipAddress>$user_ip</ws:ipAddress>
                            <ws:licenseKey>0</ws:licenseKey>
                        </ws:ResolveIP>
                    </x:Body>
                </x:Envelope>";
    
            $options = [
                'headers' => [
                    'Content-Type' => 'text/xml; charset=UTF8',
                ],
                'body' => $body,
            ];
    
            $response = $client->request('POST', $url, $options);
    
            $body = $response->getBody();
            $clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:', 'M:'], '', $body);
            $load_xml = simplexml_load_string($clean_xml);
            $json = str_replace(':{}', ':null', json_encode($load_xml, JSON_PRETTY_PRINT));
    
            /* Adding client IP to body*/
            $arr = json_decode($json, TRUE);
            $arr['your_ip'] = $user_ip;
            $json = json_encode($arr, JSON_PRETTY_PRINT);
    
            header("Content-type: application/json");
            echo $json;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo $e;
        }
    }

    public function getLocation(RouteCollection $routes)
    {
        try {
            if( isset($_POST['ip']) ) {
                $user_ip = $_POST['ip'];
                $client = new Client();
        
                $url = "http://ws.cdyne.com/ip2geo/ip2geo.asmx";
        
                $body = "<x:Envelope
                        xmlns:x='http://schemas.xmlsoap.org/soap/envelope/'
                        xmlns:ws='http://ws.cdyne.com/'>
                        <x:Header/>
                        <x:Body>
                            <ws:ResolveIP>
                                <ws:ipAddress>$user_ip</ws:ipAddress>
                                <ws:licenseKey>0</ws:licenseKey>
                            </ws:ResolveIP>
                        </x:Body>
                    </x:Envelope>";
        
                $options = [
                    'headers' => [
                        'Content-Type' => 'text/xml; charset=UTF8',
                    ],
                    'body' => $body,
                ];
        
                $response = $client->request('POST', $url, $options);
        
                $body = $response->getBody();
                $clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:', 'M:'], '', $body);
                $load_xml = simplexml_load_string($clean_xml);
                $json = str_replace(':{}', ':null', json_encode($load_xml, JSON_PRETTY_PRINT));
        
                /* Adding client IP to body*/
                $arr = json_decode($json, TRUE);
                $arr['your_ip'] = $user_ip;
                $json = json_encode($arr, JSON_PRETTY_PRINT);
        
                header("Content-type: application/json");
                echo $json;
            } else {
                $data['ip'] = "ip required";
                $json = json_encode($data, JSON_PRETTY_PRINT);
                echo $json;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo $e;
        }
    }
}
