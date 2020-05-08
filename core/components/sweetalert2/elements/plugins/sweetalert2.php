<?php
/** @var modX $modx */
if ($modx->event->name != 'OnWebPageInit') return;
if ($SweetAlert2 = $modx->getService('SweetAlert2', 'SweetAlert2', MODX_CORE_PATH . 'components/sweetalert2/model/')) {
    $SweetAlert2->initialize();
}