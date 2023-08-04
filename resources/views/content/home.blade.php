@extends('layouts/master')

@section('title', 'Home')

@section('content')
<!-- View sales -->
<div class="col-xl-4 mb-4 col-lg-5 col-12">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-7">
                <div class="card-body text-nowrap">
                    <h5 class="card-title mb-0">Congratulations {{ Auth::user()->name}}</h5>
                    <p class="mb-2">Best seller of the month</p>
                    <h4 class="text-primary mb-1">$48.9k</h4>
                    <a href="javascript:;" class="btn btn-primary waves-effect waves-light">View Sales</a>
                </div>
            </div>
            <div class="col-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="../../assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- View sales -->

<!-- Statistics -->
<div class="col-xl-8 mb-4 col-lg-7 col-12">
    <div class="card h-100">
        <div class="card-header">
            <div class="d-flex justify-content-between mb-3">
                <h5 class="card-title mb-0">Statistics</h5>
                <small class="text-muted">Updated 1 month ago</small>
            </div>
        </div>
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2">
                            <i class="ti ti-chart-pie-2 ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">230k</h5>
                            <small>Sales</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-info me-3 p-2">
                            <i class="ti ti-users ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">8.549k</h5>
                            <small>Customers</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-danger me-3 p-2">
                            <i class="ti ti-shopping-cart ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">1.423k</h5>
                            <small>Products</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-success me-3 p-2">
                            <i class="ti ti-currency-dollar ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">$9745</h5>
                            <small>Revenue</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics -->

<div class="col-xl-4 col-12">
    <div class="row">
        <!-- Expenses -->
        <div class="col-xl-6 mb-4 col-md-3 col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">82.5k</h5>
                    <small class="text-muted">Expenses</small>
                </div>
                <div class="card-body" style="position: relative;">
                    <div id="expensesChart" style="min-height: 76px;">
                        <div id="apexcharts04o7n3jy" class="apexcharts-canvas apexcharts04o7n3jy apexcharts-theme-light"
                            style="width: 130px; height: 76px;"><svg id="SvgjsSvg1314" width="130" height="76"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1316" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(-7.5, 0)">
                                    <defs id="SvgjsDefs1315">
                                        <clipPath id="gridRectMask04o7n3jy">
                                            <rect id="SvgjsRect1318" width="151" height="142" x="-3" y="-1" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask04o7n3jy"></clipPath>
                                        <clipPath id="nonForecastMask04o7n3jy"></clipPath>
                                        <clipPath id="gridRectMarkerMask04o7n3jy">
                                            <rect id="SvgjsRect1319" width="149" height="144" x="-2" y="-2" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1320" class="apexcharts-radialbar">
                                        <g id="SvgjsG1321">
                                            <g id="SvgjsG1322" class="apexcharts-tracks">
                                                <g id="SvgjsG1323" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="1">
                                                    <path id="apexcharts-radialbarTrack-0"
                                                        d="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 125.36585365853658 70"
                                                        fill="none" fill-opacity="1" stroke="rgba(219,218,222,0.85)"
                                                        stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="3.1280487804878057" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 125.36585365853658 70">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1325">
                                                <g id="SvgjsG1329" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Progress" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1330"
                                                        d="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 112.99759342586304 36.01848429279089"
                                                        fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)"
                                                        stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="6.951219512195124" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                        data:angle="140" data:value="78" index="0" j="0"
                                                        data:pathOrig="M 19.63414634146342 70 A 52.86585365853658 52.86585365853658 0 0 1 112.99759342586304 36.01848429279089">
                                                    </path>
                                                </g>
                                                <circle id="SvgjsCircle1326" r="46.30182926829268" cx="72.5" cy="70"
                                                    class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG1327" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                    <text id="SvgjsText1328" font-family="Helvetica, Arial, sans-serif"
                                                        x="72.5" y="65" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="18px" font-weight="600" fill="#5d596c"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: Helvetica, Arial, sans-serif;">78%</text>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1331" x1="0" y1="0" x2="145" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1332" x1="0" y1="0" x2="145" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                </g>
                                <g id="SvgjsG1317" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="mt-md-2 text-center mt-lg-3 mt-3">
                        <small class="text-muted mt-3">$21k Expenses more than last month</small>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 179px; height: 161px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expenses -->

        <!-- Profit last month -->
        <div class="col-xl-6 mb-4 col-md-3 col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Profit</h5>
                    <small class="text-muted">Last Month</small>
                </div>
                <div class="card-body" style="position: relative;">
                    <div id="profitLastMonth" style="min-height: 93px;">
                        <div id="apexchartstyfhevhvj"
                            class="apexcharts-canvas apexchartstyfhevhvj apexcharts-theme-light"
                            style="width: 130px; height: 93px;"><svg id="SvgjsSvg1622" width="130" height="93"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG1624" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(6, 12)">
                                    <defs id="SvgjsDefs1623">
                                        <clipPath id="gridRectMasktyfhevhvj">
                                            <rect id="SvgjsRect1629" width="123" height="78" x="-3" y="-1" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMasktyfhevhvj"></clipPath>
                                        <clipPath id="nonForecastMasktyfhevhvj"></clipPath>
                                        <clipPath id="gridRectMarkerMasktyfhevhvj">
                                            <rect id="SvgjsRect1630" width="135" height="94" x="-9" y="-9" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine1628" x1="0" y1="0" x2="0" y2="76" stroke="#b6b6b6"
                                        stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                        y="0" width="1" height="76" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG1647" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1648" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG1657" class="apexcharts-grid">
                                        <g id="SvgjsG1658" class="apexcharts-gridlines-horizontal"></g>
                                        <g id="SvgjsG1659" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine1660" x1="0" y1="0" x2="0" y2="76" stroke="#dbdade"
                                                stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1661" x1="23.4" y1="0" x2="23.4" y2="76" stroke="#dbdade"
                                                stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1662" x1="46.8" y1="0" x2="46.8" y2="76" stroke="#dbdade"
                                                stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1663" x1="70.19999999999999" y1="0"
                                                x2="70.19999999999999" y2="76" stroke="#dbdade" stroke-dasharray="6"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1664" x1="93.6" y1="0" x2="93.6" y2="76" stroke="#dbdade"
                                                stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1665" x1="117" y1="0" x2="117" y2="76" stroke="#dbdade"
                                                stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <line id="SvgjsLine1667" x1="0" y1="76" x2="117" y2="76" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                        <line id="SvgjsLine1666" x1="0" y1="1" x2="0" y2="76" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1631" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1632" class="apexcharts-series" seriesName="seriesx1"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1646"
                                                d="M 0 76L 23.4 44.33333333333333L 46.8 63.333333333333336L 70.2 25.333333333333336L 93.6 44.33333333333333L 117 6.333333333333329"
                                                fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMasktyfhevhvj)"
                                                pathTo="M 0 76L 23.4 44.33333333333333L 46.8 63.333333333333336L 70.2 25.333333333333336L 93.6 44.33333333333333L 117 6.333333333333329"
                                                pathFrom="M -1 76L -1 76L 23.4 76L 46.8 76L 70.2 76L 93.6 76L 117 76">
                                            </path>
                                            <g id="SvgjsG1633" class="apexcharts-series-markers-wrap"
                                                data:realIndex="0">
                                                <g id="SvgjsG1635" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMasktyfhevhvj)">
                                                    <circle id="SvgjsCircle1636" r="3.5" cx="0" cy="76"
                                                        class="apexcharts-marker no-pointer-events wzz6z9808"
                                                        stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="0" j="0" index="0"
                                                        default-marker-size="3.5"></circle>
                                                    <circle id="SvgjsCircle1637" r="3.5" cx="23.4"
                                                        cy="44.33333333333333"
                                                        class="apexcharts-marker no-pointer-events w8ybsb9n3k"
                                                        stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="1" j="1" index="0"
                                                        default-marker-size="3.5"></circle>
                                                </g>
                                                <g id="SvgjsG1638" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMasktyfhevhvj)">
                                                    <circle id="SvgjsCircle1639" r="3.5" cx="46.8"
                                                        cy="63.333333333333336"
                                                        class="apexcharts-marker no-pointer-events wf0f9rx68"
                                                        stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="2" j="2" index="0"
                                                        default-marker-size="3.5"></circle>
                                                </g>
                                                <g id="SvgjsG1640" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMasktyfhevhvj)">
                                                    <circle id="SvgjsCircle1641" r="3.5" cx="70.2"
                                                        cy="25.333333333333336"
                                                        class="apexcharts-marker no-pointer-events wvcfi7mg"
                                                        stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="3" j="3" index="0"
                                                        default-marker-size="3.5"></circle>
                                                </g>
                                                <g id="SvgjsG1642" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMasktyfhevhvj)">
                                                    <circle id="SvgjsCircle1643" r="3.5" cx="93.6"
                                                        cy="44.33333333333333"
                                                        class="apexcharts-marker no-pointer-events wcvrjstd7"
                                                        stroke="transparent" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="4" j="4" index="0"
                                                        default-marker-size="3.5"></circle>
                                                </g>
                                                <g id="SvgjsG1644" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMasktyfhevhvj)">
                                                    <circle id="SvgjsCircle1645" r="5" cx="117" cy="6.333333333333329"
                                                        class="apexcharts-marker no-pointer-events wjb3pbk76"
                                                        stroke="#00cfe8" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3.2" stroke-opacity="0.9" rel="5" j="5" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1634" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1668" x1="0" y1="0" x2="117" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1669" x1="0" y1="0" x2="117" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                    <g id="SvgjsG1670" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1671" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1672" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect1673" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1674" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                                <rect id="SvgjsRect1627" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1655" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                    <g id="SvgjsG1656" class="apexcharts-yaxis-texts-g"></g>
                                </g>
                                <g id="SvgjsG1625" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 46.5px;"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">624k</h4>
                        <small class="text-success">+8.24%</small>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 179px; height: 163px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Profit last month -->

        <!-- Generated Leads -->
        <div class="col-xl-12 mb-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="position: relative;">
                        <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                                <small>Monthly Report</small>
                            </div>
                            <div class="chart-statistics">
                                <h3 class="card-title mb-1">4,350</h3>
                                <small class="text-success text-nowrap fw-semibold"><i
                                        class="ti ti-chevron-up me-1"></i> 15.8%</small>
                            </div>
                        </div>
                        <div id="generatedLeadsChart" style="min-height: 153.8px;">
                            <div id="apexchartspkx5wgtuf"
                                class="apexcharts-canvas apexchartspkx5wgtuf apexcharts-theme-light"
                                style="width: 160px; height: 153.8px;"><svg id="SvgjsSvg1386" width="160"
                                    height="153.79999999999998" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1388" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(-13.5, 15)">
                                        <defs id="SvgjsDefs1387">
                                            <clipPath id="gridRectMaskpkx5wgtuf">
                                                <rect id="SvgjsRect1390" width="191" height="132" x="-2" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskpkx5wgtuf"></clipPath>
                                            <clipPath id="nonForecastMaskpkx5wgtuf"></clipPath>
                                            <clipPath id="gridRectMarkerMaskpkx5wgtuf">
                                                <rect id="SvgjsRect1391" width="191" height="136" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1392" class="apexcharts-pie">
                                            <g id="SvgjsG1393" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1394" r="42.27317073170732" cx="93.5" cy="66"
                                                    fill="transparent"></circle>
                                                <g id="SvgjsG1395" class="apexcharts-slices">
                                                    <g id="SvgjsG1396" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Electronic" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1397"
                                                            d="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z"
                                                            fill="rgba(40,199,111,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="88.52459016393442"
                                                            data:startAngle="0" data:strokeWidth="0" data:value="45"
                                                            data:pathOrig="M 93.5 5.609756097560975 A 60.390243902439025 60.390243902439025 0 0 1 153.8702225747668 64.44507721439629 L 135.75915580233675 64.9115540500774 A 42.27317073170732 42.27317073170732 0 0 0 93.5 23.726829268292683 L 93.5 5.609756097560975 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1398" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sports" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1399"
                                                            d="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z"
                                                            fill="#28c76fb3" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="114.09836065573771"
                                                            data:startAngle="88.52459016393442" data:strokeWidth="0"
                                                            data:value="58"
                                                            data:pathOrig="M 153.8702225747668 64.44507721439629 A 60.390243902439025 60.390243902439025 0 0 1 70.26998080793818 121.7435894693956 L 77.23898656555673 105.02051262857694 A 42.27317073170732 42.27317073170732 0 0 0 135.75915580233675 64.9115540500774 L 153.8702225747668 64.44507721439629 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1400" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Decor" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1401"
                                                            d="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z"
                                                            fill="#28c76f80" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="59.016393442622956"
                                                            data:startAngle="202.62295081967213" data:strokeWidth="0"
                                                            data:value="30"
                                                            data:pathOrig="M 70.26998080793818 121.7435894693956 A 60.390243902439025 60.390243902439025 0 0 1 33.75155866739671 74.78096332531551 L 51.676091067177694 72.14667432772086 A 42.27317073170732 42.27317073170732 0 0 0 77.23898656555673 105.02051262857694 L 70.26998080793818 121.7435894693956 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1402" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Fashion" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1403"
                                                            d="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z"
                                                            fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="98.36065573770492"
                                                            data:startAngle="261.6393442622951" data:strokeWidth="0"
                                                            data:value="50"
                                                            data:pathOrig="M 33.75155866739671 74.78096332531551 A 60.390243902439025 60.390243902439025 0 0 1 93.4894599141317 5.6097570173569835 L 93.49262193989219 23.72682991214989 A 42.27317073170732 42.27317073170732 0 0 0 51.676091067177694 72.14667432772086 L 33.75155866739671 74.78096332531551 z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1404" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"><text id="SvgjsText1405"
                                                    font-family="Public Sans" x="93.5" y="86" text-anchor="middle"
                                                    dominant-baseline="auto" font-size=".8125rem" font-weight="400"
                                                    fill="#28c76f" class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: &quot;Public Sans&quot;;">Total</text><text
                                                    id="SvgjsText1406" font-family="Public Sans" x="93.5" y="67"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="1.375rem"
                                                    font-weight="600" fill="#5d596c"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: &quot;Public Sans&quot;;">184</text></g>
                                        </g>
                                        <line id="SvgjsLine1407" x1="0" y1="0" x2="187" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1408" x1="0" y1="0" x2="187" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1389" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-false">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(40, 199, 111);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(40, 199, 111, 0.7);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(40, 199, 111, 0.5);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(40, 199, 111, 0.16);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 333px; height: 155px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Generated Leads -->
    </div>
