<div>
    <h2 style="text-align:center;">Home page</h2>
    <?php if (isset($_SESSION['user_id'])) : ?>
        <h3>Hello, <?php echo ucfirst($_SESSION['user']->getName()) ?>!</h3>
        <br>
<!--                    <pre>-->
<!--<!--                        -->--><?php ////print_r($_SESSION); ?>
<!--                    </pre>-->
    <?php endif ?>
</div>

<h2>Populiarus skelbimai</h2>
<div class="pop-skelbimas-wrap">
<?php foreach ($this->data['popular'] as $popAd): ?>
    <div class="box">
        <?= $popAd->getTitle() ?>
    </div>
    <?php endforeach; ?>
</div>

<h2>Naujausi skelbimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['latest'] as $popAd): ?>
        <div class="box">
            <?= $popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>
