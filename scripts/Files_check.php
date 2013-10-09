<?php
    class Files_check
    {
        public static $num_of_images = 1;

        public static function checkimg_size($file)
        {
            $size = getimagesize($file);
            return(!empty($file) || ($size>50)) ? size : 'Please upload an image with jpeg format';
        }

        public static function checkfile_size($file)
        {
            $file_type = filetype($file);
            $file_size = filesize($file);
            if(($file_type = 'pdf') && ($file_size<2000))
                return 1;
            else
                return 0;
        }
    }

?>