</div>

<!-- Revenue Report -->
<div class="col-12 col-xl-8 mb-4 col-lg-7">
    <div class="card">
        <div class="card-header pb-3">
            <h5 class="m-0 me-2 card-title">Revenue Report</h5>
        </div>
        <div class="card-body">
            <div class="row row-bordered g-0">
                <div class="col-md-8">
                    <div id="totalRevenueChart" style="min-height: 360px;">
                        <div id="apexchartshdmk9yfb" class="apexcharts-canvas apexchartshdmk9yfb apexcharts-theme-light"
                            style="width: 332px; height: 360px;"><svg id="SvgjsSvg1675" width="332" height="360"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="332" height="360">
                                    <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 180px;">
                                        <div class="apexcharts-legend-series" rel="1" seriesname="Earning"
                                            data:collapsed="false" style="margin: 2px 5px;"><span
                                                class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                style="background: rgb(115, 103, 240) !important; color: rgb(115, 103, 240); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="1" i="0" data:default-text="Earning"
                                                data:collapsed="false"
                                                style="color: rgb(111, 107, 125); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Earning</span>
                                        </div>
                                        <div class="apexcharts-legend-series" rel="2" seriesname="Expense"
                                            data:collapsed="false" style="margin: 2px 5px;"><span
                                                class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                style="background: rgb(255, 159, 67) !important; color: rgb(255, 159, 67); height: 12px; width: 12px; left: -3px; top: 2px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="2" i="1" data:default-text="Expense"
                                                data:collapsed="false"
                                                style="color: rgb(111, 107, 125); font-size: 12px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Expense</span>
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom,
                                        .apexcharts-legend.apx-legend-position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1677" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(55.52696228027344, 71)">
                                    <defs id="SvgjsDefs1676">
                                        <linearGradient id="SvgjsLinearGradient1681" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1682" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1683" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1684" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskhdmk9yfb">
                                            <rect id="SvgjsRect1686" width="276.47303771972656" height="263.73" x="-5"
                                                y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskhdmk9yfb"></clipPath>
                                        <clipPath id="nonForecastMaskhdmk9yfb"></clipPath>
                                        <clipPath id="gridRectMarkerMaskhdmk9yfb">
                                            <rect id="SvgjsRect1687" width="270.47303771972656" height="261.73" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1685" width="0" height="257.73" x="0" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1681)" class="apexcharts-xcrosshairs" y2="257.73"
                                        filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1711" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1712" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -9)"><text id="SvgjsText1714"
                                                font-family="Public Sans" x="14.80405765109592" y="281.73"
                                                text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a5a3ae"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1715">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1717" font-family="Public Sans"
                                                x="44.412172953287765" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1718">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1720" font-family="Public Sans"
                                                x="74.02028825547961" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1721">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1723" font-family="Public Sans"
                                                x="103.62840355767145" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1724">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1726" font-family="Public Sans"
                                                x="133.23651885986328" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1727">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1729" font-family="Public Sans"
                                                x="162.84463416205512" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1730">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1732" font-family="Public Sans"
                                                x="192.45274946424695" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1733">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1735" font-family="Public Sans"
                                                x="222.06086476643878" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1736">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1738" font-family="Public Sans"
                                                x="251.66898006863065" y="281.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: &quot;Public Sans&quot;;">
                                                <tspan id="SvgjsTspan1739">Sep</tspan>
                                                <title>Sep</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1754" class="apexcharts-grid">
                                        <g id="SvgjsG1755" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1757" x1="0" y1="0" x2="266.47303771972656" y2="0"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1758" x1="0" y1="51.54600000000001"
                                                x2="266.47303771972656" y2="51.54600000000001" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1759" x1="0" y1="103.09200000000001"
                                                x2="266.47303771972656" y2="103.09200000000001" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1760" x1="0" y1="154.63800000000003"
                                                x2="266.47303771972656" y2="154.63800000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1761" x1="0" y1="206.18400000000003"
                                                x2="266.47303771972656" y2="206.18400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1762" x1="0" y1="257.73" x2="266.47303771972656"
                                                y2="257.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1756" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine1764" x1="0" y1="257.73" x2="266.47303771972656" y2="257.73"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1763" x1="0" y1="1" x2="0" y2="257.73" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1688" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1689" class="apexcharts-series" seriesName="Earning" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1691"
                                                d="M 4.4412172953287765 144.63800000000003L 4.4412172953287765 25.46380000000002Q 4.4412172953287765 15.46380000000002 14.441217295328777 15.46380000000002L 9.166898006863065 15.46380000000002Q 19.166898006863065 15.46380000000002 19.166898006863065 25.46380000000002L 19.166898006863065 25.46380000000002L 19.166898006863065 144.63800000000003Q 19.166898006863065 154.63800000000003 9.166898006863065 154.63800000000003L 14.441217295328777 154.63800000000003Q 4.4412172953287765 154.63800000000003 4.4412172953287765 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 4.4412172953287765 144.63800000000003L 4.4412172953287765 25.46380000000002Q 4.4412172953287765 15.46380000000002 14.441217295328777 15.46380000000002L 9.166898006863065 15.46380000000002Q 19.166898006863065 15.46380000000002 19.166898006863065 25.46380000000002L 19.166898006863065 25.46380000000002L 19.166898006863065 144.63800000000003Q 19.166898006863065 154.63800000000003 9.166898006863065 154.63800000000003L 14.441217295328777 154.63800000000003Q 4.4412172953287765 154.63800000000003 4.4412172953287765 144.63800000000003z"
                                                pathFrom="M 4.4412172953287765 144.63800000000003L 4.4412172953287765 144.63800000000003L 19.166898006863065 144.63800000000003L 19.166898006863065 144.63800000000003L 19.166898006863065 144.63800000000003L 19.166898006863065 144.63800000000003L 19.166898006863065 144.63800000000003L 4.4412172953287765 144.63800000000003"
                                                cy="15.46380000000002" cx="31.049332597520618" j="0" val="270"
                                                barHeight="139.1742" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1692"
                                                d="M 34.04933259752062 144.63800000000003L 34.04933259752062 56.39140000000003Q 34.04933259752062 46.39140000000003 44.04933259752062 46.39140000000003L 38.775013309054906 46.39140000000003Q 48.775013309054906 46.39140000000003 48.775013309054906 56.39140000000003L 48.775013309054906 56.39140000000003L 48.775013309054906 144.63800000000003Q 48.775013309054906 154.63800000000003 38.775013309054906 154.63800000000003L 44.04933259752062 154.63800000000003Q 34.04933259752062 154.63800000000003 34.04933259752062 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 34.04933259752062 144.63800000000003L 34.04933259752062 56.39140000000003Q 34.04933259752062 46.39140000000003 44.04933259752062 46.39140000000003L 38.775013309054906 46.39140000000003Q 48.775013309054906 46.39140000000003 48.775013309054906 56.39140000000003L 48.775013309054906 56.39140000000003L 48.775013309054906 144.63800000000003Q 48.775013309054906 154.63800000000003 38.775013309054906 154.63800000000003L 44.04933259752062 154.63800000000003Q 34.04933259752062 154.63800000000003 34.04933259752062 144.63800000000003z"
                                                pathFrom="M 34.04933259752062 144.63800000000003L 34.04933259752062 144.63800000000003L 48.775013309054906 144.63800000000003L 48.775013309054906 144.63800000000003L 48.775013309054906 144.63800000000003L 48.775013309054906 144.63800000000003L 48.775013309054906 144.63800000000003L 34.04933259752062 144.63800000000003"
                                                cy="46.39140000000003" cx="60.65744789971246" j="1" val="210"
                                                barHeight="108.2466" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1693"
                                                d="M 63.65744789971246 144.63800000000003L 63.65744789971246 71.85520000000002Q 63.65744789971246 61.855200000000025 73.65744789971245 61.855200000000025L 68.38312861124675 61.855200000000025Q 78.38312861124675 61.855200000000025 78.38312861124675 71.85520000000002L 78.38312861124675 71.85520000000002L 78.38312861124675 144.63800000000003Q 78.38312861124675 154.63800000000003 68.38312861124675 154.63800000000003L 73.65744789971245 154.63800000000003Q 63.65744789971246 154.63800000000003 63.65744789971246 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 63.65744789971246 144.63800000000003L 63.65744789971246 71.85520000000002Q 63.65744789971246 61.855200000000025 73.65744789971245 61.855200000000025L 68.38312861124675 61.855200000000025Q 78.38312861124675 61.855200000000025 78.38312861124675 71.85520000000002L 78.38312861124675 71.85520000000002L 78.38312861124675 144.63800000000003Q 78.38312861124675 154.63800000000003 68.38312861124675 154.63800000000003L 73.65744789971245 154.63800000000003Q 63.65744789971246 154.63800000000003 63.65744789971246 144.63800000000003z"
                                                pathFrom="M 63.65744789971246 144.63800000000003L 63.65744789971246 144.63800000000003L 78.38312861124675 144.63800000000003L 78.38312861124675 144.63800000000003L 78.38312861124675 144.63800000000003L 78.38312861124675 144.63800000000003L 78.38312861124675 144.63800000000003L 63.65744789971246 144.63800000000003"
                                                cy="61.855200000000025" cx="90.2655632019043" j="2" val="180"
                                                barHeight="92.78280000000001" barWidth="20.725680711534288">
                                            </path>
                                            <path id="SvgjsPath1694"
                                                d="M 93.2655632019043 144.63800000000003L 93.2655632019043 61.546000000000035Q 93.2655632019043 51.546000000000035 103.2655632019043 51.546000000000035L 97.99124391343858 51.546000000000035Q 107.99124391343858 51.546000000000035 107.99124391343858 61.546000000000035L 107.99124391343858 61.546000000000035L 107.99124391343858 144.63800000000003Q 107.99124391343858 154.63800000000003 97.99124391343858 154.63800000000003L 103.2655632019043 154.63800000000003Q 93.2655632019043 154.63800000000003 93.2655632019043 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 93.2655632019043 144.63800000000003L 93.2655632019043 61.546000000000035Q 93.2655632019043 51.546000000000035 103.2655632019043 51.546000000000035L 97.99124391343858 51.546000000000035Q 107.99124391343858 51.546000000000035 107.99124391343858 61.546000000000035L 107.99124391343858 61.546000000000035L 107.99124391343858 144.63800000000003Q 107.99124391343858 154.63800000000003 97.99124391343858 154.63800000000003L 103.2655632019043 154.63800000000003Q 93.2655632019043 154.63800000000003 93.2655632019043 144.63800000000003z"
                                                pathFrom="M 93.2655632019043 144.63800000000003L 93.2655632019043 144.63800000000003L 107.99124391343858 144.63800000000003L 107.99124391343858 144.63800000000003L 107.99124391343858 144.63800000000003L 107.99124391343858 144.63800000000003L 107.99124391343858 144.63800000000003L 93.2655632019043 144.63800000000003"
                                                cy="51.546000000000035" cx="119.87367850409615" j="3" val="200"
                                                barHeight="103.092" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1695"
                                                d="M 122.87367850409615 144.63800000000003L 122.87367850409615 35.773000000000025Q 122.87367850409615 25.773000000000025 132.87367850409615 25.773000000000025L 127.59935921563044 25.773000000000025Q 137.59935921563044 25.773000000000025 137.59935921563044 35.773000000000025L 137.59935921563044 35.773000000000025L 137.59935921563044 144.63800000000003Q 137.59935921563044 154.63800000000003 127.59935921563044 154.63800000000003L 132.87367850409615 154.63800000000003Q 122.87367850409615 154.63800000000003 122.87367850409615 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 122.87367850409615 144.63800000000003L 122.87367850409615 35.773000000000025Q 122.87367850409615 25.773000000000025 132.87367850409615 25.773000000000025L 127.59935921563044 25.773000000000025Q 137.59935921563044 25.773000000000025 137.59935921563044 35.773000000000025L 137.59935921563044 35.773000000000025L 137.59935921563044 144.63800000000003Q 137.59935921563044 154.63800000000003 127.59935921563044 154.63800000000003L 132.87367850409615 154.63800000000003Q 122.87367850409615 154.63800000000003 122.87367850409615 144.63800000000003z"
                                                pathFrom="M 122.87367850409615 144.63800000000003L 122.87367850409615 144.63800000000003L 137.59935921563044 144.63800000000003L 137.59935921563044 144.63800000000003L 137.59935921563044 144.63800000000003L 137.59935921563044 144.63800000000003L 137.59935921563044 144.63800000000003L 122.87367850409615 144.63800000000003"
                                                cy="25.773000000000025" cx="149.48179380628798" j="4" val="250"
                                                barHeight="128.865" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1696"
                                                d="M 152.48179380628798 144.63800000000003L 152.48179380628798 20.309200000000033Q 152.48179380628798 10.309200000000033 162.48179380628798 10.309200000000033L 157.20747451782228 10.309200000000033Q 167.20747451782228 10.309200000000033 167.20747451782228 20.309200000000033L 167.20747451782228 20.309200000000033L 167.20747451782228 144.63800000000003Q 167.20747451782228 154.63800000000003 157.20747451782228 154.63800000000003L 162.48179380628798 154.63800000000003Q 152.48179380628798 154.63800000000003 152.48179380628798 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 152.48179380628798 144.63800000000003L 152.48179380628798 20.309200000000033Q 152.48179380628798 10.309200000000033 162.48179380628798 10.309200000000033L 157.20747451782228 10.309200000000033Q 167.20747451782228 10.309200000000033 167.20747451782228 20.309200000000033L 167.20747451782228 20.309200000000033L 167.20747451782228 144.63800000000003Q 167.20747451782228 154.63800000000003 157.20747451782228 154.63800000000003L 162.48179380628798 154.63800000000003Q 152.48179380628798 154.63800000000003 152.48179380628798 144.63800000000003z"
                                                pathFrom="M 152.48179380628798 144.63800000000003L 152.48179380628798 144.63800000000003L 167.20747451782228 144.63800000000003L 167.20747451782228 144.63800000000003L 167.20747451782228 144.63800000000003L 167.20747451782228 144.63800000000003L 167.20747451782228 144.63800000000003L 152.48179380628798 144.63800000000003"
                                                cy="10.309200000000033" cx="179.08990910847982" j="5" val="280"
                                                barHeight="144.3288" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1697"
                                                d="M 182.08990910847982 144.63800000000003L 182.08990910847982 35.773000000000025Q 182.08990910847982 25.773000000000025 192.08990910847982 25.773000000000025L 186.8155898200141 25.773000000000025Q 196.8155898200141 25.773000000000025 196.8155898200141 35.773000000000025L 196.8155898200141 35.773000000000025L 196.8155898200141 144.63800000000003Q 196.8155898200141 154.63800000000003 186.8155898200141 154.63800000000003L 192.08990910847982 154.63800000000003Q 182.08990910847982 154.63800000000003 182.08990910847982 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 182.08990910847982 144.63800000000003L 182.08990910847982 35.773000000000025Q 182.08990910847982 25.773000000000025 192.08990910847982 25.773000000000025L 186.8155898200141 25.773000000000025Q 196.8155898200141 25.773000000000025 196.8155898200141 35.773000000000025L 196.8155898200141 35.773000000000025L 196.8155898200141 144.63800000000003Q 196.8155898200141 154.63800000000003 186.8155898200141 154.63800000000003L 192.08990910847982 154.63800000000003Q 182.08990910847982 154.63800000000003 182.08990910847982 144.63800000000003z"
                                                pathFrom="M 182.08990910847982 144.63800000000003L 182.08990910847982 144.63800000000003L 196.8155898200141 144.63800000000003L 196.8155898200141 144.63800000000003L 196.8155898200141 144.63800000000003L 196.8155898200141 144.63800000000003L 196.8155898200141 144.63800000000003L 182.08990910847982 144.63800000000003"
                                                cy="25.773000000000025" cx="208.69802441067165" j="6" val="250"
                                                barHeight="128.865" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1698"
                                                d="M 211.69802441067165 144.63800000000003L 211.69802441067165 25.46380000000002Q 211.69802441067165 15.46380000000002 221.69802441067165 15.46380000000002L 216.42370512220594 15.46380000000002Q 226.42370512220594 15.46380000000002 226.42370512220594 25.46380000000002L 226.42370512220594 25.46380000000002L 226.42370512220594 144.63800000000003Q 226.42370512220594 154.63800000000003 216.42370512220594 154.63800000000003L 221.69802441067165 154.63800000000003Q 211.69802441067165 154.63800000000003 211.69802441067165 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 211.69802441067165 144.63800000000003L 211.69802441067165 25.46380000000002Q 211.69802441067165 15.46380000000002 221.69802441067165 15.46380000000002L 216.42370512220594 15.46380000000002Q 226.42370512220594 15.46380000000002 226.42370512220594 25.46380000000002L 226.42370512220594 25.46380000000002L 226.42370512220594 144.63800000000003Q 226.42370512220594 154.63800000000003 216.42370512220594 154.63800000000003L 221.69802441067165 154.63800000000003Q 211.69802441067165 154.63800000000003 211.69802441067165 144.63800000000003z"
                                                pathFrom="M 211.69802441067165 144.63800000000003L 211.69802441067165 144.63800000000003L 226.42370512220594 144.63800000000003L 226.42370512220594 144.63800000000003L 226.42370512220594 144.63800000000003L 226.42370512220594 144.63800000000003L 226.42370512220594 144.63800000000003L 211.69802441067165 144.63800000000003"
                                                cy="15.46380000000002" cx="238.30613971286348" j="7" val="270"
                                                barHeight="139.1742" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1699"
                                                d="M 241.30613971286348 144.63800000000003L 241.30613971286348 87.31900000000003Q 241.30613971286348 77.31900000000003 251.30613971286348 77.31900000000003L 246.03182042439778 77.31900000000003Q 256.0318204243978 77.31900000000003 256.0318204243978 87.31900000000003L 256.0318204243978 87.31900000000003L 256.0318204243978 144.63800000000003Q 256.0318204243978 154.63800000000003 246.03182042439778 154.63800000000003L 251.30613971286348 154.63800000000003Q 241.30613971286348 154.63800000000003 241.30613971286348 144.63800000000003z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 241.30613971286348 144.63800000000003L 241.30613971286348 87.31900000000003Q 241.30613971286348 77.31900000000003 251.30613971286348 77.31900000000003L 246.03182042439778 77.31900000000003Q 256.0318204243978 77.31900000000003 256.0318204243978 87.31900000000003L 256.0318204243978 87.31900000000003L 256.0318204243978 144.63800000000003Q 256.0318204243978 154.63800000000003 246.03182042439778 154.63800000000003L 251.30613971286348 154.63800000000003Q 241.30613971286348 154.63800000000003 241.30613971286348 144.63800000000003z"
                                                pathFrom="M 241.30613971286348 144.63800000000003L 241.30613971286348 144.63800000000003L 256.0318204243978 144.63800000000003L 256.0318204243978 144.63800000000003L 256.0318204243978 144.63800000000003L 256.0318204243978 144.63800000000003L 256.0318204243978 144.63800000000003L 241.30613971286348 144.63800000000003"
                                                cy="77.31900000000003" cx="267.91425501505535" j="8" val="150"
                                                barHeight="77.319" barWidth="20.725680711534288"></path>
                                        </g>
                                        <g id="SvgjsG1700" class="apexcharts-series" seriesName="Expense" rel="2"
                                            data:realIndex="1">
                                            <path id="SvgjsPath1702"
                                                d="M 4.4412172953287765 174.63800000000003L 4.4412172953287765 226.80240000000003Q 4.4412172953287765 236.80240000000003 14.441217295328777 236.80240000000003L 9.166898006863065 236.80240000000003Q 19.166898006863065 236.80240000000003 19.166898006863065 226.80240000000003L 19.166898006863065 226.80240000000003L 19.166898006863065 174.63800000000003Q 19.166898006863065 164.63800000000003 9.166898006863065 164.63800000000003L 14.441217295328777 164.63800000000003Q 4.4412172953287765 164.63800000000003 4.4412172953287765 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 4.4412172953287765 174.63800000000003L 4.4412172953287765 226.80240000000003Q 4.4412172953287765 236.80240000000003 14.441217295328777 236.80240000000003L 9.166898006863065 236.80240000000003Q 19.166898006863065 236.80240000000003 19.166898006863065 226.80240000000003L 19.166898006863065 226.80240000000003L 19.166898006863065 174.63800000000003Q 19.166898006863065 164.63800000000003 9.166898006863065 164.63800000000003L 14.441217295328777 164.63800000000003Q 4.4412172953287765 164.63800000000003 4.4412172953287765 174.63800000000003z"
                                                pathFrom="M 4.4412172953287765 174.63800000000003L 4.4412172953287765 174.63800000000003L 19.166898006863065 174.63800000000003L 19.166898006863065 174.63800000000003L 19.166898006863065 174.63800000000003L 19.166898006863065 174.63800000000003L 19.166898006863065 174.63800000000003L 4.4412172953287765 174.63800000000003"
                                                cy="216.80240000000003" cx="31.049332597520618" j="0" val="-140"
                                                barHeight="-72.1644" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1703"
                                                d="M 34.04933259752062 174.63800000000003L 34.04933259752062 237.11160000000004Q 34.04933259752062 247.11160000000004 44.04933259752062 247.11160000000004L 38.775013309054906 247.11160000000004Q 48.775013309054906 247.11160000000004 48.775013309054906 237.11160000000004L 48.775013309054906 237.11160000000004L 48.775013309054906 174.63800000000003Q 48.775013309054906 164.63800000000003 38.775013309054906 164.63800000000003L 44.04933259752062 164.63800000000003Q 34.04933259752062 164.63800000000003 34.04933259752062 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 34.04933259752062 174.63800000000003L 34.04933259752062 237.11160000000004Q 34.04933259752062 247.11160000000004 44.04933259752062 247.11160000000004L 38.775013309054906 247.11160000000004Q 48.775013309054906 247.11160000000004 48.775013309054906 237.11160000000004L 48.775013309054906 237.11160000000004L 48.775013309054906 174.63800000000003Q 48.775013309054906 164.63800000000003 38.775013309054906 164.63800000000003L 44.04933259752062 164.63800000000003Q 34.04933259752062 164.63800000000003 34.04933259752062 174.63800000000003z"
                                                pathFrom="M 34.04933259752062 174.63800000000003L 34.04933259752062 174.63800000000003L 48.775013309054906 174.63800000000003L 48.775013309054906 174.63800000000003L 48.775013309054906 174.63800000000003L 48.775013309054906 174.63800000000003L 48.775013309054906 174.63800000000003L 34.04933259752062 174.63800000000003"
                                                cy="227.11160000000004" cx="60.65744789971246" j="1" val="-160"
                                                barHeight="-82.4736" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1704"
                                                d="M 63.65744789971246 174.63800000000003L 63.65744789971246 247.42080000000004Q 63.65744789971246 257.42080000000004 73.65744789971245 257.42080000000004L 68.38312861124675 257.42080000000004Q 78.38312861124675 257.42080000000004 78.38312861124675 247.42080000000004L 78.38312861124675 247.42080000000004L 78.38312861124675 174.63800000000003Q 78.38312861124675 164.63800000000003 68.38312861124675 164.63800000000003L 73.65744789971245 164.63800000000003Q 63.65744789971246 164.63800000000003 63.65744789971246 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 63.65744789971246 174.63800000000003L 63.65744789971246 247.42080000000004Q 63.65744789971246 257.42080000000004 73.65744789971245 257.42080000000004L 68.38312861124675 257.42080000000004Q 78.38312861124675 257.42080000000004 78.38312861124675 247.42080000000004L 78.38312861124675 247.42080000000004L 78.38312861124675 174.63800000000003Q 78.38312861124675 164.63800000000003 68.38312861124675 164.63800000000003L 73.65744789971245 164.63800000000003Q 63.65744789971246 164.63800000000003 63.65744789971246 174.63800000000003z"
                                                pathFrom="M 63.65744789971246 174.63800000000003L 63.65744789971246 174.63800000000003L 78.38312861124675 174.63800000000003L 78.38312861124675 174.63800000000003L 78.38312861124675 174.63800000000003L 78.38312861124675 174.63800000000003L 78.38312861124675 174.63800000000003L 63.65744789971246 174.63800000000003"
                                                cy="237.42080000000004" cx="90.2655632019043" j="2" val="-180"
                                                barHeight="-92.78280000000001" barWidth="20.725680711534288">
                                            </path>
                                            <path id="SvgjsPath1705"
                                                d="M 93.2655632019043 174.63800000000003L 93.2655632019043 231.95700000000005Q 93.2655632019043 241.95700000000005 103.2655632019043 241.95700000000005L 97.99124391343858 241.95700000000005Q 107.99124391343858 241.95700000000005 107.99124391343858 231.95700000000005L 107.99124391343858 231.95700000000005L 107.99124391343858 174.63800000000003Q 107.99124391343858 164.63800000000003 97.99124391343858 164.63800000000003L 103.2655632019043 164.63800000000003Q 93.2655632019043 164.63800000000003 93.2655632019043 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 93.2655632019043 174.63800000000003L 93.2655632019043 231.95700000000005Q 93.2655632019043 241.95700000000005 103.2655632019043 241.95700000000005L 97.99124391343858 241.95700000000005Q 107.99124391343858 241.95700000000005 107.99124391343858 231.95700000000005L 107.99124391343858 231.95700000000005L 107.99124391343858 174.63800000000003Q 107.99124391343858 164.63800000000003 97.99124391343858 164.63800000000003L 103.2655632019043 164.63800000000003Q 93.2655632019043 164.63800000000003 93.2655632019043 174.63800000000003z"
                                                pathFrom="M 93.2655632019043 174.63800000000003L 93.2655632019043 174.63800000000003L 107.99124391343858 174.63800000000003L 107.99124391343858 174.63800000000003L 107.99124391343858 174.63800000000003L 107.99124391343858 174.63800000000003L 107.99124391343858 174.63800000000003L 93.2655632019043 174.63800000000003"
                                                cy="221.95700000000005" cx="119.87367850409615" j="3" val="-150"
                                                barHeight="-77.319" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1706"
                                                d="M 122.87367850409615 174.63800000000003L 122.87367850409615 206.18400000000003Q 122.87367850409615 216.18400000000003 132.87367850409615 216.18400000000003L 127.59935921563044 216.18400000000003Q 137.59935921563044 216.18400000000003 137.59935921563044 206.18400000000003L 137.59935921563044 206.18400000000003L 137.59935921563044 174.63800000000003Q 137.59935921563044 164.63800000000003 127.59935921563044 164.63800000000003L 132.87367850409615 164.63800000000003Q 122.87367850409615 164.63800000000003 122.87367850409615 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 122.87367850409615 174.63800000000003L 122.87367850409615 206.18400000000003Q 122.87367850409615 216.18400000000003 132.87367850409615 216.18400000000003L 127.59935921563044 216.18400000000003Q 137.59935921563044 216.18400000000003 137.59935921563044 206.18400000000003L 137.59935921563044 206.18400000000003L 137.59935921563044 174.63800000000003Q 137.59935921563044 164.63800000000003 127.59935921563044 164.63800000000003L 132.87367850409615 164.63800000000003Q 122.87367850409615 164.63800000000003 122.87367850409615 174.63800000000003z"
                                                pathFrom="M 122.87367850409615 174.63800000000003L 122.87367850409615 174.63800000000003L 137.59935921563044 174.63800000000003L 137.59935921563044 174.63800000000003L 137.59935921563044 174.63800000000003L 137.59935921563044 174.63800000000003L 137.59935921563044 174.63800000000003L 122.87367850409615 174.63800000000003"
                                                cy="196.18400000000003" cx="149.48179380628798" j="4" val="-100"
                                                barHeight="-51.546" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1707"
                                                d="M 152.48179380628798 174.63800000000003L 152.48179380628798 185.56560000000005Q 152.48179380628798 195.56560000000005 162.48179380628798 195.56560000000005L 157.20747451782228 195.56560000000005Q 167.20747451782228 195.56560000000005 167.20747451782228 185.56560000000005L 167.20747451782228 185.56560000000005L 167.20747451782228 174.63800000000003Q 167.20747451782228 164.63800000000003 157.20747451782228 164.63800000000003L 162.48179380628798 164.63800000000003Q 152.48179380628798 164.63800000000003 152.48179380628798 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 152.48179380628798 174.63800000000003L 152.48179380628798 185.56560000000005Q 152.48179380628798 195.56560000000005 162.48179380628798 195.56560000000005L 157.20747451782228 195.56560000000005Q 167.20747451782228 195.56560000000005 167.20747451782228 185.56560000000005L 167.20747451782228 185.56560000000005L 167.20747451782228 174.63800000000003Q 167.20747451782228 164.63800000000003 157.20747451782228 164.63800000000003L 162.48179380628798 164.63800000000003Q 152.48179380628798 164.63800000000003 152.48179380628798 174.63800000000003z"
                                                pathFrom="M 152.48179380628798 174.63800000000003L 152.48179380628798 174.63800000000003L 167.20747451782228 174.63800000000003L 167.20747451782228 174.63800000000003L 167.20747451782228 174.63800000000003L 167.20747451782228 174.63800000000003L 167.20747451782228 174.63800000000003L 152.48179380628798 174.63800000000003"
                                                cy="175.56560000000005" cx="179.08990910847982" j="5" val="-60"
                                                barHeight="-30.9276" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1708"
                                                d="M 182.08990910847982 174.63800000000003L 182.08990910847982 195.87480000000005Q 182.08990910847982 205.87480000000005 192.08990910847982 205.87480000000005L 186.8155898200141 205.87480000000005Q 196.8155898200141 205.87480000000005 196.8155898200141 195.87480000000005L 196.8155898200141 195.87480000000005L 196.8155898200141 174.63800000000003Q 196.8155898200141 164.63800000000003 186.8155898200141 164.63800000000003L 192.08990910847982 164.63800000000003Q 182.08990910847982 164.63800000000003 182.08990910847982 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 182.08990910847982 174.63800000000003L 182.08990910847982 195.87480000000005Q 182.08990910847982 205.87480000000005 192.08990910847982 205.87480000000005L 186.8155898200141 205.87480000000005Q 196.8155898200141 205.87480000000005 196.8155898200141 195.87480000000005L 196.8155898200141 195.87480000000005L 196.8155898200141 174.63800000000003Q 196.8155898200141 164.63800000000003 186.8155898200141 164.63800000000003L 192.08990910847982 164.63800000000003Q 182.08990910847982 164.63800000000003 182.08990910847982 174.63800000000003z"
                                                pathFrom="M 182.08990910847982 174.63800000000003L 182.08990910847982 174.63800000000003L 196.8155898200141 174.63800000000003L 196.8155898200141 174.63800000000003L 196.8155898200141 174.63800000000003L 196.8155898200141 174.63800000000003L 196.8155898200141 174.63800000000003L 182.08990910847982 174.63800000000003"
                                                cy="185.87480000000005" cx="208.69802441067165" j="6" val="-80"
                                                barHeight="-41.2368" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1709"
                                                d="M 211.69802441067165 174.63800000000003L 211.69802441067165 206.18400000000003Q 211.69802441067165 216.18400000000003 221.69802441067165 216.18400000000003L 216.42370512220594 216.18400000000003Q 226.42370512220594 216.18400000000003 226.42370512220594 206.18400000000003L 226.42370512220594 206.18400000000003L 226.42370512220594 174.63800000000003Q 226.42370512220594 164.63800000000003 216.42370512220594 164.63800000000003L 221.69802441067165 164.63800000000003Q 211.69802441067165 164.63800000000003 211.69802441067165 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 211.69802441067165 174.63800000000003L 211.69802441067165 206.18400000000003Q 211.69802441067165 216.18400000000003 221.69802441067165 216.18400000000003L 216.42370512220594 216.18400000000003Q 226.42370512220594 216.18400000000003 226.42370512220594 206.18400000000003L 226.42370512220594 206.18400000000003L 226.42370512220594 174.63800000000003Q 226.42370512220594 164.63800000000003 216.42370512220594 164.63800000000003L 221.69802441067165 164.63800000000003Q 211.69802441067165 164.63800000000003 211.69802441067165 174.63800000000003z"
                                                pathFrom="M 211.69802441067165 174.63800000000003L 211.69802441067165 174.63800000000003L 226.42370512220594 174.63800000000003L 226.42370512220594 174.63800000000003L 226.42370512220594 174.63800000000003L 226.42370512220594 174.63800000000003L 226.42370512220594 174.63800000000003L 211.69802441067165 174.63800000000003"
                                                cy="196.18400000000003" cx="238.30613971286348" j="7" val="-100"
                                                barHeight="-51.546" barWidth="20.725680711534288"></path>
                                            <path id="SvgjsPath1710"
                                                d="M 241.30613971286348 174.63800000000003L 241.30613971286348 247.42080000000004Q 241.30613971286348 257.42080000000004 251.30613971286348 257.42080000000004L 246.03182042439778 257.42080000000004Q 256.0318204243978 257.42080000000004 256.0318204243978 247.42080000000004L 256.0318204243978 247.42080000000004L 256.0318204243978 174.63800000000003Q 256.0318204243978 164.63800000000003 246.03182042439778 164.63800000000003L 251.30613971286348 164.63800000000003Q 241.30613971286348 164.63800000000003 241.30613971286348 174.63800000000003z"
                                                fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhdmk9yfb)"
                                                pathTo="M 241.30613971286348 174.63800000000003L 241.30613971286348 247.42080000000004Q 241.30613971286348 257.42080000000004 251.30613971286348 257.42080000000004L 246.03182042439778 257.42080000000004Q 256.0318204243978 257.42080000000004 256.0318204243978 247.42080000000004L 256.0318204243978 247.42080000000004L 256.0318204243978 174.63800000000003Q 256.0318204243978 164.63800000000003 246.03182042439778 164.63800000000003L 251.30613971286348 164.63800000000003Q 241.30613971286348 164.63800000000003 241.30613971286348 174.63800000000003z"
                                                pathFrom="M 241.30613971286348 174.63800000000003L 241.30613971286348 174.63800000000003L 256.0318204243978 174.63800000000003L 256.0318204243978 174.63800000000003L 256.0318204243978 174.63800000000003L 256.0318204243978 174.63800000000003L 256.0318204243978 174.63800000000003L 241.30613971286348 174.63800000000003"
                                                cy="237.42080000000004" cx="267.91425501505535" j="8" val="-180"
                                                barHeight="-92.78280000000001" barWidth="20.725680711534288">
                                            </path>
                                        </g>
                                        <g id="SvgjsG1690" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1701" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1765" x1="0" y1="0" x2="266.47303771972656" y2="0"
                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1766" x1="0" y1="0" x2="266.47303771972656" y2="0"
                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1767" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1768" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1769" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1740" class="apexcharts-yaxis" rel="0"
                                    transform="translate(9.526962280273438, 0)">
                                    <g id="SvgjsG1741" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1742"
                                            font-family="Public Sans" x="20" y="72.5" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1743">300</tspan>
                                            <title>300</title>
                                        </text><text id="SvgjsText1744" font-family="Public Sans" x="20" y="124.046"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1745">200</tspan>
                                            <title>200</title>
                                        </text><text id="SvgjsText1746" font-family="Public Sans" x="20" y="175.592"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1747">100</tspan>
                                            <title>100</title>
                                        </text><text id="SvgjsText1748" font-family="Public Sans" x="20"
                                            y="227.13800000000003" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1749">0</tspan>
                                            <title>0</title>
                                        </text><text id="SvgjsText1750" font-family="Public Sans" x="20" y="278.684"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1751">-100</tspan>
                                            <title>-100</title>
                                        </text><text id="SvgjsText1752" font-family="Public Sans" x="20" y="330.23"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a5a3ae"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: &quot;Public Sans&quot;;">
                                            <tspan id="SvgjsTspan1753">-200</tspan>
                                            <title>-200</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1678" class="apexcharts-annotations"></g>
                            </svg></div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 333px; height: 362px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center mt-4">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle waves-effect" type="button"
                                id="budgetId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>2023
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                    <script>
                                        document.write(new Date().getFullYear() - 1);
                                    </script>2022
                                </a>
                                <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                    <script>
                                        document.write(new Date().getFullYear() - 2);
                                    </script>2021
                                </a>
                                <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                    <script>
                                        document.write(new Date().getFullYear() - 3);
                                    </script>2020
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center pt-4 mb-0">$25,825</h3>
                    <p class="mb-4 text-center"><span class="fw-semibold">Budget: </span>56,800</p>
                    <div class="px-3" style="position: relative;">
                        <div id="budgetChart" style="min-height: 115px;">
                            <div id="apexchartsp9f9z8mb"
                                class="apexcharts-canvas apexchartsp9f9z8mb apexcharts-theme-light"
                                style="width: 300px; height: 100px;"><svg id="SvgjsSvg1504" width="300" height="100"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1506" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(25, 0)">
                                        <defs id="SvgjsDefs1505">
                                            <clipPath id="gridRectMaskp9f9z8mb">
                                                <rect id="SvgjsRect1511" width="271" height="102" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskp9f9z8mb"></clipPath>
                                            <clipPath id="nonForecastMaskp9f9z8mb"></clipPath>
                                            <clipPath id="gridRectMarkerMaskp9f9z8mb">
                                                <rect id="SvgjsRect1512" width="269" height="104" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1510" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1">
                                        </line>
                                        <g id="SvgjsG1522" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1523" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1536" class="apexcharts-grid">
                                            <g id="SvgjsG1537" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1539" x1="0" y1="0" x2="265" y2="0" stroke="#dbdade"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1540" x1="0" y1="25" x2="265" y2="25"
                                                    stroke="#dbdade" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1541" x1="0" y1="50" x2="265" y2="50"
                                                    stroke="#dbdade" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1542" x1="0" y1="75" x2="265" y2="75"
                                                    stroke="#dbdade" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1543" x1="0" y1="100" x2="265" y2="100"
                                                    stroke="#dbdade" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1538" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1545" x1="0" y1="100" x2="265" y2="100"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                            <line id="SvgjsLine1544" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1513" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1514" class="apexcharts-series" seriesName="LastxMonth"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1517"
                                                    d="M 0 75C 9.274999999999999 75 17.225 87.5 26.5 87.5C 35.775 87.5 43.725 62.5 53 62.5C 62.275 62.5 70.225 80 79.5 80C 88.775 80 96.725 70 106 70C 115.275 70 123.225 93.75 132.5 93.75C 141.775 93.75 149.725 50 159 50C 168.275 50 176.225 71.25 185.5 71.25C 194.775 71.25 202.725 65 212 65C 221.275 65 229.225 93.75 238.5 93.75C 247.775 93.75 255.725 62.5 265 62.5"
                                                    fill="none" fill-opacity="1" stroke="rgba(219,218,222,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="5" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskp9f9z8mb)"
                                                    pathTo="M 0 75C 9.274999999999999 75 17.225 87.5 26.5 87.5C 35.775 87.5 43.725 62.5 53 62.5C 62.275 62.5 70.225 80 79.5 80C 88.775 80 96.725 70 106 70C 115.275 70 123.225 93.75 132.5 93.75C 141.775 93.75 149.725 50 159 50C 168.275 50 176.225 71.25 185.5 71.25C 194.775 71.25 202.725 65 212 65C 221.275 65 229.225 93.75 238.5 93.75C 247.775 93.75 255.725 62.5 265 62.5"
                                                    pathFrom="M -1 100L -1 100L 26.5 100L 53 100L 79.5 100L 106 100L 132.5 100L 159 100L 185.5 100L 212 100L 238.5 100L 265 100">
                                                </path>
                                                <g id="SvgjsG1515" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG1518" class="apexcharts-series" seriesName="ThisxMonth"
                                                data:longestSeries="true" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1521"
                                                    d="M 0 37.5C 9.274999999999999 37.5 17.225 50 26.5 50C 35.775 50 43.725 25 53 25C 62.275 25 70.225 42.5 79.5 42.5C 88.775 42.5 96.725 32.5 106 32.5C 115.275 32.5 123.225 56.25 132.5 56.25C 141.775 56.25 149.725 12.5 159 12.5C 168.275 12.5 176.225 33.75 185.5 33.75C 194.775 33.75 202.725 27.5 212 27.5C 221.275 27.5 229.225 56.25 238.5 56.25C 247.775 56.25 255.725 25 265 25"
                                                    fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-line" index="1"
                                                    clip-path="url(#gridRectMaskp9f9z8mb)"
                                                    pathTo="M 0 37.5C 9.274999999999999 37.5 17.225 50 26.5 50C 35.775 50 43.725 25 53 25C 62.275 25 70.225 42.5 79.5 42.5C 88.775 42.5 96.725 32.5 106 32.5C 115.275 32.5 123.225 56.25 132.5 56.25C 141.775 56.25 149.725 12.5 159 12.5C 168.275 12.5 176.225 33.75 185.5 33.75C 194.775 33.75 202.725 27.5 212 27.5C 221.275 27.5 229.225 56.25 238.5 56.25C 247.775 56.25 255.725 25 265 25"
                                                    pathFrom="M -1 100L -1 100L 26.5 100L 53 100L 79.5 100L 106 100L 132.5 100L 159 100L 185.5 100L 212 100L 238.5 100L 265 100">
                                                </path>
                                                <g id="SvgjsG1519" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="1"></g>
                                            </g>
                                            <g id="SvgjsG1516" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                            <g id="SvgjsG1520" class="apexcharts-datalabels" data:realIndex="1">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1546" x1="0" y1="0" x2="265" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1547" x1="0" y1="0" x2="265" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1548" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1549" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1550" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1509" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1535" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)">
                                    </g>
                                    <g id="SvgjsG1507" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 50px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 333px; height: 116px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Increase
                            Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Revenue Report -->

