<?php $__env->startSection('title', 'Криптотрекинг'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-e4d5b16a=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">

            <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <div class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                <?php echo csrf_field(); ?>
                <div data-v-e4d5b16a="">
                    <div data-v-e4d5b16a="" class="margin-y-4 font-sm"> Как работает криптотрекинг
                        <div data-v-e4d5b16a="" class="color-gray text-tight"> Введите сумму в USD и нажмите кнопку
                            пополнить, после чего заявка на пополнение будет создана, и вам необходимо будет нажать кнопку "Получить реквизиты" после чего вы получите реквизиты и сможете совершить пополнение.
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-column-12">
                <div id="chart"></div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                name: 'Price',
                data: [<?php echo $trackingValues; ?>],
            }],
            chart: {
                type: 'area',
                stacked: false,
                height: 350,
                zoom: {
                    type: 'x',
                    enabled: true,
                    autoScaleYaxis: true
                },
                toolbar: {
                    autoSelected: 'zoom'
                }
            },
            dataLabels: {
                enabled: false
            },
            markers: {
                size: 0,
            },
            title: {
                text: 'Stock Price Movement',
                align: 'left'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.8,
                    opacityTo: 0,
                    // stops: [0, 90, 100]
                },
            },
            yaxis: {
                labels: {
                    formatter: function (val) {
                        return val.toFixed(2);
                    },
                },
                title: {
                    text: 'Price'
                },
            },
            xaxis: {
                type: 'datetime',
                categories: [<?php echo $trackingDates; ?>],
            },
            tooltip: {
                shared: false,
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/tracking.blade.php ENDPATH**/ ?>