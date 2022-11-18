<?php
/* Yolk migration
 ********************************************************
 * NOTE: what ever is here is what shows in your database.
 *  if you remove a table or a field  and you  lauch the migration route in your browser,
 * it affect your database.
 * *************************************************************************************.
 * to migrate your database tables , open your websitename/migration.
 */

addtable('vusers', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
    addColumn('email', 'string', 100),
    addColumn('contact', 'string', 100),
    addColumn('password', 'string', 100),
    addColumn('datejoined', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('token', 'text', null, true),
    addColumn('codestatus', 'string', '100', true),
]);

addTable('vproducts', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
    addColumn('price', 'string', 100),
    addColumn('image', 'string', 100),
    addColumn('category', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('dateadded', 'string', 100),
]);

addTable('vcart', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('userid', 'int', 11),
    addColumn('productid', 'int', 11),
    addColumn('token', 'text', null),
    addColumn('dateadded', 'string', 100),
]);

addTable('vcategory', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('catname', 'string', 100),
]);

addTable('vorders', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('userid', 'int', 11),
    addColumn('productid', 'int', 11),
    addColumn('ordno', 'int', 11),
    addColumn('token', 'text', null),
    addColumn('product', 'text', null),
    addColumn('email', 'string', 100),
    addColumn('contact', 'string', 100),
    addColumn('price', 'string', 100),
    addColumn('note', 'text', null),
    addColumn('dateadded', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('paymenttype', 'string', 100),
    addColumn('paymentstatus', 'string', 100, true),
    addColumn('transactionid', 'text', null, true),
    addColumn('network', 'string', 100, true),
    addColumn('paymentref', 'string', 100, true),
    addColumn('paymentdate', 'string', 100, true),
]);

addTable('cmd', [
    addColumn('id', 'int', 11, false, true, true),
    addColumn('name', 'string', 100),
    addColumn('email', 'string', 100),
    addColumn('contact', 'string', 100),
    addColumn('password', 'string', 100),
    addColumn('datejoined', 'string', 100),
    addColumn('status', 'string', 100),
    addColumn('token', 'text', null, true),
    addColumn('codestatus', 'string', '100', true),
]);
