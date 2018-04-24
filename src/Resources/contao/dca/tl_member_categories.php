<?php
/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *******************************************************************/

$strTableName = 'tl_member_categories';



/**
 * Table config
 */

$GLOBALS['TL_DCA'][ $strTableName ] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'sql' => array
        (
            'keys' => array
            (
                'category_id' => 'index',
                'member_id' => 'index'
            )
        )
    ),

    // Fields
    'fields' => array
    (
        'category_id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'member_id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        )
    )
);