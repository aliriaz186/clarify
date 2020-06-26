@extends('landing-page.layout')
<!-- begin:: Content -->
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--Begin::Dashboard 1-->

        <!--Begin::Row-->
        <form action="#" method="POST" id="listing_form" class="form-horizontal listing_form">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-xl-12 order-lg-12 order-xl-12">

                    <div class="kt-portlet kt-portlet--mobile">
                    </div>

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <span
                                    style="display: inline-block;width: 26px;height: 25px;line-height: 24px;border: 1px solid #61bed9;border-radius: 50%;text-align: center;font-size: 15px;font-weight: 500;color: #61bed9;position: relative">1</span>
                            </span>
                                <h3 class="kt-portlet__head-title">
                                    Provide Call Information
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%">
                                            <div
                                                class="input-group-text" style="width: 100%">
                                                <span>Message to Person</span>
                                            </div>
                                        </div>
                                        <textarea name="message" id="message"
                                                  class="form-control" placeholder="Please enter a reason for the call"
                                                  rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Set Estimated Length</span>
                                        </div>
                                        <select name="estimatedLength" id="estimatedLength"
                                                class="form-control">
                                            <option>15 minutes</option>
                                            <option>30 minutes</option>
                                            <option>1 hour</option>
                                        </select></div>
                                    <div class="text-muted mt-2">You will be charged $25.00 for the current scheduled call length. If the call goes over the scheduled time, you will be charged the balance at a rate of $1.67/min. If the call goes less than the scheduled time, you will be refunded the balance.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <span
                                    style="display: inline-block;width: 26px;height: 25px;line-height: 24px;border: 1px solid #61bed9;border-radius: 50%;text-align: center;font-size: 15px;font-weight: 500;color: #61bed9;position: relative">2</span>
                            </span>
                                <h3 class="kt-portlet__head-title">
                                    Suggest Times When You're Free to Talk
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%">
                                            <div
                                                class="input-group-text" style="width: 100%">
                                                <span>Suggested Time 1</span>
                                            </div>
                                        </div>
                                        <input type="datetime-local" name="suggestedTime1" id="suggestedTime1"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%">
                                            <div
                                                class="input-group-text" style="width: 100%">
                                                <span>Suggested Time 2</span>
                                            </div>
                                        </div>
                                        <input type="datetime-local" name="suggestedTime2" id="suggestedTime2"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%">
                                            <div
                                                class="input-group-text" style="width: 100%">
                                                <span>Suggested Time 3</span>
                                            </div>
                                        </div>
                                        <input type="datetime-local" name="suggestedTime3" id="suggestedTime3"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <span
                                    style="display: inline-block;width: 26px;height: 25px;line-height: 24px;border: 1px solid #61bed9;border-radius: 50%;text-align: center;font-size: 15px;font-weight: 500;color: #61bed9;position: relative">3</span>
                            </span>
                                <h3 class="kt-portlet__head-title">
                                    Payment Details
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Credit Card</span>
                                        </div>
                                        <input type="text" name="cardNumber" id="cardNumber" style="width: 33%"
                                               class="form-control"
                                               placeholder="Card number"
                                               value="{{$paymentTableData['card_number'] ?? ''}}">
                                        <input type="text" name="cvv" id="cvv" style="width: 8%"
                                               class="form-control"
                                               placeholder="CVV" value="{{$paymentTableData['cvv'] ?? ''}}">
                                        <div class="errorTxt">
                                            <span id="errorCardNumberText"></span><br>
                                            <span id="errorCVVText"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Expiration</span>
                                        </div>
                                        <select type="text" name="month" id="month" style="width: 35%"
                                                class="form-control"
                                                value="{{$paymentTableData['expiry_month'] ?? ''}}">
                                            <option selected value=''>Month</option>
                                            @for($i=0;$i<count($paymentTableData['monthArray']);$i++)
                                                <option
                                                    {{$paymentTableData['expiry_month'] == $paymentTableData['monthArray'][$i] ? 'selected' : ''}} value='{{$paymentTableData['monthArray'][$i]}}'>{{$paymentTableData['monthArray'][$i]}}</option>
                                            @endfor
                                        </select>
                                        <select style="width: 11%" type="text" name="year" id="year"
                                                class="form-control"
                                                value="{{$paymentTableData['expiry_year'] ?? ''}}">
                                            <option selected value=''>Year</option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2020" ? 'selected' : ''}} value="2020">
                                                2020
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2019" ? 'selected' : ''}} value="2019">
                                                2019
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2018" ? 'selected' : ''}} value="2018">
                                                2018
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2017" ? 'selected' : ''}} value="2017">
                                                2017
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2016" ? 'selected' : ''}} value="2016">
                                                2016
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2015" ? 'selected' : ''}} value="2015">
                                                2015
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2014" ? 'selected' : ''}} value="2014">
                                                2014
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2013" ? 'selected' : ''}} value="2013">
                                                2013
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2012" ? 'selected' : ''}} value="2012">
                                                2012
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2011" ? 'selected' : ''}} value="2011">
                                                2011
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2010" ? 'selected' : ''}} value="2010">
                                                2010
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2009" ? 'selected' : ''}} value="2009">
                                                2009
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2008" ? 'selected' : ''}} value="2008">
                                                2008
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2007" ? 'selected' : ''}} value="2007">
                                                2007
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2006" ? 'selected' : ''}} value="2006">
                                                2006
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2005" ? 'selected' : ''}} value="2005">
                                                2005
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2004" ? 'selected' : ''}} value="2004">
                                                2004
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2003" ? 'selected' : ''}} value="2003">
                                                2003
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2002" ? 'selected' : ''}} value="2002">
                                                2002
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2001" ? 'selected' : ''}} value="2001">
                                                2001
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "2000" ? 'selected' : ''}} value="2000">
                                                2000
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1999" ? 'selected' : ''}} value="1999">
                                                1999
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1998" ? 'selected' : ''}} value="1998">
                                                1998
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1997" ? 'selected' : ''}} value="1997">
                                                1997
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1996" ? 'selected' : ''}} value="1996">
                                                1996
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1995" ? 'selected' : ''}} value="1995">
                                                1995
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1994" ? 'selected' : ''}} value="1994">
                                                1994
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1993" ? 'selected' : ''}} value="1993">
                                                1993
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1992" ? 'selected' : ''}} value="1992">
                                                1992
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1991" ? 'selected' : ''}} value="1991">
                                                1991
                                            </option>
                                            <option
                                                {{$paymentTableData['expiry_year'] == "1990" ? 'selected' : ''}} value="1990">
                                                1990
                                            </option>
                                        </select>
                                        <div>
                                            <span id="errorMonthText"></span><br>
                                            <span id="errorYearText"></span>
                                        </div>
                                        <span class="text-muted mt-2">Your information is kept 100% private!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <span
                                    style="display: inline-block;width: 26px;height: 25px;line-height: 24px;border: 1px solid #61bed9;border-radius: 50%;text-align: center;font-size: 15px;font-weight: 500;color: #61bed9;position: relative">4</span>
                            </span>
                                <h3 class="kt-portlet__head-title">
                                    Billing Address
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Address Line 1<span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <input style="width: 68%" type="text" name="addressLine1" id="addressLine1"
                                               class="form-control"
                                               placeholder="123 Smith St."
                                               value="{{$paymentTableData['address_line1'] ?? ''}}">
                                        <span id="errorAddressText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Address Line 2</span>
                                        </div>
                                        <input type="text" name="addressLine2" id="addressLine2"
                                               class="form-control"
                                               placeholder="Optional"
                                               value="{{$paymentTableData['address_line2'] ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">City<span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <input style="width: 68%" type="text" name="city" id="city"
                                               class="form-control"
                                               placeholder="New York" value="{{$paymentTableData['city'] ?? ''}}">
                                        <span id="errorCityText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">State / Province<span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <input style="width: 68%" type="text" name="state" id="state"
                                               class="form-control"
                                               placeholder="NY" value="{{$paymentTableData['state'] ?? ''}}">
                                        <span id="errorStateText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Postal Code / ZIP<span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <input style="width: 68%" type="text" name="postalCode" id="postalCode"
                                               class="form-control"
                                               placeholder="10001"
                                               value="{{$paymentTableData['postal_code'] ?? ''}}">
                                        <span id="errorPostalCodeText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width: 32%"><span
                                                class="input-group-text" style="width: 100%">Country<span
                                                    class="text-danger">*</span></span>
                                        </div>
                                        <select style="width: 68%" class="form-control" id="country" name="country">
                                            <option value="">Select Country</option>
                                            @for($i=0;$i<count($paymentTableData['countryArray']);$i++)
                                                <option
                                                    {{$paymentTableData['country'] == $paymentTableData['countryArray'][$i] ? 'selected' : ''}} value="{{$paymentTableData['countryArray'][$i]}}">{{$paymentTableData['countryArray'][$i]}}</option>
                                            @endfor
                                        </select>
                                        <span id="errorCountryText"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <button type="button" class="btn"
                                                style="border: 1px solid #239d4a;background-color: #41ca6d;color: #fff;box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.35), inset 0 -3px 10px rgba(255,255,255,0.3);text-shadow: 0 1px 0 rgba(0,0,0,0.3);width: 100%">
                                            Book Now >
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="text-muted mt-3">By scheduling a call you agree with our Terms of Service.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <!-- end:: Content -->
    <script>

        $(document).ready(function () {
            KTApp.blockPage({
                baseZ: 2000,
                overlayColor: '#000000',
                type: 'v1',
                state: 'danger',
                opacity: 0.15,
                message: 'Loading Please Wait...'
            });
            setTimeout(function () {
                KTApp.unblockPage();
            }, 3000);

            $(function () {

                // Initialize form validation.
                $(".listing_form").validate({
                    // Specify validation rules
                    rules: {
                        cardNumber: {required: true, pattern: /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$/},
                        cvv: {required: true, pattern: /^[0-9]{3,4}$/},
                        addressLine1: {required: true},
                        city: {required: true},
                        state: {required: true},
                        postalCode: {required: true},
                        country: {required: true},
                        month: {required: true},
                        year: {required: true},
                    },
                    // Specify validation error messages
                    messages: {
                        cardNumber: {
                            required: "Please provide a card number",
                            pattern: "Invalid Card Number"
                        },
                        cvv: {
                            required: "Please provide a cvv",
                            pattern: "Invalid CVV"
                        },
                        addressLine1: "Address is required",
                        city: "City is required",
                        state: "State is required",
                        postalCode: "Postal code is required",
                        country: "Country is required",
                        month: "Month is required",
                        year: "Year is required",
                    },
                    errorPlacement: function (error, element) {
                        if (element.attr("name") === "cardNumber") {
                            $("#errorCardNumberText").text($(error).text());
                        } else if (element.attr("name") === "cvv") {
                            $("#errorCVVText").text($(error).text());
                        } else if (element.attr("name") === "addressLine1") {
                            $("#errorAddressText").text($(error).text());
                        } else if (element.attr("name") === "postalCode") {
                            $("#errorPostalCodeText").text($(error).text());
                        } else if (element.attr("name") === "state") {
                            $("#errorStateText").text($(error).text());
                        } else if (element.attr("name") === "city") {
                            $("#errorCityText").text($(error).text());
                        } else if (element.attr("name") === "country") {
                            $("#errorCountryText").text($(error).text());
                        } else if (element.attr("name") === "month") {
                            $("#errorMonthText").text($(error).text());
                        } else if (element.attr("name") === "year") {
                            $("#errorYearText").text($(error).text());
                        } else {
                            error.append($('.errorTxt span'));
                        }
                    },
                    // Invalid Handler message
                    invalidHandler: function (event, validator) {
                        swal.fire({
                            "title": "",
                            "text": "There are some errors in your submission. Please correct them.",
                            "type": "error",
                            "confirmButtonClass": "btn btn-secondary",
                            "onClose": function (e) {
                                console.log('on close event fired!');
                            }
                        })
                    },
                    // Here we submit the completed form to database
                    submitHandler: function (form, e) {
                        // Enable Page Loading
                        KTApp.blockPage({
                            baseZ: 2000,
                            overlayColor: '#000000',
                            type: 'v1',
                            state: 'danger',
                            opacity: 0.15,
                            message: 'Processing...'
                        });
                        var form = $('.listing_form');
                        var data = form.serializeArray();
                        e.preventDefault();
                        e.stopImmediatePropagation();
                        $.ajax({
                            url: "{{env('APP_URL')}}/payment-info/save",
                            type: 'POST',
                            dataType: "JSON",
                            data: data,
                            success: function (result) {
                                if (result['status']) {
                                    // Disable Page Loading and show confirmation
                                    setTimeout(function () {
                                        KTApp.unblockPage();
                                    }, 1000);
                                    setTimeout(function () {
                                        swal.fire({
                                            "title": "",
                                            "text": "Saved Successfully",
                                            "type": "success",
                                            "showConfirmButton": false,
                                            "timer": 1500,
                                            "onClose": function (e) {
                                                // window.location.reload();
                                            }
                                        })
                                    }, 2000);
                                } else {
                                    setTimeout(function () {
                                        KTApp.unblockPage();
                                    }, 1000);
                                    setTimeout(function () {
                                        swal.fire({
                                            "title": "",
                                            "text": result['message'],
                                            "type": "error",
                                            "confirmButtonClass": "btn btn-secondary",
                                            "onClose": function (e) {
                                                console.log('on close event fired!');
                                            }
                                        })
                                    }, 2000);
                                }
                            }
                        });
                    }
                });
            });

        });

    </script>
@endsection