<!-- Earning Reports -->
<div class="col-xl-4 col-lg-5 col-md-6 mb-4">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
                <h5 class="m-0 me-2">Earning Reports</h5>
                <small class="text-muted">Weekly Earnings Overview</small>
            </div>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                </div>
            </div>
        </div>
        <div class="card-body pb-0" style="position: relative;">
            <ul class="p-0 m-0">
                <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i
                                class="ti ti-chart-pie-2 ti-sm"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Net Profit</h6>
                            <small class="text-muted">12.4k Sales</small>
                        </div>
                        <div class="user-progress">
                            <small>$1,619</small><i class="ti ti-chevron-up text-success ms-3"></i>
                            <small class="text-muted">18.6%</small>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-success"><i
                                class="ti ti-currency-dollar ti-sm"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Total Income</h6>
                            <small class="text-muted">Sales, Affiliation</small>
                        </div>
                        <div class="user-progress">
                            <small>$3,571</small><i class="ti ti-chevron-up text-success ms-3"></i>
                            <small class="text-muted">39.6%</small>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-secondary"><i
                                class="ti ti-credit-card ti-sm"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Total Expenses</h6>
                            <small class="text-muted">ADVT, Marketing</small>
                        </div>
                        <div class="user-progress">
                            <small>$430</small><i class="ti ti-chevron-up text-success ms-3"></i>
                            <small class="text-muted">52.8%</small>
                        </div>
                    </div>
                </li>
            </ul>
            <div id="reportBarChart" style="min-height: 265px;">
                <div id="apexchartsvjg9cfqg" class="apexcharts-canvas apexchartsvjg9cfqg apexcharts-theme-light"
                    style="width: 332px; height: 250px;"><svg id="SvgjsSvg1770" width="332" height="250"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent;">
                        <g id="SvgjsG1772" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                            <defs id="SvgjsDefs1771">
                                <linearGradient id="SvgjsLinearGradient1775" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1776" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                        offset="0"></stop>
                                    <stop id="SvgjsStop1777" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                        offset="1"></stop>
                                    <stop id="SvgjsStop1778" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                        offset="1"></stop>
                                </linearGradient>
                                <clipPath id="gridRectMaskvjg9cfqg">
                                    <rect id="SvgjsRect1780" width="346" height="200.73" x="-2" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <clipPath id="forecastMaskvjg9cfqg"></clipPath>
                                <clipPath id="nonForecastMaskvjg9cfqg"></clipPath>
                                <clipPath id="gridRectMarkerMaskvjg9cfqg">
                                    <rect id="SvgjsRect1781" width="346" height="204.73" x="-2" y="-2" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                            </defs>
                            <rect id="SvgjsRect1779" width="29.31428571428571" height="200.73" x="0" y="0" rx="0" ry="0"
                                opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1775)"
                                class="apexcharts-xcrosshairs" y2="200.73" filter="none" fill-opacity="0.9"></rect>
                            <g id="SvgjsG1800" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1801" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                                        id="SvgjsText1803" font-family="Helvetica, Arial, sans-serif"
                                        x="24.428571428571427" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1804">Mo</tspan>
                                        <title>Mo</title>
                                    </text><text id="SvgjsText1806" font-family="Helvetica, Arial, sans-serif"
                                        x="73.28571428571428" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1807">Tu</tspan>
                                        <title>Tu</title>
                                    </text><text id="SvgjsText1809" font-family="Helvetica, Arial, sans-serif"
                                        x="122.14285714285712" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1810">We</tspan>
                                        <title>We</title>
                                    </text><text id="SvgjsText1812" font-family="Helvetica, Arial, sans-serif" x="171"
                                        y="229.73" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                        font-weight="400" fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1813">Th</tspan>
                                        <title>Th</title>
                                    </text><text id="SvgjsText1815" font-family="Helvetica, Arial, sans-serif"
                                        x="219.85714285714286" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1816">Fr</tspan>
                                        <title>Fr</title>
                                    </text><text id="SvgjsText1818" font-family="Helvetica, Arial, sans-serif"
                                        x="268.71428571428567" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1819">Sa</tspan>
                                        <title>Sa</title>
                                    </text><text id="SvgjsText1821" font-family="Helvetica, Arial, sans-serif"
                                        x="317.5714285714285" y="229.73" text-anchor="middle" dominant-baseline="auto"
                                        font-size="13px" font-weight="400" fill="#a5a3ae"
                                        class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1822">Su</tspan>
                                        <title>Su</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG1825" class="apexcharts-grid">
                                <g id="SvgjsG1826" class="apexcharts-gridlines-horizontal" style="display: none;">
                                    <line id="SvgjsLine1828" x1="0" y1="0" x2="342" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                    </line>
                                    <line id="SvgjsLine1829" x1="0" y1="40.146" x2="342" y2="40.146" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1830" x1="0" y1="80.292" x2="342" y2="80.292" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1831" x1="0" y1="120.438" x2="342" y2="120.438" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1832" x1="0" y1="160.584" x2="342" y2="160.584" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1833" x1="0" y1="200.73000000000002" x2="342"
                                        y2="200.73000000000002" stroke="#e0e0e0" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1827" class="apexcharts-gridlines-vertical" style="display: none;">
                                </g>
                                <line id="SvgjsLine1835" x1="0" y1="200.73" x2="342" y2="200.73" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                <line id="SvgjsLine1834" x1="0" y1="1" x2="0" y2="200.73" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG1782" class="apexcharts-bar-series apexcharts-plot-series">
                                <g id="SvgjsG1783" class="apexcharts-series" rel="1" seriesName="seriesx1"
                                    data:realIndex="0">
                                    <path id="SvgjsPath1787"
                                        d="M 9.771428571428572 196.73L 9.771428571428572 124.43799999999999Q 9.771428571428572 120.43799999999999 13.771428571428572 120.43799999999999L 35.08571428571428 120.43799999999999Q 39.08571428571428 120.43799999999999 39.08571428571428 124.43799999999999L 39.08571428571428 124.43799999999999L 39.08571428571428 196.73Q 39.08571428571428 200.73 35.08571428571428 200.73L 13.771428571428572 200.73Q 9.771428571428572 200.73 9.771428571428572 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 9.771428571428572 196.73L 9.771428571428572 124.43799999999999Q 9.771428571428572 120.43799999999999 13.771428571428572 120.43799999999999L 35.08571428571428 120.43799999999999Q 39.08571428571428 120.43799999999999 39.08571428571428 124.43799999999999L 39.08571428571428 124.43799999999999L 39.08571428571428 196.73Q 39.08571428571428 200.73 35.08571428571428 200.73L 13.771428571428572 200.73Q 9.771428571428572 200.73 9.771428571428572 196.73z"
                                        pathFrom="M 9.771428571428572 196.73L 9.771428571428572 196.73L 39.08571428571428 196.73L 39.08571428571428 196.73L 39.08571428571428 196.73L 39.08571428571428 196.73L 39.08571428571428 196.73L 9.771428571428572 196.73"
                                        cy="120.43799999999999" cx="58.628571428571426" j="0" val="40"
                                        barHeight="80.292" barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1789"
                                        d="M 58.628571428571426 196.73L 58.628571428571426 14.03649999999999Q 58.628571428571426 10.03649999999999 62.628571428571426 10.03649999999999L 83.94285714285714 10.03649999999999Q 87.94285714285714 10.03649999999999 87.94285714285714 14.03649999999999L 87.94285714285714 14.03649999999999L 87.94285714285714 196.73Q 87.94285714285714 200.73 83.94285714285714 200.73L 62.628571428571426 200.73Q 58.628571428571426 200.73 58.628571428571426 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 58.628571428571426 196.73L 58.628571428571426 14.03649999999999Q 58.628571428571426 10.03649999999999 62.628571428571426 10.03649999999999L 83.94285714285714 10.03649999999999Q 87.94285714285714 10.03649999999999 87.94285714285714 14.03649999999999L 87.94285714285714 14.03649999999999L 87.94285714285714 196.73Q 87.94285714285714 200.73 83.94285714285714 200.73L 62.628571428571426 200.73Q 58.628571428571426 200.73 58.628571428571426 196.73z"
                                        pathFrom="M 58.628571428571426 196.73L 58.628571428571426 196.73L 87.94285714285714 196.73L 87.94285714285714 196.73L 87.94285714285714 196.73L 87.94285714285714 196.73L 87.94285714285714 196.73L 58.628571428571426 196.73"
                                        cy="10.03649999999999" cx="107.48571428571428" j="1" val="95"
                                        barHeight="190.6935" barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1791"
                                        d="M 107.48571428571428 196.73L 107.48571428571428 84.292Q 107.48571428571428 80.292 111.48571428571428 80.292L 132.79999999999998 80.292Q 136.79999999999998 80.292 136.79999999999998 84.292L 136.79999999999998 84.292L 136.79999999999998 196.73Q 136.79999999999998 200.73 132.79999999999998 200.73L 111.48571428571428 200.73Q 107.48571428571428 200.73 107.48571428571428 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 107.48571428571428 196.73L 107.48571428571428 84.292Q 107.48571428571428 80.292 111.48571428571428 80.292L 132.79999999999998 80.292Q 136.79999999999998 80.292 136.79999999999998 84.292L 136.79999999999998 84.292L 136.79999999999998 196.73Q 136.79999999999998 200.73 132.79999999999998 200.73L 111.48571428571428 200.73Q 107.48571428571428 200.73 107.48571428571428 196.73z"
                                        pathFrom="M 107.48571428571428 196.73L 107.48571428571428 196.73L 136.79999999999998 196.73L 136.79999999999998 196.73L 136.79999999999998 196.73L 136.79999999999998 196.73L 136.79999999999998 196.73L 107.48571428571428 196.73"
                                        cy="80.292" cx="156.34285714285713" j="2" val="60"
                                        barHeight="120.43799999999999" barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1793"
                                        d="M 156.34285714285713 196.73L 156.34285714285713 114.4015Q 156.34285714285713 110.4015 160.34285714285713 110.4015L 181.65714285714284 110.4015Q 185.65714285714284 110.4015 185.65714285714284 114.4015L 185.65714285714284 114.4015L 185.65714285714284 196.73Q 185.65714285714284 200.73 181.65714285714284 200.73L 160.34285714285713 200.73Q 156.34285714285713 200.73 156.34285714285713 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 156.34285714285713 196.73L 156.34285714285713 114.4015Q 156.34285714285713 110.4015 160.34285714285713 110.4015L 181.65714285714284 110.4015Q 185.65714285714284 110.4015 185.65714285714284 114.4015L 185.65714285714284 114.4015L 185.65714285714284 196.73Q 185.65714285714284 200.73 181.65714285714284 200.73L 160.34285714285713 200.73Q 156.34285714285713 200.73 156.34285714285713 196.73z"
                                        pathFrom="M 156.34285714285713 196.73L 156.34285714285713 196.73L 185.65714285714284 196.73L 185.65714285714284 196.73L 185.65714285714284 196.73L 185.65714285714284 196.73L 185.65714285714284 196.73L 156.34285714285713 196.73"
                                        cy="110.4015" cx="205.2" j="3" val="45" barHeight="90.32849999999999"
                                        barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1795"
                                        d="M 205.2 196.73L 205.2 24.073000000000008Q 205.2 20.073000000000008 209.2 20.073000000000008L 230.5142857142857 20.073000000000008Q 234.5142857142857 20.073000000000008 234.5142857142857 24.073000000000008L 234.5142857142857 24.073000000000008L 234.5142857142857 196.73Q 234.5142857142857 200.73 230.5142857142857 200.73L 209.2 200.73Q 205.2 200.73 205.2 196.73z"
                                        fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 205.2 196.73L 205.2 24.073000000000008Q 205.2 20.073000000000008 209.2 20.073000000000008L 230.5142857142857 20.073000000000008Q 234.5142857142857 20.073000000000008 234.5142857142857 24.073000000000008L 234.5142857142857 24.073000000000008L 234.5142857142857 196.73Q 234.5142857142857 200.73 230.5142857142857 200.73L 209.2 200.73Q 205.2 200.73 205.2 196.73z"
                                        pathFrom="M 205.2 196.73L 205.2 196.73L 234.5142857142857 196.73L 234.5142857142857 196.73L 234.5142857142857 196.73L 234.5142857142857 196.73L 234.5142857142857 196.73L 205.2 196.73"
                                        cy="20.073000000000008" cx="254.05714285714285" j="4" val="90"
                                        barHeight="180.65699999999998" barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1797"
                                        d="M 254.05714285714285 196.73L 254.05714285714285 104.365Q 254.05714285714285 100.365 258.0571428571428 100.365L 279.37142857142857 100.365Q 283.37142857142857 100.365 283.37142857142857 104.365L 283.37142857142857 104.365L 283.37142857142857 196.73Q 283.37142857142857 200.73 279.37142857142857 200.73L 258.0571428571428 200.73Q 254.05714285714285 200.73 254.05714285714285 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 254.05714285714285 196.73L 254.05714285714285 104.365Q 254.05714285714285 100.365 258.0571428571428 100.365L 279.37142857142857 100.365Q 283.37142857142857 100.365 283.37142857142857 104.365L 283.37142857142857 104.365L 283.37142857142857 196.73Q 283.37142857142857 200.73 279.37142857142857 200.73L 258.0571428571428 200.73Q 254.05714285714285 200.73 254.05714285714285 196.73z"
                                        pathFrom="M 254.05714285714285 196.73L 254.05714285714285 196.73L 283.37142857142857 196.73L 283.37142857142857 196.73L 283.37142857142857 196.73L 283.37142857142857 196.73L 283.37142857142857 196.73L 254.05714285714285 196.73"
                                        cy="100.365" cx="302.9142857142857" j="5" val="50" barHeight="100.365"
                                        barWidth="29.31428571428571"></path>
                                    <path id="SvgjsPath1799"
                                        d="M 302.9142857142857 196.73L 302.9142857142857 54.182500000000005Q 302.9142857142857 50.182500000000005 306.9142857142857 50.182500000000005L 328.2285714285714 50.182500000000005Q 332.2285714285714 50.182500000000005 332.2285714285714 54.182500000000005L 332.2285714285714 54.182500000000005L 332.2285714285714 196.73Q 332.2285714285714 200.73 328.2285714285714 200.73L 306.9142857142857 200.73Q 302.9142857142857 200.73 302.9142857142857 196.73z"
                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                        clip-path="url(#gridRectMaskvjg9cfqg)"
                                        pathTo="M 302.9142857142857 196.73L 302.9142857142857 54.182500000000005Q 302.9142857142857 50.182500000000005 306.9142857142857 50.182500000000005L 328.2285714285714 50.182500000000005Q 332.2285714285714 50.182500000000005 332.2285714285714 54.182500000000005L 332.2285714285714 54.182500000000005L 332.2285714285714 196.73Q 332.2285714285714 200.73 328.2285714285714 200.73L 306.9142857142857 200.73Q 302.9142857142857 200.73 302.9142857142857 196.73z"
                                        pathFrom="M 302.9142857142857 196.73L 302.9142857142857 196.73L 332.2285714285714 196.73L 332.2285714285714 196.73L 332.2285714285714 196.73L 332.2285714285714 196.73L 332.2285714285714 196.73L 302.9142857142857 196.73"
                                        cy="50.182500000000005" cx="351.77142857142854" j="6" val="75"
                                        barHeight="150.54749999999999" barWidth="29.31428571428571"></path>
                                    <g id="SvgjsG1785" class="apexcharts-bar-goals-markers"
                                        style="pointer-events: none">
                                        <g id="SvgjsG1786" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1788" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1790" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1792" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1794" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1796" className="apexcharts-bar-goals-groups"></g>
                                        <g id="SvgjsG1798" className="apexcharts-bar-goals-groups"></g>
                                    </g>
                                </g>
                                <g id="SvgjsG1784" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1836" x1="0" y1="0" x2="342" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1837" x1="0" y1="0" x2="342" y2="0" stroke-dasharray="0" stroke-width="0"
                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                            </line>
                            <g id="SvgjsG1838" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1839" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1840" class="apexcharts-point-annotations"></g>
                        </g>
                        <g id="SvgjsG1823" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                            <g id="SvgjsG1824" class="apexcharts-yaxis-texts-g"></g>
                        </g>
                        <g id="SvgjsG1773" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-legend" style="max-height: 125px;"></div>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-title"
                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                class="apexcharts-tooltip-marker"
                                style="background-color: rgba(115, 103, 240, 0.16);"></span>
                            <div class="apexcharts-tooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-y-label"></span><span
                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                <div class="apexcharts-tooltip-goals-group"><span
                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
            <div class="resize-triggers">
                <div class="expand-trigger">
                    <div style="width: 381px; height: 442px;"></div>
                </div>
                <div class="contract-trigger"></div>
            </div>
        </div>
    </div>
