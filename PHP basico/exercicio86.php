<?php

class File {
    private int $size;
}

class Image extends File {
    private int $width;
    private int $height;
}

class Audio extends File {
    private string $codec;
    private DateTime $duration;
}

class Text extends File {
    private int $fontSize;
}

class CompactaArquivo {
    public static function CompactaRar(File $file) {
        echo "Compactado para RAR";
    }

    public static function CompactaZip(File $file) {
        echo "Compactado para Zip";
    }

    public static function CompactaTar(File $file) {
        echo "Compactado para TAR";
    }
}

?>
