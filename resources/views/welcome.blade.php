@if (empty(Session::get('sid')))
<script>
    window.location = "/login";
</script>
@else
    @extends('partials.master')
    @section('title', 'Dashboard')
        
    @section('content')
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Students</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate float-right">
                                    <h3 class="text-right">2000</h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"><canvas width="27" height="19" style="display: inline-block; width: 27px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Teachers</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate float-right">
                                    <h3 class="text-right">50</h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"><canvas width="27" height="19" style="display: inline-block; width: 27px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Courses</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate float-right">
                                    <h3 class="text-right">150</h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"><canvas width="27" height="19" style="display: inline-block; width: 27px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Collection</h2>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate float-right">
                                    <h3 class="text-right">Rs.150,000/-</h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"><canvas width="27" height="19" style="display: inline-block; width: 27px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
@endif
