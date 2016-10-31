<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Add new fields to fe_users table
 */
$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
$tmpFeUsersColumns = [
    'comment' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:femanagerextendedcustom/Resources/Private/Language/locallang_db.xlf:' .
            'tx_femanagerextendedcustom_domain_model_user.comment',
        'config' => [
            'type' => 'text',
            'rows' => 15,
            'cols' => 40,
            'eval' => 'trim'
        ],
    ],
    'tx_extbase_type' => [
        'config' => [
            'type' => 'input',
            'default' => '0'
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns, true);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'comment');

/**
 * Add page TSConfig for the two new fields
 */
$tsConfig = 'tx_femanager.flexForm.new.addFieldOptions.comment = Comment' . PHP_EOL;
$tsConfig .= 'tx_femanager.flexForm.edit < tx_femanager.flexForm.new';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($tsConfig);
