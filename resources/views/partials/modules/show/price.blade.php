@if ($module->price != '0.0000')
    <div class="tab-content">
        <div class="tab-pane fade" id="yearly">
            <div class="text-center">
                <strong>
                    <div class="text-xl">
                        @if ($module->price == '0.0000')
                            {{ trans('modules.free') }}
                        @else
                            {!! $module->yearly_per_monthly_price !!} <span class="small">{{ trans('modules.per_month') }}</span>
                        @endif
                    </div>
                </strong>
            </div>

            <div class="text-center text-sm mt-3 mb--2" onclick="document.getElementById('tab-pricing-monthly').click();">
                <span style="cursor: pointer;">
                    {{ trans('modules.billed_yearly') }}
                </span>
            </div>

            <div class="text-center text-sm mt-3 mb--2">
                <span style="font-size: 12px;">
                    {!! trans('modules.save_year', ['price' => '$' . $module->raw_monthly_price * 4]) !!}
                </span>
            </div>

            <div class="text-center text-sm mt-3 mb--2">
                <span style="height: 18px;display: block;"></span>
            </div>
        </div>

        <div class="tab-pane fade show active" id="monthly">
            <div class="text-center">
                <strong>
                    <div class="text-xl">
                        @if ($module->price == '0.0000')
                            {{ trans('modules.free') }}
                        @else
                            {!! $module->monthly_price !!} <span class="small">{{ trans('modules.per_month') }}</span>
                        @endif
                    </div>
                </strong>
            </div>

            <div class="text-center text-sm mt-3 mb--2" onclick="document.getElementById('tab-pricing-yearly').click();">
                <span style="cursor: pointer;">
                    {{ trans('modules.billed_monthly') }}
                </span>
            </div>

            <div class="text-center text-sm mt-3 mb--2">
                <span style="font-size: 12px;">
                    {!! trans('modules.if_paid_year', ['price' => $module->yearly_per_monthly_price]) !!}
                </span>
            </div>

            <div class="text-center text-sm mt-3 mb--2">
                <span style="font-size: 12px;">
                    <span class="text-danger">*</span> {!! trans('modules.information_monthly') !!}
                </span>
            </div>
        </div>
    </div>
@else
    <div class="text-center">
        <strong>
            <div class="text-xl">
                {{ trans('modules.free') }}
            </div>
        </strong>
    </div>
@endif
