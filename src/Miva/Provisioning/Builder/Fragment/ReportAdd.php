<Report_Add module="sales">
            <Description>Test Report</Description>
            <Date_Range>                                        <!-- Optional or required depending on the module -->
<All/>                                         <!-- default -->
<!-- or -->
<Last days="1|3|7|14|30|90|180|365"/>
<!-- or -->
<Start>
    <Day/>
    <Month/>
    <Year/>
    <Hour/>
    <Minute/>
    <Second/>
</Start>
<End>
    <Day/>
    <Month/>
    <Year/>
    <Hour/>
    <Minute/>
    <Second/>
</End>
</Date_Range>
<Date_Group>hour|day|week|month|year</Date_Group>   <!-- Optional Depending on the module -->
<Display>Yes</Display>                              <!-- Module may prevent this value from being set to true -->
<RunInterval>60</RunInterval>
<Settings>
    <!-- Module specific data -->

    <!-- Sales -->
    <PriceGroup customers="in">pricegroup_code</PriceGroup>
    <Category>category_code</Category>
    <Product>product_code</Product>
    <Metrics>
        <Gross/>
        <Units/>
        <Orders/>
        <Average/>
        <Tax/>
        <Shipping/>
    </Metrics>

    <!-- Product Sales -->
    <Metric>gross|units</Metric>
    <PriceGroup customers="out">pricegroup_code</PriceGroup>
    <Category>category code</Category>
    <Display_TopN>10</Display_TopN>
    <Chart_TopN>10</Chart_TopN>
    <Export_TopN>10</Export_TopN>

    <!-- Geographic Sales -->
    <Category>category_code</Category>
    <Product>product_code</Product>
    <Metric>gross|units</Metric>
    <Address>billing|shipping</Address>
    <Country>country_code</Country>
    <State>state_code</State>
    <Group>country|state|city|zip</Group>
    <Display_TopN>5</Display_TopN>
    <Chart_TopN>25</Chart_TopN>
</Settings>
</Report_Add>