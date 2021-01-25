<?php

namespace App\Admin\Controllers;

use App\Models\CrowdfundingProduct;
use App\Models\Product;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class CrowdfundingProductsController extends CommonProductsController
{
    protected $title = '众筹商品';

    public function getProductType()
    {
        return Product::TYPE_CROWDFUNDING;
    }

    public function customGrid(Grid $grid)
    {
        // 展示众筹相关字段
        $grid->column('crowdfunding.target_amount', '目标金额');
        $grid->column('crowdfunding.end_at', '结束时间');
        $grid->column('crowdfunding.total_amount', '目前金额');
        $grid->column('crowdfunding.status', ' 状态')->display(function ($value) {
            return CrowdfundingProduct::$statusMap[$value];
        });
    }

    public function customForm(Form $form)
    {
        // 添加众筹相关字段
        $form->text('crowdfunding.target_amount', '众筹目标金额')->rules('required|numeric|min:0.01');
        $form->datetime('crowdfunding.end_at', '众筹结束时间')->rules('required|date');
    }
}
