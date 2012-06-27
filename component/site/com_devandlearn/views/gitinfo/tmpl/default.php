<?php defined('_JEXEC') || die('=;)');
/**
 * @package    DevAndLearn
 * @subpackage Views
 * @author     Nikolai Plath {@link https://github.com/elkuku}
 * @author     Created on 22-Jun-2012
 * @license    GNU/GPL
 */

echo DalToolbarHelper::display();
?>

<h1 class="DalHeader"><i class="icon-info-sign"></i> Git Info</h1>

<h2>Global</h2>

<i class="icon-file"></i> <code>/home/<?= getenv('JDL_USER') ?>/.gitconfig</code>

<?php foreach($this->gitInfo as $section => $values) : ?>
    <h3><?= $section ?></h3>
    <?php foreach($values as $k => $v) : ?>
        <strong><?= $k ?></strong>: <?= $v ?><br/>
    <?php endforeach; ?>
<?php endforeach;