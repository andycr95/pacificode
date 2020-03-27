<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <!-- statustic-card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Nuevos clientes</p>
                                                <h4 class="m-b-0">852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Entradas</p>
                                                <h4 class="m-b-0">$5,852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Tickets</p>
                                                <h4 class="m-b-0">42</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Ordenes</p>
                                                <h4 class="m-b-0">242</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- statustic-card start -->
                            <div class="col-xl-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-left ">
                                            <h5>Monthly View</h5>
                                        </div>
                                    </div>
                                    <div class="card-block-big">
                                        <div ref="chartdiv" style="height:250px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card feed-card">
                                    <div class="card-header">
                                        <h5>Feeds</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- ticket and update start -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Recent Tickets</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Subject</th>
                                                        <th>Department</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Website down for one week</td>
                                                        <td>Support</td>
                                                        <td>Today 2:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td>27, Aug</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td>27, Aug</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right m-r-20">
                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card latest-update-card">
                                    <div class="card-header">
                                        <h5>Latest Updates</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="latest-update-box">
                                            <div class="row p-t-20 p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">2 hrs ago</p>
                                                    <i class="feather icon-twitter bg-info update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+ 1652 Followers</h6>
                                                    <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                    <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+ 5 New Products were added!</h6>
                                                    <p class="text-muted m-b-0">Congratulations!</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                    <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>Database backup completed!</h6>
                                                    <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-0">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                    <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+2 Friend Requests</h6>
                                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <tr>
                                                                <td class="b-none">
                                                                    <a href="#!" class="align-middle">
                                                                    <img src="/files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Jeny William</h6>
                                                                        <p class="text-muted m-b-0">Graphic Designer</p>
                                                                    </div>
                                                                </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-none">
                                                                    <a href="#!" class="align-middle">
                                                                    <img src="/files/assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>John Deo</h6>
                                                                        <p class="text-muted m-b-0">Web Designer</p>
                                                                    </div>
                                                                </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ticket and update end -->
                        </div>
                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as am4core from "@amcharts/amcharts4/core";
    import * as am4charts from "@amcharts/amcharts4/charts";
    import am4themes_animated from "@amcharts/amcharts4/themes/animated";

    am4core.useTheme(am4themes_animated);
    export default {
        mounted() {
            this.show = true;
            let chart = am4core.create(this.$refs.chartdiv, am4charts.XYChart);

            chart.paddingRight = 20;

            let data = [];
            let visits = 10;
            for (let i = 1; i < 366; i++) {
            visits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
            data.push({ date: new Date(2018, 0, i), name: "name" + i, value: visits });
            }

            chart.data = data;

            let dateAxis = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis.renderer.grid.template.location = 0;

            let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.tooltip.disabled = true;
            valueAxis.renderer.minWidth = 35;

            let series = chart.series.push(new am4charts.LineSeries());
            series.dataFields.dateX = "date";
            series.dataFields.valueY = "value";

            series.tooltipText = "{valueY.value}";
            chart.cursor = new am4charts.XYCursor();

            let scrollbarX = new am4charts.XYChartScrollbar();
            scrollbarX.series.push(series);
            chart.scrollbarX = scrollbarX;

            this.chart = chart;
        },
        data(){
            return {
                show: false
            }
        },
        beforeDestroy() {
            if (this.chart) {
            this.chart.dispose();
            }
        }
    }
</script>
