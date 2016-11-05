<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// 验证码--------------------------------------------------------------

if ( ! function_exists('createCode'))
{
	function createCode($num, $w, $h, $type = '', $filename = ''){
		//创建图片
	    $image = imagecreatetruecolor($w, $h);
	    
	    $bgcolor = imagecolorallocate($image,235,255,255); 
	    imagefill($image, 0, 0, $bgcolor);
	    
	    $fontcolor = imagecolorallocate($image, rand(0,120),rand(0,120), rand(0,120));
	    imagestring($image, 5, 15, 5, $num, $fontcolor);

	    //生成干扰点
	    for($i=0;$i<50;$i++){
	        $pointcolor = imagecolorallocate($image,rand(50,200), rand(50,200), rand(50,200));        
	        imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
	    }

	    //输出图片
	    if (empty($type)) $type = 'png';
	    header("Content-type: image/" . $type);
        $ImageFun = 'image' . $type;
        if (empty($filename)) {
            $ImageFun($image);
        } else {
            $ImageFun($image, $filename);
        }
        //销毁图片
        imagedestroy($image);
	}
}