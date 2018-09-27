<?php
/**
 * Created by topalek
 * Date: 27.09.2018
 * Time: 15:20
 */

namespace app\widgets;

use app\modules\admin\models\Category;
use yii\base\Widget;

class CategoryMenu extends Widget
{
    public $view;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if ($this->view === null) {
            $this->view = 'menu';
        }
        $this->view .= '.php';
    }

    public function run()
    {
        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];
        $url = [];

        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
                $tree[$id]['link'] = &$node['slug'];
                $url[] = &$node['keywords'];
            } else {
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
                $this->data[$node['parent_id']]['childs'][$node['id']]['link'] = $this->data[$node['parent_id']]['slug'] . "/" . $node['slug'];
                $url[] = &$node['slug'];
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $str = '';

        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab)
    {
        ob_start();
        include __DIR__ . '/views/' . $this->view;
        return ob_get_clean();
    }
}