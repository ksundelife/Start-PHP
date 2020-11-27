<?php 

require DOCROOT . '/engine/db.php'; 

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$item = dbGetRow('select * from imges where id = ' . (int)$_GET['id'] . ';');
    $click = dbGetRow('UPDATE imges SET click = click + 1 where id = '. (int)$_GET['id']  .';');
	if(!$item){
		abort(404);
	}
    $title = 'Креслo-качалкa МИ';
    $content = view('pages/gallery_item', $item);
	return require TPL_PATH . 'layout.php';

}

$title = 'Кресла-качалки МИ';

$data = dbGetAll('select * from imges order by click DESC;');

$content = view('pages/gallery', ['imges' => $data]);

require TPL_PATH . 'layout.php';