Image To Degree
======================
Get degree parameter from color coded map.
Sometimes Space agency does not open meshed data ,but in many time open color coded map.
It is tool for get meshed data from such "map".  
  
���x�Ȃǂ̃p�����[�^�[�ɂ���ĐF�������ꂽ�n�}�摜����ܓx�o�x�ƃp�����[�^�[���t�Z���Ď��o�����߂̃c�[���ł�  
NASA�������J���Ă���f�[�^�ł́A���b�V���ŕ\�����ꂽ�f�[�^�����ɏ��Ȃ�����Ńf�[�^�ʂɂ���ĐF�������ꂽ�n�}�������A���̊Ԃ𖄂߂�ړI�ŊJ�����܂���
 

 
HOW TO USE
------
	require 'image_to_degree';
	$format = 'png';
	$file_url = 'http://test.example.com/';
	$min_color = array('r'=>10,'g'=>20,'b' =>30);
	$max_color = array('r'=>40,'g'=>50,'b' =>60);
	$ne_lat    = 35.12;
	$ne_lng    = 135.43;
	$sw_lat    = 35.11';
	$sw_lng    = 135.42;
	echo json_encode(image_to_degree($format,$file_url,$min_color,$max_color,$ne_lat,$ne_lng,$sw_lat,$sw_lng));
 
+   `$format` :
    image format
 
+   `$file_url` :
    url of file
 
+   `$min_color` :
    rgb of min paranmerter color.
    
+   `$max_color` :
    rgb of max paranmerter color.

+   `$ne_lat` :
    north east latitude of map.    
 
+   `$ne_lng` :
    sowth west longitude of map.  

+   `$sw_lat` :
    south west latitude of map.    
 
+   `$sw_lng` :
    north east longitude of map. 

licence
----------
Copyright &copy; 2012 hagiwara takayuki
Licensed under the [PHP Licence][php]

[php]http://www.php.net/license/


