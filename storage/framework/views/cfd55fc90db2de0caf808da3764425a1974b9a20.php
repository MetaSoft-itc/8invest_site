<?php $__env->startSection('content'); ?>
<main _ngcontent-c0="" class="page-content">
    <div _ngcontent-c0="" class="page-content__content  user-page"><!---->
        <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <app-dashboard _nghost-c5=""><!---->
            <div class="user-page__main"><!---->
                <section class="user-section invest-platform-info fadeInUp"
                         data-show-animation="fadeInUp">
                    <div class="invest-platform-info__titles  titles"><h3
                                                                                           class="titles__sub-title">
                            Инвестиционная платформа Ellis Company</h3>
                        <h2 class="titles__title"><span class="g-text-light"> Ваш ID в системе:</span>
                            <?php echo e($user->id); ?></h2></div>
                    <div class="invest-platform-info__item"><span
                                                                                   class="invest-platform-info__item-ico-wrap"><svg
                                style="width: 20rem; height: 20rem"><use
                                                                                          xlink:href="/img/svg/sprite-main.svg#ico-clock"></use></svg></span><span
                           >Текущее время на сайте: <span class="g-text-medium"><?php echo e(now()->format('d.m.Y H:i:s')); ?></span></span>
                    </div>
                </section>
                <section class="user-section ref-links fadeInUp" data-show-animation="fadeInUp"><h2
                        class="user-section__title">Ваша реферальная ссылка</h2>
                    <div class="ref-links__link  _v-1  link-copy"><h3
                                                                                       class="link-copy__title">
                            Реферальная ссылка</h3>
                        <div class="link-copy__link-wrap  _full">
                            <input class="link-copy__link" value="<?php echo e(route('register', ['code' => $user->code])); ?>" readonly="" type="text">
                        </div>
                    </div><!----></section>
                <section class="user-section _col-3 _full-content bill fadeInUp"
                         data-show-animation="fadeInUp" data-slide-toggle-wrap="">
                    <div class="bill__block  _main">
                        <h2 class="user-section__title"><?php echo app('translator')->get('app.Баланс аккаунта'); ?>:</h2>
                        <table class="bill__table">
                            <tbody>
                            <tr>
                                <td>Рубли:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount); ?></td>
                            </tr>
                            <tr>
                                <td>Доллары:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount); ?></td>
                            </tr>
                            <tr>
                                <td>Евро:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->amount); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->amount); ?></td>
                            </tr>
                            </tbody>
                        </table>

                        <a class="bill__btn  btn  btn--light" href="<?php echo e(route('income')); ?>">Инвестировать</a>
                    </div>
                </section>
                <section class="user-section _col-3 _full-content bill fadeInUp"
                         data-show-animation="fadeInUp" data-slide-toggle-wrap="">
                    <div class="bill__block  _main">
                        <h2 class="user-section__title"><?php echo app('translator')->get('app.На депозитах'); ?></h2>
                        <table class="bill__table">
                            <tbody>
                            <tr>
                                <td>Рубли:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Доллары:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Евро:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->deposits); ?>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>:</td>
                                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->deposits); ?>&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>

                </section>

            </div>
        </app-dashboard>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
<td width="10px"></td>
<td align="left" style="vertical-align:top">
    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <table width="99%">
        <tbody>
        <?php if($user->specialPromoIsActive()): ?>
        <tr>
            <td>
                <script>
                    $(document).ready(function () {
                        var countDownDate = '<?php echo e($user->special_promo_date->getTimestamp() * 1000); ?>';

                        // Update the count down every 1 second
                        var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + Math.floor(distance / (1000 * 60 * 60 * 24)) * 24;
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            document.getElementById("special_promo").innerHTML = hours + ":"
                                + minutes + ":" + seconds;

                            // If the count down is finished, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("special_promo").innerHTML = "EXPIRED";
                            }
                        }, 1000);
                    });
                </script>
                <div class="ac-bals oper special-promo" style="margin-bottom: 20px" align="center">
                    <?php echo app('translator')->get('app.У вас доступна персональная акция при пополнении'); ?> +<?php echo e($user->special_promo_percent); ?>%, <?php echo app('translator')->get('app.еще'); ?> <time id="special_promo">...</time> <?php echo app('translator')->get('app.часов'); ?>
                </div>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td width="100%" align="left" style="vertical-align:top">
                <div class="card h-100">
                    <div class="card-body h-100 Light">
                        <h3 class="mt-2"><?php echo app('translator')->get('app.Календарь прибыли'); ?></h3>
                        <div class="table-container">
                            <div class="d-flex justify-content-between my-5">
                                <h4><?php echo e(now()->format('M')); ?></h4>
                            </div>
                            <table class="w-100 table borderless spaceless">
                                <thead class="table-header">
                                <tr>
                                    <th><?php echo app('translator')->get('app.Понедельник'); ?></th>
                                    <th><?php echo app('translator')->get('app.Вторник'); ?></th>
                                    <th><?php echo app('translator')->get('app.Среда'); ?></th>
                                    <th><?php echo app('translator')->get('app.Четверг'); ?></th>
                                    <th><?php echo app('translator')->get('app.Пятница'); ?></th>
                                    <th><?php echo app('translator')->get('app.Суббота'); ?></th>
                                    <th><?php echo app('translator')->get('app.Воскресенье'); ?></th>
                                </tr>
                                </thead>
                                <tbody><!---->
                                <?php $__currentLoopData = $calendar->chunk(7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item['value'] == null || $item['date']->getTimestamp() > now()->getTimestamp()): ?>
                                            <td class="day">
                                                <div class="disabled-day">

                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td class="day">
                                                <div class="active-day <?php if($item['date']->format('d.m') == now()->format('d.m')): ?> current <?php endif; ?>">
                                                    <div class="d-flex align-items-center">
                                                        <span class="m-2"><?php echo e($item['date']->format('d')); ?></span>
                                                        <h5 class="text-center mt-2">
                                                        <span class="text-center mx-auto">
                                                            <?php if(\Illuminate\Support\Str::startsWith($item['value']->value, 'down')): ?>
                                                                <span class="ml-2 text-danger">
                                                                    <i class="fas fa-sort-down"></i>
                                                                </span>
                                                            <?php endif; ?>
                                                            <?php if(\Illuminate\Support\Str::startsWith($item['value']->value, 'up')): ?>
                                                                <span class="ml-2 text-success">
                                                                    <i class="fas fa-sort-up"></i>
                                                                </span>
                                                            <?php endif; ?>

                                                            <?php echo \Illuminate\Support\Str::replaceFirst('down', '', \Illuminate\Support\Str::replaceFirst('up', '', $item['value']->value)); ?>

                                                        </span>
                                                        </h5>
                                                        <div class="empty-divider"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/index.blade.php ENDPATH**/ ?>