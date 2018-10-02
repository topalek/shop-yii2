<?php
/**
 * Created by topalek
 * Date: 27.09.2018
 * Time: 15:41
 *
 * @var $category array
 */

use yii\helpers\Url;

?>

<li>
    <a href="<?= Url::to(['/category/view', 'slug' => $category['slug']]) ?>"><?= $category['title'] ?></a>
    <?php if (isset($category['childs'])): ?>
    <ul class="sub-menu">
        <?php endif; ?>
        <?php if (isset($category['childs'])): ?>
        <?= $this->getMenuHtml($category['childs']) ?>
    </ul>
<?php endif; ?>
</li>
