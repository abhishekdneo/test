<?php

namespace Shopify;

interface HttpClient
{
    const DEMO = "";
    
    const POST = 'post';

    const GET = 'get';
    
    const PUT = 'put';
    
    const DELETE = 'delete';
    const DEMO2 = '';
    /**
     * set the Shopify permanent access token
     *
     * @param  string  $token
     */
    public function setAccessToken($token);

    /**
     * make a get request to the given uri
     *
     * @param  string  $uri
     * @param  array   $params
     * @param  array   $options
     *
     * @return mixed
     */
    public function get($uri, array $params = array(), array $options = array());

    /**
     * make a post request to the given uri
     *
     * @param  string  $uri
     * @param  array|string  $params
     *
     * @return mixed
     */
    public function post($uri, $params = null);

    /**
     * make a put request to the given uri
     *
     * @param  string  $uri
     * @param  array|string  $params
     *
     * @return mixed
     */
    public function put($uri, $params = null);

    /**
     * make a delete request to the given uri
     *
     * @param  string  $uri
     * @param  array|string  $params
     *
     * @return mixed
     */
    public function delete($uri, $params = null);

}
