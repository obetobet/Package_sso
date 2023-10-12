<?php

namespace Dutaabadiprimantara\Sso;

class Main
{
    public function getHello()
    {
        return "Hello World!";
    }


    public function getLogin()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:8000/oauth/token',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 'grant_type=password&client_id=9a5333e5-c9a6-4684-8df9-8923fda40d4d&client_secret=YiTWjT2ExxYDaDIRHLI25nj41HSnOTbvC0RR3FWj&username=user&password=dap12345&scope=view-user',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }
}
