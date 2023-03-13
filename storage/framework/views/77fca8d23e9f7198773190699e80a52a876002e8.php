<?php $__env->startSection('title', __("Home")); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="cabinet" class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4"><?php echo e(__("Your")); ?> <span class="c-violet"><?php echo e(__("investments")); ?></span></h1>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-4">
                <h3 class="section__subheading mb-4 mb-md-0">
                    <?php echo e(__("3 steps")); ?>

                    <i><?php echo e(__("towards success")); ?></i>
                </h3>
            </div>
            <div class="col-md-8 pt-4">
                <ol class="gradient-list">
                   <li><?php echo __("Choose the <br> investment plan"); ?></li>
                    <li><?php echo __("Create <br> a deposit"); ?></li>
                    <li><?php echo __("Enjoy your <br> daily profits!"); ?></li>
                </ol>
            </div>
        </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex position-relative  my-4">
                    <div class="investments-block investments-block--color-1">
                        <div class="lastPr"><?php echo e(__("profit_APY")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                        <style>.lastPr {
                                border-radius: 100px;
                                position: relative;
                                background: #1E2B4E;
                                color: #fff;
                                font-weight: bold;
                                font-size: 30px;
                                text-align: center;
                                padding: 7px 0;
                                margin-bottom: 10px;
                            }

                            .lastPr span {
                                font-weight: normal;
                                font-size: 13px;
                                display: block;
                                width: 100%;
                            }</style>
                        <div style="align-self: flex-start;" class="percent_info">
                            <span class="apy">APY</span>
                            <span><?php echo e(__("apy_APY")); ?></span>
                        </div>
                        
                        <h4 class="investments-block__title my-4"><?php echo e(__("APY trading bot")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("Highly accurate algorithmic bot, making more than 1000 deals in 24 hours")); ?></p>
                        <ul class="investments-block__inlist">
                            
                            <li><?php echo __("Automated trading"); ?></li>
                            <li><?php echo __("Flexible terms"); ?></li>
                            <li><?php echo e(__("Profit is accrued")); ?> <strong><?php echo e(__("every day!")); ?></strong></li>
                            <li><?php echo e(__("Profit withdrawal")); ?> <strong><?php echo e(__("without commissions!")); ?></strong></li>
                            <li><?php echo e(__("The first accrual of profit after")); ?> <strong><?php echo e(__("24 hours!")); ?></strong></li>
                        </ul>
                        <a href="<?php echo e(route('investplan.ftx')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 d-flex position-relative  my-4">
                    <div style="color: #ffffff;" class="investments-block investments-block--color-2">
                        <div class="lastPr"><?php echo e(__("profit_sAPY")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                        <div style="align-self: flex-start;" class="percent_info">
                            <span class="apy">APY</span>
                            <span><?php echo e(__("apy_sAPY")); ?></span>
                        </div>
                        <h4 class="investments-block__title my-4"><?php echo e(__("APY stacking")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("Pairs is a conservative trading of highly liquid cryptocurrencies.")); ?></p>
                        <ul class="investments-block__inlist">
                            
                            <li><?php echo __("Token liquidation"); ?></li>
                            <li><?php echo __("Guaranteed allocation"); ?></li>
                            <li><?php echo __("AirDrop for holders"); ?></li>
                            <li><?php echo e(__("Profit is accrued")); ?> <strong><?php echo e(__("every day!")); ?></strong></li>
                            
                        </ul>
                        <a href="<?php echo e(route('investplan.isolated')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
                    <div class="investments-block investments-block--color-4">
                        <div class="lastPr"><?php echo e(__("profit_Land")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                        <div style="align-self: flex-start;" class="percent_info">
                            <span class="apy">APY</span>
                            <span><?php echo e(__("apy_Land")); ?></span>
                        </div>
                        <h4 class="investments-block__title my-4"><?php echo e(__("Landing")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("Borrowing cryptocurrency as an additional source of income")); ?></p>
                        <ul class="investments-block__inlist">
                            <li><?php echo __("Perpetual lending"); ?></li>
                            <li><?php echo __("Adjustable deposit term"); ?></li>
                            <li><?php echo __("Fixed rate"); ?></li>
                            <li><?php echo __("No commissions"); ?></li>
                            <li><?php echo __("Support for multiple assets"); ?></li>
                            <li><?php echo __("Low entry threshold"); ?></li>
                        </ul>
                        <a href="<?php echo e(route('investplan.stock')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex position-relative mmy-4">
                    <div <?php if($user->special_product == 0): ?> data-phrase="<?php echo e(__("Sold Out")); ?>" <?php endif; ?> class="investments-block investments-block--color-4 <?php if($user->special_product == 0): ?> inactive <?php endif; ?> ">
                        
                        <div style="align-self: flex-start;" class="percent_info">
                        </div>
                        <h4 class="investments-block__title my-4"><?php echo e(__("Investments into the IDO pools")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("A crowdfunding method that allows crypto projects to launch their own token through decentralized exchanges.")); ?></p>
                        <ul class="investments-block__inlist">
                            
                            <li><?php echo __("Providing liquidity"); ?></li>
                            <li><?php echo __("Listing of top projects"); ?></li>
                            <li><?php echo __("No commission fees"); ?></li>
                            
                        </ul>
                        <a href="<?php echo e(route('investplan.ido')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
                    <div class="investments-block investments-block--color-5" style="opacity: 1; visibility: inherit; transform: translate(0px);">
                        <div class="lastPr"><?php echo e(__("profit_Liq")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                        <div style="align-self: flex-start;" class="percent_info">
                            <span class="apy">APY</span>
                            <span><?php echo e(__("apy_Liq")); ?></span>
                        </div>
                        <h4 class="investments-block__title my-4"><?php echo e(__("Liquidity pools")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("is the process of earning cryptocurrency in the form of compensation for providing liquidity on a decentralized exchange, by placing a certain pair of tokens in the pool")); ?></p>
                        <ul class="investments-block__inlist">
                            
                            <li><?php echo __("Profitable pairs"); ?></li>
                            <li><?php echo __("Only relevant course"); ?> </li>
                            <li><?php echo __("Flexible terms"); ?> </li>
                            <li><?php echo e(__("Profit is accrued")); ?> <strong><?php echo e(__("every day!")); ?></strong></li>
                        </ul>
                        <a href="<?php echo e(route('investplan.liquidity')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
                    <div class="investments-block investments-block--color-6" style="opacity: 1; visibility: inherit; transform: translate(0px);">
                        <div class="lastPr"><?php echo e(__("profit_DeFi")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                        <div style="align-self: flex-start;" class="percent_info">
                            <span class="apy">APY</span>
                            <span><?php echo e(__("apy_DeFi")); ?></span>
                        </div>
                        <h4 class="investments-block__title my-4"><?php echo e(__("DeFI staking")); ?></h4>
                        <p class="investments-block__info"><?php echo e(__("DeFi provides automatic execution of transactions in accordance with pre-set conditions.")); ?></p>
                        <ul class="investments-block__inlist">
                            
                            <li><?php echo __("The most favorable conditions"); ?></li>
                            <li><?php echo __("High profitability"); ?></li>
                            <li><?php echo __("No commissions"); ?></li>
                            <li><?php echo e(__("Profit withdrawal")); ?> <strong><?php echo e(__("without commissions!")); ?></strong></li>
                            <li><?php echo e(__("The first accrual of profit after")); ?> <strong><?php echo e(__("24 hours!")); ?></strong></li>
                        </ul>
                        <a href="<?php echo e(route('investplan.stacking')); ?>" class="investments-block__button mt-4"><?php echo e(__("Invest now")); ?></a>
                    </div>
                </div>
            </div>

    </div>
    <section class="faq">
        <div class="container mt-4 py-4">
            <ul class="accordion">
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("How does it work?")); ?> </span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_1")); ?> </p></div>
                    </div>
                </li>
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("What is the minimum and maximum amount of investment?")); ?></span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_2")); ?> </p></div>
                    </div>
                </li>
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("How long does it take to withdraw profit?")); ?></span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_3")); ?> </p></div>
                    </div>
                </li>
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("When can I withdraw my deposit?")); ?></span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_4")); ?></p>
                        </div>
                    </div>
                </li>
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("How much will I earn if I bring a friend to the company?")); ?></span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_5")); ?> </p></div>
                    </div>
                </li>
                <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("Do I have to invest to make money in the affiliate program?")); ?></span>
                    </h4>
                    <div data-accordion="content-container">
                        <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_6")); ?> </p></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sCUM_Crypto/resources/views/cabinet/new/cabinet.blade.php ENDPATH**/ ?>