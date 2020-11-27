<div class="gallery">
    <?php foreach ($imges as $item): ?>
        <a href="/gallery/?id=<?= $item['id'] ?>" target = "_blank" ><img src="<?= $item['url'] ?>" style="width:200px"></a>
    <?php endforeach; ?>
</div>
