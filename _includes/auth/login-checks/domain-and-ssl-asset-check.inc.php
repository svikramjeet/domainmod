<?php
// domain-and-ssl-asset-check.inc.php
// 
// Domain Manager - A web-based application written in PHP & MySQL used to manage a collection of domain names.
// Copyright (C) 2010 Greg Chetcuti
// 
// Domain Manager is free software; you can redistribute it and/or modify it under the terms of the GNU General
// Public License as published by the Free Software Foundation; either version 2 of the License, or (at your
// option) any later version.
// 
// Domain Manager is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
// implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
// for more details.
// 
// You should have received a copy of the GNU General Public License along with Domain Manager. If not, please 
// see http://www.gnu.org/licenses/
?>
<?php
session_start();

$sql_asset_check = "SELECT id
					FROM registrars
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_registrar'] = "1";

$sql_asset_check = "SELECT id
					FROM registrar_accounts
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_registrar_account'] = "1";

$sql_asset_check = "SELECT id
					FROM domains
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_domain'] = "1";

$sql_asset_check = "SELECT id
					FROM ssl_providers
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_ssl_provider'] = "1";

$sql_asset_check = "SELECT id
					FROM ssl_accounts
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_ssl_account'] = "1";

$sql_asset_check = "SELECT id
					FROM ssl_certs
					WHERE active = '1'
					LIMIT 1";
$result_asset_check = mysql_query($sql_asset_check,$connection) or die(mysql_error());
if (mysql_num_rows($result_asset_check) == 0) $_SESSION['session_need_ssl_cert'] = "1";
?>