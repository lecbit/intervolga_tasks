<?php
$img_path = 'Путь к файлу.png';
function setCompressionQuality($imagePath, $quality)
{

    $backgroundImagick = new \Imagick(realpath($imagePath));
    $imagick = new \Imagick();
    $imagick->setCompressionQuality($quality); //Сжатие качества
    $imagick->newPseudoImage(
        $backgroundImagick->getImageWidth(),
        $backgroundImagick->getImageHeight(),
        'canvas:white'
    );

    $imagick->compositeImage(
        $backgroundImagick,
        \Imagick::COMPOSITE_ATOP,
        0,
        0
    );

    $imagick->setFormat("jpg");
    $imagick->adaptiveResizeImage(200, 100); //Размер киртинки
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}
setCompressionQuality($img_path, 80);
