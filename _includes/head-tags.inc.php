<?php
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
<style type="text/css">
body {
	background-color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 10pt;
}
td {
	background-color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 10pt;
	font-size: .7em;
}
td.header-table {
	text-align: left;
	vertical-align: center; 
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	color: #404040;
	border-top: 0px #6699CC ridge;
	border-bottom: 0px #6699CC ridge;
	border-right: 0px #6699CC ridge;
	border-left: 0px #6699CC ridge;
	padding-top: 0px;
	padding-bottom: 15px;
	padding-left: 10px;
	padding-right: 10px; 
}
td.main-table {
	text-align: left;
	vertical-align: center; 
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	color: #404040;
	border-top: 1px #6699CC ridge;
	border-bottom: 1px #6699CC ridge;
	border-right: 1px #6699CC ridge;
	border-left: 1px #6699CC ridge;
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 15px;
	padding-right: 15px; 
}
td.search-table {
	text-align: left;
	vertical-align: center; 
	border-top: 1px #6699CC ridge;
	border-bottom: 1px #6699CC ridge;
	border-right: 1px #6699CC ridge;
	border-left: 1px #6699CC ridge;
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	font-size: .7em;
	color: #404040;
	background-color: #fafafa;
	padding-top: 8px;
	padding-bottom: 8px;
	padding-left: 8px;
	padding-right: 8px; 
}
td.search-table-inside {
	vertical-align: top; 
	background-color: #fafafa;
}
td.cell-result-message {
	text-align: center;
	vertical-align: center; 
	border-top: 1px #6699CC ridge;
	border-bottom: 1px #6699CC ridge;
	border-right: 1px #6699CC ridge;
	border-left: 1px #6699CC ridge;
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	font-size: .7em;
	color: #404040;
	background-color: #fafafa;
	padding-top: 8px;
	padding-bottom: 8px;
	padding-left: 8px;
	padding-right: 8px; 
}
td.cell-maintenance-table {
	text-align: left;
	vertical-align: center; 
	border-top: 1px #DD0000 ridge;
	border-bottom: 1px #DD0000 ridge;
	border-right: 1px #DD0000 ridge;
	border-left: 1px #DD0000 ridge;
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	font-size: .7em;
	color: #404040;
	background-color: #fafafa;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
	padding-right: 20px; 
}
td.footer-table {
	text-align: right;
	vertical-align: center; 
	font-family: Verdana, sans-serif, Arial;
	font-weight: normal;
	color: #404040;
	border-top: 0px #6699CC ridge;
	border-bottom: 0px #6699CC ridge;
	border-right: 0px #6699CC ridge;
	border-left: 0px #6699CC ridge;
	padding-top: 0px;
	padding-bottom: 15px;
	padding-left: 10px;
	padding-right: 10px; 
}
font.headline {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 15;
	color: #DD0000;
}
font.subheadline {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12;
	color: #DD0000;
}
a:link {
	font-weight: bold;
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	font-weight: bold;
	color: #0066FF;
	text-decoration: none;
}
a:hover {
	font-weight: bold;
	color: #DD0000;
	text-decoration: none;
}
a:active {
	font-weight: bold;
	color: #0066FF;
	text-decoration: none;
}

a.nobold:link {
	font-weight:100;
	color: #0066FF;
	text-decoration: none;
}
a.nobold:visited {
	font-weight:100;
	color: #0066FF;
	text-decoration: none;
}
a.nobold:hover {
	font-weight:100;
	color: #DD0000;
	text-decoration: none;
}
a.nobold:active {
	font-weight:100;
	color: #0066FF;
	text-decoration: none;
}

a.subtlelink:link {
	font-weight:100;
	color: #000000;
	text-decoration: none;
}
a.subtlelink:visited {
	font-weight:100;
	color: #000000;
	text-decoration: none;
}
a.subtlelink:hover {
	font-weight:100;
	color: #000000;
	text-decoration: underline;
}
a.subtlelink:active {
	font-weight:100;
	color: #000000;
	text-decoration: none;
}
</style>
<style type="text/css">
html { overflow-y: scroll; }
</style>