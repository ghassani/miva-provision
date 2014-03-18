<Import_Add module="productimport">
            <Description>Test Import</Description>

            <Delimiter>tab|comma|semicolon|space|other</Delimiter>  <!-- If module format is delimited, these fields are required -->
            <Delimiter_Other>value</Delimiter_Other>                <!-- Required if Delimiter is "other" -->
            <Header />                                              
            <AutoMap />
            <Map>                                                   <!-- Required if AutoMap is not present, not allowed if it is present -->
                <Field id="field" />                                <!-- One or more fields are required
            </Map>

            <Settings>
                <!-- Module specific data -->
                
                <!-- categoryimport -->
                <Categories>add|update|addupdate|replace|addreplace</Categories>    <!-- Required -->
                <CustomFields>retain|delete</CustomFields>                          <!-- Required -->

                <!-- productimport -->
                <Products>add|update|addupdate|replace|addreplace</Products>        <!-- Required -->
                <CustomFields>retain|delete</CustomFields>                          <!-- Required -->
                <AttributeTemplates>use|copy</AttributeTemplates>                   <!-- Required -->

                <!-- customerimport -->
                <Customers>add|update|addupdate|replace|addreplace</Customers>      <!-- Required -->
                <CustomFields>retain|delete</CustomFields>                          <!-- Required -->

                <!-- provisioningimport -->
                <Groups>                                                            <!-- Optional, default is no group restrictions -->
                    <Group name="x" />
                </Groups>

                <Tags>                                                              <!-- Optional, default is to allow all tags -->
                    <Tag element="x" />                     
                </Tags>
            </Settings>
        </Import_Add>