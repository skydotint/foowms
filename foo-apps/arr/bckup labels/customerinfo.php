<?php

$customer_info = array(
    // entity will be index => value eg. 'Customer Name'
    'cus_id'    => "Customer ID",
    'cusname'   => "Customer Name",
    'cusaddress'   => "Customer Address",
    'keycontact_person'   => "Key Contact Person",
    'cellnumber'   => "Mobile Number",
    'inserteddate' => "Inserted Time",
    'updatetime' => "Updated Time"
);

echo var_dump($customer_info);

echo "<h2>" .$customer_info['cusname']. "</h2>";


