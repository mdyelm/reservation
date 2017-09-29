<?php

/**
 * GoogleCalendar
 *
 */
class GoogleCalendar {

    public $redirectUrl = '';
    public $applicationName = 'Test product name';
    public $clientSecretPath = '';
    public $scopes = 'https://www.googleapis.com/auth/calendar email';

    /**
     * Constructor
     */
    public function __construct() {
        $this->redirectUrl = Router::url(['controller' => 'index', 'action' => 'auth_calendar'], true);
        $this->clientSecretPath = dirname(__DIR__) . '/Vendor/client_secret.json';
        $this->credentialsPath = WWW_ROOT . 'google_calendar' . DS . 'cren.txt';
    }

    /**
     * when remove Google Calendar synchronously , pass $userId = null
     * return \Google_Client with token in database , if token is expired => update new
     * @return \Google_Client
     */
    public function getClient() {
        $client = new Google_Client();
        $client->setApplicationName($this->applicationName);
        $client->setScopes($this->scopes);
        $client->setAuthConfig($this->clientSecretPath);
        $client->setAccessType('offline');

        if (file_exists(dirname($this->credentialsPath))) {
            $accessToken = json_decode(file_get_contents($this->credentialsPath), true);
            $client->setAccessToken($accessToken);
            // Refresh the token if it's expired.
            if ($client->isAccessTokenExpired()) {
                $refresh_token = $client->getRefreshToken();
                $client->fetchAccessTokenWithRefreshToken($refresh_token);
                // get access token new
                $accessToken = $client->getAccessToken();
                // set refresh_token in access token
                $accessToken['refresh_token'] = $refresh_token;
                //save to file
                file_put_contents($this->credentialsPath, json_encode($accessToken));
            }
        }
        return $client;
    }

    /**
     * set calendar first time
     * @return \Google_Client
     */
    public function set_calendar() {
        $client = new Google_Client();
        $client->setApplicationName($this->applicationName);
        $client->setScopes($this->scopes);
        $client->setAuthConfig($this->clientSecretPath);
        $client->setRedirectUri($this->redirectUrl);
        ## these two lines is important to get refresh token from google api
        $client->setAccessType('offline');
        $client->setApprovalPrompt('force');
        ## this line is important when you revoke permission from your app,
        #it will prompt google approval dialogue box forcefully to user to grant offline access
        //fix error on local
        $client->setHttpClient(new GuzzleHttp\Client(['verify' => false]));
        return $client;
    }

}
