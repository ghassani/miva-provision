<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Connector\Magento;

/**
 * SoapConnector
 * 
 * A SOAP Client Wrapper for the Magento SOAP API
 * 
 * Usage:
 * 
 * 
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class SoapConnector {
        
    /* SoapClient Connection Object */
    private $connection;
    /* SoapClient Session String */
    private $session;
    /* Array $callStack */
    protected $callStack = array();
    /* Mixed $lastResponse */
    protected $lastResponse;
    
    /* @var array */
    protected $incompleteStatuses = array(
        'pending',
        'processing',
        'new',
        'payment_review'
    );
    
    /** 
     * Constructor
     * 
     * @param string $entryUrl
     * @param string $username
     * @param string $password
     * 
     * @return self
     */
    public function __construct($entryUrl, $username, $password)
    {
        try{
            $this->setConnection(new \SoapClient($entryUrl));
            $this->setSession($this->getConnection()->login( $username, $password ));   
        } catch(Exception $e){
            throw new SoapConnectorException(sprintf('Could Not Connect to Magento API - %s',$e->getMessage()));
        }  
        return $this;   
    }
    
    /**
     * Destructor
     * 
     * Kill the session on destruct
     */
    public function __destruct()
    {
        $this->getConnection()->endSession($this->getSession());
    }
    
    /**
     * getConnection
     * 
     * Get the current connection object
     * 
     * @return SoapClient
     * 
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * setConnection
     * 
     * Set the current connection object
     * 
     * @param SoapClient $connection
     * 
     * @return self
     */
    public function setConnection(\SoapClient $connection)
    {
        $this->connection = $connection;
        return $this;
    }

    /**
     * getSession
     * 
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }
    
    /**
     * setSession
     * 
     * Set the current session string
     * 
     * @param string $session
     * 
     * @return self
     */
    public function setSession($session){
        $this->session = $session;
        return $this;
    }

    /**
     * customRequest
     * 
     * Create a custom request to the API which has no wrapper
     * method available, or to give you more control over the
     * call request
     * 
     * @param string $callName
     * @param mixed $parameters
     * 
     * @return mixed
     */
    public function customRequest($callName, $parameters)
    {
        return $this->sendRequest($callName,  $parameters);
    }
    

    /**
     * getOrdersInRange
     * 
     * Retreive orders from the API for the specified date range
     * 
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @param string $dateFormat - Defaults to Y-m-d
     */
    public function getOrdersInRange(\DateTime $dateFrom, \DateTime $dateTo, $dateFormat = 'Y-m-d')
    {
        $requestParams = array(
            array(
                'created_at'=>array('from'=>$dateFrom->format($dateFormat),'to'=>$dateTo->format($dateFormat))
            )
        );
        return $this->sendRequest('sales_order.list',  $requestParams);
    }

     /**
      * getOrdersById
      * 
      * @param array $orders - An array of Order Increment IDs
      */
    public function getOrdersById(array $orders)
    {
        $_orders = array();
        foreach($orders as $o){
            $_orders[] = trim($o);
        }
        $requestParams = array(
            array(
                'increment_id'=>array('in'=> $_orders),
            )
        );
        return $this->sendRequest('sales_order.list',  $requestParams);
    }

    /**
     * getIncompleteOrders
     * 
     * Get all orders which are in an incomplete status
     * 
     * Statuses which are pulled are set in member variable $incompleteStatuses
     * 
     */
    public function getIncompleteOrders()
    {
        $requestParams = array(
            array(
                'status'=>array('in'=> $this->incompleteStatuses),
            )
        );
        return $this->sendRequest('sales_order.list',  $requestParams);
    }
    
    /**
     * getIncompleteOrdersAfter
     * 
     * Get all incomplete orders after a specified date
     * 
     * @param DateTime $afterDate
     * @param string $dateFormat = Format of the date, defaults to Y-m-d
     */
    public function getIncompleteOrdersAfter(\DateTime $afterDate, $dateFormat = 'Y-m-d')
    {
        $requestParams = array(
            array(
                'state'=>array('in'=> $this->incompleteStatuses),
                'created_at' => array('gteq' => $afterDate->format($dateFormat)),
            )
        );
        return $this->sendRequest('sales_order.list',  $requestParams);
    }

    /**
     * addTrackingToShipment
     * 
     * Add a tracking number to a order shipment
     * 
     * @param int $shipmentId
     * @param string $carrierCode
     * @param string $trackingNumber
     * @param string $trackingTitle
     */
    public function addTrackingToShipment($shipmentId, $carrierCode, $trackingNumber, $trackingTitle = '')
    {
        return $this->sendRequest('sales_order_shipment.addTrack',  array(
            $shipmentId,
            $carrierCode,
            $trackingTitle,
            $trackingNumber
        ));
    }
    

    /**
     * removeTrackingFromShipment
     * 
     * Remove a tracking number from an order shipment
     * 
     * @param int $shipmentId
     * @param int $trackingId
     */
    public function removeTrackingFromShipment($shipmentId, $trackingId)
    {
        return $this->sendRequest('sales_order_shipment.removeTrack',  array($shipmentId,$trackingId));
    }

    /**
     * addCommentToShipment
     * 
     * Add a comment to an order shipment, and optionally notify
     * the customer
     * 
     * @param int $shipmentId
     * @param string $comment
     * @param bool $email - Notify customer
     * @param bool $emailComments - Include Comments in Email
     */
    public function addCommentToShipment($shipmentId, $comment, $email = true, $emailComments = true)
    {
        return $this->sendRequest('sales_order_shipment.addComment',  array(
            $shipmentId,
            $comment,
            $email,
            $emailComments
        ));
    }

    /**
     * getCarrierCodes
     * 
     * Retrieve an carrier codes for an order
     * 
     * @param int $orderId
     */
    public function getCarrierCodes($orderId)
    {
        return $this->sendRequest('sales_order_shipment.getCarriers',  $orderId);
    }

    /**
     * getOrder
     * 
     * Retreive an order
     * 
     * @param int $orderId
     */
    public function getOrder($orderId)
    {
        return $this->sendRequest('sales_order.info',  $orderId);
    }

    /**
     * cancelOrder
     * 
     * Cancel an Order
     * 
     * @param int $orderId
     */
    public function cancelOrder($orderId)
    {
        return $this->sendRequest('sales_order.cancel',  $orderId);
    }
    
    /**
     * holdOrder
     * 
     * Put an order on Hold
     * 
     * @param int $orderId
     */
    public function holdOrder($orderId)
    {
        return $this->sendRequest('sales_order.hold',  $orderId);
    }

    /**
     * unholdOrder
     * 
     * Take an order out of a hold status
     * 
     * @param int $orderId
     */
    public function unholdOrder($orderId)
    {
        return $this->sendRequest('sales_order.unhold',  $orderId);
    }
    
    /**
     * addOrderComment
     * 
     * @param int $orderId
     * @param string $status
     * @param string $comment
     * @param bool $notify
     */
    public function addOrderComment($orderId, $status, $comment = null, $notify = false)
    {
        $params = array('orderIncrementId' => $orderId, 'status' => $status);
        foreach(array('comment','notify') as $field){
            if(isset($$field) && $$field === false || isset($$field)){
                $params[$field] = $$field;
            }
        }
        return $this->sendRequest('sales_order.addComment',  $params);
    }
    
    /**
     * function createShipment
    * Create a Shipment for an Order
    *
    * @param int $orderID - the incremental_id of the order
    * @param array $qty
    * @param string $comment
    * @param bool $email
    * @param bool $emailComments
    * @return string New Shipment ID
    */
    public function createShipment($orderId, array $qty, $comment=null, $email = true, $emailComments = true){
        return $this->sendRequest('sales_order_shipment.create',  array($orderId,$qty,$comment,$email,$emailComments));
    }
    /*
     * function searchShipments
    * Get a Shipment
    *
    * @param int $orderId
    * @return array Shipments or error
    */
    public function findOrderShipment($orderId){
        $requestParams = array(array('order_id'=>array('eq'=>$orderId)));
    
        $result = $this->sendRequest('sales_order_shipment.list',  $requestParams);
    
        if(is_array($result)){
            return $result;
        } else {
            throw new SoapConnectorException('An Error Occurred while Searching for Shipments: '.$result);
        }
        return;
    }
    /*
     * function getShipment
    * Get a Shipment
    *
    * @param int $shipmentId
    * @return array Shipment
    */
    public function getShipment($shipmentId){
        return $this->sendRequest('sales_order_shipment.info',  $shipmentId);
    }
    
    /*
     * function sendRequest
    * Send a Request to the API
    *
    * @param string $callName - The Magento API Call Name
    * @param mixed $parameters
    * @return mixed call results
    */
    protected function sendRequest($callName, $parameters){
        array_push($this->callStack,array($callName,$parameters));
        try{
            $this->lastResponse = $this
            ->getConnection()
            ->call($this->getSession(), $callName,  $parameters);
    
        }catch(SoapFault $e){
            echo "\n".$e->getMessage()."\n\n";
        }
        return $this->lastResponse;
    }
    
    /*
     * function getInvoice
    * Get a Invoice
    *
    * @param int $invoiceId
    * @return mixed|array,string Invoice
    */
    public function getInvoice($invoiceId){
        return $this->sendRequest('sales_order_invoice.info',  $invoiceId);
    }
    /*
     * function createInvoice
    * Create a Invoice for an Order
    *
    * @param int $orderID - the incremental_id of the order
    * @param array $qty
    * @param string $comment
    * @param bool $email
    * @param bool $emailComments
    * @return string New Shipment ID
    */
    public function createInvoice($orderId, array $qty, $comment=null, $email = true, $emailComments = true){
        return $this->sendRequest('sales_order_invoice.create',  array($orderId,$qty,$comment,$email,$emailComments));
    }
    /*
     * function getProduct
    * Get a Products Info by SKU or ID
    *
    * @param int $productId - the product ID or product SKU
    * @param int|array $storeView - Optional Store View(s)
    * @param array $attributes - Optional Attribtes to Select
    * @return array Product
    */
    public function getProduct($productId, $storeView=null, $attributes = array()){
        return $this->sendRequest('product.info', array($productId,$storeView,$attributes));
    }
    
    /*
     * function getOrderInvoices
    * Get Invoices For Order
    *
    * @param int $orderId
    * @return mixed|array,string Invoices
    */
    public function getOrderInvoices($orderId){
        $requestParams = array(
            array(
                'increment_id' => array('eq' => $orderId),
            )
        );
        return $this->sendRequest('sales_order_invoice.list',  $requestParams);
    }
    
    /**
     * createCreditMemo
     *
     * @param int $orderId
     * @param float $refundAmount
     * @param string $comment
     * @param bool $notifyCustomer
     *
     */
    public function createCreditMemo($orderId, $refundToStoreCreditAmount = null, $comment = null, $notifyCustomer = false, $includeComment = true, array $creditmemoData = array()){
         $params = array('orderIncrementId' => $orderId);
         
         foreach(array('creditmemoData','comment','notifyCustomer','includeComment','refundToStoreCreditAmount') as $field){
            if(isset($$field) && $$field === false || isset($$field)){
                $params[$field] = $$field;
            }
         }
         return $this->sendRequest('sales_order_creditmemo.create',$params);
    }
}
    