<?php

/**
| Page Title
*/

/* Production Clients */
$conf['page']['dt_clients'] = [
	'parent' => 'Production',
	'name' => 'Clients',
	'type' => 'Data',
];

/* Production Projects */
$conf['page']['dt_contacts'] = [
	'parent' => 'Production',
	'name' => 'Contact Person',
	'type' => 'Contact',
];

/* Production Projects */
$conf['page']['dt_projects'] = [
	'parent' => 'Production',
	'name' => 'Projects',
	'type' => 'Data',
];

/* Production Documents */
$conf['page']['dt_document'] = [
	'parent' => 'Production',
	'name' => 'Documents',
	'type' => 'Data',
];

/* Master Document Access Type */
$conf['page']['mr_access_type'] = [
	'parent' => 'Master',
	'name' => 'Document Access Type',
	'type' => 'Data',
];
/* Master Document Departement */
$conf['page']['mr_departement'] = [
	'parent' => 'Master',
	'name' => 'Document Departement',
	'type' => 'Data',
];
/* Master Document Type */
$conf['page']['mr_doc_type'] = [
	'parent' => 'Master',
	'name' => 'Document Type',
	'type' => 'Data',
];
/* Master Document Product Type */
$conf['page']['mr_product_type'] = [
	'parent' => 'Master',
	'name' => 'Document Product Type',
	'type' => 'Data',
];
/* Master Budget Type */
$conf['page']['mr_budget_type'] = [
	'parent' => 'Master',
	'name' => 'Budget Type',
	'type' => 'Data',
];
/* Master Budget Category */
$conf['page']['mr_budget_category'] = [
	'parent' => 'Master',
	'name' => 'Budget Category',
	'type' => 'Data',
];

/* Budget */
$conf['page']['bgt_transaction'] = [
	'parent' => 'Budget',
	'name' => 'Budget Transaction',
	'type' => 'Data',
];


/* Users */
$conf['page']['bo_users'] = [
	'parent' => 'Users Management',
	'name' => 'Users',
	'type' => 'User',
];
/* Menu */
$conf['page']['bo_menu'] = [
	'parent' => 'Users Management',
	'name' => 'Menu',
	'type' => 'Menu',
];
/* Module */
$conf['page']['bo_module'] = [
	'parent' => 'Users Management',
	'name' => 'Module',
	'type' => 'Module',
];
/* Access Level */
$conf['page']['bo_user_level'] = [
	'parent' => 'Users Management',
	'name' => 'Module Access',
	'type' => 'Access',
];


return $conf;