<?php
/**
 * FlowActionsXadesOptionsModel
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
 * FlowActionsXadesOptionsModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlowActionsXadesOptionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlowActions.XadesOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signatureType' => '\Lacuna\Signer\Model\XadesSignatureTypes',
'elementToSignIdentifierType' => '\Lacuna\Signer\Model\XadesElementIdentifierTypes',
'elementToSignIdentifier' => 'string',
'insertionOption' => '\Lacuna\Signer\Model\XadesInsertionOptions',
'disableXPathTransformation' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signatureType' => null,
'elementToSignIdentifierType' => null,
'elementToSignIdentifier' => null,
'insertionOption' => null,
'disableXPathTransformation' => null    ];

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
        'signatureType' => 'signatureType',
'elementToSignIdentifierType' => 'elementToSignIdentifierType',
'elementToSignIdentifier' => 'elementToSignIdentifier',
'insertionOption' => 'insertionOption',
'disableXPathTransformation' => 'disableXPathTransformation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signatureType' => 'setSignatureType',
'elementToSignIdentifierType' => 'setElementToSignIdentifierType',
'elementToSignIdentifier' => 'setElementToSignIdentifier',
'insertionOption' => 'setInsertionOption',
'disableXPathTransformation' => 'setDisableXPathTransformation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signatureType' => 'getSignatureType',
'elementToSignIdentifierType' => 'getElementToSignIdentifierType',
'elementToSignIdentifier' => 'getElementToSignIdentifier',
'insertionOption' => 'getInsertionOption',
'disableXPathTransformation' => 'getDisableXPathTransformation'    ];

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
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['elementToSignIdentifierType'] = isset($data['elementToSignIdentifierType']) ? $data['elementToSignIdentifierType'] : null;
        $this->container['elementToSignIdentifier'] = isset($data['elementToSignIdentifier']) ? $data['elementToSignIdentifier'] : null;
        $this->container['insertionOption'] = isset($data['insertionOption']) ? $data['insertionOption'] : null;
        $this->container['disableXPathTransformation'] = isset($data['disableXPathTransformation']) ? $data['disableXPathTransformation'] : null;
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
     * Gets signatureType
     *
     * @return \Lacuna\Signer\Model\XadesSignatureTypes
     */
    public function getSignatureType()
    {
        return $this->container['signatureType'];
    }

    /**
     * Sets signatureType
     *
     * @param \Lacuna\Signer\Model\XadesSignatureTypes $signatureType signatureType
     *
     * @return $this
     */
    public function setSignatureType($signatureType)
    {
        $this->container['signatureType'] = $signatureType;

        return $this;
    }

    /**
     * Gets elementToSignIdentifierType
     *
     * @return \Lacuna\Signer\Model\XadesElementIdentifierTypes
     */
    public function getElementToSignIdentifierType()
    {
        return $this->container['elementToSignIdentifierType'];
    }

    /**
     * Sets elementToSignIdentifierType
     *
     * @param \Lacuna\Signer\Model\XadesElementIdentifierTypes $elementToSignIdentifierType elementToSignIdentifierType
     *
     * @return $this
     */
    public function setElementToSignIdentifierType($elementToSignIdentifierType)
    {
        $this->container['elementToSignIdentifierType'] = $elementToSignIdentifierType;

        return $this;
    }

    /**
     * Gets elementToSignIdentifier
     *
     * @return string
     */
    public function getElementToSignIdentifier()
    {
        return $this->container['elementToSignIdentifier'];
    }

    /**
     * Sets elementToSignIdentifier
     *
     * @param string $elementToSignIdentifier A string used to identify the element that should be signed.  If the Lacuna.Signer.Api.FlowActions.XadesOptionsModel.ElementToSignIdentifierType is Lacuna.Signer.Api.XadesElementIdentifierTypes.Id, this string is the Id of the element to be signed.  If the Lacuna.Signer.Api.FlowActions.XadesOptionsModel.ElementToSignIdentifierType is Lacuna.Signer.Api.XadesElementIdentifierTypes.XPath, this string is the XPath to the element to be signed.
     *
     * @return $this
     */
    public function setElementToSignIdentifier($elementToSignIdentifier)
    {
        $this->container['elementToSignIdentifier'] = $elementToSignIdentifier;

        return $this;
    }

    /**
     * Gets insertionOption
     *
     * @return \Lacuna\Signer\Model\XadesInsertionOptions
     */
    public function getInsertionOption()
    {
        return $this->container['insertionOption'];
    }

    /**
     * Sets insertionOption
     *
     * @param \Lacuna\Signer\Model\XadesInsertionOptions $insertionOption insertionOption
     *
     * @return $this
     */
    public function setInsertionOption($insertionOption)
    {
        $this->container['insertionOption'] = $insertionOption;

        return $this;
    }

    /**
     * Gets disableXPathTransformation
     *
     * @return bool
     */
    public function getDisableXPathTransformation()
    {
        return $this->container['disableXPathTransformation'];
    }

    /**
     * Sets disableXPathTransformation
     *
     * @param bool $disableXPathTransformation By default the XPath transformation is applied in all XAdES signatures. You can set a flow action to not apply the transformation by setting this option to true.  WARNING: If you disable the XPath transformation the signatures might be considered invalid in some validators if the same XML element is signed multiple times.
     *
     * @return $this
     */
    public function setDisableXPathTransformation($disableXPathTransformation)
    {
        $this->container['disableXPathTransformation'] = $disableXPathTransformation;

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
