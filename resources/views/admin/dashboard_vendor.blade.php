@extends('admin/layout')

@section('container')

<!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">{{$page_name}}</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">{{$page_name}}</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->
<div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
					<!----
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
										 
                                            <div class="col-md-4">
                                                 <div class="stats-icon orange">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
											<a href="{{url('/admin/users')}}">
                                                <h6 class="text-muted font-semibold">Total Number Users</h6>
                                                <h6 class="font-extrabold mb-0">{{$users->count()}}</h6>
												</a>
                                            </div>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fa fa-user-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">New  User Register in Month</h6>
                                                <h6 class="font-extrabold mb-0">{{$current_users->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Active User</h6>
                                                <h6 class="font-extrabold mb-0">{{ $activeUsers->count() }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						----->
						<div class="row">
						<div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-shopping-basket"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Order</h6>
                                                <h6 class="font-extrabold mb-0">{{$totalOrder}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-shopping-basket"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Today Order</h6>
                                                <h6 class="font-extrabold mb-0">{{$todayOrder}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-shopping-basket"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">This month Order</h6>
                                                <h6 class="font-extrabold mb-0">{{$thisMonthOrder}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-shopping-basket"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">This year Order</h6>
                                                <h6 class="font-extrabold mb-0">{{$thisYearOrder}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="row">
						  <div class="col-6 col-lg-3 col-md-6">
									<div class="card">
										<div class="card-body px-3 py-4-5">
											<div class="row">
												<div class="col-md-4">
													<div class="stats-icon red">
														<i class="fa fa-product-hunt"></i>
													</div>
												</div>
												<div class="col-md-8">
													<h6 class="text-muted font-semibold">Total Product</h6>
													<h6 class="font-extrabold mb-0">{{$totalProducts}}</h6>
												</div>
											</div>
										</div>
									</div>
							</div>
							 <div class="col-6 col-lg-3 col-md-6">
									<div class="card">
										<div class="card-body px-3 py-4-5">
											<div class="row">
												<div class="col-md-4">
													<div class="stats-icon red">
														<i class="fas fa-star"></i>
													</div>
												</div>
												<div class="col-md-8">
													<h6 class="text-muted font-semibold">Total Product Review</h6>
													<h6 class="font-extrabold mb-0">{{$totalreview}}</h6>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						
						
						
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="width:924px;">
                                    <div class="card-header">
                                        <h4>Sale order</h4>
                                    </div>
									<canvas id="myChart" style="width:100%;max-width:auto">
									</canvas>
									
                                 </div>
                            </div>
                        </div>
						<!----
						  <div class="row">
                            <div class="col-12">
                                <div class="card" style="width:924px;">
                                    <div class="card-header">
                                        <h4>Users</h4>
                                    </div>
									<canvas id="divChart" style="width:100%;max-width:auto">
									</canvas>
									
                                 </div>
                            </div>
                        </div>
						---->
						<div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12" style="position: relative;">
                                                <div id="chart-europe" style="min-height: 95px;"><div id="apexchartspstm2bh2" class="apexcharts-canvas apexchartspstm2bh2 apexcharts-theme-light" style="width: 239px; height: 80px;"><svg id="SvgjsSvg1726" width="239" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1728" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs1727"><clippath id="gridRectMaskpstm2bh2"><rect id="SvgjsRect1738" width="213" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="gridRectMarkerMaskpstm2bh2"><rect id="SvgjsRect1739" width="211" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><lineargradient id="SvgjsLinearGradient1744" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1745" stop-opacity="0.65" stop-color="rgba(83,80,233,0.65)" offset="0"></stop><stop id="SvgjsStop1746" stop-opacity="0.5" stop-color="rgba(169,168,244,0.5)" offset="1"></stop><stop id="SvgjsStop1747" stop-opacity="0.5" stop-color="rgba(169,168,244,0.5)" offset="1"></stop></lineargradient></defs><line id="SvgjsLine1735" x1="0" y1="0" x2="0" y2="28" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="28" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1750" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1751" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1758" class="apexcharts-grid"><g id="SvgjsG1759" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1761" x1="0" y1="0" x2="207" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1762" x1="0" y1="5" x2="207" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1763" x1="0" y1="10" x2="207" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1764" x1="0" y1="15" x2="207" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1765" x1="0" y1="20" x2="207" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1766" x1="0" y1="25" x2="207" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1767" x1="0" y1="30" x2="207" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1768" x1="0" y1="35" x2="207" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1760" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1770" x1="0" y1="35" x2="207" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1769" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1740" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1741" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1748" d="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" fill="url(#SvgjsLinearGradient1744)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpstm2bh2)" pathTo="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><path id="SvgjsPath1749" d="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" fill="none" fill-opacity="1" stroke="#5350e9" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpstm2bh2)" pathTo="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><g id="SvgjsG1742" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1776" r="0" cx="0" cy="0" class="apexcharts-marker wdf8frazr no-pointer-events" stroke="#ffffff" fill="#5350e9" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1743" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1771" x1="0" y1="0" x2="207" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1772" x1="0" y1="0" x2="207" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1773" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1774" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1775" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1777" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1778" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1734" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1756" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1757" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1729" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(83, 80, 233);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 264px; height: 96px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12" style="position: relative;">
                                                <div id="chart-america" style="min-height: 95px;"><div id="apexcharts7apn45ol" class="apexcharts-canvas apexcharts7apn45ol apexcharts-theme-light" style="width: 239px; height: 80px;"><svg id="SvgjsSvg1672" width="239" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1674" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs1673"><clippath id="gridRectMask7apn45ol"><rect id="SvgjsRect1684" width="213" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="gridRectMarkerMask7apn45ol"><rect id="SvgjsRect1685" width="211" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><lineargradient id="SvgjsLinearGradient1690" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1691" stop-opacity="0.65" stop-color="rgba(0,139,117,0.65)" offset="0"></stop><stop id="SvgjsStop1692" stop-opacity="0.5" stop-color="rgba(128,197,186,0.5)" offset="1"></stop><stop id="SvgjsStop1693" stop-opacity="0.5" stop-color="rgba(128,197,186,0.5)" offset="1"></stop></lineargradient></defs><line id="SvgjsLine1681" x1="0" y1="0" x2="0" y2="28" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="28" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1696" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1697" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1704" class="apexcharts-grid"><g id="SvgjsG1705" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1707" x1="0" y1="0" x2="207" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1708" x1="0" y1="5" x2="207" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1709" x1="0" y1="10" x2="207" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1710" x1="0" y1="15" x2="207" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1711" x1="0" y1="20" x2="207" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1712" x1="0" y1="25" x2="207" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1713" x1="0" y1="30" x2="207" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1714" x1="0" y1="35" x2="207" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1706" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1716" x1="0" y1="35" x2="207" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1715" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1686" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1687" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1694" d="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" fill="url(#SvgjsLinearGradient1690)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7apn45ol)" pathTo="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><path id="SvgjsPath1695" d="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" fill="none" fill-opacity="1" stroke="#008b75" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7apn45ol)" pathTo="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><g id="SvgjsG1688" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1722" r="0" cx="0" cy="0" class="apexcharts-marker w2k3qa6ww no-pointer-events" stroke="#ffffff" fill="#008b75" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1689" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1717" x1="0" y1="0" x2="207" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1718" x1="0" y1="0" x2="207" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1719" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1720" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1721" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1723" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1724" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1680" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1702" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1703" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1675" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 139, 117);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 264px; height: 96px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"></use>
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12" style="position: relative;">
                                                <div id="chart-indonesia" style="min-height: 95px;"><div id="apexchartsraet2a93" class="apexcharts-canvas apexchartsraet2a93 apexcharts-theme-light" style="width: 239px; height: 80px;"><svg id="SvgjsSvg1618" width="239" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1620" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs1619"><clippath id="gridRectMaskraet2a93"><rect id="SvgjsRect1630" width="213" height="37" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="gridRectMarkerMaskraet2a93"><rect id="SvgjsRect1631" width="211" height="39" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><lineargradient id="SvgjsLinearGradient1636" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1637" stop-opacity="0.65" stop-color="rgba(220,53,69,0.65)" offset="0"></stop><stop id="SvgjsStop1638" stop-opacity="0.5" stop-color="rgba(238,154,162,0.5)" offset="1"></stop><stop id="SvgjsStop1639" stop-opacity="0.5" stop-color="rgba(238,154,162,0.5)" offset="1"></stop></lineargradient></defs><line id="SvgjsLine1627" x1="0" y1="0" x2="0" y2="28" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="28" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1642" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1643" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1650" class="apexcharts-grid"><g id="SvgjsG1651" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1653" x1="0" y1="0" x2="207" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1654" x1="0" y1="5" x2="207" y2="5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1655" x1="0" y1="10" x2="207" y2="10" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1656" x1="0" y1="15" x2="207" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1657" x1="0" y1="20" x2="207" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1658" x1="0" y1="25" x2="207" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1659" x1="0" y1="30" x2="207" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1660" x1="0" y1="35" x2="207" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1652" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1662" x1="0" y1="35" x2="207" y2="35" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1661" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1632" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1633" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1640" d="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" fill="url(#SvgjsLinearGradient1636)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskraet2a93)" pathTo="M 0 35L 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75C 207 14.75 207 14.75 207 35M 207 14.75z" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><path id="SvgjsPath1641" d="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" fill="none" fill-opacity="1" stroke="#dc3545" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskraet2a93)" pathTo="M 0 29.5C 9.45 29.5 17.55 5 27 5C 33.3 5 38.7 15 45 15C 51.3 15 56.7 23.5 63 23.5C 69.3 23.5 74.7 18 81 18C 87.3 18 92.7 28 99 28C 105.3 28 110.7 14.75 117 14.75C 123.3 14.75 128.7 4.75 135 4.75C 141.3 4.75 146.7 23.5 153 23.5C 159.3 23.5 164.7 18 171 18C 177.3 18 182.7 28 189 28C 195.3 28 200.7 14.75 207 14.75" pathFrom="M -1 45L -1 45L 27 45L 45 45L 63 45L 81 45L 99 45L 117 45L 135 45L 153 45L 171 45L 189 45L 207 45"></path><g id="SvgjsG1634" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1668" r="0" cx="0" cy="0" class="apexcharts-marker wpsndulf2 no-pointer-events" stroke="#ffffff" fill="#dc3545" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1635" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1663" x1="0" y1="0" x2="207" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1664" x1="0" y1="0" x2="207" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1665" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1666" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1667" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1669" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1670" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1626" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1648" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1649" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1621" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(220, 53, 69);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 264px; height: 96px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="./Dashboard - Mazer Admin Dashboard_files/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="./Dashboard - Mazer Admin Dashboard_files/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
			 </div>
			
			
						<div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{asset('storage/media/user-icon-jpg-28.jpg')}}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{session()->get('ADMIN_NAME')}}</h5>
                                        <h6 class="text-muted mb-0">{{session()->get('ADMIN_EMAIL')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./Dashboard - Mazer Admin Dashboard_files/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./Dashboard - Mazer Admin Dashboard_files/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./Dashboard - Mazer Admin Dashboard_files/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class="btn btn-block btn-xl btn-light-primary font-bold mt-3">Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
						<div class="card">
                            <div class="card-header">
                                <h4>Review Rating</h4>
                            </div>
                            <div class="card-body" style="position: relative;">
							<!----
                                <div id="chart-visitors-profile" style="min-height: 247.7px;">
								<div id="apexcharts3qupv3gi" class="apexcharts-canvas apexcharts3qupv3gi apexcharts-theme-light" style="width: 239px; height: 247.7px;">
								<svg id="SvgjsSvg1886" width="239" height="247.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
								<foreignobject x="0" y="0" width="239" height="247.7">
								<div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
								<div class="apexcharts-legend-series" rel="1" seriesname="Male" data:collapsed="false" style="margin: 2px 5px;">
								<span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(67, 94, 190) !important; color: rgb(67, 94, 190); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;">
								</span>
								<span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Male
								</span>
								</div>
								<div class="apexcharts-legend-series" rel="2" seriesname="Female" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(85, 198, 232) !important; color: rgb(85, 198, 232); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;">
								</span>
								<span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Female
								</span>
								</div>
								</div>
								</foreignobject><g id="SvgjsG1888" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs1887"><clippath id="gridRectMask3qupv3gi"><rect id="SvgjsRect1890" width="223" height="289" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="gridRectMarkerMask3qupv3gi"><rect id="SvgjsRect1891" width="221" height="291" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><filter id="SvgjsFilter1900" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feflood id="SvgjsFeFlood1901" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1901Out" in="SourceGraphic"></feflood><fecomposite id="SvgjsFeComposite1902" in="SvgjsFeFlood1901Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1902Out"></fecomposite><feoffset id="SvgjsFeOffset1903" dx="1" dy="1" result="SvgjsFeOffset1903Out" in="SvgjsFeComposite1902Out"></feoffset><fegaussianblur id="SvgjsFeGaussianBlur1904" stdDeviation="1 " result="SvgjsFeGaussianBlur1904Out" in="SvgjsFeOffset1903Out"></fegaussianblur><femerge id="SvgjsFeMerge1905" result="SvgjsFeMerge1905Out" in="SourceGraphic"><femergenode id="SvgjsFeMergeNode1906" in="SvgjsFeGaussianBlur1904Out"></femergenode><femergenode id="SvgjsFeMergeNode1907" in="[object Arguments]"></femergenode></femerge><feblend id="SvgjsFeBlend1908" in="SourceGraphic" in2="SvgjsFeMerge1905Out" mode="normal" result="SvgjsFeBlend1908Out"></feblend></filter><filter id="SvgjsFilter1913" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feflood id="SvgjsFeFlood1914" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1914Out" in="SourceGraphic"></feflood><fecomposite id="SvgjsFeComposite1915" in="SvgjsFeFlood1914Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1915Out"></fecomposite><feoffset id="SvgjsFeOffset1916" dx="1" dy="1" result="SvgjsFeOffset1916Out" in="SvgjsFeComposite1915Out"></feoffset><fegaussianblur id="SvgjsFeGaussianBlur1917" stdDeviation="1 " result="SvgjsFeGaussianBlur1917Out" in="SvgjsFeOffset1916Out"></fegaussianblur><femerge id="SvgjsFeMerge1918" result="SvgjsFeMerge1918Out" in="SourceGraphic"><femergenode id="SvgjsFeMergeNode1919" in="SvgjsFeGaussianBlur1917Out"></femergenode><femergenode id="SvgjsFeMergeNode1920" in="[object Arguments]"></femergenode></femerge><feblend id="SvgjsFeBlend1921" in="SourceGraphic" in2="SvgjsFeMerge1918Out" mode="normal" result="SvgjsFeBlend1921Out"></feblend></filter></defs><g id="SvgjsG1892" class="apexcharts-pie"><g id="SvgjsG1893" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1894" r="29.956097560975614" cx="108.5" cy="108.5" fill="transparent"></circle><g id="SvgjsG1895" class="apexcharts-slices"><g id="SvgjsG1896" class="apexcharts-series apexcharts-pie-series" seriesName="Male" rel="1" data:realIndex="0"><path id="SvgjsPath1897" d="M 108.5 8.646341463414629 A 99.85365853658537 99.85365853658537 0 1 1 13.533527372869301 139.35647743831794 L 80.01005821186078 117.75694323149538 A 29.956097560975614 29.956097560975614 0 1 0 108.5 78.54390243902438 L 108.5 8.646341463414629 z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 108.5 8.646341463414629 A 99.85365853658537 99.85365853658537 0 1 1 13.533527372869301 139.35647743831794 L 80.01005821186078 117.75694323149538 A 29.956097560975614 29.956097560975614 0 1 0 108.5 78.54390243902438 L 108.5 8.646341463414629 z" stroke="#ffffff"></path></g><g id="SvgjsG1909" class="apexcharts-series apexcharts-pie-series" seriesName="Female" rel="2" data:realIndex="1"><path id="SvgjsPath1910" d="M 13.533527372869301 139.35647743831794 A 99.85365853658537 99.85365853658537 0 0 1 108.4825722489722 8.646342984272806 L 108.49477167469166 78.54390289528183 A 29.956097560975614 29.956097560975614 0 0 0 80.01005821186078 117.75694323149538 L 13.533527372869301 139.35647743831794 z" fill="rgba(85,198,232,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 13.533527372869301 139.35647743831794 A 99.85365853658537 99.85365853658537 0 0 1 108.4825722489722 8.646342984272806 L 108.49477167469166 78.54390289528183 A 29.956097560975614 29.956097560975614 0 0 0 80.01005821186078 117.75694323149538 L 13.533527372869301 139.35647743831794 z" stroke="#ffffff"></path></g><g id="SvgjsG1898" class="apexcharts-datalabels"><text id="SvgjsText1899" font-family="Helvetica, Arial, sans-serif" x="161.00914935929688" y="146.65013011891463" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1900)" style="font-family: Helvetica, Arial, sans-serif;">70.0%</text></g><g id="SvgjsG1911" class="apexcharts-datalabels"><text id="SvgjsText1912" font-family="Helvetica, Arial, sans-serif" x="55.9908506407031" y="70.34986988108537" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1913)" style="font-family: Helvetica, Arial, sans-serif;">30.0%</text></g></g></g></g><line id="SvgjsLine1922" x1="0" y1="0" x2="217" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1923" x1="0" y1="0" x2="217" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1889" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 94, 190);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 198, 232);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 288px; height: 273px;">
							</div></div><div class="contract-trigger">
							</div></div>
							----
							<canvas id="reviewChart" style="width:100%;max-width:600px"></canvas>--->
							<div id="piechart" style="width: 265px; height: 200px;">
							</div>
							</div>
                        </div>
			</section>
			</div>
			<style type="text/css">	
			 .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }
	  
	  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 7.5px;
    padding-left: 11.5px;
}
	 .stats-icon.blue {
    background-color: #57caeb;
}
.stats-icon.orange {
    background-color: #fd7e14;
}   
.stats-icon.red {
	background-color: #6313e5
}
.stats-icon.green {
	background-color: #2ab720
}
.stats-icon {
    width: 3rem;
    height: 3rem;
    border-radius: 0.5rem;
    background-color: #000;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
}
.stats-icon i {
    color: #fff; 
    font-size: 1.7rem;
} 
[class^="iconly-bold"], [class*=" iconly-bold"] {
    font-family: 'Iconly---Bold' !important;
    speak: never;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	  </style>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script src='https://cdn.plot.ly/plotly-2.18.0.min.js'></script>
		
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
$(function(){
	<?php array_shift($datas)?>
	var datas=<?php echo json_encode($datas)?>;
	//alert(datas);
	var barCanvas=$("#barChart");
	var barChart= new Chart(barCanvas,{
		type:'bar',
		data:{
			labels:['Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
			datasets:[
					{
						label:'Sale Growth,2023',
						data:datas,
						backgroundColor:['red','orange','yellow','green','blue','indigo','violet','purple','pink','silvar','gold','brown'],
					}
			]
		},
		options:{
			scales:{
				yAxes:[{
					ticks:{
						beginAtZero:true
					}
				}]
			}
		}
	});
	
})


var datas=<?php echo json_encode($datas)?>;
	//var totalOrder=<?php echo $totalOrder?>;
var xValues1 = ['Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
var yValues1 = datas;
var barColors = ['red','orange','yellow','green','blue','indigo','violet','purple','pink','silvar','gold','brown'];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues1,
    datasets: [{
      backgroundColor: barColors,
      data: yValues1
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Sale Grouth 2023"
    },
	//scales: {
     // yAxes: [{ticks: {min: 0, max:totalOrder}}]
    //}
  }
});


var xValues = ['Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
   <?php array_shift($data)?>
	var yValues=<?php echo json_encode($data)?>;


new Chart("divChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
   // scales: {
      //yAxes: [{ticks: {min: 0, max:10}}],
    //}
  }
});




var xValues = <?php echo json_encode($review)?>;
var yValues =  <?php echo json_encode($rating)?>;
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("reviewChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "rating Review 2023"
    }
  }
});


 google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
 
        function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
            ['Month Name', 'Registered User Count'],
 
                @php
                foreach($dataPi as $d) {
                    echo "['".$d->rating."', ".$d->count."],";
                }
                @endphp
        ]);
 
          var options = {
            title: 'Product Rating',
            is3D: false,
          };
 
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
          chart.draw(data, options);
        }

</script>

@endsection