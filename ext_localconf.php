<?php
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['isOutputting']['tx_forcerealurls2'] = 'EXT:forcerealurls2/class.tx_forcerealurls.php:tx_forcerealurls->check';

// Additional Hook to process check before indexing
// Thanks goes to Reindl Bernd
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all']['tx_forcerealurls2'] = 'EXT:forcerealurls2/class.tx_forcerealurls.php:tx_forcerealurls->check';
?>