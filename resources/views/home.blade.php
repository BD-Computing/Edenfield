@extends('layouts.backend')
@section('title')
    Home
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">CRM</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">CRM</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card crm-widget">
                        <div class="card-body p-0">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                <div class="col">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Campaign Sent <i
                                                class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-space-ship-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value" data-target="197">197</span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Annual Profit <i
                                                class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0">$<span class="counter-value"
                                                        data-target="489.4">489.4</span>k</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Lead Conversation <i
                                                class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-pulse-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value"
                                                        data-target="32.89">32.89</span>%</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col">
                                    <div class="mt-3 mt-lg-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i
                                                class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-trophy-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0">$<span class="counter-value"
                                                        data-target="1596.5">1,596.5</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col">
                                    <div class="mt-3 mt-lg-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Annual Deals <i
                                                class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-service-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value"
                                                        data-target="2659">2,659</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sales Forecast</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                            class="text-muted">Nov 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Oct 2021</a>
                                        <a class="dropdown-item" href="#">Nov 2021</a>
                                        <a class="dropdown-item" href="#">Dec 2021</a>
                                        <a class="dropdown-item" href="#">Jan 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body pb-0">
                            <div id="sales-forecast-chart"
                                data-colors="[&quot;--vz-primary&quot;, &quot;--vz-success&quot;, &quot;--vz-warning&quot;]"
                                class="apex-charts" dir="ltr" style="min-height: 356px;">
                                <div id="apexcharts9aihi7lx"
                                    class="apexcharts-canvas apexcharts9aihi7lx apexcharts-theme-light"
                                    style="width: 488px; height: 341px;"><svg id="SvgjsSvg1333" width="488"
                                        height="341" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="488" height="341">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="inset: auto 0px 19px 20px; position: absolute; max-height: 170.5px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Goal"
                                                    data:collapsed="false" style="margin: 0px 8px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(64, 81, 137) !important; color: rgb(64, 81, 137); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Goal" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Goal</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2"
                                                    seriesname="PendingxForcast" data:collapsed="false"
                                                    style="margin: 0px 8px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="background: rgb(10, 179, 156) !important; color: rgb(10, 179, 156); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Pending%20Forcast" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Pending
                                                        Forcast</span></div>
                                                <div class="apexcharts-legend-series" rel="3" seriesname="Revenue"
                                                    data:collapsed="false" style="margin: 0px 8px;"><span
                                                        class="apexcharts-legend-marker" rel="3"
                                                        data:collapsed="false"
                                                        style="background: rgb(247, 184, 75) !important; color: rgb(247, 184, 75); height: 10px; width: 10px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                        class="apexcharts-legend-text" rel="3" i="2"
                                                        data:default-text="Revenue" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
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
                                        <g id="SvgjsG1398" class="apexcharts-yaxis" rel="0"
                                            transform="translate(22, 0)">
                                            <g id="SvgjsG1399" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1401"
                                                    font-family="Helvetica, Arial, sans-serif" x="20" y="31.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1402">$37k</tspan>
                                                    <title>$37k</title>
                                                </text><text id="SvgjsText1404" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="86.647" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1405">$27.75k</tspan>
                                                    <title>$27.75k</title>
                                                </text><text id="SvgjsText1407" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="141.894" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1408">$18.5k</tspan>
                                                    <title>$18.5k</title>
                                                </text><text id="SvgjsText1410" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="197.141" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1411">$9.25k</tspan>
                                                    <title>$9.25k</title>
                                                </text><text id="SvgjsText1413" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="252.388" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1414">$0k</tspan>
                                                    <title>$0k</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1335" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(52, 30)">
                                            <defs id="SvgjsDefs1334">
                                                <linearGradient id="SvgjsLinearGradient1339" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1340" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1341" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1342" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask9aihi7lx">
                                                    <rect id="SvgjsRect1344" width="435" height="225.988" x="-4.5"
                                                        y="-2.5" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask9aihi7lx"></clipPath>
                                                <clipPath id="nonForecastMask9aihi7lx"></clipPath>
                                                <clipPath id="gridRectMarkerMask9aihi7lx">
                                                    <rect id="SvgjsRect1345" width="430" height="224.988" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1343" width="92.3" height="220.988" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient1339)"
                                                class="apexcharts-xcrosshairs" y2="220.988" filter="none"
                                                fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1377" class="apexcharts-grid">
                                                <g id="SvgjsG1378" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1382" x1="0" y1="55.247"
                                                        x2="426" y2="55.247" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1383" x1="0" y1="110.494"
                                                        x2="426" y2="110.494" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1384" x1="0" y1="165.74099999999999"
                                                        x2="426" y2="165.74099999999999" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1379" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1387" x1="0" y1="220.988" x2="426"
                                                    y2="220.988" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1386" x1="0" y1="1" x2="0"
                                                    y2="220.988" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1346" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1347" class="apexcharts-series" rel="1"
                                                    seriesName="Goal" data:realIndex="0">
                                                    <path id="SvgjsPath1352"
                                                        d="M 74.55000000000001 220.989 L 74.55000000000001 0.001 L 161.85000000000002 0.001 L 161.85000000000002 220.989 Z"
                                                        fill="rgba(64,81,137,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask9aihi7lx)"
                                                        pathTo="M 74.55000000000001 220.989 L 74.55000000000001 0.001 L 161.85000000000002 0.001 L 161.85000000000002 220.989 Z"
                                                        pathFrom="M 74.55000000000001 220.989 L 74.55000000000001 220.989 L 161.85000000000002 220.989 L 161.85000000000002 220.989 L 161.85000000000002 220.989 L 161.85000000000002 220.989 L 161.85000000000002 220.989 L 74.55000000000001 220.989 Z"
                                                        cy="0" cx="498.05" j="0" val="37"
                                                        barHeight="220.988" barWidth="92.3"></path>
                                                    <g id="SvgjsG1349" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1351" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask9aihi7lx)"></g>
                                                    </g>
                                                    <g id="SvgjsG1350"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                        style="pointer-events: none"></g>
                                                </g>
                                                <g id="SvgjsG1357" class="apexcharts-series" rel="2"
                                                    seriesName="PendingxForcast" data:realIndex="1">
                                                    <path id="SvgjsPath1362"
                                                        d="M 166.85000000000002 220.989 L 166.85000000000002 149.31721621621622 L 254.15000000000003 149.31721621621622 L 254.15000000000003 220.989 Z"
                                                        fill="rgba(10,179,156,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMask9aihi7lx)"
                                                        pathTo="M 166.85000000000002 220.989 L 166.85000000000002 149.31721621621622 L 254.15000000000003 149.31721621621622 L 254.15000000000003 220.989 Z"
                                                        pathFrom="M 166.85000000000002 220.989 L 166.85000000000002 220.989 L 254.15000000000003 220.989 L 254.15000000000003 220.989 L 254.15000000000003 220.989 L 254.15000000000003 220.989 L 254.15000000000003 220.989 L 166.85000000000002 220.989 Z"
                                                        cy="149.31621621621622" cx="590.35" j="0" val="12"
                                                        barHeight="71.67178378378378" barWidth="92.3"></path>
                                                    <g id="SvgjsG1359" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1361" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask9aihi7lx)"></g>
                                                    </g>
                                                    <g id="SvgjsG1360"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                        style="pointer-events: none"></g>
                                                </g>
                                                <g id="SvgjsG1367" class="apexcharts-series" rel="3"
                                                    seriesName="Revenue" data:realIndex="2">
                                                    <path id="SvgjsPath1372"
                                                        d="M 259.15 220.989 L 259.15 113.48132432432432 L 346.45 113.48132432432432 L 346.45 220.989 Z"
                                                        fill="rgba(247,184,75,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMask9aihi7lx)"
                                                        pathTo="M 259.15 220.989 L 259.15 113.48132432432432 L 346.45 113.48132432432432 L 346.45 220.989 Z"
                                                        pathFrom="M 259.15 220.989 L 259.15 220.989 L 346.45 220.989 L 346.45 220.989 L 346.45 220.989 L 346.45 220.989 L 346.45 220.989 L 259.15 220.989 Z"
                                                        cy="113.48032432432431" cx="682.65" j="0" val="18"
                                                        barHeight="107.50767567567569" barWidth="92.3"></path>
                                                    <g id="SvgjsG1369" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1371" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMask9aihi7lx)"></g>
                                                    </g>
                                                    <g id="SvgjsG1370"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                        style="pointer-events: none"></g>
                                                </g>
                                                <g id="SvgjsG1348"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG1354" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1356"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="118.20000000000002" y="118.994" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="600"
                                                            fill="#ffffff" class="apexcharts-datalabel"
                                                            cx="118.20000000000002" cy="118.994"
                                                            style="font-family: Helvetica, Arial, sans-serif;">37</text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1358"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="1">
                                                    <g id="SvgjsG1364" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1366"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="210.50000000000003" y="193.6521081081081"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="210.50000000000003"
                                                            cy="193.6521081081081"
                                                            style="font-family: Helvetica, Arial, sans-serif;">12</text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1368"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="2">
                                                    <g id="SvgjsG1374" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1376"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="302.79999999999995" y="175.73416216216216"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-datalabel" cx="302.79999999999995"
                                                            cy="175.73416216216216"
                                                            style="font-family: Helvetica, Arial, sans-serif;">18</text>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1380" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1381" x1="0" y1="0" x2="426"
                                                    y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1385" x1="0" y1="220.988" x2="426"
                                                    y2="220.988" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1397" x1="0" y1="221.988" x2="426"
                                                    y2="221.988" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <line id="SvgjsLine1388" x1="0" y1="0" x2="426"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1389" x1="0" y1="0" x2="426"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1390" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1391" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1393"
                                                        font-family="Helvetica, Arial, sans-serif" x="213" y="249.988"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1394"></tspan>
                                                        <title></title>
                                                    </text></g>
                                                <g id="SvgjsG1395" class="apexcharts-xaxis-title"><text
                                                        id="SvgjsText1396" font-family="Helvetica, Arial, sans-serif"
                                                        x="213" y="252" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#78909c"
                                                        class="apexcharts-text apexcharts-xaxis-title-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">Total Forecasted
                                                        Value</text></g>
                                            </g>
                                            <g id="SvgjsG1415" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1416" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1417" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(64, 81, 137);"></span>
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
                                                style="background-color: rgb(10, 179, 156);"></span>
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
                                                style="background-color: rgb(247, 184, 75);"></span>
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
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xxl-3 col-md-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Deal Type</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                            class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body pb-0">
                            <div id="deal-type-charts"
                                data-colors="[&quot;--vz-warning&quot;, &quot;--vz-danger&quot;, &quot;--vz-success&quot;]"
                                class="apex-charts" dir="ltr" style="min-height: 356px;">
                                <div id="apexchartsua4n08loj"
                                    class="apexcharts-canvas apexchartsua4n08loj apexcharts-theme-light"
                                    style="width: 488px; height: 341px;"><svg id="SvgjsSvg1421" width="488"
                                        height="341" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="488" height="341">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="inset: auto 0px 13px 20px; position: absolute; max-height: 170.5px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Pending"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(247, 184, 75) !important; color: rgb(247, 184, 75); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Pending" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Pending</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="Loss"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="2"
                                                        data:collapsed="false"
                                                        style="background: rgb(240, 101, 72) !important; color: rgb(240, 101, 72); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Loss" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Loss</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="3" seriesname="Won"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="3"
                                                        data:collapsed="false"
                                                        style="background: rgb(10, 179, 156) !important; color: rgb(10, 179, 156); height: 8px; width: 8px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span
                                                        class="apexcharts-legend-text" rel="3" i="2"
                                                        data:default-text="Won" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 500; font-family: Helvetica, Arial, sans-serif;">Won</span>
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
                                        <g id="SvgjsG1423" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(14, 30)">
                                            <defs id="SvgjsDefs1422">
                                                <clipPath id="gridRectMaskua4n08loj">
                                                    <rect id="SvgjsRect1426" width="459.4609375" height="253" x="-3"
                                                        y="-1" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskua4n08loj"></clipPath>
                                                <clipPath id="nonForecastMaskua4n08loj"></clipPath>
                                                <clipPath id="gridRectMarkerMaskua4n08loj">
                                                    <rect id="SvgjsRect1427" width="457.4609375" height="255" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter1435" width="200%" height="200%" x="-50%"
                                                    y="-50%">
                                                    <feFlood id="SvgjsFeFlood1436" flood-color="#000000"
                                                        flood-opacity="0.35" result="SvgjsFeFlood1436Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1437" in="SvgjsFeFlood1436Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite1437Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1438" dx="1" dy="1"
                                                        result="SvgjsFeOffset1438Out" in="SvgjsFeComposite1437Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1439" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur1439Out" in="SvgjsFeOffset1438Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1440" result="SvgjsFeMerge1440Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1441"
                                                            in="SvgjsFeGaussianBlur1439Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1442" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1443" in="SourceGraphic"
                                                        in2="SvgjsFeMerge1440Out" mode="normal"
                                                        result="SvgjsFeBlend1443Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1461" width="200%" height="200%" x="-50%"
                                                    y="-50%">
                                                    <feFlood id="SvgjsFeFlood1462" flood-color="#000000"
                                                        flood-opacity="0.35" result="SvgjsFeFlood1462Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1463" in="SvgjsFeFlood1462Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite1463Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1464" dx="1" dy="1"
                                                        result="SvgjsFeOffset1464Out" in="SvgjsFeComposite1463Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1465" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur1465Out" in="SvgjsFeOffset1464Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1466" result="SvgjsFeMerge1466Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1467"
                                                            in="SvgjsFeGaussianBlur1465Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1468" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1469" in="SourceGraphic"
                                                        in2="SvgjsFeMerge1466Out" mode="normal"
                                                        result="SvgjsFeBlend1469Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1487" width="200%" height="200%" x="-50%"
                                                    y="-50%">
                                                    <feFlood id="SvgjsFeFlood1488" flood-color="#000000"
                                                        flood-opacity="0.35" result="SvgjsFeFlood1488Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1489" in="SvgjsFeFlood1488Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite1489Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1490" dx="1" dy="1"
                                                        result="SvgjsFeOffset1490Out" in="SvgjsFeComposite1489Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1491" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur1491Out" in="SvgjsFeOffset1490Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1492" result="SvgjsFeMerge1492Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1493"
                                                            in="SvgjsFeGaussianBlur1491Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1494" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1495" in="SourceGraphic"
                                                        in2="SvgjsFeMerge1492Out" mode="normal"
                                                        result="SvgjsFeBlend1495Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG1531" class="apexcharts-grid">
                                                <g id="SvgjsG1532" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1535" x1="0" y1="0"
                                                        x2="453.4609375" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1536" x1="0" y1="62.75"
                                                        x2="453.4609375" y2="62.75" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1537" x1="0" y1="125.5"
                                                        x2="453.4609375" y2="125.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1538" x1="0" y1="188.25"
                                                        x2="453.4609375" y2="188.25" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1539" x1="0" y1="251"
                                                        x2="453.4609375" y2="251" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1533" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1541" x1="0" y1="251" x2="453.4609375"
                                                    y2="251" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1540" x1="0" y1="1" x2="0"
                                                    y2="251" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1428" class="apexcharts-radar-series apexcharts-plot-series"
                                                transform="translate(226.73046875, 125.5)">
                                                <polygon id="SvgjsPolygon1514"
                                                    points="0,-128.33630952380952 111.14250427556183,-64.16815476190477 111.14250427556185,64.16815476190473 1.5716665067271732e-14,128.33630952380952 -111.1425042755618,64.16815476190482 -111.14250427556189,-64.16815476190467 "
                                                    fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon1515"
                                                    points="0,-96.25223214285714 83.35687820667137,-48.126116071428584 83.35687820667138,48.12611607142855 1.1787498800453799e-14,96.25223214285714 -83.35687820667135,48.12611607142861 -83.35687820667141,-48.126116071428505 "
                                                    fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon1516"
                                                    points="0,-64.16815476190476 55.57125213778092,-32.08407738095239 55.571252137780924,32.084077380952365 7.858332533635866e-15,64.16815476190476 -55.5712521377809,32.08407738095241 -55.571252137780945,-32.08407738095234 "
                                                    fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon1517"
                                                    points="0,-32.08407738095238 27.78562606889046,-16.042038690476193 27.785626068890462,16.042038690476183 3.929166266817933e-15,32.08407738095238 -27.78562606889045,16.042038690476204 -27.785626068890473,-16.04203869047617 "
                                                    fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon1518" points="0,0 0,0 0,0 0,0 0,0 0,0 "
                                                    fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                <line id="SvgjsLine1508" x1="0" y1="-128.33630952380952"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1509" x1="111.14250427556183" y1="-64.16815476190477"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1510" x1="111.14250427556185" y1="64.16815476190473"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1511" x1="1.5716665067271732e-14"
                                                    y1="128.33630952380952" x2="0" y2="0"
                                                    stroke="#e8e8e8" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1512" x1="-111.1425042755618" y1="64.16815476190482"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1513" x1="-111.14250427556189" y1="-64.16815476190467"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <g id="SvgjsG1524" class="apexcharts-xaxis"><text id="SvgjsText1525"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="-138.33630952380952" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#a8a8a8" class="apexcharts-datalabel" cx="0"
                                                        cy="-138.33630952380952"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2016</text><text
                                                        id="SvgjsText1526" font-family="Helvetica, Arial, sans-serif"
                                                        x="121.14250427556183" y="-64.16815476190477" text-anchor="start"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="121.14250427556183" cy="-64.16815476190477"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2017</text><text
                                                        id="SvgjsText1527" font-family="Helvetica, Arial, sans-serif"
                                                        x="121.14250427556185" y="64.16815476190473" text-anchor="start"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="121.14250427556185" cy="64.16815476190473"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2018</text><text
                                                        id="SvgjsText1528" font-family="Helvetica, Arial, sans-serif"
                                                        x="1.5716665067271732e-14" y="138.33630952380952"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="1.5716665067271732e-14" cy="138.33630952380952"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2019</text><text
                                                        id="SvgjsText1529" font-family="Helvetica, Arial, sans-serif"
                                                        x="-121.1425042755618" y="64.16815476190482" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="-121.1425042755618" cy="64.16815476190482"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2020</text><text
                                                        id="SvgjsText1530" font-family="Helvetica, Arial, sans-serif"
                                                        x="-121.14250427556189" y="-64.16815476190467" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="-121.14250427556189" cy="-64.16815476190467"
                                                        style="font-family: Helvetica, Arial, sans-serif;">2021</text></g>
                                                <g id="SvgjsG1430" class="apexcharts-series" data:longestSeries="true"
                                                    seriesName="Pending" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1433"
                                                        d="M 0 -85.55753968253967 L 0 -85.55753968253967 L 46.3093767814841 -26.73673115079366 L 27.785626068890462 16.042038690476183 L 5.238888355757243e-15 42.778769841269835 L -92.61875356296818 53.473462301587354 L -18.523750712593646 -10.694692460317444Z"
                                                        fill="none" fill-opacity="1" stroke="#f7b84b"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -85.55753968253967 L 0 -85.55753968253967 L 46.3093767814841 -26.73673115079366 L 27.785626068890462 16.042038690476183 L 5.238888355757243e-15 42.778769841269835 L -92.61875356296818 53.473462301587354 L -18.523750712593646 -10.694692460317444Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath1434"
                                                        d="M 0 -85.55753968253967 L 0 -85.55753968253967 L 46.3093767814841 -26.73673115079366 L 27.785626068890462 16.042038690476183 L 5.238888355757243e-15 42.778769841269835 L -92.61875356296818 53.473462301587354 L -18.523750712593646 -10.694692460317444Z"
                                                        fill="rgba(247,184,75,0.2)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -85.55753968253967 L 0 -85.55753968253967 L 46.3093767814841 -26.73673115079366 L 27.785626068890462 16.042038690476183 L 5.238888355757243e-15 42.778769841269835 L -92.61875356296818 53.473462301587354 L -18.523750712593646 -10.694692460317444Z"
                                                        pathFrom="M 0 0" filter="url(#SvgjsFilter1435)"></path>
                                                    <g id="SvgjsG1431"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                        <g id="SvgjsG1445" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1444" r="0" cx="0"
                                                                cy="-85.55753968253967" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="0"
                                                                j="0" index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1447" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1446" r="0" cx="46.3093767814841"
                                                                cy="-26.73673115079366" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="1"
                                                                j="1" index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1449" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1448" r="0" cx="27.785626068890462"
                                                                cy="16.042038690476183" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="2"
                                                                j="2" index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1451" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1450" r="0"
                                                                cx="5.238888355757243e-15" cy="42.778769841269835"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#f7b84b" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="3" j="3" index="0"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1453" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1452" r="0" cx="-92.61875356296818"
                                                                cy="53.473462301587354" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="4"
                                                                j="4" index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1455" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1454" r="0" cx="-18.523750712593646"
                                                                cy="-10.694692460317444" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="5"
                                                                j="5" index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1547" r="0" cx="0"
                                                                cy="0" class="apexcharts-marker wyaelv6uk"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1456" class="apexcharts-series" data:longestSeries="true"
                                                    seriesName="Loss" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1459"
                                                        d="M 0 -21.389384920634917 L 0 -21.389384920634917 L 27.78562606889046 -16.042038690476193 L 37.04750142518728 21.389384920634907 L 1.0477776711514486e-14 85.55753968253967 L -18.523750712593632 10.694692460317468 L -74.09500285037458 -42.77876984126978Z"
                                                        fill="none" fill-opacity="1" stroke="#f06548"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="1"
                                                        pathTo="M 0 -21.389384920634917 L 0 -21.389384920634917 L 27.78562606889046 -16.042038690476193 L 37.04750142518728 21.389384920634907 L 1.0477776711514486e-14 85.55753968253967 L -18.523750712593632 10.694692460317468 L -74.09500285037458 -42.77876984126978Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath1460"
                                                        d="M 0 -21.389384920634917 L 0 -21.389384920634917 L 27.78562606889046 -16.042038690476193 L 37.04750142518728 21.389384920634907 L 1.0477776711514486e-14 85.55753968253967 L -18.523750712593632 10.694692460317468 L -74.09500285037458 -42.77876984126978Z"
                                                        fill="rgba(240,101,72,0.2)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="1"
                                                        pathTo="M 0 -21.389384920634917 L 0 -21.389384920634917 L 27.78562606889046 -16.042038690476193 L 37.04750142518728 21.389384920634907 L 1.0477776711514486e-14 85.55753968253967 L -18.523750712593632 10.694692460317468 L -74.09500285037458 -42.77876984126978Z"
                                                        pathFrom="M 0 0" filter="url(#SvgjsFilter1461)"></path>
                                                    <g id="SvgjsG1457"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                        <g id="SvgjsG1471" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1470" r="0" cx="0"
                                                                cy="-21.389384920634917" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="0"
                                                                j="0" index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1473" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1472" r="0" cx="27.78562606889046"
                                                                cy="-16.042038690476193" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="1"
                                                                j="1" index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1475" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1474" r="0" cx="37.04750142518728"
                                                                cy="21.389384920634907" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="2"
                                                                j="2" index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1477" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1476" r="0"
                                                                cx="1.0477776711514486e-14" cy="85.55753968253967"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#f06548" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="3" j="3" index="1"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1479" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1478" r="0" cx="-18.523750712593632"
                                                                cy="10.694692460317468" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="4"
                                                                j="4" index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1481" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1480" r="0" cx="-74.09500285037458"
                                                                cy="-42.77876984126978" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="5"
                                                                j="5" index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1548" r="0" cx="0"
                                                                cy="0" class="apexcharts-marker w9o0qh32y"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1482" class="apexcharts-series" data:longestSeries="true"
                                                    seriesName="Won" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1485"
                                                        d="M 0 -47.05664682539682 L 0 -47.05664682539682 L 70.39025270785582 -40.639831349206354 L 72.24262777911521 41.709300595238076 L 1.7026387156211041e-15 13.903100198412698 L -39.82606403207632 22.993588789682562 L -9.261875356296823 -5.347346230158722Z"
                                                        fill="none" fill-opacity="1" stroke="#0ab39c"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="2"
                                                        pathTo="M 0 -47.05664682539682 L 0 -47.05664682539682 L 70.39025270785582 -40.639831349206354 L 72.24262777911521 41.709300595238076 L 1.7026387156211041e-15 13.903100198412698 L -39.82606403207632 22.993588789682562 L -9.261875356296823 -5.347346230158722Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath1486"
                                                        d="M 0 -47.05664682539682 L 0 -47.05664682539682 L 70.39025270785582 -40.639831349206354 L 72.24262777911521 41.709300595238076 L 1.7026387156211041e-15 13.903100198412698 L -39.82606403207632 22.993588789682562 L -9.261875356296823 -5.347346230158722Z"
                                                        fill="rgba(10,179,156,0.2)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="2"
                                                        pathTo="M 0 -47.05664682539682 L 0 -47.05664682539682 L 70.39025270785582 -40.639831349206354 L 72.24262777911521 41.709300595238076 L 1.7026387156211041e-15 13.903100198412698 L -39.82606403207632 22.993588789682562 L -9.261875356296823 -5.347346230158722Z"
                                                        pathFrom="M 0 0" filter="url(#SvgjsFilter1487)"></path>
                                                    <g id="SvgjsG1483"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                        <g id="SvgjsG1497" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1496" r="0" cx="0"
                                                                cy="-47.05664682539682" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="0"
                                                                j="0" index="2" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1499" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1498" r="0" cx="70.39025270785582"
                                                                cy="-40.639831349206354" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="1"
                                                                j="1" index="2" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1501" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1500" r="0" cx="72.24262777911521"
                                                                cy="41.709300595238076" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="2"
                                                                j="2" index="2" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1503" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1502" r="0"
                                                                cx="1.7026387156211041e-15" cy="13.903100198412698"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#0ab39c" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="3" j="3" index="2"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1505" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1504" r="0" cx="-39.82606403207632"
                                                                cy="22.993588789682562" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="4"
                                                                j="4" index="2" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1507" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1506" r="0" cx="-9.261875356296823"
                                                                cy="-5.347346230158722" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="5"
                                                                j="5" index="2" default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1549" r="0" cx="0"
                                                                cy="0" class="apexcharts-marker wpi80mdmak"
                                                                stroke="#ffffff" fill="#f7b84b" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1429" class="apexcharts-yaxis"><text id="SvgjsText1519"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="-122.33630952380952" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="regular" fill="#373d3f" class="apexcharts-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">120</text><text
                                                        id="SvgjsText1520" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-90.25223214285714" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="regular" fill="#373d3f" class="apexcharts-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">90</text><text
                                                        id="SvgjsText1521" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-58.16815476190476" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="regular" fill="#373d3f" class="apexcharts-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">60</text><text
                                                        id="SvgjsText1522" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-26.08407738095238" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="regular" fill="#373d3f" class="apexcharts-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">30</text><text
                                                        id="SvgjsText1523" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="6" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="11px" font-weight="regular" fill="#373d3f"
                                                        class="apexcharts-text "
                                                        style="font-family: Helvetica, Arial, sans-serif;">0</text></g>
                                                <g id="SvgjsG1432" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                                <g id="SvgjsG1458" class="apexcharts-datalabels" data:realIndex="1">
                                                </g>
                                                <g id="SvgjsG1484" class="apexcharts-datalabels" data:realIndex="2">
                                                </g>
                                            </g>
                                            <g id="SvgjsG1534" class="apexcharts-grid-borders" style="display: none;">
                                            </g>
                                            <line id="SvgjsLine1542" x1="0" y1="0" x2="453.4609375"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1543" x1="0" y1="0" x2="453.4609375"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1544" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1545" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1546" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(247, 184, 75);"></span>
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
                                                style="background-color: rgb(240, 101, 72);"></span>
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
                                                style="background-color: rgb(10, 179, 156);"></span>
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
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xxl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Balance Overview</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                            class="text-muted">Current Year<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body px-0">
                            <ul class="list-inline main-chart text-center mb-0">
                                <li class="list-inline-item chart-border-left me-0 border-0">
                                    <h4 class="text-primary">$584k <span
                                            class="text-muted d-inline-block fs-13 align-middle ms-2">Revenue</span></h4>
                                </li>
                                <li class="list-inline-item chart-border-left me-0">
                                    <h4>$497k<span
                                            class="text-muted d-inline-block fs-13 align-middle ms-2">Expenses</span>
                                    </h4>
                                </li>
                                <li class="list-inline-item chart-border-left me-0">
                                    <h4><span data-plugin="counterup">3.6</span>%<span
                                            class="text-muted d-inline-block fs-13 align-middle ms-2">Profit Ratio</span>
                                    </h4>
                                </li>
                            </ul>

                            <div id="revenue-expenses-charts"
                                data-colors="[&quot;--vz-success&quot;, &quot;--vz-danger&quot;]" class="apex-charts"
                                dir="ltr" style="min-height: 305px;">
                                <div id="apexcharts5u7fzitf"
                                    class="apexcharts-canvas apexcharts5u7fzitf apexcharts-theme-light"
                                    style="width: 1064px; height: 290px;"><svg id="SvgjsSvg1552" width="1064"
                                        height="290" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="1064" height="290">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="inset: auto 0px 1px; position: absolute; max-height: 145px;">
                                                <div class="apexcharts-legend-series" rel="1"
                                                    seriesname="Revenue" data:collapsed="false"
                                                    style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="1" data:collapsed="false"
                                                        style="background: rgb(10, 179, 156) !important; color: rgb(10, 179, 156); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Revenue" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2"
                                                    seriesname="Expenses" data:collapsed="false"
                                                    style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="background: rgb(240, 101, 72) !important; color: rgb(240, 101, 72); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Expenses" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Expenses</span>
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
                                        <rect id="SvgjsRect1557" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1637" class="apexcharts-yaxis" rel="0"
                                            transform="translate(29.734375, 0)">
                                            <g id="SvgjsG1638" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText1640" font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="31.5" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1641">$260k</tspan>
                                                    <title>$260k</title>
                                                </text><text id="SvgjsText1643"
                                                    font-family="Helvetica, Arial, sans-serif" x="20" y="70.1988"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1644">$208k</tspan>
                                                    <title>$208k</title>
                                                </text><text id="SvgjsText1646"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="108.89760000000001" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1647">$156k</tspan>
                                                    <title>$156k</title>
                                                </text><text id="SvgjsText1649"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="147.59640000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1650">$104k</tspan>
                                                    <title>$104k</title>
                                                </text><text id="SvgjsText1652"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="186.29520000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1653">$52k</tspan>
                                                    <title>$52k</title>
                                                </text><text id="SvgjsText1655"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="224.99400000000003" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1656">$0k</tspan>
                                                    <title>$0k</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1554" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(59.734375, 30)">
                                            <defs id="SvgjsDefs1553">
                                                <clipPath id="gridRectMask5u7fzitf">
                                                    <rect id="SvgjsRect1559" width="987.65625" height="195.494" x="-3"
                                                        y="-1" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask5u7fzitf"></clipPath>
                                                <clipPath id="nonForecastMask5u7fzitf"></clipPath>
                                                <clipPath id="gridRectMarkerMask5u7fzitf">
                                                    <rect id="SvgjsRect1560" width="985.65625" height="197.494" x="-2"
                                                        y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <line id="SvgjsLine1558" x1="0" y1="0" x2="0"
                                                y2="193.494" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="193.494" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1576" x1="0" y1="194.494" x2="0"
                                                y2="200.494" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1577" x1="89.24147727272727" y1="194.494"
                                                x2="89.24147727272727" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1578" x1="178.48295454545453" y1="194.494"
                                                x2="178.48295454545453" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1579" x1="267.7244318181818" y1="194.494"
                                                x2="267.7244318181818" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1580" x1="356.96590909090907" y1="194.494"
                                                x2="356.96590909090907" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1581" x1="446.2073863636363" y1="194.494"
                                                x2="446.2073863636363" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1582" x1="535.4488636363636" y1="194.494"
                                                x2="535.4488636363636" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1583" x1="624.6903409090909" y1="194.494"
                                                x2="624.6903409090909" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1584" x1="713.9318181818181" y1="194.494"
                                                x2="713.9318181818181" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1585" x1="803.1732954545454" y1="194.494"
                                                x2="803.1732954545454" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1586" x1="892.4147727272726" y1="194.494"
                                                x2="892.4147727272726" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1587" x1="981.6562499999999" y1="194.494"
                                                x2="981.6562499999999" y2="200.494" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"></line>
                                            <g id="SvgjsG1572" class="apexcharts-grid">
                                                <g id="SvgjsG1573" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1589" x1="0" y1="38.6988"
                                                        x2="981.65625" y2="38.6988" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1590" x1="0" y1="77.3976"
                                                        x2="981.65625" y2="77.3976" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1591" x1="0" y1="116.09639999999999"
                                                        x2="981.65625" y2="116.09639999999999" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1592" x1="0" y1="154.7952"
                                                        x2="981.65625" y2="154.7952" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1574" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1595" x1="0" y1="193.494"
                                                    x2="981.65625" y2="193.494" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1594" x1="0" y1="1"
                                                    x2="0" y2="193.494" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1561" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1562" class="apexcharts-series" seriesName="Revenue"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1565"
                                                        d="M 0 193.494 L 0 178.60984615384615C 31.23451704545454 178.60984615384615 58.00696022727273 174.8888076923077 89.24147727272727 174.8888076923077C 120.4759943181818 174.8888076923077 147.2484375 171.16776923076924 178.48295454545453 171.16776923076924C 209.71747159090907 171.16776923076924 236.48991477272727 167.44673076923078 267.7244318181818 167.44673076923078C 298.95894886363635 167.44673076923078 325.7313920454545 163.7256923076923 356.96590909090907 163.7256923076923C 388.2004261363636 163.7256923076923 414.9728693181818 152.56257692307693 446.2073863636363 152.56257692307693C 477.44190340909086 152.56257692307693 504.2143465909091 141.39946153846154 535.4488636363636 141.39946153846154C 566.6833806818181 141.39946153846154 593.4558238636364 111.63115384615385 624.6903409090909 111.63115384615385C 655.9248579545454 111.63115384615385 682.6973011363636 81.86284615384615 713.9318181818181 81.86284615384615C 745.1663352272726 81.86284615384615 771.9387784090909 59.536615384615374 803.1732954545454 59.536615384615374C 834.4078124999999 59.536615384615374 861.1802556818182 37.21038461538461 892.4147727272726 37.21038461538461C 923.6492897727272 37.21038461538461 950.4217329545454 7.442076923076911 981.65625 7.442076923076911C 981.65625 7.442076923076911 981.65625 7.442076923076911 981.65625 193.494M 981.65625 7.442076923076911z"
                                                        fill="rgba(10,179,156,0.06)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask5u7fzitf)"
                                                        pathTo="M 0 193.494 L 0 178.60984615384615C 31.23451704545454 178.60984615384615 58.00696022727273 174.8888076923077 89.24147727272727 174.8888076923077C 120.4759943181818 174.8888076923077 147.2484375 171.16776923076924 178.48295454545453 171.16776923076924C 209.71747159090907 171.16776923076924 236.48991477272727 167.44673076923078 267.7244318181818 167.44673076923078C 298.95894886363635 167.44673076923078 325.7313920454545 163.7256923076923 356.96590909090907 163.7256923076923C 388.2004261363636 163.7256923076923 414.9728693181818 152.56257692307693 446.2073863636363 152.56257692307693C 477.44190340909086 152.56257692307693 504.2143465909091 141.39946153846154 535.4488636363636 141.39946153846154C 566.6833806818181 141.39946153846154 593.4558238636364 111.63115384615385 624.6903409090909 111.63115384615385C 655.9248579545454 111.63115384615385 682.6973011363636 81.86284615384615 713.9318181818181 81.86284615384615C 745.1663352272726 81.86284615384615 771.9387784090909 59.536615384615374 803.1732954545454 59.536615384615374C 834.4078124999999 59.536615384615374 861.1802556818182 37.21038461538461 892.4147727272726 37.21038461538461C 923.6492897727272 37.21038461538461 950.4217329545454 7.442076923076911 981.65625 7.442076923076911C 981.65625 7.442076923076911 981.65625 7.442076923076911 981.65625 193.494M 981.65625 7.442076923076911z"
                                                        pathFrom="M -1 193.494 L -1 193.494 L 89.24147727272727 193.494 L 178.48295454545453 193.494 L 267.7244318181818 193.494 L 356.96590909090907 193.494 L 446.2073863636363 193.494 L 535.4488636363636 193.494 L 624.6903409090909 193.494 L 713.9318181818181 193.494 L 803.1732954545454 193.494 L 892.4147727272726 193.494 L 981.65625 193.494">
                                                    </path>
                                                    <path id="SvgjsPath1566"
                                                        d="M 0 178.60984615384615C 31.23451704545454 178.60984615384615 58.00696022727273 174.8888076923077 89.24147727272727 174.8888076923077C 120.4759943181818 174.8888076923077 147.2484375 171.16776923076924 178.48295454545453 171.16776923076924C 209.71747159090907 171.16776923076924 236.48991477272727 167.44673076923078 267.7244318181818 167.44673076923078C 298.95894886363635 167.44673076923078 325.7313920454545 163.7256923076923 356.96590909090907 163.7256923076923C 388.2004261363636 163.7256923076923 414.9728693181818 152.56257692307693 446.2073863636363 152.56257692307693C 477.44190340909086 152.56257692307693 504.2143465909091 141.39946153846154 535.4488636363636 141.39946153846154C 566.6833806818181 141.39946153846154 593.4558238636364 111.63115384615385 624.6903409090909 111.63115384615385C 655.9248579545454 111.63115384615385 682.6973011363636 81.86284615384615 713.9318181818181 81.86284615384615C 745.1663352272726 81.86284615384615 771.9387784090909 59.536615384615374 803.1732954545454 59.536615384615374C 834.4078124999999 59.536615384615374 861.1802556818182 37.21038461538461 892.4147727272726 37.21038461538461C 923.6492897727272 37.21038461538461 950.4217329545454 7.442076923076911 981.65625 7.442076923076911"
                                                        fill="none" fill-opacity="1" stroke="#0ab39c"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask5u7fzitf)"
                                                        pathTo="M 0 178.60984615384615C 31.23451704545454 178.60984615384615 58.00696022727273 174.8888076923077 89.24147727272727 174.8888076923077C 120.4759943181818 174.8888076923077 147.2484375 171.16776923076924 178.48295454545453 171.16776923076924C 209.71747159090907 171.16776923076924 236.48991477272727 167.44673076923078 267.7244318181818 167.44673076923078C 298.95894886363635 167.44673076923078 325.7313920454545 163.7256923076923 356.96590909090907 163.7256923076923C 388.2004261363636 163.7256923076923 414.9728693181818 152.56257692307693 446.2073863636363 152.56257692307693C 477.44190340909086 152.56257692307693 504.2143465909091 141.39946153846154 535.4488636363636 141.39946153846154C 566.6833806818181 141.39946153846154 593.4558238636364 111.63115384615385 624.6903409090909 111.63115384615385C 655.9248579545454 111.63115384615385 682.6973011363636 81.86284615384615 713.9318181818181 81.86284615384615C 745.1663352272726 81.86284615384615 771.9387784090909 59.536615384615374 803.1732954545454 59.536615384615374C 834.4078124999999 59.536615384615374 861.1802556818182 37.21038461538461 892.4147727272726 37.21038461538461C 923.6492897727272 37.21038461538461 950.4217329545454 7.442076923076911 981.65625 7.442076923076911"
                                                        pathFrom="M -1 193.494 L -1 193.494 L 89.24147727272727 193.494 L 178.48295454545453 193.494 L 267.7244318181818 193.494 L 356.96590909090907 193.494 L 446.2073863636363 193.494 L 535.4488636363636 193.494 L 624.6903409090909 193.494 L 713.9318181818181 193.494 L 803.1732954545454 193.494 L 892.4147727272726 193.494 L 981.65625 193.494"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1563"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1660" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wydnpxbip no-pointer-events"
                                                                stroke="#ffffff" fill="#0ab39c" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1567" class="apexcharts-series" seriesName="Expenses"
                                                    data:longestSeries="true" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1570"
                                                        d="M 0 193.494 L 0 184.5635076923077C 31.23451704545454 184.5635076923077 58.00696022727273 180.84246923076924 89.24147727272727 180.84246923076924C 120.4759943181818 180.84246923076924 147.2484375 160.00465384615384 178.48295454545453 160.00465384615384C 209.71747159090907 160.00465384615384 236.48991477272727 162.23727692307693 267.7244318181818 162.23727692307693C 298.95894886363635 162.23727692307693 325.7313920454545 175.6330153846154 356.96590909090907 175.6330153846154C 388.2004261363636 175.6330153846154 414.9728693181818 167.44673076923078 446.2073863636363 167.44673076923078C 477.44190340909086 167.44673076923078 504.2143465909091 162.23727692307693 535.4488636363636 162.23727692307693C 566.6833806818181 162.23727692307693 593.4558238636364 137.67842307692308 624.6903409090909 137.67842307692308C 655.9248579545454 137.67842307692308 682.6973011363636 117.58481538461538 713.9318181818181 117.58481538461538C 745.1663352272726 117.58481538461538 771.9387784090909 113.11956923076923 803.1732954545454 113.11956923076923C 834.4078124999999 113.11956923076923 861.1802556818182 77.3976 892.4147727272726 77.3976C 923.6492897727272 77.3976 950.4217329545454 45.39666923076922 981.65625 45.39666923076922C 981.65625 45.39666923076922 981.65625 45.39666923076922 981.65625 193.494M 981.65625 45.39666923076922z"
                                                        fill="rgba(240,101,72,0.06)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="1"
                                                        clip-path="url(#gridRectMask5u7fzitf)"
                                                        pathTo="M 0 193.494 L 0 184.5635076923077C 31.23451704545454 184.5635076923077 58.00696022727273 180.84246923076924 89.24147727272727 180.84246923076924C 120.4759943181818 180.84246923076924 147.2484375 160.00465384615384 178.48295454545453 160.00465384615384C 209.71747159090907 160.00465384615384 236.48991477272727 162.23727692307693 267.7244318181818 162.23727692307693C 298.95894886363635 162.23727692307693 325.7313920454545 175.6330153846154 356.96590909090907 175.6330153846154C 388.2004261363636 175.6330153846154 414.9728693181818 167.44673076923078 446.2073863636363 167.44673076923078C 477.44190340909086 167.44673076923078 504.2143465909091 162.23727692307693 535.4488636363636 162.23727692307693C 566.6833806818181 162.23727692307693 593.4558238636364 137.67842307692308 624.6903409090909 137.67842307692308C 655.9248579545454 137.67842307692308 682.6973011363636 117.58481538461538 713.9318181818181 117.58481538461538C 745.1663352272726 117.58481538461538 771.9387784090909 113.11956923076923 803.1732954545454 113.11956923076923C 834.4078124999999 113.11956923076923 861.1802556818182 77.3976 892.4147727272726 77.3976C 923.6492897727272 77.3976 950.4217329545454 45.39666923076922 981.65625 45.39666923076922C 981.65625 45.39666923076922 981.65625 45.39666923076922 981.65625 193.494M 981.65625 45.39666923076922z"
                                                        pathFrom="M -1 193.494 L -1 193.494 L 89.24147727272727 193.494 L 178.48295454545453 193.494 L 267.7244318181818 193.494 L 356.96590909090907 193.494 L 446.2073863636363 193.494 L 535.4488636363636 193.494 L 624.6903409090909 193.494 L 713.9318181818181 193.494 L 803.1732954545454 193.494 L 892.4147727272726 193.494 L 981.65625 193.494">
                                                    </path>
                                                    <path id="SvgjsPath1571"
                                                        d="M 0 184.5635076923077C 31.23451704545454 184.5635076923077 58.00696022727273 180.84246923076924 89.24147727272727 180.84246923076924C 120.4759943181818 180.84246923076924 147.2484375 160.00465384615384 178.48295454545453 160.00465384615384C 209.71747159090907 160.00465384615384 236.48991477272727 162.23727692307693 267.7244318181818 162.23727692307693C 298.95894886363635 162.23727692307693 325.7313920454545 175.6330153846154 356.96590909090907 175.6330153846154C 388.2004261363636 175.6330153846154 414.9728693181818 167.44673076923078 446.2073863636363 167.44673076923078C 477.44190340909086 167.44673076923078 504.2143465909091 162.23727692307693 535.4488636363636 162.23727692307693C 566.6833806818181 162.23727692307693 593.4558238636364 137.67842307692308 624.6903409090909 137.67842307692308C 655.9248579545454 137.67842307692308 682.6973011363636 117.58481538461538 713.9318181818181 117.58481538461538C 745.1663352272726 117.58481538461538 771.9387784090909 113.11956923076923 803.1732954545454 113.11956923076923C 834.4078124999999 113.11956923076923 861.1802556818182 77.3976 892.4147727272726 77.3976C 923.6492897727272 77.3976 950.4217329545454 45.39666923076922 981.65625 45.39666923076922"
                                                        fill="none" fill-opacity="1" stroke="#f06548"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="1"
                                                        clip-path="url(#gridRectMask5u7fzitf)"
                                                        pathTo="M 0 184.5635076923077C 31.23451704545454 184.5635076923077 58.00696022727273 180.84246923076924 89.24147727272727 180.84246923076924C 120.4759943181818 180.84246923076924 147.2484375 160.00465384615384 178.48295454545453 160.00465384615384C 209.71747159090907 160.00465384615384 236.48991477272727 162.23727692307693 267.7244318181818 162.23727692307693C 298.95894886363635 162.23727692307693 325.7313920454545 175.6330153846154 356.96590909090907 175.6330153846154C 388.2004261363636 175.6330153846154 414.9728693181818 167.44673076923078 446.2073863636363 167.44673076923078C 477.44190340909086 167.44673076923078 504.2143465909091 162.23727692307693 535.4488636363636 162.23727692307693C 566.6833806818181 162.23727692307693 593.4558238636364 137.67842307692308 624.6903409090909 137.67842307692308C 655.9248579545454 137.67842307692308 682.6973011363636 117.58481538461538 713.9318181818181 117.58481538461538C 745.1663352272726 117.58481538461538 771.9387784090909 113.11956923076923 803.1732954545454 113.11956923076923C 834.4078124999999 113.11956923076923 861.1802556818182 77.3976 892.4147727272726 77.3976C 923.6492897727272 77.3976 950.4217329545454 45.39666923076922 981.65625 45.39666923076922"
                                                        pathFrom="M -1 193.494 L -1 193.494 L 89.24147727272727 193.494 L 178.48295454545453 193.494 L 267.7244318181818 193.494 L 356.96590909090907 193.494 L 446.2073863636363 193.494 L 535.4488636363636 193.494 L 624.6903409090909 193.494 L 713.9318181818181 193.494 L 803.1732954545454 193.494 L 892.4147727272726 193.494 L 981.65625 193.494"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1568"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="1">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1661" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker w5ma0647f no-pointer-events"
                                                                stroke="#ffffff" fill="#f06548" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1564" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                                <g id="SvgjsG1569" class="apexcharts-datalabels" data:realIndex="1">
                                                </g>
                                            </g>
                                            <g id="SvgjsG1575" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1588" x1="0" y1="0"
                                                    x2="981.65625" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1593" x1="0" y1="193.494"
                                                    x2="981.65625" y2="193.494" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1636" x1="0" y1="194.494"
                                                    x2="981.65625" y2="194.494" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <line id="SvgjsLine1596" x1="0" y1="0" x2="981.65625"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1597" x1="0" y1="0" x2="981.65625"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1598" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1599" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1601"
                                                        font-family="Helvetica, Arial, sans-serif" x="0" y="222.494"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1602">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1604"
                                                        font-family="Helvetica, Arial, sans-serif" x="89.24147727272728"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1605">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1607"
                                                        font-family="Helvetica, Arial, sans-serif" x="178.48295454545456"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1608">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1610"
                                                        font-family="Helvetica, Arial, sans-serif" x="267.7244318181818"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1611">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1613"
                                                        font-family="Helvetica, Arial, sans-serif" x="356.96590909090907"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1614">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1616"
                                                        font-family="Helvetica, Arial, sans-serif" x="446.2073863636363"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1617">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1619"
                                                        font-family="Helvetica, Arial, sans-serif" x="535.4488636363636"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1620">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1622"
                                                        font-family="Helvetica, Arial, sans-serif" x="624.6903409090909"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1623">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1625"
                                                        font-family="Helvetica, Arial, sans-serif" x="713.9318181818181"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1626">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text><text id="SvgjsText1628"
                                                        font-family="Helvetica, Arial, sans-serif" x="803.1732954545454"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1629">Oct</tspan>
                                                        <title>Oct</title>
                                                    </text><text id="SvgjsText1631"
                                                        font-family="Helvetica, Arial, sans-serif" x="892.4147727272726"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1632">Nov</tspan>
                                                        <title>Nov</title>
                                                    </text><text id="SvgjsText1634"
                                                        font-family="Helvetica, Arial, sans-serif" x="981.6562499999999"
                                                        y="222.494" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1635">Dec</tspan>
                                                        <title>Dec</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1657" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1658" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1659" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1662" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1663" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(10, 179, 156);"></span>
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
                                                style="background-color: rgb(240, 101, 72);"></span>
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
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Deals Status</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">02 Nov 2021 to 31 Dec 2021<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="text-muted">
                                            <th scope="col">Name</th>
                                            <th scope="col" style="width: 20%;">Last Contacted</th>
                                            <th scope="col">Sales Representative</th>
                                            <th scope="col" style="width: 16%;">Status</th>
                                            <th scope="col" style="width: 12%;">Deal Value</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Absternet LLC</td>
                                            <td>Sep 20, 2021</td>
                                            <td><img src="assets/images/users/avatar-1.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Donald
                                                    Risher</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span>
                                            </td>
                                            <td>
                                                <div class="text-nowrap">$100.1K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raitech Soft</td>
                                            <td>Sep 23, 2021</td>
                                            <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Sofia
                                                    Cunha</a>
                                            </td>
                                            <td><span class="badge bg-warning-subtle text-warning p-2">Intro Call</span>
                                            </td>
                                            <td>
                                                <div class="text-nowrap">$150K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>William PVT</td>
                                            <td>Sep 27, 2021</td>
                                            <td><img src="assets/images/users/avatar-3.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Luis
                                                    Rocha</a>
                                            </td>
                                            <td><span class="badge bg-danger-subtle text-danger p-2">Stuck</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.18K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Loiusee LLP</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria
                                                    Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-success-subtle text-success p-2">Deal Won</span>
                                            </td>
                                            <td>
                                                <div class="text-nowrap">$180K</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apple Inc.</td>
                                            <td>Sep 30, 2021</td>
                                            <td><img src="assets/images/users/avatar-6.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria
                                                    Rodrigues</a>
                                            </td>
                                            <td><span class="badge bg-info-subtle text-info p-2">New Lead</span></td>
                                            <td>
                                                <div class="text-nowrap">$78.9K</div>
                                            </td>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-5">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">My Tasks</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted"><i
                                                class="ri-settings-4-line align-middle me-1 fs-15"></i>Settings</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body p-0">

                            <div class="align-items-center p-3 justify-content-between d-flex">
                                <div class="flex-shrink-0">
                                    <div class="text-muted"><span class="fw-semibold">4</span> of <span
                                            class="fw-semibold">10</span> remaining</div>
                                </div>
                                <button type="button" class="btn btn-sm btn-success"><i
                                        class="ri-add-line align-middle me-1"></i> Add Task</button>
                            </div><!-- end card header -->

                            <div data-simplebar="init" style="max-height: 219px;" class="simplebar-scrollable-y">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <ul class="list-group list-group-flush border-dashed px-3">
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check ps-0 flex-sharink-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_one">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_one">Review and make sure nothing slips
                                                                        through cracks</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">15 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check ps-0 flex-sharink-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_two">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_two">Send meeting invites for sales
                                                                        upcampaign</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">20 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check flex-sharink-0 ps-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_three">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_three">Weekly closed sales won checking
                                                                        with sales team</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">24 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check ps-0 flex-sharink-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_four">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_four">Add notes that can be viewed from
                                                                        the individual view</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check ps-0 flex-sharink-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_five">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_five">Move stuff to another page</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item ps-0">
                                                            <div class="d-flex align-items-start">
                                                                <div class="form-check ps-0 flex-sharink-0">
                                                                    <input type="checkbox" class="form-check-input ms-0"
                                                                        id="task_six">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <label class="form-check-label mb-0 ps-2"
                                                                        for="task_six">Styling wireframe design and
                                                                        documentation for velzon admin</label>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul><!-- end ul -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 429px; height: 356px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 134px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 pt-2">
                                <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show
                                    more...</a>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xxl-5">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Upcoming Activities</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush border-dashed">
                                <li class="list-group-item ps-0">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                                <div class="text-center">
                                                    <h5 class="mb-0">25</h5>
                                                    <div class="text-muted">Tue</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-13">12:00am - 03:30pm</h5>
                                            <a href="#" class="text-reset fs-14 mb-0">Meeting for campaign with
                                                sales team</a>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Stine Nielsen">
                                                        <img src="assets/images/users/avatar-1.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Jansh Brown">
                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Dan Gibson">
                                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-xxs">
                                                            <span class="avatar-title rounded-circle bg-info text-white">
                                                                5
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li><!-- end -->
                                <li class="list-group-item ps-0">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                                <div class="text-center">
                                                    <h5 class="mb-0">20</h5>
                                                    <div class="text-muted">Wed</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-13">02:00pm - 03:45pm</h5>
                                            <a href="#" class="text-reset fs-14 mb-0">Adding a new event with
                                                attachments</a>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Frida Bang">
                                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Malou Silva">
                                                        <img src="assets/images/users/avatar-5.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Simon Schmidt">
                                                        <img src="assets/images/users/avatar-6.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Tosh Jessen">
                                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-xxs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-success text-white">
                                                                3
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li><!-- end -->
                                <li class="list-group-item ps-0">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                                <div class="text-center">
                                                    <h5 class="mb-0">17</h5>
                                                    <div class="text-muted">Wed</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-13">04:30pm - 07:15pm</h5>
                                            <a href="#" class="text-reset fs-14 mb-0">Create new project Bundling
                                                Product</a>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Nina Schmidt">
                                                        <img src="assets/images/users/avatar-8.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Stine Nielsen">
                                                        <img src="assets/images/users/avatar-1.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Jansh Brown">
                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-xxs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-primary text-white">
                                                                4
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li><!-- end -->
                                <li class="list-group-item ps-0">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                                <div class="text-center">
                                                    <h5 class="mb-0">12</h5>
                                                    <div class="text-muted">Tue</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-13">10:30am - 01:15pm</h5>
                                            <a href="#" class="text-reset fs-14 mb-0">Weekly closed sales won
                                                checking with sales team</a>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Stine Nielsen">
                                                        <img src="assets/images/users/avatar-1.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Jansh Brown">
                                                        <img src="assets/images/users/avatar-5.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="" data-bs-original-title="Dan Gibson">
                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                            class="rounded-circle avatar-xxs">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-xxs">
                                                            <span
                                                                class="avatar-title rounded-circle bg-warning text-white">
                                                                9
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li><!-- end -->
                            </ul><!-- end -->
                            <div class="align-items-center mt-2 row g-3 text-center text-sm-start">
                                <div class="col-sm">
                                    <div class="text-muted">Showing<span class="fw-semibold">4</span> of <span
                                            class="fw-semibold">125</span> Results
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul
                                        class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xxl-7">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Closing Deals</h4>
                            <div class="flex-shrink-0">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected="">Closed Deals</option>
                                    <option value="1">Active Deals</option>
                                    <option value="2">Paused Deals</option>
                                    <option value="3">Canceled Deals</option>
                                </select>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 30%;">Deal Name</th>
                                            <th scope="col" style="width: 30%;">Sales Rep</th>
                                            <th scope="col" style="width: 20%;">Amount</th>
                                            <th scope="col" style="width: 20%;">Close Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Acme Inc Install</td>
                                            <td><img src="assets/images/users/avatar-1.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Donald
                                                    Risher</a>
                                            </td>
                                            <td>$96k</td>
                                            <td>Today</td>
                                        </tr>
                                        <tr>
                                            <td>Save lots Stores</td>
                                            <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Jansh
                                                    Brown</a>
                                            </td>
                                            <td>$55.7k</td>
                                            <td>30 Dec 2021</td>
                                        </tr>
                                        <tr>
                                            <td>William PVT</td>
                                            <td><img src="assets/images/users/avatar-7.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Ayaan
                                                    Hudda</a>
                                            </td>
                                            <td>$102k</td>
                                            <td>25 Nov 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Raitech Soft</td>
                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Julia
                                                    William</a>
                                            </td>
                                            <td>$89.5k</td>
                                            <td>20 Sep 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Absternet LLC</td>
                                            <td><img src="assets/images/users/avatar-4.jpg" alt=""
                                                    class="avatar-xs rounded-circle me-2">
                                                <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria
                                                    Rodrigues</a>
                                            </td>
                                            <td>$89.5k</td>
                                            <td>20 Sep 2021</td>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
