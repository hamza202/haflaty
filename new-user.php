<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Haflaty | New Member</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <?php include "style.php" ?>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php" ?>
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <?php include "left-menu.php"; ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            New Member
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head justify-content-between">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Add New Member
                                        </h3>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <button type="button"
                                            class="btn m-btn m-btn--gradient-from-success m-btn--gradient-to-accent"
                                            data-toggle="modal" data-target="#m_modal_1">Add new Country / City
                                    </button>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <form id="rform" action="#">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-name">Name</label>
                                                <input type="text" class="form-control m-input" id="reg-name"
                                                       placeholder="Name"
                                                       data-parsley-required-message="You must write user name"
                                                       data-parsley-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-phone">Phone Number</label>
                                                <input type="text" class="form-control m-input" id="reg-phone"
                                                       placeholder="Phone Number"
                                                       data-parsley-required-message="You must write user number"
                                                       data-parsley-required="true"
                                                       data-parsley-type="digits">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-email">Email</label>
                                                <input type="email" class="form-control m-input" id="reg-email"
                                                       placeholder="Enter email"
                                                       data-parsley-required-message="You must write user Email"
                                                       data-parsley-required="true"
                                                       data-parsley-type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-confirm">Confirm Email</label>
                                                <input type="email" class="form-control m-input" id="reg-confirm"
                                                       placeholder="Confirm Email" data-parsley-equalto="#m-email"
                                                       data-parsley-required="true"
                                                       data-parsley-equalto-message="Must be same email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-country">Country</label>
                                                <select class="form-control m-input crs-country"
                                                        data-region-id="reg-city"
                                                        id="reg-country"
                                                        data-parsley-required-message="You must select country"
                                                        data-parsley-required="true"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-city">City</label>
                                                <select class="form-control m-input" id="reg-city"
                                                        data-parsley-required-message="You must select city"
                                                        data-parsley-required="true"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-ID-Number">ID Number</label>
                                                <input type="text" class="form-control m-input" id="reg-ID-Number"
                                                       placeholder="ID Number"
                                                       data-parsley-required-message="You must write user ID"
                                                       data-parsley-required="true"
                                                       data-parsley-type="digits">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group m-form__group">
                                                <label for="reg-Address">Address</label>
                                                <input type="text" class="form-control m-input" id="reg-Address"
                                                       placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                    class="btn m-btn m-btn--gradient-from-primary m-btn--gradient-to-info">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end:: Body -->
    <!--  Start Modal  -->
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Country / City</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group m-form__group">
                                    <label for="reg-name">Country</label>
                                    <input type="text" class="form-control m-input" id="reg-name" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-sm-12">City</label>
                            <div class="col-sm-12">
                                <select class="form-control m-select2 city-select" id="m_select2_11" multiple name="param">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--end::Modal-->
    <!--  End Modal  -->
    <!-- begin::Footer -->
    <?php include "footer.php" ?>
    <!-- end::Footer -->
</div>

<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->
<?php include "javascript.php" ?>
<!--begin::Base Scripts -->
<script src="assets/crs.min.js"></script>
<script src="assets/parsley.min.js"></script>
<script>
    $(document).ready(function () {
        $("#rform").on('submit', function (e) {
            var form = $(this);
            form.parsley().validate();
        });
    });
</script>
<script src="assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>