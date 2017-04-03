<div class="card card-warning mb-4" v-if="subscriptionIsOnTrial">
    <h5 class="card-header text-white">
        <i class="fa fa-btn fa-clock-o"></i> Free Trial
    </h5>

    <div class="card-block">
        You are currently within your free trial period. Your trial will expire on <strong>@{{ trialEndsAt }}</strong>.
    </div>
</div>
