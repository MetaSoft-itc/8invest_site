<div data-v-fd87438e="" class="profile-sidebar flex flex-no-shrink flex-column justify-between">
    <div data-v-fd87438e="">
        <div data-v-fd87438e="" class="flex flex-column items-center bg-wave-orange-3 bg-no-repeat bg-cover bg-center padding-x-4 padding-top-4 padding-bottom-3 text-center color-white">
            <div data-v-fd87438e="" class="avatar width-7 height-7 flex flex-no-shrink justify-center items-center border-round relative overflow-hidden bg-no-repeat bg-center bg-cover no-outline">
                <?php if(empty($user->avatar_url)): ?>
                    <svg data-v-fd87438e="" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-half-full fill-white"><path data-v-fd87438e="" d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path></svg>
                <?php else: ?>
                    <img src="<?php echo e(asset($user->avatar_url)); ?>" class="height-full border-round fill-white">
                <?php endif; ?>
            </div>
            <div data-v-fd87438e="" class="avatar-cropper"></div>
            <div data-v-fd87438e="" class="font-medium margin-top-3"><?php echo e(auth()->user()->name); ?></div>
            <div data-v-fd87438e="" class="font-sm margin-bottom-3">
                <div data-v-fd87438e=""> <?php echo e(auth()->user()->email); ?></div>
            </div>
            <div data-v-fd87438e="" class="flex items-center border-rounded-3 bg-white color-primary padding-x-2 padding-y-1 text-accent font-medium margin-y-2">
                
                <?php echo e(\App\Support\Helpers::getUserTariff(auth()->user())); ?>

            </div>
        </div>
        <div data-v-fd87438e="" class="padding-3">
            <?php echo $__env->make('cabinet._account-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div data-v-fd87438e="" class="flex items-center padding-3">
        <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
            <svg data-v-fd87438e="" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="height-full fill-gray">
                <path data-v-fd87438e=""
                      d="M2 17h16v-5h2v6a1 1 0 01-1 1H1a1 1 0 01-1-1v-6h2v5zm8-9H7a5.992 5.992 0 00-4.854 2.473A8.003 8.003 0 0110 4V0l8 6-8 6V8z"></path>
            </svg>
        </div>
        <div data-v-fd87438e="" class="font-sm referral-link">
            <div data-v-fd87438e=""> Пригласи своих партнеров</div>
            <div data-v-fd87438e="" class="flex items-center">
                <div data-v-fd87438e="" class="color-gray text-nowrap text-dots overflow-hidden flex-grow">
                    <?php echo e(route('register', ['code' => $user->code])); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/_account-sidebar.blade.php ENDPATH**/ ?>