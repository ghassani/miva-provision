<OrderShipment_Add order_id="1000">
            <ProductList>                                   (Required)
                <Product product_code="p1" quantity="1" />      (required)
            </ProductList>
            <Code>SHIPMENT_CODE</Code>                      (Required)
        </OrderShipment_Add>
        <OrderShipment_SetStatus code="SHIPMENT_CODE">
            <MarkAsShipped>1</MarkAsShipped>                (Optional)
            <TrackingNumber>0123456</TrackingNumber>        (Optional)
            <TrackingType>FedEx</TrackingType>              (Optional)
            <ShipDate>                                      (Optional)
                <Day>01</Day>                                   (required)
                <Month>01</Month>                               (required)
                <Year>1970</Year>                               (required)
                <Minute>30</Minute>                             (optional)
                <Hour>12</Hour>                                 (optional)
            </ShipDate>
        </OrderShipment_SetStatus>