</div>
<!--/ Earning Reports -->

<!-- Popular Product -->
<div class="col-md-6 col-xl-4 mb-4">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title m-0 me-2">
                <h5 class="m-0 me-2">Popular Products</h5>
                <small class="text-muted">Total 10.4k Visitors</small>
            </div>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="popularProduct" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                        <img src="../../assets/img/products/iphone.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Apple iPhone 13</h6>
                            <small class="text-muted d-block">Item: #FXZ-4567</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$999.29</p>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                        <img src="../../assets/img/products/nike-air-jordan.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Nike Air Jordan</h6>
                            <small class="text-muted d-block">Item: #FXZ-3456</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$72.40</p>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                        <img src="../../assets/img/products/headphones.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Beats Studio 2</h6>
                            <small class="text-muted d-block">Item: #FXZ-9485</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$99</p>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                        <img src="../../assets/img/products/apple-watch.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Apple Watch Series 7</h6>
                            <small class="text-muted d-block">Item: #FXZ-2345</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$249.99</p>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                        <img src="../../assets/img/products/amazon-echo.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Amazon Echo Dot</h6>
                            <small class="text-muted d-block">Item: #FXZ-8959</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$79.40</p>
                        </div>
                    </div>
                </li>
                <li class="d-flex">
                    <div class="me-3">
                        <img src="../../assets/img/products/play-station.png" alt="User" class="rounded" width="46">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Play Station Console</h6>
                            <small class="text-muted d-block">Item: #FXZ-7892</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <p class="mb-0 fw-semibold">$129.48</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/ Popular Product -->

