<?php

$bearer = array(
    'bearer_id' => "Bearer ID",
    'bearername' => "Bearer Name",
    'bearercell' => "Bearer Mobile No",
    'warehouse_id' => "Warehouse ID",
    'inserteddate' => "Inserted Time",
    'updatetime' => "Updated Time"
);


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

$engineer_info = array(
    'eng_id'  => "Engineer ID",
    'engname'  => "Engineer Name",
    'engcell'  => "Engineer Mobile No",
    'cus_id'  => "Customer Name",
    'inserteddate' => "Inserted Time",
    'updatetime' => "Updated Time"
);

$projects = array (
        'project_id' => "Project ID",
        'projectname' => "Project Name",
        'cus_id' => "Customer ID",
        'updatetime' => "Updated Time"
        
    );

$response_type = array(
    'responsetype_id' => "Response Type ID",
    'uniquename' => "Unique Name",
    'description' => "Description",
    'hour' => "Hour",
    'updatetime' => "Updated Time"
   
);

$return = array (
    'return_id' => "Return ID",
    'return_rma' => "Return RMA",
    'pickuprequestdate' => "Pickup Request Date",
    'physicallyreceivedate' => "Physically Receive Date",
    'productid' => "Product ID",
    'boxno' => "Box No",
    'description' => "Description",
    'serialno' => "Serial No",
    'revisionstate' => "Revision State",
    'project_id' => "Project ID",
    'return_quantity' => "Return Quantity",
    'uom' => "Unit of measurement",
    'manufacturingdate' => "Manufacturing Date",
    'return_docketnumber' => "Return Docket Number",
    'docketdate' => "Docket Date",
    'bearer_id' => "Bearer Id",
    'siteid' => "Site ID",
    'warehouse_id' => "Warehouse ID",
    'receivedfrom' => "Received From",
    'returningstatus' => "Return Matarial Status",
    'remarks' => "Remarks",
    'userid' => "User ID",
    'inserteddate' => "Inserted Time",
    'updatetime' => "Updated Time"
);

$return_note = array(
    
    'note_id'       => "Note ID",
    'stockout_id'   => "Stock Out ID",
    'inserteddate'  => "Inserted Time",
    'updatetime'    => "Updated Time"
);

$return_status = array(
    'status_id' => "Status ID",
    'statusname' => "Status Name",
    'updatetime' => "Updated Time"
  
);

$ship_type = array(
    'shiptype_id' => "Ship Id",
    'typename' => "Type Name",
    'updatetime' => "Updated Time"
   
);

$stock_balance = array (
    'balance_id' => "Balance ID",
    'stockin_id' => "Stock ID",
    'stockin_serialno' => "Stock In Serial Number",
    'stockin_quantity' => "Stock In Quantity",
    'stockout_id' => "Stock Out ID",
    'stockout_serialno' => "Stock Out Serial Number",
    'stockout_quantity' => "Stock Out Quantity",
    'updatetime' => "Updated Time"
   
);

$stock_in = array (
    'stockin_id' => "Stock In ID",
    'productid' => "Product Id",
    'description' => "Description",
    'revisionstate' => "Revision State",
    'uom' => "Unit of Measurement",
    'in_quantity' => "Stock In Quantity",
    'shiptype' => "Ship Type",
    'warehouse_id' => "Warehouse Id",
    'rackno' => "Rack No.",
    'invoicenumber' => "Invoice Number",
    'shipid' => "Ship ID",
    'mawb' => "MAWB ID",
    'hawb' => "HAWB ID",
    'receiveddate' => "Received Date",
    'in_rma' => "Stock ID RMA",
    'shipfrom' => "Ship From",
    'in_docketnumber' => "Stock In Docket Number",
    'boxno' => "Box Number",
    'serialno' => "Serial Number",
    'project_id' => "Project ID",
    'userid' => "User ID",
    'inserteddate' => "Inserted Time",
    'updatetime' => "Updated Time"
);

$stock_out = array(
    'stockout_id' => "Stock Out ID",
    'out_rma' => "Stock Out RMA",
    'productid' => "Product ID",
    'serialno' => "Serial Number",
    'boxno' => "Box Number",
    'description' => "Description",
    'responsetype' => "Response Type",
    'eng_id' => "Engineer ID",
    'out_docketnumber' => "Stock Out Docket Number",
    'revisionstate' => "Revision State",
    'challannumber' => "Challan Number",
    'receiveddate' => "Receive Date",
    'deliverydate' => "Delivary Date",
    'out_quantity' => "Stock Out Quantity",
    'uom' => "Unit of Measurement",
    'requestnumber' => "Request Number",
    'requestedby' => "Requested By",
    'siteid' => "Site ID",
    'project_id' => "Project ID",
    'requesttime' => "Request Time",
    'deliverytime' => "Delivery Time",
    'receivedtime' => "Received Time",
    'sla' => "SLA",
    'receivername' => "Receiver Name",
    'cellnumber' => "Mobile Number",
    'warehouseid' => "Warehouse ID",
    'transportername' => "Transporter Name",
    'bearer_id' => "Bearer ID",
    'remarks' => "Ramarks",
    'userid' => "User ID",
    'inserteddate' => "Isserted Date",
    'updatetime' => "Updated Time"
);

$uom = array (
    'uom_id' => "Unit of Measurement",
    'measurement' => "Measurement",
    'updatetime' => "Updated Time"
    
);

$warehouses = array (
    'warehouse_id' => "Warehouse ID",
    'warehousename' => "Warehouse Name",
    'warehouseaddress' => "Warehouse Address",
    'customerdefinedname' => "Customer Defined Name",
    'inserteddate' => "Inserted Date",
    'updatetime' => "Updated Time"
);

$wms_users = array (
    'id' => "ID",
    'username' => "User Name",
    'password' => "Password",
    'salt' => "Salt",
    'email' => "Email",
    'utype' => "User Type",
    'cus_id' => "Customer ID",
    'inserteddate' => "Inserted Time",
    'usertype' => "User type",
    'updatetime' => "Updated Time"
);

?>
