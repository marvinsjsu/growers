
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h4>Welcome to GrownBy, please confirm your subscription.</h4>

                    <a href="{{ route('subscribe.activate', $subscription->uuid) }}">Activate</a>
                </div>
            </div>
        </div>
    </div>
</div>