<!-- Sales by Countries tabs-->
<div class="col-md-6 col-xl-4 col-xl-4 mb-4">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between pb-2 mb-1">
            <div class="card-title mb-1">
                <h5 class="m-0 me-2">Sales by Countries</h5>
                <small class="text-muted">62 Deliveries in Progress</small>
            </div>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="salesByCountryTabs" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="nav-align-top">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-new" aria-controls="navs-justified-new"
                            aria-selected="true">
                            New
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-link-preparing"
                            aria-controls="navs-justified-link-preparing" aria-selected="false" tabindex="-1">
                            Preparing
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping"
                            aria-selected="false" tabindex="-1">
                            Shipping
                        </button>
                    </li>
                </ul>
                <div class="tab-content pb-0">
                    <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                        <ul class="timeline timeline-advance timeline-advance mb-2 pb-1">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Myrtle Ullrich</h6>
                                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Barry Schowalter</h6>
                                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                                </div>
                            </li>
                        </ul>
                        <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                        <ul class="timeline timeline-advance mb-0">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Veronica Herman</h6>
                                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Helen Jacobs</h6>
                                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                        <ul class="timeline timeline-advance mb-2 pb-1">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Barry Schowalter</h6>
                                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Myrtle Ullrich</h6>
                                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                        <ul class="timeline timeline-advance mb-0">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Veronica Herman</h6>
                                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Helen Jacobs</h6>
                                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
                        <ul class="timeline timeline-advance mb-2 pb-1">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Veronica Herman</h6>
                                    <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Barry Schowalter</h6>
                                    <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                                </div>
                            </li>
                        </ul>
                        <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                        <ul class="timeline timeline-advance mb-0">
                            <li class="timeline-item ps-4 border-left-dashed">
                                <span class="timeline-indicator timeline-indicator-success">
                                    <i class="ti ti-circle-check"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-success text-uppercase fw-semibold">sender</small>
                                    </div>
                                    <h6 class="mb-0">Myrtle Ullrich</h6>
                                    <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-item ps-4 border-0">
                                <span class="timeline-indicator timeline-indicator-primary">
                                    <i class="ti ti-map-pin"></i>
                                </span>
                                <div class="timeline-event ps-0 pb-0">
                                    <div class="timeline-header">
                                        <small class="text-primary text-uppercase fw-semibold">Receiver</small>
                                    </div>
                                    <h6 class="mb-0">Helen Jacobs</h6>
                                    <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Sales by Countries tabs -->

