<div>
    <?php if(isset($_SESSION['is_logged_in'])) :?>
        <a class="btn btn-success btn-share" href="<? echo ROOT_PATH?>shares/add">share now</a>
    <? endif; ?>

    <?php foreach($viewmodel as $item) :?>
        <div class="well">
            <h3><?php echo $item['title'] ?></h3>
            <small> <? echo $item['create_date'] ?></small>
            </hr>

            <P><? echo $item['body']?> </P>
            <a class="btn btn-default" href="<? echo $item['link']; ?>" target="_blank"> Go To Website</a>
        </div>
    <?php endforeach; ?>
</div>