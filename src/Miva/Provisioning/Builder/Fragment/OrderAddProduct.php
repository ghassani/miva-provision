
        <Order_Add_Product order_id="1000" code="test">                 (Required, order_id, code)
            <Quantity>1</Quantity>
            
            <Options>
                <Option>
                    <AttributeCode>test</AttributeCode>
                    <Value>Yes</Value>
                </Option>

                <Option>
                    <AttributeCode>template</AttributeCode>
                    <AttributeTemplateAttributeCode>template_attr</AttributeTemplateAttributeCode>
                    <Value>v1</Value>
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
        </Order_Add_Product>