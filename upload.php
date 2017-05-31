<?php
set_time_limit(0);

$image_name='000037.jpg';
$commend = '/home/rick/Desktop/py-faster-rcnn-fruit/tools/demo_fruit.py --cpu --net vgg16 --input ' . $image_name . ' --output ' . $image_name;
echo '==================';
system($commend,$res);
echo $res;
if (file_exists('../data/demo/' . $_FILES['file']['name'])) {
	echo json_encode($_FILES['file']['name']);
    sleep(20);
    return;
}
else{
/*
//上传文件
if ((($_FILES['file']['type'] == 'image/png')
		|| ($_FILES['file']['type'] == 'image/jpeg')
		|| ($_FILES['file']['type'] == 'image/pjpeg'))
	&& ($_FILES['file']['size'] < 1024 * 1024 * 5)
) {
	if ($_FILES['file']['error'] > 0) {
		echo 'Return Code:' . $_FILES['file']['error'] . '<br />';
	} else {
		if (file_exists('../data/demo/' . $_FILES['file']['name'])) {
			echo $_FILES['file']['name'] . ' already exists . ';
		} else {
			$image_name = $_POST["image"].gitignore;
			//保存文件
			move_uploaded_file($_FILES['file']['tmp_name'],
				'../data/demo/' . $image_name);
			//执行py-faster-rcnn脚本
			$commend = 'python /home/rick/Desktop/py-faster-rcnn-fruit/tools/demo_fruit.py --cpu --net vgg16 --input ' . $image_name . ' --output ' . $image_name;
			exec($commend, $output, $res);
			echo json_encode($image_name);
			//var_dump($commend);
			//var_dump($output);
			//var_dump($res);
			//if ($res == 0) {
				//echo json_encode($image_name);
			//} else {
				//echo json_encode('failed');
			//}
		}
	}
} else {
	echo 'Invalid file';
}
*/
}

