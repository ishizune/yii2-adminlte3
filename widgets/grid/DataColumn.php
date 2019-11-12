<?php
/**
 * @copyright Copyright (c) 2019 Ishizune
 * @license https://github.com/ishizune/adminlte3/blob/master/LICENSE
 * @link https://www.weblagoon.it
 */

namespace ishizune\adminlte3\widgets\grid;

use yii\helpers\Html;

class DataColumn extends \yii\grid\DataColumn
{
    public function renderHeaderCell()
    {
        $provider = $this->grid->dataProvider;
        if ($this->attribute !== null && $this->enableSorting &&
            ($sort = $provider->getSort()) !== false && $sort->hasAttribute($this->attribute)) {
            if (($direction = $sort->getAttributeOrder($this->attribute)) !== null) {
                Html::addCssClass($this->headerOptions, 'sorting_' . ($direction === SORT_DESC ? 'desc' : 'asc'));
            } else {
                Html::addCssClass($this->headerOptions, 'sorting');
            }
        }
        return Html::tag('th', $this->renderHeaderCellContent(), $this->headerOptions);
    }
}
