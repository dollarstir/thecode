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