<!-- Transactions -->
<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
    <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title m-0 me-2">
                <h5 class="m-0 me-2">Transactions</h5>
                <small class="text-muted">Total 58 Transactions done in this Month</small>
            </div>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-primary me-3 rounded p-2">
                        <i class="ti ti-wallet ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Wallet</h6>
                            <small class="text-muted d-block">Starbucks</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-danger">-$75</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-success rounded me-3 p-2">
                        <i class="ti ti-browser-check ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Bank Transfer</h6>
                            <small class="text-muted d-block">Add Money</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-success">+$480</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-danger rounded me-3 p-2">
                        <i class="ti ti-brand-paypal ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Paypal</h6>
                            <small class="text-muted d-block mb-1">Client Payment</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-success">+$268</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-secondary me-3 rounded p-2">
                        <i class="ti ti-credit-card ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Master Card</h6>
                            <small class="text-muted d-block mb-1">Ordered iPhone 13</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-danger">-$699</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-info me-3 rounded p-2">
                        <i class="ti ti-currency-dollar ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Bank Transactions</h6>
                            <small class="text-muted d-block mb-1">Refund</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-success">+$98</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-danger me-3 rounded p-2">
                        <i class="ti ti-brand-paypal ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Paypal</h6>
                            <small class="text-muted d-block mb-1">Client Payment</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-success">+$126</h6>
                        </div>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <div class="badge bg-label-success me-3 rounded p-2">
                        <i class="ti ti-browser-check ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Bank Transfer</h6>
                            <small class="text-muted d-block mb-1">Pay Office Rent</small>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0 text-danger">-$1290</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/ Transactions -->

