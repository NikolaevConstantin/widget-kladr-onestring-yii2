
<?php
use nikolaevconstantin\yii2kladronestring\assets\KladrAsset;

KladrAsset::register($this); 
echo '<script src="/js/lib/jquery-1.11.1.min.js"></script>';
echo '<script src="/js/jquery.kladr.min.js"></script>';

echo '<script src="/js/kladr.js"></script>';

echo "<script>_KLADR.set('{$name}');</script>";
