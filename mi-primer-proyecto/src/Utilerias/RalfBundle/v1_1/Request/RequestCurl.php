<?php
/**
 * @package mobLee\Request
 */

namespace Utilerias\RalfBundle\v1_1\Request;

class RequestCurl {
    private $curl = NULL;
    private $header;
    private $httpCode = NULL;

    public function __construct() {
        $this->resetCurl();
    }

    private function resetCurl() {
        $this->header = array();
        $this->curl = curl_init();
        curl_setopt( $this->curl, CURLOPT_HEADER, 0 );
        curl_setopt( $this->curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt( $this->curl, CURLOPT_BINARYTRANSFER, TRUE);
    }

    public function exec() {
        curl_setopt( $this->curl, CURLOPT_HTTPHEADER, $this->header );
        $response = curl_exec( $this->curl );
        $this->httpCode = curl_getinfo( $this->curl, CURLINFO_HTTP_CODE );
        curl_close( $this->curl );
        $this->resetCurl();
        return json_decode( $response, true );
    }

    public function setupDeleteRequest( $data  ) {
        curl_setopt( $this->curl, CURLOPT_CUSTOMREQUEST, 'DELETE' );
        $this->setPostData($data);
    }

    public function setupPutRequest( $data ) {
        curl_setopt( $this->curl, CURLOPT_CUSTOMREQUEST, 'PUT' );
        $this->setPostData($data);
    }

    public function setupPostRequest( $data ) {
        curl_setopt( $this->curl, CURLOPT_POST, TRUE );
        $this->setPostData($data);
    }

    private function setPostData( $data ) {
        curl_setopt( $this->curl, CURLOPT_POSTFIELDS, $data );
        $timeout = (int) strlen($data)/20;
        if($timeout < 20)
            $timeout = 20;
        curl_setopt( $this->curl, CURLOPT_TIMEOUT, $timeout );
        set_time_limit( $timeout * 1.4 );
    }

    public function addAuthorization( $authString ) {
        $this->header[] = "Authorization:$authString";
    }

    public function addUrlRequest( $url ) {
        curl_setopt( $this->curl,CURLOPT_URL, $url );
    }

    public function getHttpCode() {
        return $this->httpCode;
    }
}