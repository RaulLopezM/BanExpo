<?php
/**
 * @package mobLee
 */
//namespace mobLee;

namespace Utilerias\RalfBundle\v1_1;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Utilerias\RalfBundle\v1_1\Request\RequestCurl;

/**
 * Ralf Class
 * It connects with RALF API to handle a single event data
 *
 * @package mobLee
 * @version 0.1
 * @author Luckas Frigo <luckas@moblee.net>
 */
class Ralf {
    const BOOKMARK_FAVORITE = 'favorite';
    const BOOKMARK_VISITED  = 'visited';
    const BOOKMARK_LIKE     = 'like';
    /**
     * @var string
     */
    private $apiVersion;
    /**
     * @var string
     */
    private $eventSlug;
    /**
     * @var string
     */
    private $user;
    /**
     * @var string
     */
    private $authKey;
    /**
     * @var RequestCurl
     */
    private $request;

    /**
     * Creates a new RALF instance and prepares this instance to handle the data for a specific event
     *
     * @param string $eventSlug A slug which represents the event to be accessed
     * @param string $user User used to connect
     * @param string $pass_hash Correspondent user pass_hash generated from user password (the password wont be send in
     *     a open manner)
     * @param string $apiVersion API version. Default 'v1_1'
     */
    public function __construct($user = '', $pass_hash = '', $db_param = 'MobLee_RALF') {
        $this->container = new ContainerBuilder();
        $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__ . "/../../../../app/config"));
        $loader->load('parameters.yml');
        $db_data = $this->container->getParameter($db_param);
        $this->authKey = hash('sha256', ((!empty($user)) ? $user : $db_data["ralf_user"]) .
                ((!empty($pass_hash)) ? $pass_hash : $db_data["ralf_password"])
        );
        $this->user = ((!empty($user)) ? $user : $db_data["ralf_user"]);
        $this->request = new RequestCurl();
        $this->eventSlug = $db_data["ralf_eventSlug"];
        $this->apiVersion = $db_data["ralf_apiVersion"];
    }

    /**
     * Creates new objects on the event.
     *
     * @param string $type Object type to be created
     * @param array  $data List of Associative arrays or objects (stdClass) with objects data to be created. Each
     *     object must mandatorily have the following properties: "language", "name" e "info"
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    public function createObjects($type, $data = []) {
        return $this->doPostRequest($this->getEventApi() . $type, $data);
    }

    /**
     * Retrieves data from a single object (in all available languages) from a certain type with all data and
     * relationships
     *
     * @param string $type The object type being requested
     * @param int    $objId Object ID being requested
     * @param bool   $extended If FALSE is provided it returns only the relationship objects IDs, if TRUE (default) it
     *     will return all the data from related object.
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    public function getObject($type, $objId, $extended = true) {
        $params = [
            'source' => 'external'
        ];
        if ($extended) {
            $params['extended'] = 'true';
        }

        return $this->doGetRequest($this->getEventApi() . "$type/$objId", $params);
    }

    /**
     * Retrieves a list of objects from a certain type with all data and relationships
     *
     * @param string $type The object type being requested
     * @param bool   $extended If FALSE is provided it returns only the relationship objects IDs, if TRUE it will
     *     return all the data from related object. Default FALSE.
     * @param array  $params Extra parameters which can be provided to the request (language, last_update, source,
     *     order)
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    public function getObjects($type, $extended = false, $params = []) {
        $params['source'] = 'external';
        if ($extended) {
            $params['extended'] = 'true';
        }

        return $this->doGetRequest($this->getEventApi() . $type, $params);
    }

    /**
     * Updates one object from a certain type.
     *
     * @param string $type The type to be updated.
     * @param int    $objId Object ID being updated
     * @param array  $data Associative arrays or objects (stdClass) list with object data to be updated. Each object
     *     must mandatorily have the property "language"
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    public function updateObject($type, $objId, $data = []) {
        return $this->doPutRequest($this->getEventApi() . "$type/$objId", $data);
    }

    /**
     * Updates an objects list from a certain type.
     *
     * @param string $type The type to be updated.
     * @param array  $data Associative arrays or objects (stdClass) list with objects data to be updated. Each object
     *     must mandatorily have the following properties: "language" e "id" (ou "ext_id")
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    public function updateObjects($type, $data = []) {
        return $this->doPutRequest($this->getEventApi() . $type, $data);
    }

    /**
     * Removes a single object from the type provided according with $objId provided. It does not have return, because
     * DELETE requests does not return BODY. To know if the request worked check the getHttpCode() function
     *
     * @param string $type The type to be deleted
     * @param int    $objId The object ID to be deleted
     */
    public function deleteObject($type, $objId) {
        $this->doDeleteRequest($this->getEventApi() . "$type/$objId");
    }

    /**
     * Removes the objects from the type provided according with IDs list provided. It does not have return, because
     * DELETE requests does not return BODY. To know if the request worked check the getHttpCode() function
     *
     * @param string $type The type to be deleted
     * @param array  $data The objects IDs list to be deleted
     */
    public function deleteObjects($type, $data = []) {
        $this->doDeleteRequest($this->getEventApi() . $type, $data);
    }

    /**
     * Returns the HTTP Response Code from the last request made
     *
     * @return int|null The Response Code from the last request made or null if no request has been completed
     */
    public function getHttpCode() {
        return $this->request->getHttpCode();
    }

    /**
     * Validates a user login. To use this method is necessary instantiate a RALF class using super user credentials.
     * The participants data must be provided as an associative array. The HTTP Code generated in response of this
     * method can be "200 Ok" if the userName and password are correct, or "401 Unauthorized" if userName or password
     * are incorrect.
     *
     * @param string $userName
     * @param string $pass_hash
     * @return array Associative array containing the user id, pass_hash, and the participant data or NULL in a fail
     *     case or if there is no response
     */
    public function checkUserLogin($userName, $pass_hash) {
        $userData = [
            'name'      => $userName,
            'pass_hash' => $pass_hash
        ];

        return $this->doPostRequest($this->getEventApi() . "attendee?skip_creation=true", $userData);
    }

    /**
     * Creates a new user for the event. To use this method is necessary instantiate a RALF class using super user
     * credentials. The participants data must be provided as an associative array. The HTTP Code generated in response
     * of this method can be "200 Ok" if the userName already exists and password is correct, "201 Created" if the user
     * was successfully created, "409 Conflict" if userName already exists but password is incorrect, or "400 Bad
     * Request" if the API throws a generic error.
     *
     * @param string $userName
     * @param string $passHash
     * @param array  $participantData Associative array containing the participant data according the RALF
     *     documentation
     * @return array Associative array containing the user id, pass_hash, and the participant data or NULL in a fail
     *     case or if there is no response
     */
    public function createNewUser($userName, $passHash, $participantData = []) {
        $userData = [
            'name'      => $userName,
            'pass_hash' => $passHash,
            'person'    => $participantData
        ];

        return $this->doPostRequest($this->getEventApi() . "attendee", $userData);
    }

    /**
     * Updates the user information. To use this method is necessary instantiate a RALF class using super user
     * credentials or the own user credentials who is changing the data. The participant data must be provided as an
     * associative array.
     *
     * @param string $userName
     * @param string $passHash
     * @param array  $participantData
     * @return array Associative array containing the user id, pass_hash, and the participant data or NULL in a fail
     *     case or if there is no response
     */
    public function updateUserInfo($userName, $passHash, $participantData = [], $newPassHash = null) {
        $userData = [
            'name'      => $userName,
            'pass_hash' => $passHash,
            'person'    => $participantData
        ];
        if (!empty($newPassHash)) {
            $userData['new_pass_hash'] = $newPassHash;
        }

        return $this->doPutRequest($this->getEventApi() . "attendee", $userData);
    }

    /**
     * Capture the user bookmarks according the defined type. If the type was not provided, all the bookmarks are
     * returned.
     *
     * @param int|string $userId
     * @param null       $bookmarkType
     * @param array      $params Extra parameters which can be provided to the request (language, last_update, source,
     *     order)
     * @return array
     */
    public function getUserBookmarks($userId, $bookmarkType = null, $params = []) {
        return $this->doGetRequest($this->getEventApi() . "user/$userId/ixpo_bookmark", $params);
    }

    /**
     * Capture all exhibitors bookmarks for the event.
     *
     * @param array $params Extra parameters which can be provided to the request (language, last_update, source, order)
     * @return array
     */
    public function getExhibitorsWithBookmarks($params = []) {
        $response = $this->doGetRequest($this->getEventApi() . "ixpo_bookmark", $params);
        date_default_timezone_set("America/Mexico_City");
        if (!empty($response['content'])) {
            $exhibitorList = [];
            foreach ($response['content'] as $bookmark) {
                if (!empty($bookmark['from_person'])) {
                    if (empty($exhibitorList[$bookmark['link']])) {
                        $exhibitorList[$bookmark['link']] = [
                            "exhibitor_id" => $bookmark['link']
                        ];
                    }
                    $exhibitorList[$bookmark['link']]['tours'][$bookmark['from_person']]['idVisitante'] = $bookmark['from_person'];
                    $exhibitorList[$bookmark['link']]['tours'][$bookmark['from_person']]['FechaCreacion'] = date('Y-m-d H:i:s',$bookmark['pub_date']);
                }
            }
            return [
                "status" => true,
                "data"   => array_values($exhibitorList)
            ];
        } else {
            return [
                "status" => false,
                "data"   => null
            ];
        }
    }

    /**
     * Capture the total of unique visitors with bookmarks.
     *
     * @param array $params Extra parameters which can be provided to the request (language, last_update, source, order)
     * @return array
     */
    public function getTotalVisitorsWithBookmark($params = []) {
        $response = $this->doGetRequest($this->getEventApi() . "ixpo_bookmark", $params);
        
        if (!empty($response['content'])) {
            $visitorList = [];
            foreach ($response['content'] as $bookmark) {
                if (!empty($bookmark['from_person'])) {
                    $visitorList[] = $bookmark['from_person'];
                }
            }

            return [
                "status" => true,
                "data"   => ["visitors_total" => count(array_unique($visitorList))]
            ];
        } else {
            return [
                "status" => false,
                "data"   => null
            ];
        }
    }

    /**
     * Creates a specific bookmark type (favorite, visited ou like).
     *
     * @param int|string $userId Bookmark owner user ID
     * @param string     $objType Object type being bookmarked
     * @param int        $objId Object ID being bookmarked
     * @param string     $bookmarkType Bookmark type: favorite | visited | like
     * @return array
     */
    public function createUserBookmark($userId, $objType, $objId, $bookmarkType = 'favorite') {
        $bookmarkData = [
            [
                'type' => $bookmarkType,
                'mode' => $objType,
                'link' => $objId
            ]
        ];

        return $this->doPostRequest($this->getEventApi() . "/user/{$userId}/ixpo_bookmark", $bookmarkData);
    }

    /**
     * Removes a bookmark from a user based on bookmark ID.
     *
     * @param int $userId
     * @param int $bookmarkId
     * @return array
     */
    public function removeUserBookmark($userId, $bookmarkId) {
        return $this->doDeleteRequest($this->getEventApi() . "/user/{$userId}/bookmark/{$bookmarkId}");
    }

    /**
     * Returns an URL from RALF API corresponding to the constructor provided event
     *
     * @return string The event URL in RALF API
     */
    private function getEventApi() {
        return "http://ralf.moblee.com.br/api/{$this->apiVersion}/event/{$this->eventSlug}/";
        //return "http://localhost:8080/moblee/ralf-api/api/{$this->apiVersion}/event/{$this->eventSlug}/";
    }

    /**
     * Configures and execute POST requests
     *
     * @param string                 $url The API access URL
     * @param array|\stdClass|string $data JSON format string or associative arrays list or objects to be converted to
     *     JSON format
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    private function doPostRequest($url, $data) {
        $data = $this->validateData($data);
        $this->setupAuth('POST', $url, $data);
        $this->request->setupPostRequest($data);

        return $this->request->exec();
    }

    /**
     * Configures and execute GET requests
     *
     * @param string $url The API access URL
     * @param array  $params Associative array with indexes to be added in the query string
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    private function doGetRequest($url, $params) {
        $url .= '?' . http_build_query($params);
        $this->setupAuth('GET', $url, '');

        return $this->request->exec();
    }

    /**
     * Configures and execute PUT requests
     *
     * @param string                 $url The API access URL
     * @param array|\stdClass|string $data JSON format string or associative arrays list or objects to be converted to
     *     JSON format
     * @return array Associative array with request result or NULL in a fail case or if there is no response
     */
    private function doPutRequest($url, $data) {
        $data = $this->validateData($data);
        $this->setupAuth('PUT', $url, $data);
        $this->request->setupPutRequest($data);

        return $this->request->exec();
    }

    /**
     * Configures and execute DELETE requests. It does not have return, because DELETE requests does not return BODY.
     *
     * @param string                 $url The API access URL
     * @param array|\stdClass|string $data JSON format string or associative arrays list or objects to be converted to
     *     JSON format
     * @return array
     */
    private function doDeleteRequest($url, $data = null) {
        $data = $this->validateData($data);
        $this->setupAuth('DELETE', $url, $data);
        $this->request->setupDeleteRequest($data);

        return $this->request->exec();
    }

    /**
     * Configures the authorization header to be send to RALF API
     *
     * @param string $method The request type (POST|GET|PUT|DELETE)
     * @param string $url The API access URL
     * @param string $payload The content to be send inside the request body
     */
    private function setupAuth($method, $url, $payload = '') {
        $this->request->addUrlRequest($url);
        $this->request->addAuthorization("mobLee " .
                                         base64_encode($this->user .
                                                       ':' .
                                                       hash_hmac('sha256',
                                                                 $method . $url . trim($payload),
                                                                 $this->authKey)));
    }

    /**
     * Validates the entry data, ensuring the return will be a JSON formatted string
     *
     * @param array|\stdClass|string $data JSON format string or associative arrays list or objects to be converted to
     *     JSON format
     * @return string JSON formatted string
     */
    private function validateData($data) {
        if (is_array($data) || is_object($data)) {
            return json_encode($data);
        } else {
            return json_encode(json_decode($data, true));
        }
    }
}
