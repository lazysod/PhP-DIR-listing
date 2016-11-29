<?php 

/**
* 
*/
class iconFinder
{
	
	public function get_icon($data)
	{
		$mime_types = array(
            'txt' => 'text/plain',
            'htm' => '<i class="fa fa-html5"></i>',
            'html' => '<i class="fa fa-html5"></i>',
            'php' => '<i class="fa fa-html5"></i>',
            'css' => '<i class="fa fa-css3"></i>',
            'js' => '<i class="fa fa-file"></i>',
            'json' => '<i class="fa fa-file"></i>',
            'xml' => '<i class="fa fa-file"></i>',
            'swf' => '<i class="fa fa-file"></i>',
            'flv' => 'video/x-flv',

            // images
            'png' => '<i class="fa fa-file-image-o"></i>',
            'jpe' => '<i class="fa fa-file-image-o"></i>',
            'jpeg' => '<i class="fa fa-file-image-o"></i>',
            'jpg' => '<i class="fa fa-file-image-o"></i>',
            'gif' => '<i class="fa fa-file-image-o"></i>',
            'bmp' => '<i class="fa fa-file-image-o"></i>',
            'ico' => '<i class="fa fa-file-image-o"></i>',
            'tiff' => '<i class="fa fa-file-image-o"></i>',
            'tif' => '<i class="fa fa-file-image-o"></i>',
            'svg' => '<i class="fa fa-file-image-o"></i>',
            'svgz' => '<i class="fa fa-file-image-o"></i>',

            // archives
            'zip' => '<i class="fa fa-file-archive-o"></i>',
            'rar' => '<i class="fa fa-file-archive-o"></i>',
            'exe' => '<i class="fa fa-file-archive-o"></i>',
            'msi' => '<i class="fa fa-file-archive-o"></i>',
            'cab' => '<i class="fa fa-file-archive-o"></i>',

            // audio/video
            'mp3' => '<i class="fa fa-file-audio-o"></i>',
            'qt' => '<i class="fa fa-file-audio-o"></i>',
            'mov' => '<i class="fa fa-file-audio-o"></i>',

            // adobe
            'pdf' => '<i class="fa fa-file-pdf-o"></i>',
            'psd' => '<i class="fa fa-file-pdf-o"></i>',
            'ai' => '<i class="fa fa-file-pdf-o"></i>',
            'eps' => '<i class="fa fa-file-pdf-o"></i>',
            'ps' => '<i class="fa fa-file-pdf-o"></i>',

            // ms office
            'doc' => '<i class="fa fa-file-text"></i>',
            'rtf' => '<i class="fa fa-file-text"></i>',
            'xls' => '<i class="fa fa-file-excel-o"></i>',
            'ppt' => '<i class="fa fa-file-text"></i>',
            // open office
            'odt' => '<i class="fa fa-file-text"></i>',
            'ods' => '<i class="fa fa-file-text"></i>',
        );
        $ext = strtolower(array_pop(explode('.',$data)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }else{
            return '<i class="fa fa-file-o"></i>';
        }
	}
}


?>