<!-- Invoice table -->
<div class="col-lg-8">
    <div class="card h-100">
        <div class="table-responsive card-datatable">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row ms-2 me-3">
                    <div
                        class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="form-select">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select></label></div>
                        <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary btn-primary"
                                    tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i
                                            class="ti ti-plus me-md-2"></i><span class="d-md-inline-block d-none">Create
                                            Invoice</span></span></button> </div>
                        </div>
                    </div>
                    <div
                        class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"
                                    class="form-control" placeholder="Search Invoice"
                                    aria-controls="DataTables_Table_0"></label></div>
                        <div class="invoice_status mb-3 mb-md-0"></div>
                    </div>
                </div>
                <table class="table datatable-invoice border-top dataTable no-footer dtr-column collapsed"
                    id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 746px;">
                    <thead>
                        <tr>
                            <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 22px;" aria-label=": activate to sort column ascending"></th>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 43px;" aria-sort="descending"
                                aria-label="ID: activate to sort column ascending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 52px;" aria-label=": activate to sort column ascending"><i
                                    class="ti ti-trending-up"></i></th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 89px;" aria-label="Total: activate to sort column ascending">Total</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 160px;" aria-label="Issued Date: activate to sort column ascending">Issued
                                Date</th>
                            <th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                style="width: 112px; display: none;" aria-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td valign="top" colspan="5" class="dataTables_empty">Loading...</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing 0 to 0 of 0 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                        aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                        aria-controls="DataTables_Table_0" aria-disabled="true" aria-role="link"
                                        data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection
