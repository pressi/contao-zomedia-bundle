<?php
/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *******************************************************************/

/**
 * Backend modules
 */

$GLOBALS['BE_MOD']['user']['member']['tables'][] = 'tl_member_category';



/**
 * Add permissions
 */

$GLOBALS['TL_PERMISSIONS'][] = 'MemberCategories';
$GLOBALS['TL_PERMISSIONS'][] = 'MemberCategories_default';



/**
 * Add model
 */

$GLOBALS['TL_MODELS']['tl_member_category']  = 'IIDO\ZomediaBundle\Model\MemberCategoryModel';