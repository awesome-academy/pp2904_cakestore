@extends('admin.layouts.master')
@section('title', 'Admin')
@section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Report Detail</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/manager" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/manager/reports" class="m-nav__link">
                        <span class="m-nav__link-text">Report</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="/manager/reportdetails" class="m-nav__link">
                        <span class="m-nav__link-text">Pending</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Detail</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                Report Detail
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="m-widget3">
            @foreach ($report_details as $report_detail)
            <div class="m-widget3__item">
                <div class="m-widget3__header">
                    <div class="m-widget3__user-img">
                        <img class="m-widget3__img" src="{{ asset('admin/app/media/img/users/user1.jpg')}}" alt="">
                    </div>
                    <div class="m-widget3__info">
                        <span class="m-widget3__username">
                            {{ $report_detail->user->name}} - {{$report_detail->report->issue}}
                        </span>
                        <br>
                        <span class="m-widget3__time">
                            {{ $report_detail->updated_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        @if(is_null($report_detail->content))
                        Nothing
                        @else
                        {{ $report_detail->content }}
                        @endif
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
