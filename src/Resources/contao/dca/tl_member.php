<?php
/*******************************************************************
 * (c) 2018 Stephan Preßl, www.prestep.at <development@prestep.at>
 * All rights reserved
 * Modification, distribution or any other action on or with
 * this file is permitted unless explicitly granted by IIDO
 * www.iido.at <development@iido.at>
 *******************************************************************/

$strTableName = 'tl_member';

/**
 * Fields
 */

$GLOBALS['TL_DCA'][ $strTableName ]['fields']['services'] = array
(
    'label'                   => &$GLOBALS['TL_LANG'][ $strTableName ]['services'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'checkboxWizard',
    'options'                 => $GLOBALS['TL_LANG'][ $strTableName ]['options']['services'],
    'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'extras', 'tl_class'=>'w50'),
    'sql'                     => "blob NULL",
);