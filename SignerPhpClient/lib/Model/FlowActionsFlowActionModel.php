<?php
/**
 * FlowActionsFlowActionModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dropsigner (HML)
 *
 * <!--------------------------------------------------------------------------------------------------------------------->    <h2>Authentication</h2>    <p>   In order to call this APIs, you will need an <strong>API key</strong>. Set the API key in the header <span class=\"code\">X-Api-Key</span>:  </p>    <pre>X-Api-Key: your-app|xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</pre>    <!--------------------------------------------------------------------------------------------------------------------->  <br />    <h2>HTTP Codes</h2>    <p>   The APIs will return the following HTTP codes:  </p>    <table>   <thead>    <tr>     <th>Code</th>     <th>Description</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">200 (OK)</strong></td>     <td>Request processed successfully. The response is different for each API, please refer to the operation's documentation</td>    </tr>    <tr>     <td><strong class=\"model-title\">400 (Bad Request)</strong></td>     <td>Syntax error. For instance, when a required field was not provided</td>    </tr>    <tr>     <td><strong class=\"model-title\">401 (Unauthorized)</strong></td>     <td>API key not provided or invalid</td>    </tr>    <tr>     <td><strong class=\"model-title\">403 (Forbidden)</strong></td>     <td>API key is valid, but the application has insufficient permissions to complete the requested operation</td>    </tr>    <tr>     <td><strong class=\"model-title\">422 (Unprocessable Entity)</strong></td>     <td>API error. The response is as defined in <a href=\"#model-ErrorModel\">ErrorModel</a></td>    </tr>   </tbody>  </table>    <br />    <h3>Error Codes</h3>    <p>Some of the error codes returned in a 422 response are provided bellow*:</p>    <ul>   <li>CertificateNotFound</li>   <li>DocumentNotFound</li>   <li>FolderNotFound</li>   <li>CpfMismatch</li>   <li>CpfNotExpected</li>   <li>InvalidFlowAction</li>   <li>DocumentInvalidKey</li>  </ul>    <p style=\"font-size: 0.9em\">   *The codes shown above are the main error codes. Nonetheless, this list is not comprehensive. New codes may be added anytime without previous warning.  </p>    <!--------------------------------------------------------------------------------------------------------------------->    <br />    <h2>Webhooks</h2>    <p>   It is recomended to subscribe to Webhook events <strong>instead</strong> of polling APIs. To do so, enable webhooks and register an URL that will receive a POST request   whenever one of the events bellow occur.  </p>  <p>   All requests have the format described in <a href=\"#model-Webhooks.WebhookModel\">Webhooks.WebhookModel</a>.   The data field varies according to the webhook event type:  </p>      <table>   <thead>    <tr>     <th>Event type</th>     <th>Description</th>     <th>Payload</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">DocumentSigned</strong></td>     <td>Triggered when a document is signed.</td>     <td><a href=\"#model-Webhooks.DocumentSignedModel\">Webhooks.DocumentSignedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentApproved</strong></td>     <td>Triggered when a document is approved.</td>     <td><a href=\"#model-Webhooks.DocumentApprovedModel\">Webhooks.DocumentApprovedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentRefused</strong></td>     <td>Triggered when a document is refused.</td>     <td><a href=\"#model-Webhooks.DocumentRefusedModel\">Webhooks.DocumentRefusedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentConcluded</strong></td>     <td>Triggered when the flow of a document is concluded.</td>     <td><a href=\"#model-Webhooks.DocumentConcludedModel\">Webhooks.DocumentConcludedModel</a></td>    </tr>   </tbody>  </table>    <p>   To register your application URL and enable Webhooks, access the integrations section in your <a href=\"/private/organizations\" target=\"_blank\">organization's details page</a>.  </p>
 *
 * OpenAPI spec version: 1.28.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lacuna\Signer\Model;

use \ArrayAccess;
use \Lacuna\Signer\ObjectSerializer;

/**
 * FlowActionsFlowActionModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlowActionsFlowActionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlowActions.FlowActionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'type' => '\Lacuna\Signer\Model\FlowActionType',
'status' => '\Lacuna\Signer\Model\ActionStatus',
'step' => 'int',
'creationDate' => '\DateTime',
'pendingDate' => '\DateTime',
'updateDate' => '\DateTime',
'user' => '\Lacuna\Signer\Model\UsersParticipantUserModel',
'numberRequiredSignatures' => 'int',
'ruleName' => 'string',
'title' => 'string',
'signRuleUsers' => '\Lacuna\Signer\Model\FlowActionsSignRuleUserModel[]',
'marks' => '\Lacuna\Signer\Model\DocumentMarkDocumentMarkPositionModel[]',
'allowElectronicSignature' => 'bool',
'requireSmsAuthenticationToSignElectronically' => 'bool',
'requireAuthenticatorAppToSignElectronically' => 'bool',
'requireSelfieAuthenticationToSignElectronically' => 'bool',
'refusalReason' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'type' => null,
'status' => null,
'step' => 'int32',
'creationDate' => 'date-time',
'pendingDate' => 'date-time',
'updateDate' => 'date-time',
'user' => null,
'numberRequiredSignatures' => 'int32',
'ruleName' => null,
'title' => null,
'signRuleUsers' => null,
'marks' => null,
'allowElectronicSignature' => null,
'requireSmsAuthenticationToSignElectronically' => null,
'requireAuthenticatorAppToSignElectronically' => null,
'requireSelfieAuthenticationToSignElectronically' => null,
'refusalReason' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'type' => 'type',
'status' => 'status',
'step' => 'step',
'creationDate' => 'creationDate',
'pendingDate' => 'pendingDate',
'updateDate' => 'updateDate',
'user' => 'user',
'numberRequiredSignatures' => 'numberRequiredSignatures',
'ruleName' => 'ruleName',
'title' => 'title',
'signRuleUsers' => 'signRuleUsers',
'marks' => 'marks',
'allowElectronicSignature' => 'allowElectronicSignature',
'requireSmsAuthenticationToSignElectronically' => 'requireSmsAuthenticationToSignElectronically',
'requireAuthenticatorAppToSignElectronically' => 'requireAuthenticatorAppToSignElectronically',
'requireSelfieAuthenticationToSignElectronically' => 'requireSelfieAuthenticationToSignElectronically',
'refusalReason' => 'refusalReason'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'status' => 'setStatus',
'step' => 'setStep',
'creationDate' => 'setCreationDate',
'pendingDate' => 'setPendingDate',
'updateDate' => 'setUpdateDate',
'user' => 'setUser',
'numberRequiredSignatures' => 'setNumberRequiredSignatures',
'ruleName' => 'setRuleName',
'title' => 'setTitle',
'signRuleUsers' => 'setSignRuleUsers',
'marks' => 'setMarks',
'allowElectronicSignature' => 'setAllowElectronicSignature',
'requireSmsAuthenticationToSignElectronically' => 'setRequireSmsAuthenticationToSignElectronically',
'requireAuthenticatorAppToSignElectronically' => 'setRequireAuthenticatorAppToSignElectronically',
'requireSelfieAuthenticationToSignElectronically' => 'setRequireSelfieAuthenticationToSignElectronically',
'refusalReason' => 'setRefusalReason'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'status' => 'getStatus',
'step' => 'getStep',
'creationDate' => 'getCreationDate',
'pendingDate' => 'getPendingDate',
'updateDate' => 'getUpdateDate',
'user' => 'getUser',
'numberRequiredSignatures' => 'getNumberRequiredSignatures',
'ruleName' => 'getRuleName',
'title' => 'getTitle',
'signRuleUsers' => 'getSignRuleUsers',
'marks' => 'getMarks',
'allowElectronicSignature' => 'getAllowElectronicSignature',
'requireSmsAuthenticationToSignElectronically' => 'getRequireSmsAuthenticationToSignElectronically',
'requireAuthenticatorAppToSignElectronically' => 'getRequireAuthenticatorAppToSignElectronically',
'requireSelfieAuthenticationToSignElectronically' => 'getRequireSelfieAuthenticationToSignElectronically',
'refusalReason' => 'getRefusalReason'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['pendingDate'] = isset($data['pendingDate']) ? $data['pendingDate'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['numberRequiredSignatures'] = isset($data['numberRequiredSignatures']) ? $data['numberRequiredSignatures'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['signRuleUsers'] = isset($data['signRuleUsers']) ? $data['signRuleUsers'] : null;
        $this->container['marks'] = isset($data['marks']) ? $data['marks'] : null;
        $this->container['allowElectronicSignature'] = isset($data['allowElectronicSignature']) ? $data['allowElectronicSignature'] : null;
        $this->container['requireSmsAuthenticationToSignElectronically'] = isset($data['requireSmsAuthenticationToSignElectronically']) ? $data['requireSmsAuthenticationToSignElectronically'] : null;
        $this->container['requireAuthenticatorAppToSignElectronically'] = isset($data['requireAuthenticatorAppToSignElectronically']) ? $data['requireAuthenticatorAppToSignElectronically'] : null;
        $this->container['requireSelfieAuthenticationToSignElectronically'] = isset($data['requireSelfieAuthenticationToSignElectronically']) ? $data['requireSelfieAuthenticationToSignElectronically'] : null;
        $this->container['refusalReason'] = isset($data['refusalReason']) ? $data['refusalReason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Lacuna\Signer\Model\FlowActionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     *  $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Lacuna\Signer\Model\ActionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Lacuna\Signer\Model\ActionStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets step
     *
     * @return int
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     *
     * @param int $step step
     *
     * @return $this
     */
    public function setStep($step)
    {
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets pendingDate
     *
     * @return \DateTime
     */
    public function getPendingDate()
    {
        return $this->container['pendingDate'];
    }

    /**
     * Sets pendingDate
     *
     * @param \DateTime $pendingDate pendingDate
     *
     * @return $this
     */
    public function setPendingDate($pendingDate)
    {
        $this->container['pendingDate'] = $pendingDate;

        return $this;
    }

    /**
     * Gets updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
     * Sets updateDate
     *
     * @param \DateTime $updateDate updateDate
     *
     * @return $this
     */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Lacuna\Signer\Model\UsersParticipantUserModel
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Lacuna\Signer\Model\UsersParticipantUserModel $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets numberRequiredSignatures
     *
     * @return int
     */
    public function getNumberRequiredSignatures()
    {
        return $this->container['numberRequiredSignatures'];
    }

    /**
     * Sets numberRequiredSignatures
     *
     * @param int $numberRequiredSignatures Number of required signatures if type is SignRule
     *
     * @return $this
     */
    public function setNumberRequiredSignatures($numberRequiredSignatures)
    {
        $this->container['numberRequiredSignatures'] = $numberRequiredSignatures;

        return $this;
    }

    /**
     * Gets ruleName
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
     * Sets ruleName
     *
     * @param string $ruleName Name of the rule if type is SignRule
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the participant
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets signRuleUsers
     *
     * @return \Lacuna\Signer\Model\FlowActionsSignRuleUserModel[]
     */
    public function getSignRuleUsers()
    {
        return $this->container['signRuleUsers'];
    }

    /**
     * Sets signRuleUsers
     *
     * @param \Lacuna\Signer\Model\FlowActionsSignRuleUserModel[] $signRuleUsers Users that are allowed to sign if type is SignRule
     *
     * @return $this
     */
    public function setSignRuleUsers($signRuleUsers)
    {
        $this->container['signRuleUsers'] = $signRuleUsers;

        return $this;
    }

    /**
     * Gets marks
     *
     * @return \Lacuna\Signer\Model\DocumentMarkDocumentMarkPositionModel[]
     */
    public function getMarks()
    {
        return $this->container['marks'];
    }

    /**
     * Sets marks
     *
     * @param \Lacuna\Signer\Model\DocumentMarkDocumentMarkPositionModel[] $marks marks
     *
     * @return $this
     */
    public function setMarks($marks)
    {
        $this->container['marks'] = $marks;

        return $this;
    }

    /**
     * Gets allowElectronicSignature
     *
     * @return bool
     */
    public function getAllowElectronicSignature()
    {
        return $this->container['allowElectronicSignature'];
    }

    /**
     * Sets allowElectronicSignature
     *
     * @param bool $allowElectronicSignature True if the electronic signature option is available for this action (only if the type of the action is Signer or SignRule)
     *
     * @return $this
     */
    public function setAllowElectronicSignature($allowElectronicSignature)
    {
        $this->container['allowElectronicSignature'] = $allowElectronicSignature;

        return $this;
    }

    /**
     * Gets requireSmsAuthenticationToSignElectronically
     *
     * @return bool
     */
    public function getRequireSmsAuthenticationToSignElectronically()
    {
        return $this->container['requireSmsAuthenticationToSignElectronically'];
    }

    /**
     * Sets requireSmsAuthenticationToSignElectronically
     *
     * @param bool $requireSmsAuthenticationToSignElectronically Requires the user to confirm a code sent to his phone to sign electronically. (If Lacuna.Signer.Api.FlowActions.FlowActionModel.AllowElectronicSignature is true)
     *
     * @return $this
     */
    public function setRequireSmsAuthenticationToSignElectronically($requireSmsAuthenticationToSignElectronically)
    {
        $this->container['requireSmsAuthenticationToSignElectronically'] = $requireSmsAuthenticationToSignElectronically;

        return $this;
    }

    /**
     * Gets requireAuthenticatorAppToSignElectronically
     *
     * @return bool
     */
    public function getRequireAuthenticatorAppToSignElectronically()
    {
        return $this->container['requireAuthenticatorAppToSignElectronically'];
    }

    /**
     * Sets requireAuthenticatorAppToSignElectronically
     *
     * @param bool $requireAuthenticatorAppToSignElectronically Requires the user to enter a one-time password (OTP) to sign electronically. (If Lacuna.Signer.Api.FlowActions.FlowActionModel.AllowElectronicSignature is true)
     *
     * @return $this
     */
    public function setRequireAuthenticatorAppToSignElectronically($requireAuthenticatorAppToSignElectronically)
    {
        $this->container['requireAuthenticatorAppToSignElectronically'] = $requireAuthenticatorAppToSignElectronically;

        return $this;
    }

    /**
     * Gets requireSelfieAuthenticationToSignElectronically
     *
     * @return bool
     */
    public function getRequireSelfieAuthenticationToSignElectronically()
    {
        return $this->container['requireSelfieAuthenticationToSignElectronically'];
    }

    /**
     * Sets requireSelfieAuthenticationToSignElectronically
     *
     * @param bool $requireSelfieAuthenticationToSignElectronically Requires the user to take a selfie to sign electronically. (If Lacuna.Signer.Api.FlowActions.FlowActionModel.AllowElectronicSignature is true)
     *
     * @return $this
     */
    public function setRequireSelfieAuthenticationToSignElectronically($requireSelfieAuthenticationToSignElectronically)
    {
        $this->container['requireSelfieAuthenticationToSignElectronically'] = $requireSelfieAuthenticationToSignElectronically;

        return $this;
    }

    /**
     * Gets refusalReason
     *
     * @return string
     */
    public function getRefusalReason()
    {
        return $this->container['refusalReason'];
    }

    /**
     * Sets refusalReason
     *
     * @param string $refusalReason refusalReason
     *
     * @return $this
     */
    public function setRefusalReason($refusalReason)
    {
        $this->container['refusalReason'] = $refusalReason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
