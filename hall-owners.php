<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Haflaty | Hall Owners</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--RTL version:<link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
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
                            Hall Owners
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
                                            Hall Owners Details
                                        </h3>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <a href="new-user.php"
                                       class="btn m-btn m-btn--gradient-from-success m-btn--gradient-to-accent">Add new
                                        member
                                    </a>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin: Datatable -->
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_1">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Edit / Show</th>
                                        <th>Enable / Disable</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>mohamed</td>
                                        <td>0595779004</td>
                                        <td>mohamed@gmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hamza</td>
                                        <td>0595779004</td>
                                        <td>hamza@hptmail.com</td>
                                        <td>
                                            <a href="new-user.php" class="btn btn-primary btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                               data-target="#m_modal_1"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                <label class="mb-0">
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
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

    </div>

    <!-- end:: Body -->
    <!--  Start Modal  -->
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="m-widget2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--primary">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Name:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                Hamza
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--warning">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Phone Number:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                0595779004
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--success">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Email:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                info@info.com
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--info">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Country:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                Palestine
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--brand">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            City:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                Gaza
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="m-widget2__item m-widget2__item--danger">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            ID Number:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                                12355877-65454
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="m-widget2__item m-widget2__item--accent">
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Address:
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            AL-remal omar almokhtar street
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="user-hall.php" class="btn btn-focus">Show Halls</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
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

<!--begin::Page Vendors -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Resources -->
<script src="assets/demo/default/custom/crud/datatables/basic/scrollable.js" type="text/javascript"></script>

<!--end::Page Resources -->
<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>