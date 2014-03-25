<Order_Add_Item order_id="1000">                                (Required - order_id)
            <Code>test</Code>
            <Name>Test Product #1</Name>
            <Price>1</Price>
            <Weight>0</Weight>
            <Quantity>1</Quantity>
            
            <Options>
                <Option>
                    <AttributeCode>test</AttributeCode>
                </Option>

                <Option>
                    <AttributeCode>template_attr</AttributeCode>
                    <Price>1.00</Price>
                    <OptionCode>v1</OptionCode>
                </Option>
            </Options>
            
            <Shipment>                                                  (Optional)
                <Code>Ship_Code</Code>                                  (Optional)
                <Cost>1</Cost>                                          (Optional)
                <MarkAsShipped>Yes</MarkAsShipped>                      (Optional)
                <TrackingNumber>1111111111</TrackingNumber>             (Required)
                <TrackingType>FedEx</TrackingType>                      (Required)
                <ShipDate>                                              (Optional)
                    <Day>7</Day>
                    <Month>9</Month>
                    <Year>2012</Year>
                </ShipDate>
            </Shipment>
            
            <Shipment />                                                (Optional)
        </Order_Add_Item>