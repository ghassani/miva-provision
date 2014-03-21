<ShippingMethodRules_Update module_code="upsxml" method_code="02">
            <Priority>5</Priority>
            <Description>2 Day Air</Description>
            <MinimumSubTotal>0.00</MinimumSubTotal>
            <MaximumSubTotal>0.00</MaximumSubTotal>
            <MinimumQuantity>0</MinimumQuantity>
            <MaximumQuantity>0</MaximumQuantity>
            <MinimumWeight>0.00</MinimumWeight>
            <MaximumWeight>0.00</MaximumWeight>

            <States>
                <State code="CA"/>
                <State code="OH"/>
            </States>

            <ZipCodes>92109,44145</ZipCodes>

            <Countries>
                <Country code="US"/>
                <Country code="GB"/>
            </Countries>

            <Exclusions>
                <Excludes module_code="flatrate" method_code="flat_2day"/>     ()
                <ExcludedBy module_code="baseunit" method_code="base_2day"/>   ()
            </Exclusions>
        </ShippingMethodRules_Update>