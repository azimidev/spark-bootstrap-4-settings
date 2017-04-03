<spark-payment-method-stripe :user="user" :team="team" :billable-type="billableType" inline-template>
    <div>
        <!-- Current Discount -->
        <div class="card card-success" v-if="currentDiscount">
            <h5 class="card-header text-white">Current Discount</h5>

            <div class="card-block">
                You currently receive a discount of @{{ formattedDiscount(currentDiscount) }}
                for @{{ formattedDiscountDuration(currentDiscount) }}.
            </div>
        </div>

        <!-- Update VAT ID -->
        @if (Spark::collectsEuropeanVat())
            @include('spark::settings.payment-method.update-vat-id')
        @endif

        <!-- Update Card -->
        @include('spark::settings.payment-method.update-payment-method-stripe')

        <div>
            <div v-if="billable.stripe_id">
                <!-- Redeem Coupon -->
                @include('spark::settings.payment-method.redeem-coupon')
            </div>
        </div>
    </div>
</spark-payment-method-stripe>
