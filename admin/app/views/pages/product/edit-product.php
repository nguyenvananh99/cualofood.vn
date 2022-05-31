<?php require_once "./app/views/layouts/header.php"; ?>
<div class="content-wrapper" style="min-height: 244px;">
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQUmkfcen2h6CwwBcTVtE6vyiGl3ARII6MQzsAOih4c36WrOhcNUQXLQDgg9XFfUQkniR9JW0RF6RKHV3wkS39L4iaCKD8dbbSNN8ychLGPEK-lwjaeOS0mw8LS68etic4">
    <form method="post" id="product-form" action="/Admin/Product/Edit/1" novalidate="novalidate">
        <div class="content-header clearfix">
            <h1 class="float-left">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Chỉnh sửa chi tiết sản phẩm - Xây dựng máy tính của riêng bạn
                    </font>
                </font><small>
                    <i class="fas fa-arrow-circle-left"></i>
                    <a href="/Admin/Product/List">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">quay lại danh sách sản phẩm</font>
                        </font>
                    </a>
                </small>
            </h1>
            <div class="float-right">
                <button type="submit" name="save" class="btn btn-primary">
                    <i class="far fa-save"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Cứu
                        </font>
                    </font>
                </button>
                <button type="submit" name="save-continue" class="btn btn-primary">
                    <i class="far fa-save"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Lưu và Tiếp tục Chỉnh sửa
                        </font>
                    </font>
                </button>
                <button type="button" name="copyproduct" class="btn bg-olive" data-toggle="modal" data-target="#copyproduct-window">
                    <i class="far fa-clone"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Sao chép sản phẩm
                        </font>
                    </font>
                </button>
                <span id="product-delete" class="btn btn-danger" data-toggle="modal" data-target="#productmodel-Delete-delete-confirmation">
                    <i class="far fa-trash-alt"></i>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Xóa bỏ
                        </font>
                    </font>
                </span>
            </div>
        </div>
        <div class="validation-summary-valid" data-valmsg-summary="true">
            <ul>
                <li style="display:none"></li>
            </ul>
        </div>
        <input type="hidden" data-val="true" data-val-required="The Id field is required." id="Id" name="Id" value="1">
        <section class="content">
            <div class="container-fluid">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-12 clearfix">
                            <div class="float-left">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="advanced-settings-mode" checked="checked">
                                            <label class="onoffswitch-label" for="advanced-settings-mode">
                                                <span class="onoffswitch-inner" data-locale-basic="Basic" data-locale-advanced="Advanced"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info float-left mx-2" id="product-editor-settings" data-toggle="modal" data-target="#productsettings-window">
                                <i class="fas fa-cog"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Cài đặt
                                    </font>
                                </font>
                            </button>
                        </div>
                    </div>
                    <nop-cards id="product-cards">
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-info" data-hideattribute="ProductPage.HideInfoBlock" id="product-info">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-info"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Thông tin sản phẩm</font>
                                        </font>
                                    </div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div id="product-details-area">
                                        <div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="Name">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tên sản phẩm</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The name of the product."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-group input-group-required"><input class="form-control text-box single-line valid" data-val="true" data-val-length="'Name' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" data-val-required="Please provide a name." id="Name" name="Name" type="text" value="Build your own computer" aria-describedby="Name-error" aria-invalid="false">
                                                        <div class="input-group-btn"><span class="required">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">*</font>
                                                                </font>
                                                            </span></div>
                                                    </div>
                                                    <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ShortDescription">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Mô tả ngắn</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Short description is the text that is displayed in product list i.e. category / manufacturer pages."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'Short Description' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="ShortDescription" name="ShortDescription">Build it</textarea>
                                                    <span class="field-validation-valid" data-valmsg-for="ShortDescription" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="FullDescription">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Mô tả đầy đủ</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Full description is the text that is displayed in product page."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea data-val="true" data-val-length="'Full Description' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="FullDescription" name="FullDescription" style="display: none;" aria-hidden="true">&lt;p&gt;Fight back against cluttered workspaces with the stylish IBM zBC12 All-in-One desktop PC, featuring powerful computing resources and a stunning 20.1-inch widescreen display with stunning XBRITE-HiColor LCD technology. The black IBM zBC12 has a built-in microphone and MOTION EYE camera with face-tracking technology that allows for easy communication with friends and family. And it has a built-in DVD burner and Sony's Movie Store software so you can create a digital entertainment library for personal viewing at your convenience. Easy to setup and even easier to use, this JS-series All-in-One includes an elegantly designed keyboard and a USB mouse.&lt;/p&gt;</textarea>
                                                    <div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; width: 100%; height: 337px;" data-mce-style="visibility: hidden; width: 100%; height: 337px;">
                                                        <div class="tox-editor-container">
                                                            <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                                <div role="menubar" data-alloy-tabstop="true" class="tox-menubar"><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Tập tin</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Biên tập</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Lượt xem</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Chèn</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Sự sắp xếp</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Công cụ</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">Bàn</font>
                                                                            </font>
                                                                        </span>
                                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                                                <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                            </svg></div>
                                                                    </button></div>
                                                                <div role="group" class="tox-toolbar-overlord" aria-disabled="false">
                                                                    <div role="group" class="tox-toolbar__primary">
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Trái sang phải" title="Trái sang phải" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--enabled" aria-disabled="false" aria-pressed="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M11 5h7a1 1 0 010 2h-1v11a1 1 0 01-2 0V7h-2v11a1 1 0 01-2 0v-6c-.5 0-1 0-1.4-.3A3.4 3.4 0 017.8 10a3.3 3.3 0 010-2.8 3.4 3.4 0 011.8-1.8L11 5zM4.4 16.2L6.2 15l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z" fill-rule="evenodd"></path>
                                                                                    </svg></span></button><button aria-label="Phải sang trái" title="Phải sang trái" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M8 5h8v2h-2v12h-2V7h-2v12H8v-7c-.5 0-1 0-1.4-.3A3.4 3.4 0 014.8 10a3.3 3.3 0 010-2.8 3.4 3.4 0 011.8-1.8L8 5zm12 11.2a1 1 0 11-1 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 111 1.6L18.4 15l1.8 1.2z" fill-rule="evenodd"></path>
                                                                                    </svg></span></button></div>
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Hoàn tác" title="Hoàn tác" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path>
                                                                                    </svg></span></button><button aria-label="Làm lại" title="Làm lại" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path>
                                                                                    </svg></span></button></div>
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Định dạng" aria-label="Định dạng" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Đoạn văn</font>
                                                                                    </font>
                                                                                </span>
                                                                                <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                                                                        <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                                    </svg></div>
                                                                            </button></div>
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Phông chữ" aria-label="Phông chữ" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Phông chữ hệ thống</font>
                                                                                    </font>
                                                                                </span>
                                                                                <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                                                                        <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                                    </svg></div>
                                                                            </button></div>
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Kích thước phông chữ" aria-label="Kích thước phông chữ" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">12pt</font>
                                                                                    </font>
                                                                                </span>
                                                                                <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                                                                        <path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path>
                                                                                    </svg></div>
                                                                            </button></div>
                                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="In đậm" title="In đậm" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path>
                                                                                    </svg></span></button><button aria-label="In nghiêng" title="In nghiêng" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path>
                                                                                    </svg></span></button></div>
                                                                        <div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Hơn..." title="Hơn..." aria-haspopup="true" type="button" data-alloy-tabstop="true" tabindex="-1" class="tox-tbtn" aria-expanded="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24">
                                                                                        <path d="M6 10a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm-6 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2z" fill-rule="nonzero"></path>
                                                                                    </svg></span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="tox-anchorbar"></div>
                                                            </div>
                                                            <div class="tox-sidebar-wrap">
                                                                <div class="tox-edit-area"><iframe id="FullDescription_ifr" frameborder="0" allowtransparency="true" title="Vùng văn bản đa dạng thức.  Nhấn ALT-0 để được trợ giúp." class="tox-edit-area__iframe"></iframe></div>
                                                                <div role="complementary" class="tox-sidebar">
                                                                    <div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;">
                                                                        <div class="tox-sidebar__pane-container"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tox-statusbar">
                                                            <div class="tox-statusbar__text-container">
                                                                <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false">
                                                                    <div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">P</font>
                                                                        </font>
                                                                    </div>
                                                                </div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Cung cấp bởi Tiny">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Cung cấp bởi Tiny</font>
                                                                        </font>
                                                                    </a></span>
                                                            </div>
                                                            <div title="Thay đổi kích thước" aria-hidden="true" class="tox-statusbar__resize-handle"><svg width="10" height="10">
                                                                    <g fill-rule="nonzero">
                                                                        <path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path>
                                                                    </g>
                                                                </svg></div>
                                                        </div>
                                                        <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                                    </div>
                                                    <div id="createConfigurationFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createConfigurationFailed-action-alert-title">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="createConfigurationFailed-action-alert-title">Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="additional-text" id="createConfigurationFailed-info"></div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn btn-default" id="createConfigurationFailed" style="display:none" data-toggle="modal" data-target="#createConfigurationFailed-action-alert"></div>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#createConfigurationFailed').attr("data-toggle", "modal").attr("data-target", "#createConfigurationFailed-action-alert")
                                                            });
                                                        </script>
                                                    </div>
                                                    <span class="field-validation-valid" data-valmsg-for="FullDescription" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="Sku">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Mã hàng</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Product stock keeping unit (SKU). Your internal unique identifier that can be used to track this product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="'Sku' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" id="Sku" name="Sku" type="text" value="COMP_CUST">
                                                <span class="field-validation-valid" data-valmsg-for="Sku" data-valmsg-replace="true"></span><span class="field-validation-custom"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="SelectedCategoryIds" id="SelectedCategoryIds_label">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thể loại</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose categories. You can manage product categories by selecting Catalog > Categories."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style="">
                                                <div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on">
                                                    <ul unselectable="on" class="k-reset" id="SelectedCategoryIds_taglist">
                                                        <li role="option" aria-selected="true" class="k-button" unselectable="on" aria-setsize="1"><span unselectable="on">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Máy tính &gt;&gt; Máy tính để bàn</font>
                                                                </font>
                                                            </span><span aria-hidden="true" unselectable="on" aria-label="xóa bỏ" title="xóa bỏ" class="k-select"><span class="k-icon k-i-close"></span></span></li>
                                                    </ul><input class="k-input" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedCategoryIds_taglist" aria-labelledby="SelectedCategoryIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedCategoryIds_taglist SelectedCategoryIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span>
                                                </div><select id="SelectedCategoryIds" multiple="multiple" name="SelectedCategoryIds" data-role="multiselect" aria-disabled="false" style="display: none;">
                                                    <option value="1">Computers</option>
                                                    <option value="2" selected="">Computers &gt;&gt; Desktops</option>
                                                    <option value="3">Computers &gt;&gt; Notebooks</option>
                                                    <option value="4">Computers &gt;&gt; Software</option>
                                                    <option value="5">Electronics</option>
                                                    <option value="6">Electronics &gt;&gt; Camera &amp; photo</option>
                                                    <option value="7">Electronics &gt;&gt; Cell phones</option>
                                                    <option value="8">Electronics &gt;&gt; Others</option>
                                                    <option value="9">Apparel</option>
                                                    <option value="10">Apparel &gt;&gt; Shoes</option>
                                                    <option value="11">Apparel &gt;&gt; Clothing</option>
                                                    <option value="12">Apparel &gt;&gt; Accessories</option>
                                                    <option value="13">Digital downloads</option>
                                                    <option value="14">Books</option>
                                                    <option value="15">Jewelry</option>
                                                    <option value="16">Gift Cards</option>
                                                </select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="SelectedManufacturerIds" id="SelectedManufacturerIds_label">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nhà sản xuất của</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose the manufacturer. You can manage manufacturers by selecting Catalog > Manufacturers."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style="">
                                                <div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on">
                                                    <ul unselectable="on" class="k-reset" id="SelectedManufacturerIds_taglist"></ul><input class="k-input k-readonly" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedManufacturerIds_taglist" aria-labelledby="SelectedManufacturerIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedManufacturerIds_taglist SelectedManufacturerIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span>
                                                </div><select id="SelectedManufacturerIds" multiple="multiple" name="SelectedManufacturerIds" data-role="multiselect" aria-disabled="false" style="display: none;">
                                                    <option value="1">Apple</option>
                                                    <option value="2">HP</option>
                                                    <option value="3">Nike</option>
                                                </select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="Published">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Được phát hành</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to publish this product (visible in store). Uncheck to unpublish (product not available in store)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input checked="checked" class="check-box" data-val="true" data-val-required="The Published field is required." id="Published" name="Published" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="Published" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ProductTags">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Thẻ sản phẩm</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Product tags are the keywords for product identification. The more products associated with a particular tag, the larger it will show on the tag cloud."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line tag-editor-hidden-src" id="ProductTags" name="ProductTags" type="text" value="computer, awesome">
                                            <ul class="tag-editor ui-sortable">
                                                <li style="width:1px" class="ui-sortable-handle">&nbsp;</li>
                                                <li class="ui-sortable-handle">
                                                    <div class="tag-editor-spacer">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">&nbsp;,</font>
                                                        </font>
                                                    </div>
                                                    <div class="tag-editor-tag">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">máy vi tính</font>
                                                        </font>
                                                    </div>
                                                    <div class="tag-editor-delete"><i></i></div>
                                                </li>
                                                <li class="ui-sortable-handle">
                                                    <div class="tag-editor-spacer">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">&nbsp;,</font>
                                                        </font>
                                                    </div>
                                                    <div class="tag-editor-tag">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">tuyệt vời</font>
                                                        </font>
                                                    </div>
                                                    <div class="tag-editor-delete"><i></i></div>
                                                </li>
                                            </ul>
                                            <span class="field-validation-valid" data-valmsg-for="ProductTags" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="Gtin">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">GTIN (số thương phẩm toàn cầu)</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter global trade item number (GTIN). These identifiers include UPC (in North America), EAN (in Europe), JAN (in Japan), and ISBN (for books)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="'Gtin' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" id="Gtin" name="Gtin" type="text" value="">
                                            <span class="field-validation-valid" data-valmsg-for="Gtin" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ManufacturerPartNumber">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Số bộ phận của nhà sản xuất</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The manufacturer's part number for this product."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="'Manufacturer Part Number' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" id="ManufacturerPartNumber" name="ManufacturerPartNumber" type="text" value="">
                                            <span class="field-validation-valid" data-valmsg-for="ManufacturerPartNumber" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced opened" id="parentSetting1376426257">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ShowOnHomepage">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Hiển thị trên trang chủ</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to display this product on your store's home page. Recommended for your most popular products."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input checked="checked" class="check-box" data-val="true" data-val-required="The Show on home page field is required." id="ShowOnHomepage" name="ShowOnHomepage" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="ShowOnHomepage" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting" id="nestedSetting1376426257">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('ShowOnHomepage', 'parentSetting1376426257', 'nestedSetting1376426257');
                                            });
                                        </script>
                                        <div class="form-group row advanced-setting" id="pnlDisplayOrder">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="DisplayOrder">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Hiển thị đơn hàng</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Display order of the product. 1 represents the top of the list."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Display order field is required." id="DisplayOrder" name="DisplayOrder" value="0" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="DisplayOrder" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ProductTypeId">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Loại sản phẩm</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Product type can be simple or grouped. In most cases your product will have the Simple product type. You need to use Grouped product type when a new product consists of one or more existing products that will be displayed on one single product details page."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" data-val="true" data-val-required="The Product type field is required." id="ProductTypeId" name="ProductTypeId">
                                                <option selected="selected" value="5">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giản dị</font>
                                                    </font>
                                                </option>
                                                <option value="10">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Đã nhóm (sản phẩm có các biến thể)</font>
                                                    </font>
                                                </option>
                                            </select>
                                            <span class="field-validation-valid" data-valmsg-for="ProductTypeId" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="card card-default margin-bottom d-none" id="group-associated-products">
                                        <div class="card-header">
                                            Associated products (variants)
                                        </div>
                                        <div class="card-body">
                                            <ul class="common-list">
                                                <li>
                                                    Associated products are used only with "grouped" products.
                                                </li>
                                                <li>
                                                    A product could be associated to only one "grouped" product.
                                                </li>
                                            </ul>
                                            <div id="associatedproducts-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="dataTables_scroll">
                                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 0px; padding-right: 0px;">
                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 0px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Product</th>
                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 0px;">Display order</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px;">View</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px;">Edit</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px;">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="associatedproducts-grid" role="grid" aria-describedby="associatedproducts-grid_info" style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row" style="height: 0px;">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Product</div>
                                                                            </th>
                                                                            <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Display order</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Delete</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-t-5">
                                                    <div class="col-lg-5 col-xs-12">
                                                        <div class="float-lg-left">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="associatedproducts-grid_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="associatedproducts-grid_previous"><a href="#" aria-controls="associatedproducts-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                    <li class="paginate_button page-item next disabled" id="associatedproducts-grid_next"><a href="#" aria-controls="associatedproducts-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="text-center">
                                                            <div class="dataTables_length" id="associatedproducts-grid_length"><label>Show <select name="associatedproducts-grid_length" aria-controls="associatedproducts-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                        <option value="7">7</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> items</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="float-lg-right text-center">
                                                            <div class="dataTables_info" id="associatedproducts-grid_info" role="status" aria-live="polite">No records</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-xs-12">
                                                        <div class="float-lg-right text-center data-tables-refresh">
                                                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="associatedproducts-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="associatedproducts-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="associatedproducts-grid_deleteConflict-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="associatedproducts-grid_deleteConflict-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="associatedproducts-grid_deleteConflict-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="associatedproducts-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#associatedproducts-grid_deleteConflict-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#associatedproducts-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#associatedproducts-grid_deleteConflict-action-alert")
                                                    });
                                                </script>
                                            </div>
                                            <div id="associatedproducts-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="associatedproducts-grid_deleteCommonFailed-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="associatedproducts-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="associatedproducts-grid_deleteCommonFailed-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="associatedproducts-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#associatedproducts-grid_deleteCommonFailed-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#associatedproducts-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#associatedproducts-grid_deleteCommonFailed-action-alert")
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" id="btnAddNewAssociatedProduct" onclick="javascript:OpenWindow('/Admin/Product/AssociatedProductAddPopup?productId=1&amp;btnId=btnRefreshAssociatedProducts&amp;formId=product-form', 800, 800, true); return false;" class="btn btn-primary">
                                                Add new associated product
                                            </button>
                                            <button type="submit" id="btnRefreshAssociatedProducts" style="display: none"></button>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting" id="nnpnlProductTemplateId">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ProductTemplateId">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Mẫu sản phẩm</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose a product template. This template defines how this product will be displayed in public store."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" data-val="true" data-val-required="The Product template field is required." id="ProductTemplateId" name="ProductTemplateId">
                                                <option value="1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Sản phẩm đơn giản</font>
                                                    </font>
                                                </option>
                                            </select>
                                            <span class="field-validation-valid" data-valmsg-for="ProductTemplateId" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting" id="group-visible-individually">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="VisibleIndividually">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Hiển thị riêng lẻ</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check it if you want the product to be on catalog or search results. You can uncheck this box to hide associated products from catalog and make them accessible only from grouped product details page."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input checked="checked" class="check-box" data-val="true" data-val-required="The Visible individually field is required." id="VisibleIndividually" name="VisibleIndividually" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="VisibleIndividually" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="SelectedCustomerRoleIds" id="SelectedCustomerRoleIds_label">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Vai trò của khách hàng</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose one or several customer roles i.e. administrators, vendors, guests, who will be able to see this product in catalog. If you don't need this option just leave this field empty. In order to use this functionality, you have to disable the following setting: Configuration > Settings > Catalog > Ignore ACL rules (sitewide)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style="">
                                                        <div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on">
                                                            <ul unselectable="on" class="k-reset" id="SelectedCustomerRoleIds_taglist"></ul><input class="k-input k-readonly" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedCustomerRoleIds_taglist" aria-labelledby="SelectedCustomerRoleIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedCustomerRoleIds_taglist SelectedCustomerRoleIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span>
                                                        </div><select id="SelectedCustomerRoleIds" multiple="multiple" name="SelectedCustomerRoleIds" data-role="multiselect" aria-disabled="false" style="display: none;">
                                                            <option value="1">Administrators</option>
                                                            <option value="2">Forum Moderators</option>
                                                            <option value="4">Guests</option>
                                                            <option value="3">Registered</option>
                                                            <option value="5">Vendors</option>
                                                        </select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="callout bg-gray-light no-margin">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                Để sử dụng chức năng này, bạn phải tắt cài đặt sau: Cài đặt danh mục&gt; Bỏ qua quy tắc ACL.
                                                            </font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="SelectedStoreIds" id="SelectedStoreIds_label">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giới hạn cho các cửa hàng</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Option to limit this product to a certain store. If you have multiple stores, choose one or several from the list. If you don't use this option just leave this field empty. In order to use this functionality, you have to disable the following setting: Configuration > Catalog settings > Ignore &quot;limit per store&quot; rules (sitewide)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style="">
                                                        <div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on">
                                                            <ul unselectable="on" class="k-reset" id="SelectedStoreIds_taglist"></ul><input class="k-input k-readonly" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedStoreIds_taglist" aria-labelledby="SelectedStoreIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedStoreIds_taglist SelectedStoreIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span>
                                                        </div><select id="SelectedStoreIds" multiple="multiple" name="SelectedStoreIds" data-role="multiselect" aria-disabled="false" style="display: none;">
                                                            <option value="1">Your store name</option>
                                                            <option value="2">Test store 2</option>
                                                        </select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="callout bg-gray-light no-margin">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                Để sử dụng chức năng này, bạn phải tắt cài đặt sau: Cài đặt danh mục&gt; Bỏ qua quy tắc "giới hạn cho mỗi cửa hàng".
                                                            </font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="VendorId">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Người bán</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose a vendor associated with this product. This can be useful when running a multi-vendor store to keep track of goods associated with vendor."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" data-val="true" data-val-required="The Vendor field is required." id="VendorId" name="VendorId">
                                                <option selected="selected" value="0">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Không có nhà cung cấp</font>
                                                    </font>
                                                </option>
                                                <option value="1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nhà cung cấp 1</font>
                                                    </font>
                                                </option>
                                                <option value="2">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nhà cung cấp 2</font>
                                                    </font>
                                                </option>
                                            </select>
                                            <span class="field-validation-valid" data-valmsg-for="VendorId" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="group-required-other-products">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="RequireOtherProducts">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Yêu cầu các sản phẩm khác</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if the product requires adding other products to the cart."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Require other products field is required." id="RequireOtherProducts" name="RequireOtherProducts" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="RequireOtherProducts" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1460787936">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('RequireOtherProducts', 'parentSetting1460787936', 'nestedSetting1460787936');
                                                $('#RequireOtherProducts').click(toggle_RequireOtherProducts);
                                                toggle_RequireOtherProducts();
                                            });

                                            function toggle_RequireOtherProducts() {
                                                if ($('#RequireOtherProducts').is(':checked')) {
                                                    $('#nestedSetting1460787936').showElement();
                                                } else {
                                                    $('#nestedSetting1460787936').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RequiredProductIds">Required product IDs</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Specify comma separated list of required product IDs. NOTE: Ensure that there are no circular references (for example, A requires B, and B requires A)."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                                <span id="required-products-check-progress" style="display: none; float: right; clear: both" class="please-wait">
                                                    Wait...
                                                </span>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-length="'Required Product Ids' must be between 0 and 1000 characters." data-val-length-max="1000" data-val-length-min="0" id="RequiredProductIds" name="RequiredProductIds" type="text" value="">
                                                    <div class="input-group-append">
                                                        <button type="submit" id="btnRefreshRequiredProducts" style="display: none"></button>
                                                        <button type="submit" id="btnAddNewRequiredProduct" onclick="javascript:OpenWindow('/Admin/Product/RequiredProductAddPopup?btnId=btnRefreshRequiredProducts&amp;productIdsInput=RequiredProductIds', 800, 850, true); return false;" class="btn btn-info">
                                                            Add required product
                                                        </button>
                                                    </div>
                                                </div>
                                                <span id="required-product-names"></span>
                                                <span class="field-validation-valid" data-valmsg-for="RequiredProductIds" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="AutomaticallyAddRequiredProducts">Automatically add these products to the cart</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to automatically add these products to the cart."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Automatically add these products to the cart field is required." id="AutomaticallyAddRequiredProducts" name="AutomaticallyAddRequiredProducts" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="AutomaticallyAddRequiredProducts" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="AllowCustomerReviews">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Cho phép khách hàng đánh giá</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to allow customers to review this product."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input checked="checked" class="check-box" data-val="true" data-val-required="The Allow customer reviews field is required." id="AllowCustomerReviews" name="AllowCustomerReviews" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="AllowCustomerReviews" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="AvailableStartDateTimeUtc">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ngày bắt đầu có sẵn</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The start of the product's availability in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="AvailableStartDateTimeUtc" name="AvailableStartDateTimeUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="AvailableStartDateTimeUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="AvailableStartDateTimeUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
                                            <span class="field-validation-valid" data-valmsg-for="AvailableStartDateTimeUtc" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="AvailableEndDateTimeUtc">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ngày kết thúc có sẵn</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The end of the product's availability in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="AvailableEndDateTimeUtc" name="AvailableEndDateTimeUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="AvailableEndDateTimeUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="AvailableEndDateTimeUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
                                            <span class="field-validation-valid" data-valmsg-for="AvailableEndDateTimeUtc" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced opened" id="parentSetting1809136375">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="MarkAsNew">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Đánh dấu là mới</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to mark the product as new. Use this option for promoting new products."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input checked="checked" class="check-box" data-val="true" data-val-required="The Mark as new field is required." id="MarkAsNew" name="MarkAsNew" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="MarkAsNew" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting" id="nestedSetting1809136375">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('MarkAsNew', 'parentSetting1809136375', 'nestedSetting1809136375');
                                                $('#MarkAsNew').click(toggle_MarkAsNew);
                                                toggle_MarkAsNew();
                                            });

                                            function toggle_MarkAsNew() {
                                                if ($('#MarkAsNew').is(':checked')) {
                                                    $('#nestedSetting1809136375').showElement();
                                                } else {
                                                    $('#nestedSetting1809136375').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MarkAsNewStartDateTimeUtc">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Đánh dấu là mới. </font>
                                                            <font style="vertical-align: inherit;">Ngày bắt đầu</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Set Product as New from Date in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="MarkAsNewStartDateTimeUtc" name="MarkAsNewStartDateTimeUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="MarkAsNewStartDateTimeUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="MarkAsNewStartDateTimeUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MarkAsNewStartDateTimeUtc" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MarkAsNewEndDateTimeUtc">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Đánh dấu là mới. </font>
                                                            <font style="vertical-align: inherit;">Ngày cuối</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Set Product as New to Date in Coordinated Universal Time (UTC)."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="MarkAsNewEndDateTimeUtc" name="MarkAsNewEndDateTimeUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Mở chế độ xem ngày" aria-controls="MarkAsNewEndDateTimeUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Mở chế độ xem thời gian" aria-controls="MarkAsNewEndDateTimeUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MarkAsNewEndDateTimeUtc" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="AdminComment">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Bình luận của quản trị viên</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="This comment is for internal use only, not visible for customers."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'Admin Comment' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="AdminComment" name="AdminComment"></textarea>
                                            <span class="field-validation-valid" data-valmsg-for="AdminComment" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-price" data-hideattribute="ProductPage.HidePricesBlock" id="product-price">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-dollar-sign"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Giá cả</font>
                                        </font>
                                    </div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row" id="product-price-area">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="Price">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giá</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The price of the product. You can manage currency by selecting Configuration > Currencies."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="1200.0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="1200" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Price must be a number." data-val-required="The Price field is required." id="Price" name="Price" value="1200.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="1200" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                            <span class="field-validation-valid" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="OldPrice">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giá cũ</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The old price of the product. If you set an old price, this will display alongside the current price on the product page to show the difference in price."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0,0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Old price must be a number." data-val-required="The Old price field is required." id="OldPrice" name="OldPrice" value="0.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                            <span class="field-validation-valid" data-valmsg-for="OldPrice" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="ProductCost">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giá thành sản phẩm</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Product cost is a prime product cost. This field is only for internal use, not visible for customers."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0,0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Product cost must be a number." data-val-required="The Product cost field is required." id="ProductCost" name="ProductCost" value="0.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                            <span class="field-validation-valid" data-valmsg-for="ProductCost" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="DisableBuyButton">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tắt nút mua</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to disable the buy button for this product. This may be necessary for products that are 'available upon request'."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Disable buy button field is required." id="DisableBuyButton" name="DisableBuyButton" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="DisableBuyButton" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="DisableWishlistButton">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Tắt nút danh sách yêu thích</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to disable the wishlist button for this product."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Disable wishlist button field is required." id="DisableWishlistButton" name="DisableWishlistButton" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="DisableWishlistButton" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="parentSetting1436541842">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="AvailableForPreOrder">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Có sẵn để đặt hàng trước</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if this item is available for Pre-Order. It also displays &quot;Pre-order&quot; button instead of &quot;Add to cart&quot;."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Available for pre-order field is required." id="AvailableForPreOrder" name="AvailableForPreOrder" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="AvailableForPreOrder" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1436541842">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('AvailableForPreOrder', 'parentSetting1436541842', 'nestedSetting1436541842');
                                                $('#AvailableForPreOrder').click(toggle_AvailableForPreOrder);
                                                toggle_AvailableForPreOrder();
                                            });

                                            function toggle_AvailableForPreOrder() {
                                                if ($('#AvailableForPreOrder').is(':checked')) {
                                                    $('#nestedSetting1436541842').showElement();
                                                } else {
                                                    $('#nestedSetting1436541842').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="PreOrderAvailabilityStartDateTimeUtc">Pre-order availability start date</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The availability start date of the product configured for pre-order in Coordinated Universal Time (UTC). 'Pre-order' button will automatically be changed to 'Add to cart' at this moment."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-datetimepicker" style=""><span class="k-picker-wrap k-state-default"><input id="PreOrderAvailabilityStartDateTimeUtc" name="PreOrderAvailabilityStartDateTimeUtc" data-role="datetimepicker" type="text" class="k-input" role="combobox" aria-expanded="false" autocomplete="off" style="width: 100%;"><span unselectable="on" class="k-select"><span class="k-link k-link-date" aria-label="Open the date view" aria-controls="PreOrderAvailabilityStartDateTimeUtc_dateview"><span unselectable="on" class="k-icon k-i-calendar"></span></span><span class="k-link k-link-time" aria-label="Open the time view" aria-controls="PreOrderAvailabilityStartDateTimeUtc_timeview"><span unselectable="on" class="k-icon k-i-clock"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="PreOrderAvailabilityStartDateTimeUtc" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="CallForPrice">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Gọi để biết giá</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to show &quot;Call for Pricing&quot; or &quot;Call for quote&quot; instead of price."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Call for price field is required." id="CallForPrice" name="CallForPrice" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="CallForPrice" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="parentSetting101136622">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="CustomerEntersPrice">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Khách hàng nhập giá</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="An option indicating whether customer should enter price."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Customer enters price field is required." id="CustomerEntersPrice" name="CustomerEntersPrice" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="CustomerEntersPrice" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting101136622">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('CustomerEntersPrice', 'parentSetting101136622', 'nestedSetting101136622');
                                                $('#CustomerEntersPrice').click(toggle_CustomerEntersPrice);
                                                toggle_CustomerEntersPrice();
                                            });

                                            function toggle_CustomerEntersPrice() {
                                                if ($('#CustomerEntersPrice').is(':checked')) {
                                                    $('#nestedSetting101136622').showElement();
                                                } else {
                                                    $('#nestedSetting101136622').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MinimumCustomerEnteredPrice">Minimum amount</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a minimum amount."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0.0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Minimum amount must be a number." data-val-required="The Minimum amount field is required." id="MinimumCustomerEnteredPrice" name="MinimumCustomerEnteredPrice" value="0.00" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MinimumCustomerEnteredPrice" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MaximumCustomerEnteredPrice">Maximum amount</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a maximum amount."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0.0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Maximum amount must be a number." data-val-required="The Maximum amount field is required." id="MaximumCustomerEnteredPrice" name="MaximumCustomerEnteredPrice" value="0.00" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MaximumCustomerEnteredPrice" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting parent-setting parent-setting-advanced" id="parentSetting1439598379">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="BasepriceEnabled">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">PAngV (giá cơ bản) được bật</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to display baseprice of a product. This is required according to the German law (PAngV). If you sell 500ml of beer for 1,50 euro, then you have to display baseprice: 3.00 euro per 1L."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The PAngV (base price) enabled field is required." id="BasepriceEnabled" name="BasepriceEnabled" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="BasepriceEnabled" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1439598379">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('BasepriceEnabled', 'parentSetting1439598379', 'nestedSetting1439598379');
                                                $('#BasepriceEnabled').click(toggle_BasepriceEnabled);
                                                toggle_BasepriceEnabled();
                                            });

                                            function toggle_BasepriceEnabled() {
                                                if ($('#BasepriceEnabled').is(':checked')) {
                                                    $('#nestedSetting1439598379').showElement();
                                                } else {
                                                    $('#nestedSetting1439598379').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="BasepriceAmount">Amount in product</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter an amount in product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0.0000 " tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Amount in product must be a number." data-val-required="The Amount in product field is required." id="BasepriceAmount" name="BasepriceAmount" value="0.00" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="BasepriceAmount" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="BasepriceUnitId">Unit of product</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a unit of product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Unit of product field is required." id="BasepriceUnitId" name="BasepriceUnitId">
                                                    <option value="1">ounce(s)</option>
                                                    <option value="2">lb(s)</option>
                                                    <option value="3">kg(s)</option>
                                                    <option value="4">gram(s)</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="BasepriceUnitId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="BasepriceBaseAmount">Reference amount</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a reference amount."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0.0000 " tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Reference amount must be a number." data-val-required="The Reference amount field is required." id="BasepriceBaseAmount" name="BasepriceBaseAmount" value="0.00" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="BasepriceBaseAmount" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="BasepriceBaseUnitId">Reference unit</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a reference unit."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Reference unit field is required." id="BasepriceBaseUnitId" name="BasepriceBaseUnitId">
                                                    <option value="1">ounce(s)</option>
                                                    <option value="2">lb(s)</option>
                                                    <option value="3">kg(s)</option>
                                                    <option value="4">gram(s)</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="BasepriceBaseUnitId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="SelectedDiscountIds" id="SelectedDiscountIds_label">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Giảm giá</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Select discounts to apply to this product. You can manage discounts by selecting Discounts from the Promotions menu."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="k-widget k-multiselect k-multiselect-clearable" unselectable="on" title="" style="">
                                                <div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on">
                                                    <ul unselectable="on" class="k-reset" id="SelectedDiscountIds_taglist"></ul><input class="k-input k-readonly" style="width: 25px" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="SelectedDiscountIds_taglist" aria-labelledby="SelectedDiscountIds_label" aria-disabled="false" aria-busy="false" aria-owns="SelectedDiscountIds_taglist SelectedDiscountIds_listbox"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span>
                                                </div><select id="SelectedDiscountIds" multiple="multiple" name="SelectedDiscountIds" data-role="multiselect" aria-disabled="false" style="display: none;">
                                                    <option value="1">Sample discount with coupon code</option>
                                                </select><span style="font-family: &quot;source sans pro&quot;, -apple-system, BlinkMacSystemFont, &quot;segoe ui&quot;, Roboto, &quot;helvetica neue&quot;, Arial, sans-serif, &quot;apple color emoji&quot;, &quot;segoe ui emoji&quot;, &quot;segoe ui symbol&quot;; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 26.4px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product-tax-area">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="IsTaxExempt">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Miễn thuế</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Determines whether this product is tax exempt (tax will not be applied to this product at checkout)."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Tax exempt field is required." id="IsTaxExempt" name="IsTaxExempt" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="IsTaxExempt" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="pnlTaxCategory">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="TaxCategoryId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Loại thuế</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The tax classification for the product. You can manage tax categories by selecting Configuration > Tax > Tax Categories."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Tax category field is required." id="TaxCategoryId" name="TaxCategoryId">
                                                    <option value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">[Không có]</font>
                                                        </font>
                                                    </option>
                                                    <option value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Sách</font>
                                                        </font>
                                                    </option>
                                                    <option selected="selected" value="2">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Điện tử &amp; Phần mềm</font>
                                                        </font>
                                                    </option>
                                                    <option value="3">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Sản phẩm có thể tải xuống</font>
                                                        </font>
                                                    </option>
                                                    <option value="4">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Trang sức</font>
                                                        </font>
                                                    </option>
                                                    <option value="5">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Quần áo</font>
                                                        </font>
                                                    </option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="TaxCategoryId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row advanced-setting" id="pnlIsTelecommunicationsOrBroadcastingOrElectronicServices">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="IsTelecommunicationsOrBroadcastingOrElectronicServices">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Dịch vụ viễn thông, phát thanh truyền hình và điện tử</font>
                                                    </font>
                                                </label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if it's telecommunications, broadcasting and electronic services. It's used for tax calculation in Europe Union."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Telecommunications, broadcasting and electronic services field is required." id="IsTelecommunicationsOrBroadcastingOrElectronicServices" name="IsTelecommunicationsOrBroadcastingOrElectronicServices" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="IsTelecommunicationsOrBroadcastingOrElectronicServices" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="card card-default advanced-setting">
                                        <div class="card-header">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Giá cấp
                                                </font>
                                            </font>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Định giá theo bậc là một công cụ khuyến mại cho phép chủ cửa hàng định giá các mặt hàng khác nhau cho số lượng nhiều hơn.
                                                    </font>
                                                </font>
                                            </p>
                                            <div id="tierprices-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="dataTables_scroll">
                                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 984px; padding-right: 0px;">
                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 984px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84.5156px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Cửa hàng</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 161.828px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Vai trò khách hàng</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 98.4219px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Định lượng</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 33.8906px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Giá</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117.203px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Ngày bắt đầu</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88.4844px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Ngày cuối</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.3281px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Biên tập</font>
                                                                                    </font>
                                                                                </th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.3281px;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Xóa bỏ</font>
                                                                                    </font>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="tierprices-grid" role="grid" aria-describedby="tierprices-grid_info" style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row" style="height: 0px;">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84.5156px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Cửa hàng</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 161.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Vai trò khách hàng</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 98.4219px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Định lượng</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 33.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Giá</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117.203px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Ngày bắt đầu</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88.4844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Ngày cuối</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.3281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Biên tập</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.3281px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font style="vertical-align: inherit;">Xóa bỏ</font>
                                                                                    </font>
                                                                                </div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td valign="top" colspan="8" class="dataTables_empty">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">không có dữ liệu trong bảng</font>
                                                                                </font>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-t-5">
                                                    <div class="col-lg-5 col-xs-12">
                                                        <div class="float-lg-left">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="tierprices-grid_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="tierprices-grid_previous"><a href="#" aria-controls="tierprices-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                    <li class="paginate_button page-item next disabled" id="tierprices-grid_next"><a href="#" aria-controls="tierprices-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="text-center">
                                                            <div class="dataTables_length" id="tierprices-grid_length"><label>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Thể hiện</font>
                                                                    </font><select name="tierprices-grid_length" aria-controls="tierprices-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                        <option value="7">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">7</font>
                                                                            </font>
                                                                        </option>
                                                                        <option value="15">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">15</font>
                                                                            </font>
                                                                        </option>
                                                                        <option value="20">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">20</font>
                                                                            </font>
                                                                        </option>
                                                                        <option value="50">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">50</font>
                                                                            </font>
                                                                        </option>
                                                                        <option value="100">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">100</font>
                                                                            </font>
                                                                        </option>
                                                                    </select>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">mặt hàng</font>
                                                                    </font>
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="float-lg-right text-center">
                                                            <div class="dataTables_info" id="tierprices-grid_info" role="status" aria-live="polite">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Không có hồ sơ</font>
                                                                </font>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-xs-12">
                                                        <div class="float-lg-right text-center data-tables-refresh">
                                                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="tierprices-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tierprices-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tierprices-grid_deleteConflict-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="tierprices-grid_deleteConflict-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="tierprices-grid_deleteConflict-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="tierprices-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#tierprices-grid_deleteConflict-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#tierprices-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#tierprices-grid_deleteConflict-action-alert")
                                                    });
                                                </script>
                                            </div>
                                            <div id="tierprices-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tierprices-grid_deleteCommonFailed-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="tierprices-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="tierprices-grid_deleteCommonFailed-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="tierprices-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#tierprices-grid_deleteCommonFailed-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#tierprices-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#tierprices-grid_deleteCommonFailed-action-alert")
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" id="btnAddNewTierPrice" onclick="javascript:OpenWindow('/Admin/Product/TierPriceCreatePopup?productId=1&amp;btnId=btnRefreshTierPrices&amp;formId=product-form', 800, 600, true); return false;" class="btn btn-primary">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Thêm giá cấp mới
                                                    </font>
                                                </font>
                                            </button>
                                            <button type="submit" id="btnRefreshTierPrices" style="display: none"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-shipping" data-hideattribute="ProductPage.HideShippingBlock" id="product-shipping">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-truck"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đang chuyển hàng</font>
                                        </font>
                                    </div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div id="product-shipping-area">
                                        <div class="form-group row parent-setting opened" id="parentSetting361752892">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="IsShipEnabled">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Đã bật giao hàng</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if the product can be shipped. You can manage shipping settings by selecting Configuration > Shipping."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input checked="checked" class="check-box" data-val="true" data-val-required="The Shipping enabled field is required." id="IsShipEnabled" name="IsShipEnabled" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="IsShipEnabled" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="nested-setting" id="nestedSetting361752892">
                                            <script>
                                                $(document).ready(function() {
                                                    initNestedSetting('IsShipEnabled', 'parentSetting361752892', 'nestedSetting361752892');
                                                    $('#IsShipEnabled').click(toggle_IsShipEnabled);
                                                    toggle_IsShipEnabled();
                                                });

                                                function toggle_IsShipEnabled() {
                                                    if ($('#IsShipEnabled').is(':checked')) {
                                                        $('#nestedSetting361752892').showElement();
                                                    } else {
                                                        $('#nestedSetting361752892').hideElement();
                                                    }
                                                }
                                            </script>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="Weight">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Cân nặng</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The product weight."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="2,0000 lb (s)" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="2" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Weight must be a number." data-val-required="The Weight field is required." id="Weight" name="Weight" value="2.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="2" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="Weight" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="Length">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chiều dài</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The product length."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="2,0000 inch (các)" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="2" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Length must be a number." data-val-required="The Length field is required." id="Length" name="Length" value="2.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="2" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="Length" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="Width">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chiều rộng</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The product width."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="2,0000 inch (các)" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="2" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Width must be a number." data-val-required="The Width field is required." id="Width" name="Width" value="2.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="2" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="Width" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="Height">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chiều cao</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The product height."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="2,0000 inch (các)" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="2" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Height must be a number." data-val-required="The Height field is required." id="Height" name="Height" value="2.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="2" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="Height" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row advanced-setting">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="IsFreeShipping">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Miễn phí vận chuyển</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if this product comes with FREE shipping."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Free shipping field is required." id="IsFreeShipping" name="IsFreeShipping" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="IsFreeShipping" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row advanced-setting">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ShipSeparately">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Giao hàng riêng</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if the product should be shipped separately from other products (in single box). But notice that if the order includes several items of this product, all of them will be shipped in single box."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="check-box" data-val="true" data-val-required="The Ship separately field is required." id="ShipSeparately" name="ShipSeparately" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ShipSeparately" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row advanced-setting">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="AdditionalShippingCharge">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Phí vận chuyển bổ sung</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The additional shipping charge."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0,0000 USD" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Additional shipping charge must be a number." data-val-required="The Additional shipping charge field is required." id="AdditionalShippingCharge" name="AdditionalShippingCharge" value="0.00" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="AdditionalShippingCharge" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row advanced-setting">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="DeliveryDateId">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày giao hàng</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose a delivery date which will be displayed in the public store. You can manage delivery dates by selecting Configuration > Shipping > Dates and ranges."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" data-val="true" data-val-required="The Delivery date field is required." id="DeliveryDateId" name="DeliveryDateId">
                                                        <option selected="selected" value="0">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Không có</font>
                                                            </font>
                                                        </option>
                                                        <option value="1">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">1-2 ngày</font>
                                                            </font>
                                                        </option>
                                                        <option value="2">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">3-5 ngày</font>
                                                            </font>
                                                        </option>
                                                        <option value="3">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">1 tuần</font>
                                                            </font>
                                                        </option>
                                                    </select>
                                                    <span class="field-validation-valid" data-valmsg-for="DeliveryDateId" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-inventory" data-hideattribute="ProductPage.HideInventoryBlock" id="product-inventory">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-sitemap"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Kiểm kê</font>
                                        </font>
                                    </div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div id="product-inventory-area">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="ManageInventoryMethodId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Phương pháp kiểm kê</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Select inventory method. There are three methods: Don’t track inventory, Track inventory and Track inventory by attributes. You should use Track inventory by attributes when the product has different combinations of these attributes and then manage inventory for these combinations."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Inventory method field is required." id="ManageInventoryMethodId" name="ManageInventoryMethodId">
                                                    <option value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Không theo dõi hàng tồn kho</font>
                                                        </font>
                                                    </option>
                                                    <option selected="selected" value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Theo dõi hàng tồn kho</font>
                                                        </font>
                                                    </option>
                                                    <option value="2">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Theo dõi hàng tồn kho theo thuộc tính sản phẩm</font>
                                                        </font>
                                                    </option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="ManageInventoryMethodId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="pnlStockQuantity">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="StockQuantity">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Số lượng cổ phiếu</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The current stock quantity of this product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="10000" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="10000" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Stock quantity field is required." id="StockQuantity" name="StockQuantity" value="10000" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="10000" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <input type="hidden" data-val="true" data-val-required="The LastStockQuantity field is required." id="LastStockQuantity" name="LastStockQuantity" value="10000">
                                                <span class="field-validation-valid" data-valmsg-for="StockQuantity" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlWarehouse">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="WarehouseId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Kho</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose the warehouse which will be used when calculating shipping rates. You can manage warehouses by selecting Configuration > Shipping > Warehouses."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Warehouse field is required." id="WarehouseId" name="WarehouseId">
                                                    <option selected="selected" value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Không có</font>
                                                        </font>
                                                    </option>
                                                    <option value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Kho 1 (New York)</font>
                                                        </font>
                                                    </option>
                                                    <option value="2">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Kho 2 (Los Angeles)</font>
                                                        </font>
                                                    </option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="WarehouseId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlUseMultipleWarehouses">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="UseMultipleWarehouses">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Nhiều nhà kho</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if you want to support shipping and inventory management from multiple warehouses."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Multiple warehouses field is required." id="UseMultipleWarehouses" name="UseMultipleWarehouses" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="UseMultipleWarehouses" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting d-none" id="pnlMultipleWarehouses">
                                            <div class="col-md-12" style="overflow-x: auto;">
                                                <table class="table table-hover table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Warehouse
                                                            </th>
                                                            <th>
                                                                Use
                                                            </th>
                                                            <th>
                                                                Stock qty
                                                            </th>
                                                            <th>
                                                                Reserved qty
                                                            </th>
                                                            <th>
                                                                Planned qty
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 36%;">
                                                                <div style="padding-left: 10px; padding-right: 10px;">
                                                                    Warehouse 1 (New York)
                                                                </div>
                                                            </td>
                                                            <td style="width: 10%;">
                                                                <input type="checkbox" id="warehouse_used_1" name="warehouse_used_1" value="1">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                <input id="warehouse_qty_1" name="warehouse_qty_1" type="number" value="0" class="form-control" disabled="">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                <input id="warehouse_reserved_1" name="warehouse_reserved_1" type="number" value="0" class="form-control" disabled="">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                0
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 36%;">
                                                                <div style="padding-left: 10px; padding-right: 10px;">
                                                                    Warehouse 2 (Los Angeles)
                                                                </div>
                                                            </td>
                                                            <td style="width: 10%;">
                                                                <input type="checkbox" id="warehouse_used_2" name="warehouse_used_2" value="2">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                <input id="warehouse_qty_2" name="warehouse_qty_2" type="number" value="0" class="form-control" disabled="">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                <input id="warehouse_reserved_2" name="warehouse_reserved_2" type="number" value="0" class="form-control" disabled="">
                                                            </td>
                                                            <td style="width: 18%;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>
                                                    <em>"Stock quantity" is total quantity. It's reduced from when a shipment is shipped.</em>
                                                </p>
                                                <p>
                                                    <em>"Reserved qty" is product quantity that is ordered but not shipped yet.</em>
                                                </p>
                                                <p>
                                                    <em>"Planned qty" is product quantity that is ordered and already added to a shipment but not shipped yet.</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting parent-setting parent-setting-advanced opened" id="pnlDisplayStockAvailability">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="DisplayStockAvailability">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Hiển thị tính khả dụng</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to display stock availability. When enabled, customers will see stock availability."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input checked="checked" class="check-box" data-val="true" data-val-required="The Display availability field is required." id="DisplayStockAvailability" name="DisplayStockAvailability" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="DisplayStockAvailability" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="nested-setting" id="nestedSetting1574085252">
                                            <script>
                                                $(document).ready(function() {
                                                    initNestedSetting('DisplayStockAvailability', 'parentSetting1574085252', 'nestedSetting1574085252');
                                                });
                                            </script>
                                            <div class="form-group row advanced-setting" id="pnlDisplayStockQuantity">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="DisplayStockQuantity">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Hiển thị số lượng hàng tồn kho</font>
                                                            </font>
                                                        </label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to display stock quantity. When enabled, customers will see stock quantity."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="check-box" data-val="true" data-val-required="The Display stock quantity field is required." id="DisplayStockQuantity" name="DisplayStockQuantity" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="DisplayStockQuantity" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlMinStockQuantity">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MinStockQuantity">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Số lượng cổ phiếu tối thiểu</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="If you have enabled 'Manage Stock' you can perform a number of different actions when the current stock quantity falls below (reaches) your minimum stock quantity."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Minimum stock qty field is required." id="MinStockQuantity" name="MinStockQuantity" value="0" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MinStockQuantity" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlLowStockActivity">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="LowStockActivityId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Hoạt động hàng tồn kho thấp</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Action to be taken when your current stock quantity falls below (reaches) the 'Minimum stock quantity'. Activation of the action will occur only after an order is placed."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Low stock activity field is required." id="LowStockActivityId" name="LowStockActivityId">
                                                    <option value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Không</font>
                                                        </font>
                                                    </option>
                                                    <option selected="selected" value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Tắt nút mua</font>
                                                        </font>
                                                    </option>
                                                    <option value="2">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Hủy xuất bản</font>
                                                        </font>
                                                    </option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="LowStockActivityId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlNotifyForQuantityBelow">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="NotifyAdminForQuantityBelow">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Thông báo cho qty bên dưới</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="When the current stock quantity falls below (reaches) this quantity, a store owner will receive a notification."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="1" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="1" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Notify for qty below field is required." id="NotifyAdminForQuantityBelow" name="NotifyAdminForQuantityBelow" value="1" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="1" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="NotifyAdminForQuantityBelow" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlBackorders">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="BackorderModeId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Đường viền</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Select backorder mode."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Backorders field is required." id="BackorderModeId" name="BackorderModeId">
                                                    <option selected="selected" value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Không có hàng tồn đọng</font>
                                                        </font>
                                                    </option>
                                                    <option value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Cho phép qty dưới 0</font>
                                                        </font>
                                                    </option>
                                                    <option value="2">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Cho phép qty dưới 0 và thông báo cho khách hàng</font>
                                                        </font>
                                                    </option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="BackorderModeId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlAllowBackInStockSubscriptions">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="AllowBackInStockSubscriptions">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Cho phép trở lại đăng ký trong kho</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Allow customers to subscribe to a notification list for a product that has gone out of stock."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Allow back in stock subscriptions field is required." id="AllowBackInStockSubscriptions" name="AllowBackInStockSubscriptions" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="AllowBackInStockSubscriptions" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting" id="pnlProductAvailabilityRange">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="ProductAvailabilityRangeId">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Phạm vi sản phẩm có sẵn</font>
                                                        </font>
                                                    </label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose the product availability range that indicates when the product is expected to be available when out of stock (e.g. Available in 10-14 days). You can manage availability ranges by selecting Configuration > Shipping > Dates and ranges."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Product availability range field is required." id="ProductAvailabilityRangeId" name="ProductAvailabilityRangeId">
                                                    <option selected="selected" value="0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Không có</font>
                                                        </font>
                                                    </option>
                                                    <option value="1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">2-4 ngày</font>
                                                        </font>
                                                    </option>
                                                    <option value="2">7-10 days</option>
                                                    <option value="3">2 week</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="ProductAvailabilityRangeId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="OrderMinimumQuantity">Minimum cart qty</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Set the minimum quantity allowed in a customer's shopping cart e.g. set to 3 to only allow customers to purchase 3 or more of this product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="1" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="1" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Minimum cart qty field is required." id="OrderMinimumQuantity" name="OrderMinimumQuantity" value="1" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="1" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="OrderMinimumQuantity" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="OrderMaximumQuantity">Maximum cart qty</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Set the maximum quantity allowed in a customer's shopping cart e.g. set to 5 to only allow customers to purchase 5 of this product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="10000" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="10000" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Maximum cart qty field is required." id="OrderMaximumQuantity" name="OrderMaximumQuantity" value="10000" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="10000" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="OrderMaximumQuantity" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="AllowedQuantities">Allowed quantities</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter a comma separated list of quantities you want this product to be restricted to. Instead of a quantity textbox that allows them to enter any quantity, they will receive a dropdown list of the values you enter here."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" data-val="true" data-val-length="'Allowed Quantities' must be between 0 and 1000 characters." data-val-length-max="1000" data-val-length-min="0" id="AllowedQuantities" name="AllowedQuantities" type="text" value="">
                                                <span class="field-validation-valid" data-valmsg-for="AllowedQuantities" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting d-none" id="pnlAllowAddingOnlyExistingAttributeCombinations">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="AllowAddingOnlyExistingAttributeCombinations">Allow only existing attribute combinations</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to allow adding to the cart/wishlist only attribute combinations that exist and have stock greater than zero. In this case you have to create all existing product attribute combinations that you have in stock."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Allow only existing attribute combinations field is required." id="AllowAddingOnlyExistingAttributeCombinations" name="AllowAddingOnlyExistingAttributeCombinations" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="AllowAddingOnlyExistingAttributeCombinations" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row advanced-setting">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="NotReturnable">Not returnable</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if this product is not returnable. In this case a customer won't be allowed to submit return request."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Not returnable field is required." id="NotReturnable" name="NotReturnable" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="NotReturnable" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-pictures" data-hideattribute="ProductPage.HidePicturesBlock" id="product-pictures">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="far fa-images"></i>Pictures</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div id="productpictures-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="dataTables_scroll">
                                                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;">
                                                            <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 150px;">Picture</th>
                                                                        <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 129.938px;">Display order</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.062px;">Alt</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 165.609px;">Title</th>
                                                                        <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 170.438px;">Edit</th>
                                                                        <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 93.9531px;">Delete</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                        <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="productpictures-grid" role="grid" aria-describedby="productpictures-grid_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row" style="height: 0px;">
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 150px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Picture</div>
                                                                    </th>
                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 129.938px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Display order</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Alt</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 165.609px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Title</div>
                                                                    </th>
                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 170.438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                    </th>
                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 93.9531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Delete</div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td data-columnname="PictureUrl"><a href="https://admin-demo.nopcommerce.com/images/thumbs/0000020_build-your-own-computer.jpeg" target="_blank"><img alt="20" src="https://admin-demo.nopcommerce.com/images/thumbs/0000020_build-your-own-computer.jpeg" width="150"></a></td>
                                                                    <td class=" text-center" data-columnname="DisplayOrder">1</td>
                                                                    <td data-columnname="OverrideAltAttribute"></td>
                                                                    <td data-columnname="OverrideTitleAttribute"></td>
                                                                    <td class=" button-column" data-columnname="Id"><a href="#" class="btn btn-default" id="buttonEdit_productpictures_grid1" onclick="editData_productpictures_grid($(this).parent().parent(), '1');return false;"><i class="fas fa-pencil-alt"></i>Edit</a><a href="#" class="btn btn-default" id="buttonConfirm_productpictures_grid1" style="display:none" onclick="confirmEditData_productpictures_grid($(this).parent().parent(), '1', 'Id');return false;"><i class="fas fa-check"></i>Update</a><a href="#" class="btn btn-default" id="buttonCancel_productpictures_grid1" style="display:none" onclick="cancelEditData_productpictures_grid('[object Object]', '1');updateTableWidth('#productpictures-grid');return false;"><i class="fas fa-ban"></i>Cancel</a></td>
                                                                    <td class=" button-column" data-columnname="Id"><a href="#" class="btn btn-default" onclick="table_deletedata_productpictures_grid('1');return false;"><i class="far fa-trash-alt"></i>Delete</a></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td data-columnname="PictureUrl"><a href="https://admin-demo.nopcommerce.com/images/thumbs/0000021_build-your-own-computer.jpeg" target="_blank"><img alt="21" src="https://admin-demo.nopcommerce.com/images/thumbs/0000021_build-your-own-computer.jpeg" width="150"></a></td>
                                                                    <td class=" text-center" data-columnname="DisplayOrder">2</td>
                                                                    <td data-columnname="OverrideAltAttribute"></td>
                                                                    <td data-columnname="OverrideTitleAttribute"></td>
                                                                    <td class=" button-column" data-columnname="Id"><a href="#" class="btn btn-default" id="buttonEdit_productpictures_grid2" onclick="editData_productpictures_grid($(this).parent().parent(), '2');return false;"><i class="fas fa-pencil-alt"></i>Edit</a><a href="#" class="btn btn-default" id="buttonConfirm_productpictures_grid2" style="display:none" onclick="confirmEditData_productpictures_grid($(this).parent().parent(), '2', 'Id');return false;"><i class="fas fa-check"></i>Update</a><a href="#" class="btn btn-default" id="buttonCancel_productpictures_grid2" style="display:none" onclick="cancelEditData_productpictures_grid('[object Object]', '2');updateTableWidth('#productpictures-grid');return false;"><i class="fas fa-ban"></i>Cancel</a></td>
                                                                    <td class=" button-column" data-columnname="Id"><a href="#" class="btn btn-default" onclick="table_deletedata_productpictures_grid('2');return false;"><i class="far fa-trash-alt"></i>Delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin-t-5">
                                            <div class="col-lg-5 col-xs-12">
                                                <div class="float-lg-left">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="productpictures-grid_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="productpictures-grid_previous"><a href="#" aria-controls="productpictures-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="productpictures-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item next disabled" id="productpictures-grid_next"><a href="#" aria-controls="productpictures-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="text-center">
                                                    <div class="dataTables_length" id="productpictures-grid_length"><label>Show <select name="productpictures-grid_length" aria-controls="productpictures-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                <option value="7">7</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> items</label></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="float-lg-right text-center">
                                                    <div class="dataTables_info" id="productpictures-grid_info" role="status" aria-live="polite">1-2 of 2 items</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-xs-12">
                                                <div class="float-lg-right text-center data-tables-refresh">
                                                    <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="productpictures-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="productpictures-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productpictures-grid_deleteConflict-action-alert-title">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="productpictures-grid_deleteConflict-action-alert-title">Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="additional-text" id="productpictures-grid_deleteConflict-info"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-default" id="productpictures-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#productpictures-grid_deleteConflict-action-alert"></div>
                                        <script>
                                            $(document).ready(function() {
                                                $('#productpictures-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#productpictures-grid_deleteConflict-action-alert")
                                            });
                                        </script>
                                    </div>
                                    <div id="productpictures-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productpictures-grid_deleteCommonFailed-action-alert-title">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="productpictures-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="additional-text" id="productpictures-grid_deleteCommonFailed-info"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-default" id="productpictures-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#productpictures-grid_deleteCommonFailed-action-alert"></div>
                                        <script>
                                            $(document).ready(function() {
                                                $('#productpictures-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#productpictures-grid_deleteCommonFailed-action-alert")
                                            });
                                        </script>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header">
                                            Add a new picture
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="AddPictureModel_PictureId">Picture</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Choose a picture to upload. If the picture size exceeds your stores max image size setting, it will be automatically resized."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div id="picture385944825value">
                                                        <input type="hidden" data-val="true" data-val-required="The Picture field is required." id="AddPictureModel_PictureId" name="AddPictureModel.PictureId" value="0">
                                                    </div>
                                                    <div class="upload-picture-block">
                                                        <div class="picture-container">
                                                            <div id="picture385944825image" class="uploaded-image">
                                                                <img src="https://admin-demo.nopcommerce.com/images/thumbs/default-image_100.png">
                                                            </div>
                                                        </div>
                                                        <div class="upload-button-container">
                                                            <div id="picture385944825" class="upload-image-button float-left px-md-1">
                                                                <noscript>
                                                                    <p>Please enable JavaScript to use file uploader.</p>
                                                                </noscript>
                                                                <div>
                                                                    <div class="qq-uploader-selector qq-uploader">
                                                                        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone="" style="display: none;">
                                                                            <span>Drop files here to upload</span>
                                                                        </div>
                                                                        <div class="qq-upload-button-selector btn bg-gradient-green" style="position: relative; overflow: hidden; direction: ltr;">
                                                                            <div>Upload a file</div>
                                                                            <input qq-button-id="7e74515d-cdd5-4e89-9132-10160007f6cf" title="đầu vào tệp" type="file" name="qqfile" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;">
                                                                        </div>
                                                                        <span class="qq-drop-processing-selector qq-drop-processing qq-hide">
                                                                            <span>Processing dropped files...</span>
                                                                            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                                                                        </span>
                                                                        <ul class="qq-upload-list-selector qq-upload-list"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="remove-image-button float-left px-md-1">
                                                                <span id="picture385944825remove" class="btn btn-danger" style="display: none;">Remove picture</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="field-validation-valid" data-valmsg-for="AddPictureModel.PictureId" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="AddPictureModel_OverrideAltAttribute">Alt</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Override &quot;alt&quot; attribute for &quot;img&quot; HTML element. If empty, then a default rule will be used (e.g. product name)."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" id="AddPictureModel_OverrideAltAttribute" name="AddPictureModel.OverrideAltAttribute" type="text" value="">
                                                    <span class="field-validation-valid" data-valmsg-for="AddPictureModel.OverrideAltAttribute" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="AddPictureModel_OverrideTitleAttribute">Title</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Override &quot;title&quot; attribute for &quot;img&quot; HTML element. If empty, then a default rule will be used (e.g. product name)."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" id="AddPictureModel_OverrideTitleAttribute" name="AddPictureModel.OverrideTitleAttribute" type="text" value="">
                                                    <span class="field-validation-valid" data-valmsg-for="AddPictureModel.OverrideTitleAttribute" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="AddPictureModel_DisplayOrder">Display order</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Display order of the picture. 1 represents the top of the list."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Display order field is required." id="AddPictureModel_DisplayOrder" name="AddPictureModel.DisplayOrder" value="0" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Tăng giá trị" title="Tăng giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Giảm giá trị" title="Giảm giá trị"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                    <span class="field-validation-valid" data-valmsg-for="AddPictureModel.DisplayOrder" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-9 offset-md-3">
                                                    <button type="button" id="addProductPicture" class="btn btn-primary">Add product picture</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="addProductPictureAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addProductPictureAlert-action-alert-title">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addProductPictureAlert-action-alert-title">Information</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="additional-text" id="addProductPictureAlert-info"></div>
                                                Upload picture first.
                                            </div>
                                            <div class="modal-footer">
                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn btn-default" id="addProductPictureAlert" style="display:none" data-toggle="modal" data-target="#addProductPictureAlert-action-alert"></div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#addProductPictureAlert').attr("data-toggle", "modal").attr("data-target", "#addProductPictureAlert-action-alert")
                                        });
                                    </script>
                                </div>
                                <div id="productPictureAddAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productPictureAddAlert-action-alert-title">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="productPictureAddAlert-action-alert-title">Information</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="additional-text" id="productPictureAddAlert-info"></div>
                                                Failed to add product picture.
                                            </div>
                                            <div class="modal-footer">
                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn btn-default" id="productPictureAddAlert" style="display:none" data-toggle="modal" data-target="#productPictureAddAlert-action-alert"></div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#productPictureAddAlert').attr("data-toggle", "modal").attr("data-target", "#productPictureAddAlert-action-alert")
                                        });
                                    </script>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-product-attributes" data-hideattribute="ProductPage.HideProductAttributesBlock" id="product-product-attributes">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-paperclip"></i>Product attributes</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Product attributes are quantifiable or descriptive aspects of a product (such as, color). For example, if you were to create an attribute for color, with the values of blue, green, yellow, and so on, you may want to apply this attribute to shirts, which you sell in various colors (you can adjust a price or weight for any of existing attribute values).
                                        You can add attribute for your product using existing list of attributes, or if you need to create a new one go to Catalog &gt; Attributes &gt; Product attributes. Please notice that if you want to manage inventory by product attributes (e.g. 5 green shirts and 3 blue ones), then ensure that "Inventory method" is set to "Track inventory by product attributes".
                                    </p>
                                    <div id="productattribute-edit" class="card card-primary card-outline card-outline-tabs nav-tabs-custom">
                                        <div class="card-header p-0 pt-1 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                <li class="nav-item"><a aria-selected="false" class="nav-link active" data-tab-name="tab-attributes" data-toggle="pill" href="#tab-attributes" role="tab">Attributes</a></li>
                                                <li class="nav-item"><a aria-selected="false" class="nav-link" data-tab-name="tab-attribute-combinations" data-toggle="pill" href="#tab-attribute-combinations" role="tab">Attribute combinations</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade{0} active" id="tab-attributes" role="tabpanel">
                                                    <div class="cards-group">
                                                        <div class="card card-default">
                                                            <div class="card-body">
                                                                <div id="productattributemappings-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="dataTables_scroll">
                                                                                <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                                    <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 944px; padding-right: 0px;">
                                                                                        <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 944px;">
                                                                                            <thead>
                                                                                                <tr role="row">
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 107.719px;">Attribute</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 83.2812px;">Text prompt</th>
                                                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 75.4531px;">Is Required</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133.062px;">Control type</th>
                                                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 82.8125px;">Display order</th>
                                                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 96.1875px;">Validation rules</th>
                                                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 94.7188px;">Condition</th>
                                                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 69.7656px;">Edit</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="productattributemappings-grid" role="grid" aria-describedby="productattributemappings-grid_info" style="width: 100%;">
                                                                                        <thead>
                                                                                            <tr role="row" style="height: 0px;">
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 107.719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Attribute</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 83.2812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Text prompt</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 75.4531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Is Required</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 133.062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Control type</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 82.8125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Display order</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 96.1875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Validation rules</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 94.7188px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Condition</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 69.7656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="odd">
                                                                                                <td>Processor</td>
                                                                                                <td></td>
                                                                                                <td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td>
                                                                                                <td>Drop-down list</td>
                                                                                                <td class=" text-center">0</td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" button-column"><a class="btn btn-default" href="/Admin/Product/ProductAttributeMappingEdit/1"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                                                            </tr>
                                                                                            <tr class="even">
                                                                                                <td>RAM</td>
                                                                                                <td></td>
                                                                                                <td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td>
                                                                                                <td>Drop-down list</td>
                                                                                                <td class=" text-center">0</td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" button-column"><a class="btn btn-default" href="/Admin/Product/ProductAttributeMappingEdit/2"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                                                            </tr>
                                                                                            <tr class="odd">
                                                                                                <td>HDD</td>
                                                                                                <td></td>
                                                                                                <td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td>
                                                                                                <td>Radio button list</td>
                                                                                                <td class=" text-center">0</td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" button-column"><a class="btn btn-default" href="/Admin/Product/ProductAttributeMappingEdit/3"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                                                            </tr>
                                                                                            <tr class="even">
                                                                                                <td>OS</td>
                                                                                                <td></td>
                                                                                                <td class=" text-center"><i class="fas fa-check true-icon" nop-value="true"></i></td>
                                                                                                <td>Radio button list</td>
                                                                                                <td class=" text-center">0</td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" button-column"><a class="btn btn-default" href="/Admin/Product/ProductAttributeMappingEdit/4"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                                                            </tr>
                                                                                            <tr class="odd">
                                                                                                <td>Software</td>
                                                                                                <td></td>
                                                                                                <td class=" text-center"><i class="fas fa-times false-icon" nop-value="false"></i></td>
                                                                                                <td>Checkboxes</td>
                                                                                                <td class=" text-center">0</td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" text-center"></td>
                                                                                                <td class=" button-column"><a class="btn btn-default" href="/Admin/Product/ProductAttributeMappingEdit/5"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row margin-t-5">
                                                                        <div class="col-lg-5 col-xs-12">
                                                                            <div class="float-lg-left">
                                                                                <div class="dataTables_paginate paging_simple_numbers" id="productattributemappings-grid_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled" id="productattributemappings-grid_previous"><a href="#" aria-controls="productattributemappings-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="productattributemappings-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                                        <li class="paginate_button page-item next disabled" id="productattributemappings-grid_next"><a href="#" aria-controls="productattributemappings-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-xs-12">
                                                                            <div class="text-center">
                                                                                <div class="dataTables_length" id="productattributemappings-grid_length"><label>Show <select name="productattributemappings-grid_length" aria-controls="productattributemappings-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                                            <option value="7">7</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="50">50</option>
                                                                                            <option value="100">100</option>
                                                                                        </select> items</label></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-xs-12">
                                                                            <div class="float-lg-right text-center">
                                                                                <div class="dataTables_info" id="productattributemappings-grid_info" role="status" aria-live="polite">1-5 of 5 items</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-1 col-xs-12">
                                                                            <div class="float-lg-right text-center data-tables-refresh">
                                                                                <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="productattributemappings-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <a class="btn btn-primary" href="/Admin/Product/ProductAttributeMappingCreate?productId=1">
                                                                    <i class="fas fa-plus-square"></i>
                                                                    Add a new attribute
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade{0}" id="tab-attribute-combinations" role="tabpanel">
                                                    <div class="cards-group">
                                                        <div class="card card-default">
                                                            <div class="card-body">
                                                                <p>
                                                                    Note that some attribute control types that support custom user input (e.g. file upload, textboxes, date picker) are useless with attribute combinations
                                                                </p>
                                                                <div id="attributecombinations-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="dataTables_scroll">
                                                                                <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                                    <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 0px; padding-right: 0px;">
                                                                                        <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 0px;">
                                                                                            <thead>
                                                                                                <tr role="row">
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Attributes</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Stock quantity</th>
                                                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 0px;">Allow out of stock</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">SKU</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Manufacturer part number</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">GTIN</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Overridden price</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Notify admin for quantity below</th>
                                                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Picture</th>
                                                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px;">Edit</th>
                                                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px;">Delete</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="attributecombinations-grid" role="grid" aria-describedby="attributecombinations-grid_info" style="width: 100%;">
                                                                                        <thead>
                                                                                            <tr role="row" style="height: 0px;">
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Attributes</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Stock quantity</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Allow out of stock</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">SKU</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Manufacturer part number</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">GTIN</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Overridden price</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Notify admin for quantity below</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Picture</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                                                </th>
                                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 0px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                                    <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Delete</div>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="odd">
                                                                                                <td valign="top" colspan="11" class="dataTables_empty">No data available in table</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row margin-t-5">
                                                                        <div class="col-lg-5 col-xs-12">
                                                                            <div class="float-lg-left">
                                                                                <div class="dataTables_paginate paging_simple_numbers" id="attributecombinations-grid_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled" id="attributecombinations-grid_previous"><a href="#" aria-controls="attributecombinations-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                                        <li class="paginate_button page-item next disabled" id="attributecombinations-grid_next"><a href="#" aria-controls="attributecombinations-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-xs-12">
                                                                            <div class="text-center">
                                                                                <div class="dataTables_length" id="attributecombinations-grid_length"><label>Show <select name="attributecombinations-grid_length" aria-controls="attributecombinations-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                                            <option value="7">7</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="50">50</option>
                                                                                            <option value="100">100</option>
                                                                                        </select> items</label></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-xs-12">
                                                                            <div class="float-lg-right text-center">
                                                                                <div class="dataTables_info" id="attributecombinations-grid_info" role="status" aria-live="polite">No records</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-1 col-xs-12">
                                                                            <div class="float-lg-right text-center data-tables-refresh">
                                                                                <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="attributecombinations-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="attributecombinations-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="attributecombinations-grid_deleteConflict-action-alert-title">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="attributecombinations-grid_deleteConflict-action-alert-title">Information</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="additional-text" id="attributecombinations-grid_deleteConflict-info"></div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn btn-default" id="attributecombinations-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#attributecombinations-grid_deleteConflict-action-alert"></div>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            $('#attributecombinations-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#attributecombinations-grid_deleteConflict-action-alert")
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <div id="attributecombinations-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="attributecombinations-grid_deleteCommonFailed-action-alert-title">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="attributecombinations-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="additional-text" id="attributecombinations-grid_deleteCommonFailed-info"></div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn btn-default" id="attributecombinations-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#attributecombinations-grid_deleteCommonFailed-action-alert"></div>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            $('#attributecombinations-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#attributecombinations-grid_deleteCommonFailed-action-alert")
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button type="submit" id="btnAddNewCombination" onclick="javascript:OpenWindow('/Admin/Product/ProductAttributeCombinationCreatePopup?productId=1&amp;btnId=btnRefreshCombinations&amp;formId=product-form', 800, 700, true); return false;" class="btn btn-primary">
                                                                    Add combination
                                                                </button>
                                                                <button type="button" id="btnGenerateAllCombinations" class="btn btn-info" data-toggle="modal" data-target="#btnGenerateAllCombinations-action-confirmation" name="">
                                                                    Generate all possible combinations
                                                                </button>
                                                                <button type="submit" id="btnGenerateSeveralCombination" onclick="javascript:OpenWindow('/Admin/Product/ProductAttributeCombinationGeneratePopup?productId=1&amp;btnId=btnRefreshCombinations&amp;formId=product-form', 800, 700, true); return false;" class="btn btn-info">
                                                                    Generate several combinations
                                                                </button>
                                                                <div id="btnGenerateAllCombinations-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="btnGenerateAllCombinations-action-confirmation-title">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="btnGenerateAllCombinations-action-confirmation-title">Are you sure?</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Are you sure you want to perform this action?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" id="btnGenerateAllCombinations-action-confirmation-submit-button" class="btn btn-primary float-right">
                                                                                    Yes
                                                                                </button>
                                                                                <span class="btn btn-default float-right margin-r-5" data-dismiss="modal">No, cancel</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            $('#btnGenerateAllCombinations').attr("data-toggle", "modal").attr("data-target", "#btnGenerateAllCombinations-action-confirmation");
                                                                            $('#btnGenerateAllCombinations-action-confirmation-submit-button').attr("name", $("#btnGenerateAllCombinations").attr("name"));
                                                                            $("#btnGenerateAllCombinations").attr("name", "");
                                                                            if ($("#btnGenerateAllCombinations").attr("type") == "submit") $("#btnGenerateAllCombinations").attr("type", "button");
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <button type="submit" id="btnRefreshCombinations" style="display: none"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="generateAllAttributeCombinationsAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="generateAllAttributeCombinationsAlert-action-alert-title">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="generateAllAttributeCombinationsAlert-action-alert-title">Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="additional-text" id="generateAllAttributeCombinationsAlert-info"></div>
                                                                    Error while generating attribute combinations.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn btn-default" id="generateAllAttributeCombinationsAlert" style="display:none" data-toggle="modal" data-target="#generateAllAttributeCombinationsAlert-action-alert"></div>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#generateAllAttributeCombinationsAlert').attr("data-toggle", "modal").attr("data-target", "#generateAllAttributeCombinationsAlert-action-alert")
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline" data-card-name="product-specification-attributes" data-hideattribute="ProductPage.HideSpecificationAttributeBlock" id="product-specification-attributes">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-cog"></i>Specification attributes</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Specification attributes are product features i.e, screen size, number of USB-ports, visible on product details page. Specification attributes can be used for filtering products on the category details page. Unlike product attributes, specification attributes are used for information purposes only.
                                        You can add attribute for your product using existing list of attributes, or if you need to create a new one go to Catalog &gt; Attributes &gt; Specification attributes.
                                    </p>
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <div id="specificationattributes-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="dataTables_scroll">
                                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 984px; padding-right: 0px;">
                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 984px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 116.047px;">Attribute type</th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 146.297px;">Attribute</th>
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136.344px;">Value</th>
                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 113.312px;">Allow filtering</th>
                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 112.875px;">Show on product page</th>
                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 111.391px;">Display order</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 71.7344px;">Edit</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="specificationattributes-grid" role="grid" aria-describedby="specificationattributes-grid_info" style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row" style="height: 0px;">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 116.047px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Attribute type</div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 146.297px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Attribute</div>
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136.344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Value</div>
                                                                            </th>
                                                                            <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 113.312px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Allow filtering</div>
                                                                            </th>
                                                                            <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 112.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Show on product page</div>
                                                                            </th>
                                                                            <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 111.391px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Display order</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 71.7344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-t-5">
                                                    <div class="col-lg-5 col-xs-12">
                                                        <div class="float-lg-left">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="specificationattributes-grid_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="specificationattributes-grid_previous"><a href="#" aria-controls="specificationattributes-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                    <li class="paginate_button page-item next disabled" id="specificationattributes-grid_next"><a href="#" aria-controls="specificationattributes-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="text-center">
                                                            <div class="dataTables_length" id="specificationattributes-grid_length"><label>Show <select name="specificationattributes-grid_length" aria-controls="specificationattributes-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                        <option value="7">7</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> items</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="float-lg-right text-center">
                                                            <div class="dataTables_info" id="specificationattributes-grid_info" role="status" aria-live="polite">No records</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-xs-12">
                                                        <div class="float-lg-right text-center data-tables-refresh">
                                                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="specificationattributes-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-primary" href="/Admin/Product/ProductSpecAttributeAddOrEdit?productId=1">
                                                <i class="fas fa-plus-square"></i>
                                                Add attribute
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-giftcard" data-hideattribute="ProductPage.HideGiftCardBlock" id="product-giftcard">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-gift"></i>Gift card</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row parent-setting" id="parentSetting1456776322">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="IsGiftCard">Is gift card</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if it is a gift card. After adding gift card products to the shopping cart and completing the purchases, you can then search and view the list of all the purchased gift cards by selecting Gift Cards from the Sales menu."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Is gift card field is required." id="IsGiftCard" name="IsGiftCard" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="IsGiftCard" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1456776322">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('IsGiftCard', 'parentSetting1456776322', 'nestedSetting1456776322');
                                                $('#IsGiftCard').click(toggle_IsGiftCard);
                                                toggle_IsGiftCard();
                                            });

                                            function toggle_IsGiftCard() {
                                                if ($('#IsGiftCard').is(':checked')) {
                                                    $('#nestedSetting1456776322').showElement();
                                                } else {
                                                    $('#nestedSetting1456776322').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="GiftCardTypeId">Gift card type</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="There are two gift card types: virtual and physical. WARNING: not recommended to change the gift card type from one to another in a &quot;live&quot; store."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Gift card type field is required." id="GiftCardTypeId" name="GiftCardTypeId">
                                                    <option selected="selected" value="0">Virtual</option>
                                                    <option value="1">Physical</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="GiftCardTypeId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="OverriddenGiftCardAmount">Overridden gift card amount</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Enter gift card amount that can be used after purchase. If not specified, then product price will be used."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="" tabindex="0" role="spinbutton" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" autocomplete="off" aria-disabled="false" style=""><input type="text" data-val="true" data-val-number="The field Overridden gift card amount must be a number." id="OverriddenGiftCardAmount" name="OverriddenGiftCardAmount" value="" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-7.922816251426434e+28" aria-valuemax="7.922816251426434e+28" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="OverriddenGiftCardAmount" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-downloadable" data-hideattribute="ProductPage.HideDownloadableBlock" id="product-downloadable">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-download"></i>Downloadable product</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row parent-setting" id="parentSetting84401813">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="IsDownload">Downloadable product</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if the product is downloadable. When customers purchase a downloadable product, they can download it direct from your store. The link will be visible after checkout."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Downloadable product field is required." id="IsDownload" name="IsDownload" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="IsDownload" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting" id="nestedSetting84401813">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('IsDownload', 'parentSetting84401813', 'nestedSetting84401813');
                                            });
                                        </script>
                                        <div class="form-group row d-none" id="pnlDownloadFile">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="DownloadId">Download file</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="You can download file using URL or uploading from the computer. If you want to download file using URL check the box Use download URL."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div id="download136625789value">
                                                    <input type="hidden" data-val="true" data-val-required="The Download file field is required." id="DownloadId" name="DownloadId" value="0">
                                                </div>
                                                <div class="card card-default">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <div class="label-wrapper">
                                                                    <label class="col-form-label">
                                                                        Use download URL
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="checkbox" name="cbUseDownloadURL136625789" id="cbUseDownloadURL136625789">
                                                            </div>
                                                        </div>
                                                        <div id="pnlDownloadURL136625789" class="d-none">
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <div class="label-wrapper">
                                                                        <label class="col-form-label">
                                                                            Download URL
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="downloadurl136625789" id="downloadurl136625789">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-8 offset-sm-4">
                                                                    <button type="button" id="saveDownloadUrl136625789" class="btn btn-primary">Save download</button>
                                                                    <div id="pnlDownloadURLResult136625789" style="display: none;">Download object is saved</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="pnlDownloadFile136625789">
                                                            <div class="col-sm-4">
                                                                <div class="label-wrapper">
                                                                    <label class="col-form-label">
                                                                        Upload file
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div id="download136625789">
                                                                    <noscript>
                                                                        <p>
                                                                            Please enable JavaScript to use file uploader.
                                                                        </p>
                                                                        <!-- or put a simple form for upload here -->
                                                                    </noscript>
                                                                    <div>
                                                                        <div class="qq-uploader-selector qq-uploader">
                                                                            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone="" style="display: none;">
                                                                                <span>Drop files here to upload</span>
                                                                            </div>
                                                                            <div class="qq-upload-button-selector qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">
                                                                                <div>Upload a file</div>
                                                                                <input qq-button-id="0703c752-224e-4285-8207-769d26c527b2" title="file input" type="file" name="qqfile" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;">
                                                                            </div>
                                                                            <span class="qq-drop-processing-selector qq-drop-processing qq-hide">
                                                                                <span>Processing dropped files...</span>
                                                                                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                                                                            </span>
                                                                            <ul class="qq-upload-list-selector qq-upload-list"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="clear: both;">
                                                                    <div id="download136625789downloadurl" class="float-left my-1">
                                                                    </div>
                                                                    <div class="float-left my-1">
                                                                        <span id="download136625789remove" class="btn btn-default ml-2" style="display:none;"><i class="far fa-trash-alt"></i>Remove download</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="saveDownloadUrlAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="saveDownloadUrlAlert-action-alert-title">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="saveDownloadUrlAlert-action-alert-title">Information</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="additional-text" id="saveDownloadUrlAlert-info"></div>
                                                                Failed to save download object.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn btn-default" id="saveDownloadUrlAlert" style="display:none" data-toggle="modal" data-target="#saveDownloadUrlAlert-action-alert"></div>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#saveDownloadUrlAlert').attr("data-toggle", "modal").attr("data-target", "#saveDownloadUrlAlert-action-alert")
                                                        });
                                                    </script>
                                                </div>
                                                <div id="saveDownloadUrlFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="saveDownloadUrlFailed-action-alert-title">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="saveDownloadUrlFailed-action-alert-title">Information</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="additional-text" id="saveDownloadUrlFailed-info"></div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn btn-default" id="saveDownloadUrlFailed" style="display:none" data-toggle="modal" data-target="#saveDownloadUrlFailed-action-alert"></div>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#saveDownloadUrlFailed').attr("data-toggle", "modal").attr("data-target", "#saveDownloadUrlFailed-action-alert")
                                                        });
                                                    </script>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-for="DownloadId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlUnlimitedDownloads">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="UnlimitedDownloads">Unlimited downloads</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="When a customer purchases a download product, they can download the item unlimited number of times."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Unlimited downloads field is required." id="UnlimitedDownloads" name="UnlimitedDownloads" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="UnlimitedDownloads" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlMaxNumberOfDownloads">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="MaxNumberOfDownloads">Max. downloads</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The maximum number of downloads."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0 " tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Max. downloads field is required." id="MaxNumberOfDownloads" name="MaxNumberOfDownloads" value="0" data-role="numerictextbox" role="spinbutton" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false" style="display: none;"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="MaxNumberOfDownloads" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlDownloadExpirationDays">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="DownloadExpirationDays">Number of days</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The number of days during customers keeps access to the file (e.g. 14). Leave this field blank to allow continuous downloads."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="" tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-disabled="false" style=""><input type="text" id="DownloadExpirationDays" name="DownloadExpirationDays" value="" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="DownloadExpirationDays" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlDownloadActivationType">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="DownloadActivationTypeId">Download activation type</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A value indicating when download links will be enabled."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Download activation type field is required." id="DownloadActivationTypeId" name="DownloadActivationTypeId">
                                                    <option selected="selected" value="0">When order is paid</option>
                                                    <option value="10">Manually</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="DownloadActivationTypeId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlHasUserAgreement">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="HasUserAgreement">Has user agreement</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Select this checkbox if the customer has a user agreement (a customer must agree with this user agreement when trying to download the product)."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Has user agreement field is required." id="HasUserAgreement" name="HasUserAgreement" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="HasUserAgreement" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row d-none" id="pnlUserAgreementText">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="UserAgreementText">User agreement text</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The text of the user agreement."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'User Agreement Text' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="UserAgreementText" name="UserAgreementText"></textarea>
                                                <span class="field-validation-valid" data-valmsg-for="UserAgreementText" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row parent-setting d-none" id="pnlHasSampleDownload">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="HasSampleDownload">Has sample download file</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="You can download file using URL or uploading from the computer. If you want to download file using URL check the box Use download URL."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Has sample download file field is required." id="HasSampleDownload" name="HasSampleDownload" type="checkbox" value="true">
                                                <span class="field-validation-valid" data-valmsg-for="HasSampleDownload" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="nested-setting" id="nestedSetting875005294">
                                            <script>
                                                $(document).ready(function() {
                                                    initNestedSetting('HasSampleDownload', 'parentSetting875005294', 'nestedSetting875005294');
                                                });
                                            </script>
                                            <div class="form-group row d-none" id="pnlSampleDownloadFile">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="SampleDownloadId">Sample download file</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The sample download file."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div id="download1813982178value">
                                                        <input type="hidden" data-val="true" data-val-required="The Sample download file field is required." id="SampleDownloadId" name="SampleDownloadId" value="0">
                                                    </div>
                                                    <div class="card card-default">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <div class="label-wrapper">
                                                                        <label class="col-form-label">
                                                                            Use download URL
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <input type="checkbox" name="cbUseDownloadURL1813982178" id="cbUseDownloadURL1813982178">
                                                                </div>
                                                            </div>
                                                            <div id="pnlDownloadURL1813982178" class="d-none">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <div class="label-wrapper">
                                                                            <label class="col-form-label">
                                                                                Download URL
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="downloadurl1813982178" id="downloadurl1813982178">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-8 offset-sm-4">
                                                                        <button type="button" id="saveDownloadUrl1813982178" class="btn btn-primary">Save download</button>
                                                                        <div id="pnlDownloadURLResult1813982178" style="display: none;">Download object is saved</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" id="pnlDownloadFile1813982178">
                                                                <div class="col-sm-4">
                                                                    <div class="label-wrapper">
                                                                        <label class="col-form-label">
                                                                            Upload file
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div id="download1813982178">
                                                                        <noscript>
                                                                            <p>
                                                                                Please enable JavaScript to use file uploader.
                                                                            </p>
                                                                            <!-- or put a simple form for upload here -->
                                                                        </noscript>
                                                                        <div>
                                                                            <div class="qq-uploader-selector qq-uploader">
                                                                                <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone="" style="display: none;">
                                                                                    <span>Drop files here to upload</span>
                                                                                </div>
                                                                                <div class="qq-upload-button-selector qq-upload-button" style="position: relative; overflow: hidden; direction: ltr;">
                                                                                    <div>Upload a file</div>
                                                                                    <input qq-button-id="6b45234b-7e14-4d0c-8533-509287fd4b97" title="file input" type="file" name="qqfile" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;">
                                                                                </div>
                                                                                <span class="qq-drop-processing-selector qq-drop-processing qq-hide">
                                                                                    <span>Processing dropped files...</span>
                                                                                    <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                                                                                </span>
                                                                                <ul class="qq-upload-list-selector qq-upload-list"></ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="clear: both;">
                                                                        <div id="download1813982178downloadurl" class="float-left my-1">
                                                                        </div>
                                                                        <div class="float-left my-1">
                                                                            <span id="download1813982178remove" class="btn btn-default ml-2" style="display:none;"><i class="far fa-trash-alt"></i>Remove download</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="saveDownloadUrlAlert-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="saveDownloadUrlAlert-action-alert-title">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="saveDownloadUrlAlert-action-alert-title">Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="additional-text" id="saveDownloadUrlAlert-info"></div>
                                                                    Failed to save download object.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn btn-default" id="saveDownloadUrlAlert" style="display:none"></div>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#saveDownloadUrlAlert').attr("data-toggle", "modal").attr("data-target", "#saveDownloadUrlAlert-action-alert")
                                                            });
                                                        </script>
                                                    </div>
                                                    <div id="saveDownloadUrlFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="saveDownloadUrlFailed-action-alert-title">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="saveDownloadUrlFailed-action-alert-title">Information</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="additional-text" id="saveDownloadUrlFailed-info"></div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn btn-default" id="saveDownloadUrlFailed" style="display:none"></div>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#saveDownloadUrlFailed').attr("data-toggle", "modal").attr("data-target", "#saveDownloadUrlFailed-action-alert")
                                                            });
                                                        </script>
                                                    </div>
                                                    <span class="field-validation-valid" data-valmsg-for="SampleDownloadId" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-rental" data-hideattribute="ProductPage.HideRentalBlock" id="product-rental">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="far fa-calendar-alt"></i>Rental</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row parent-setting" id="parentSetting1323870406">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="IsRental">Is rental</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if this is a rental product (price is set for some period). Please note that inventory management is not fully supported for rental products yet. It's recommended to set 'Manage inventory method' to 'Don't track inventory' now."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Is rental field is required." id="IsRental" name="IsRental" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="IsRental" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1323870406">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('IsRental', 'parentSetting1323870406', 'nestedSetting1323870406');
                                                $('#IsRental').click(toggle_IsRental);
                                                toggle_IsRental();
                                            });

                                            function toggle_IsRental() {
                                                if ($('#IsRental').is(':checked')) {
                                                    $('#nestedSetting1323870406').showElement();
                                                } else {
                                                    $('#nestedSetting1323870406').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RentalPriceLength">Rental period length</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Specify period length for rental product. Price is specified for this period."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0 " tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Rental period length field is required." id="RentalPriceLength" name="RentalPriceLength" value="0" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="RentalPriceLength" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RentalPricePeriodId">Rental period</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Specify period for rental product. Price is specified for this period."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Rental period field is required." id="RentalPricePeriodId" name="RentalPricePeriodId">
                                                    <option selected="selected" value="0">Days</option>
                                                    <option value="10">Weeks</option>
                                                    <option value="20">Months</option>
                                                    <option value="30">Years</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="RentalPricePeriodId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-recurring" data-hideattribute="ProductPage.HideRecurringBlock" id="product-recurring">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-redo-alt"></i>Recurring product</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row parent-setting" id="parentSetting1809694668">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="col-form-label" for="IsRecurring">Recurring product</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check if it is a recurring product. For any product, you can define a recurring cycle to enable the system to automatically create orders that repeat when a customer purchases such products."><i class="fas fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Recurring product field is required." id="IsRecurring" name="IsRecurring" type="checkbox" value="true">
                                            <span class="field-validation-valid" data-valmsg-for="IsRecurring" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="nested-setting d-none" id="nestedSetting1809694668">
                                        <script>
                                            $(document).ready(function() {
                                                initNestedSetting('IsRecurring', 'parentSetting1809694668', 'nestedSetting1809694668');
                                                $('#IsRecurring').click(toggle_IsRecurring);
                                                toggle_IsRecurring();
                                            });

                                            function toggle_IsRecurring() {
                                                if ($('#IsRecurring').is(':checked')) {
                                                    $('#nestedSetting1809694668').showElement();
                                                } else {
                                                    $('#nestedSetting1809694668').hideElement();
                                                }
                                            }
                                        </script>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RecurringCycleLength">Cycle length</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Specify the cycle length. It is a time period recurring order can be repeated."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0 " tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Cycle length field is required." id="RecurringCycleLength" name="RecurringCycleLength" value="0" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="RecurringCycleLength" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RecurringCyclePeriodId">Cycle period</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Specify the cycle period. It defines units time period can be measured in."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Cycle period field is required." id="RecurringCyclePeriodId" name="RecurringCyclePeriodId">
                                                    <option selected="selected" value="0">Days</option>
                                                    <option value="10">Weeks</option>
                                                    <option value="20">Months</option>
                                                    <option value="30">Years</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="RecurringCyclePeriodId" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="RecurringTotalCycles">Total cycles</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Total cycles are number of times customer will receive the recurring product."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <span class="k-widget k-numerictextbox" style=""><span class="k-numeric-wrap k-state-default"><input type="text" class="k-formatted-value k-input" title="0 " tabindex="0" role="spinbutton" aria-valuemin="-2147483648" aria-valuemax="2147483647" autocomplete="off" aria-valuenow="0" aria-disabled="false" style=""><input type="text" data-val="true" data-val-required="The Total cycles field is required." id="RecurringTotalCycles" name="RecurringTotalCycles" value="0" data-role="numerictextbox" role="spinbutton" style="display: none;" class="k-input" aria-valuemin="-2147483648" aria-valuemax="2147483647" aria-valuenow="0" aria-disabled="false"><span class="k-icon k-i-warning" style="display: none;"></span><span class="k-select"><span unselectable="on" class="k-link k-link-increase" aria-label="Increase value" title="Increase value"><span unselectable="on" class="k-icon k-i-arrow-60-up"></span></span><span unselectable="on" class="k-link k-link-decrease" aria-label="Decrease value" title="Decrease value"><span unselectable="on" class="k-icon k-i-arrow-60-down"></span></span></span></span></span>
                                                <span class="field-validation-valid" data-valmsg-for="RecurringTotalCycles" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-seo" data-hideattribute="ProductPage.HideSEOBlock" id="product-seo">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-search-plus"></i>SEO</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="cards-group">
                                        <div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="SeName">Search engine friendly page name</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Set a search engine friendly page name e.g. 'the-best-product' to make your page URL 'http://www.yourStore.com/the-best-product'. Leave empty to generate it automatically based on the name of the product."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-length="Max length of search name is 200 chars" data-val-length-max="200" data-val-length-min="0" id="SeName" name="SeName" type="text" value="build-your-own-computer">
                                                    <span class="field-validation-valid" data-valmsg-for="SeName" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="MetaTitle">Meta title</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Override the page title. The default is the name of the product."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-length="'Meta Title' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" id="MetaTitle" name="MetaTitle" type="text" value="">
                                                    <span class="field-validation-valid" data-valmsg-for="MetaTitle" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="MetaKeywords">Meta keywords</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Meta keywords to be added to product page header."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-length="'Meta Keywords' must be between 0 and 400 characters." data-val-length-max="400" data-val-length-min="0" id="MetaKeywords" name="MetaKeywords" type="text" value="">
                                                    <span class="field-validation-valid" data-valmsg-for="MetaKeywords" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="col-form-label" for="MetaDescription">Meta description</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Meta description to be added to product page header."><i class="fas fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="4" cols="20" data-val="true" data-val-length="'Meta Description' must be between 0 and 2147483647 characters." data-val-length-max="2147483647" data-val-length-min="0" id="MetaDescription" name="MetaDescription"></textarea>
                                                    <span class="field-validation-valid" data-valmsg-for="MetaDescription" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-related-products" data-hideattribute="ProductPage.HideRelatedProductsBlock" id="product-related-products">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-object-group"></i>Related products</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        The Related Products option provides the opportunity to advertise products that are not part of the selected category, to your visitors. These products are displayed on the product details pages.
                                    </p>
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <div id="relatedproducts-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="dataTables_scroll">
                                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 984px; padding-right: 0px;">
                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 984px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 258.672px;">Product</th>
                                                                                <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.844px;">Display order</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 149.812px;">View</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 199.719px;">Edit</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.9531px;">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="relatedproducts-grid" role="grid" aria-describedby="relatedproducts-grid_info" style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row" style="height: 0px;">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 258.672px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Product</div>
                                                                            </th>
                                                                            <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 149.844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Display order</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 149.812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 199.719px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Edit</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.9531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Delete</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-t-5">
                                                    <div class="col-lg-5 col-xs-12">
                                                        <div class="float-lg-left">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="relatedproducts-grid_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="relatedproducts-grid_previous"><a href="#" aria-controls="relatedproducts-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                    <li class="paginate_button page-item next disabled" id="relatedproducts-grid_next"><a href="#" aria-controls="relatedproducts-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="text-center">
                                                            <div class="dataTables_length" id="relatedproducts-grid_length"><label>Show <select name="relatedproducts-grid_length" aria-controls="relatedproducts-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                        <option value="7">7</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> items</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="float-lg-right text-center">
                                                            <div class="dataTables_info" id="relatedproducts-grid_info" role="status" aria-live="polite">No records</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-xs-12">
                                                        <div class="float-lg-right text-center data-tables-refresh">
                                                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="relatedproducts-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="relatedproducts-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="relatedproducts-grid_deleteConflict-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="relatedproducts-grid_deleteConflict-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="relatedproducts-grid_deleteConflict-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="relatedproducts-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#relatedproducts-grid_deleteConflict-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#relatedproducts-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#relatedproducts-grid_deleteConflict-action-alert")
                                                    });
                                                </script>
                                            </div>
                                            <div id="relatedproducts-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="relatedproducts-grid_deleteCommonFailed-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="relatedproducts-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="relatedproducts-grid_deleteCommonFailed-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="relatedproducts-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#relatedproducts-grid_deleteCommonFailed-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#relatedproducts-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#relatedproducts-grid_deleteCommonFailed-action-alert")
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" id="btnAddNewRelatedProduct" class="btn btn-primary" onclick="javascript:OpenWindow('/Admin/Product/RelatedProductAddPopup?productId=1&amp;btnId=btnRefreshRelatedProducts&amp;formId=product-form', 800, 800, true); return false;">
                                                Add new related product
                                            </button>
                                            <button type="submit" id="btnRefreshRelatedProducts" style="display: none"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-crosssells-products" data-hideattribute="ProductPage.HideCrossSellsProductsBlock" id="product-crosssells-products">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-random"></i>Cross-sells</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        The&nbsp;Cross-sell products&nbsp;option provides the opportunity to buy additional products that generally go with the selected product. They are displayed at the bottom of the checkout page.
                                    </p>
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <div id="crosssellproducts-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="dataTables_scroll">
                                                            <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 984px; padding-right: 0px;">
                                                                    <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 984px;">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 833.062px;">Product</th>
                                                                                <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.9375px;">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                                <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="crosssellproducts-grid" role="grid" aria-describedby="crosssellproducts-grid_info" style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row" style="height: 0px;">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 833.062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Product</div>
                                                                            </th>
                                                                            <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 99.9375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Delete</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                            <td valign="top" colspan="2" class="dataTables_empty">No data available in table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-t-5">
                                                    <div class="col-lg-5 col-xs-12">
                                                        <div class="float-lg-left">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="crosssellproducts-grid_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="crosssellproducts-grid_previous"><a href="#" aria-controls="crosssellproducts-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                                    <li class="paginate_button page-item next disabled" id="crosssellproducts-grid_next"><a href="#" aria-controls="crosssellproducts-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="text-center">
                                                            <div class="dataTables_length" id="crosssellproducts-grid_length"><label>Show <select name="crosssellproducts-grid_length" aria-controls="crosssellproducts-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                        <option value="7">7</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="50">50</option>
                                                                        <option value="100">100</option>
                                                                    </select> items</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xs-12">
                                                        <div class="float-lg-right text-center">
                                                            <div class="dataTables_info" id="crosssellproducts-grid_info" role="status" aria-live="polite">No records</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-xs-12">
                                                        <div class="float-lg-right text-center data-tables-refresh">
                                                            <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="crosssellproducts-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="crosssellproducts-grid_deleteConflict-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="crosssellproducts-grid_deleteConflict-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="crosssellproducts-grid_deleteConflict-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="crosssellproducts-grid_deleteConflict-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="crosssellproducts-grid_deleteConflict" style="display:none" data-toggle="modal" data-target="#crosssellproducts-grid_deleteConflict-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#crosssellproducts-grid_deleteConflict').attr("data-toggle", "modal").attr("data-target", "#crosssellproducts-grid_deleteConflict-action-alert")
                                                    });
                                                </script>
                                            </div>
                                            <div id="crosssellproducts-grid_deleteCommonFailed-action-alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="crosssellproducts-grid_deleteCommonFailed-action-alert-title">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="crosssellproducts-grid_deleteCommonFailed-action-alert-title">Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="additional-text" id="crosssellproducts-grid_deleteCommonFailed-info"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <span class="btn btn-primary float-right" data-dismiss="modal">Ok</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn btn-default" id="crosssellproducts-grid_deleteCommonFailed" style="display:none" data-toggle="modal" data-target="#crosssellproducts-grid_deleteCommonFailed-action-alert"></div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#crosssellproducts-grid_deleteCommonFailed').attr("data-toggle", "modal").attr("data-target", "#crosssellproducts-grid_deleteCommonFailed-action-alert")
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" id="btnAddNewCrossSellProduct" onclick="javascript:OpenWindow('/Admin/Product/CrossSellProductAddPopup?productId=1&amp;btnId=btnRefreshCrossSellProducts&amp;formId=product-form', 800, 800, true); return false;" class="btn btn-primary">
                                                Add new cross-sell product
                                            </button>
                                            <button type="submit" id="btnRefreshCrossSellProducts" style="display: none"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-purchased-with-orders" data-hideattribute="ProductPage.HidePurchasedWithOrdersBlock" id="product-purchased-with-orders">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-cart-arrow-down"></i>Purchased with orders</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Here you can see a list of orders in which this product was purchased.
                                    </p>
                                    <div id="purchased-with-orders-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="dataTables_scroll">
                                                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;">
                                                            <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.438px;">Order #</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.188px;">Email</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 86.8906px;">Order status</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.5px;">Payment status</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.4688px;">Shipping status</th>
                                                                        <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 166.672px;">Created on</th>
                                                                        <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 84.8438px;">View</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                        <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="purchased-with-orders-grid" role="grid" aria-describedby="purchased-with-orders-grid_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row" style="height: 0px;">
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order #</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 163.188px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Email</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 86.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Order status</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.5px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Payment status</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91.4688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Shipping status</div>
                                                                    </th>
                                                                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" style="width: 166.672px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Created on</div>
                                                                    </th>
                                                                    <th class="sorting_disabled button-column" rowspan="1" colspan="1" style="width: 84.8438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">View</div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin-t-5">
                                            <div class="col-lg-5 col-xs-12">
                                                <div class="float-lg-left">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="purchased-with-orders-grid_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="purchased-with-orders-grid_previous"><a href="#" aria-controls="purchased-with-orders-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                            <li class="paginate_button page-item next disabled" id="purchased-with-orders-grid_next"><a href="#" aria-controls="purchased-with-orders-grid" data-dt-idx="1" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="text-center">
                                                    <div class="dataTables_length" id="purchased-with-orders-grid_length"><label>Show <select name="purchased-with-orders-grid_length" aria-controls="purchased-with-orders-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                <option value="7">7</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> items</label></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="float-lg-right text-center">
                                                    <div class="dataTables_info" id="purchased-with-orders-grid_info" role="status" aria-live="polite">No records</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-xs-12">
                                                <div class="float-lg-right text-center data-tables-refresh">
                                                    <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="purchased-with-orders-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                        <nop-card>
                            <div class="card card-secondary card-outline advanced-setting" data-card-name="product-stock-quantity-history" data-hideattribute="ProductPage.HideStockQuantityHistoryBlock" id="product-stock-quantity-history">
                                <div class="card-header with-border clearfix">
                                    <div class="card-title"><i class="fas fa-history"></i>Stock quantity history</div>
                                    <div class="card-tools float-right"><button class="btn btn-tool" data-card-widget="collapse" type="button"><i class="fa toggle-icon fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Here you can see a history of the product stock quantity changes.
                                    </p>
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="col-form-label" for="StockQuantityHistorySearchModel_WarehouseId">Warehouse</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Search by a specific warehouse."><i class="fas fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" data-val="true" data-val-required="The Warehouse field is required." id="StockQuantityHistorySearchModel_WarehouseId" name="StockQuantityHistorySearchModel.WarehouseId">
                                                    <option selected="selected" value="0">All</option>
                                                    <option value="1">Warehouse 1 (New York)</option>
                                                    <option value="2">Warehouse 2 (Los Angeles)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="button" id="search-stock-quantity-history" class="btn btn-primary btn-search">
                                                    <i class="fas fa-search"></i>
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="stock-quantity-history-grid_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="dataTables_scroll">
                                                    <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                        <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1024px; padding-right: 0px;">
                                                            <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" role="grid" style="margin-left: 0px; width: 1024px;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.828px;">Warehouse</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 179.781px;">Attribute combination</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.828px;">Quantity adjustment</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.828px;">Stock quantity</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.9062px;">Message</th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169.828px;">Created On</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                        <table class="table table-bordered table-hover table-striped dataTable no-footer" width="100%" id="stock-quantity-history-grid" role="grid" aria-describedby="stock-quantity-history-grid_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row" style="height: 0px;">
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Warehouse</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 179.781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Attribute combination</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Quantity adjustment</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 129.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Stock quantity</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.9062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Message</div>
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169.828px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Created On</div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="odd">
                                                                    <td>None</td>
                                                                    <td></td>
                                                                    <td>+10000</td>
                                                                    <td>10000</td>
                                                                    <td>The stock quantity has been edited</td>
                                                                    <td>03/13/2017 6:20:06 AM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin-t-5">
                                            <div class="col-lg-5 col-xs-12">
                                                <div class="float-lg-left">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="stock-quantity-history-grid_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="stock-quantity-history-grid_previous"><a href="#" aria-controls="stock-quantity-history-grid" data-dt-idx="0" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-w"></i></a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="stock-quantity-history-grid" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item next disabled" id="stock-quantity-history-grid_next"><a href="#" aria-controls="stock-quantity-history-grid" data-dt-idx="2" tabindex="0" class="page-link"><i class="k-icon k-i-arrow-e"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="text-center">
                                                    <div class="dataTables_length" id="stock-quantity-history-grid_length"><label>Show <select name="stock-quantity-history-grid_length" aria-controls="stock-quantity-history-grid" class="custom-select custom-select-sm form-control form-control-sm">
                                                                <option value="7">7</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> items</label></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xs-12">
                                                <div class="float-lg-right text-center">
                                                    <div class="dataTables_info" id="stock-quantity-history-grid_info" role="status" aria-live="polite">1-1 of 1 items</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-xs-12">
                                                <div class="float-lg-right text-center data-tables-refresh">
                                                    <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary" tabindex="0" aria-controls="stock-quantity-history-grid" type="button"><span><i class="fas fa-sync-alt" style="padding-left: 5px"></i></span></button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nop-card>
                    </nop-cards>
                </div>
            </div>
        </section>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQUmkfcen2h6CwwBcTVtE6vyiGl3ARII6MQzsAOih4c36WrOhcNUQXLQDgg9XFfUQkniR9JW0RF6RKHV3wkS39L4iaCKD8dbbSNN8ychLGPEK-lwjaeOS0mw8LS68etic4"><input name="Published" type="hidden" value="false"><input name="ShowOnHomepage" type="hidden" value="false"><input name="VisibleIndividually" type="hidden" value="false"><input name="RequireOtherProducts" type="hidden" value="false"><input name="AutomaticallyAddRequiredProducts" type="hidden" value="false"><input name="AllowCustomerReviews" type="hidden" value="false"><input name="MarkAsNew" type="hidden" value="false"><input name="DisableBuyButton" type="hidden" value="false"><input name="DisableWishlistButton" type="hidden" value="false"><input name="AvailableForPreOrder" type="hidden" value="false"><input name="CallForPrice" type="hidden" value="false"><input name="CustomerEntersPrice" type="hidden" value="false"><input name="BasepriceEnabled" type="hidden" value="false"><input name="IsTaxExempt" type="hidden" value="false"><input name="IsTelecommunicationsOrBroadcastingOrElectronicServices" type="hidden" value="false"><input name="IsShipEnabled" type="hidden" value="false"><input name="IsFreeShipping" type="hidden" value="false"><input name="ShipSeparately" type="hidden" value="false"><input name="UseMultipleWarehouses" type="hidden" value="false"><input name="DisplayStockAvailability" type="hidden" value="false"><input name="DisplayStockQuantity" type="hidden" value="false"><input name="AllowBackInStockSubscriptions" type="hidden" value="false"><input name="AllowAddingOnlyExistingAttributeCombinations" type="hidden" value="false"><input name="NotReturnable" type="hidden" value="false"><input name="IsGiftCard" type="hidden" value="false"><input name="IsDownload" type="hidden" value="false"><input name="UnlimitedDownloads" type="hidden" value="false"><input name="HasUserAgreement" type="hidden" value="false"><input name="HasSampleDownload" type="hidden" value="false"><input name="IsRental" type="hidden" value="false"><input name="IsRecurring" type="hidden" value="false">
    </form>
    <div id="productmodel-Delete-delete-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productmodel-Delete-delete-confirmation-title">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="productmodel-Delete-delete-confirmation-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="/Admin/Product/Delete/1" method="post">
                    <div class="form-horizontal">
                        <div class="modal-body">
                            Are you sure you want to delete this item?
                        </div>
                        <div class="modal-footer">
                            <span class="btn btn-default" data-dismiss="modal">No, cancel</span>
                            <button type="submit" class="btn btn-danger float-right">
                                Delete
                            </button>
                        </div>
                    </div>
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQUmkfcen2h6CwwBcTVtE6vyiGl3ARII6MQzsAOih4c36WrOhcNUQXLQDgg9XFfUQkniR9JW0RF6RKHV3wkS39L4iaCKD8dbbSNN8ychLGPEK-lwjaeOS0mw8LS68etic4">
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#product-delete').attr("data-toggle", "modal").attr("data-target", "#productmodel-Delete-delete-confirmation")
            });
        </script>
    </div>
    <div id="productsettings-window" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productsettings-window-title">
        <div class="modal-dialog editor-settings-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="productsettings-window-title">
                        Settings
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/Admin/Product/SaveProductEditorSettings" novalidate="novalidate">
                        <input type="hidden" name="returnurl" value="/Admin/Product/Edit/1">
                        <div class="row">
                            <div class="col-md-12">
                                Check fields you want to see on the product details page in the "basic" mode.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cards-group">
                                    <div class="card card-default">
                                        <div class="card-header clearfix">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    Product info
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" class="select-all-fields">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Manufacturers">Manufacturers</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Manufacturers field is required." id="ProductEditorSettingsModel_Manufacturers" name="ProductEditorSettingsModel.Manufacturers" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Manufacturers" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Published">Published</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Published field is required." id="ProductEditorSettingsModel_Published" name="ProductEditorSettingsModel.Published" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Published" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductTags">Product tags</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Product tags field is required." id="ProductEditorSettingsModel_ProductTags" name="ProductEditorSettingsModel.ProductTags" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductTags" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_GTIN">GTIN (global trade item number)</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The GTIN (global trade item number) field is required." id="ProductEditorSettingsModel_GTIN" name="ProductEditorSettingsModel.GTIN" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.GTIN" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ManufacturerPartNumber">Manufacturer part number</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Manufacturer part number field is required." id="ProductEditorSettingsModel_ManufacturerPartNumber" name="ProductEditorSettingsModel.ManufacturerPartNumber" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ManufacturerPartNumber" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ShowOnHomepage">Show on home page</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Show on home page field is required." id="ProductEditorSettingsModel_ShowOnHomepage" name="ProductEditorSettingsModel.ShowOnHomepage" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ShowOnHomepage" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductType">Product type</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Product type field is required." id="ProductEditorSettingsModel_ProductType" name="ProductEditorSettingsModel.ProductType" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductType" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductTemplate">Product template</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Product template field is required." id="ProductEditorSettingsModel_ProductTemplate" name="ProductEditorSettingsModel.ProductTemplate" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductTemplate" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_VisibleIndividually">Visible individually</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Visible individually field is required." id="ProductEditorSettingsModel_VisibleIndividually" name="ProductEditorSettingsModel.VisibleIndividually" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.VisibleIndividually" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ACL">Customer roles</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Customer roles field is required." id="ProductEditorSettingsModel_ACL" name="ProductEditorSettingsModel.ACL" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ACL" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Stores">Stores</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Stores field is required." id="ProductEditorSettingsModel_Stores" name="ProductEditorSettingsModel.Stores" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Stores" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Vendor">Vendor</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Vendor field is required." id="ProductEditorSettingsModel_Vendor" name="ProductEditorSettingsModel.Vendor" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Vendor" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_RequireOtherProductsAddedToCart">Require other products</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Require other products field is required." id="ProductEditorSettingsModel_RequireOtherProductsAddedToCart" name="ProductEditorSettingsModel.RequireOtherProductsAddedToCart" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.RequireOtherProductsAddedToCart" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AllowCustomerReviews">Allow customer reviews</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Allow customer reviews field is required." id="ProductEditorSettingsModel_AllowCustomerReviews" name="ProductEditorSettingsModel.AllowCustomerReviews" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AllowCustomerReviews" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AvailableStartDate">Available start date</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Available start date field is required." id="ProductEditorSettingsModel_AvailableStartDate" name="ProductEditorSettingsModel.AvailableStartDate" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AvailableStartDate" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AvailableEndDate">Available end date</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Available end date field is required." id="ProductEditorSettingsModel_AvailableEndDate" name="ProductEditorSettingsModel.AvailableEndDate" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AvailableEndDate" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_MarkAsNew">Mark as new</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Mark as new field is required." id="ProductEditorSettingsModel_MarkAsNew" name="ProductEditorSettingsModel.MarkAsNew" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.MarkAsNew" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AdminComment">Admin comment</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Admin comment field is required." id="ProductEditorSettingsModel_AdminComment" name="ProductEditorSettingsModel.AdminComment" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AdminComment" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cards-group">
                                    <div class="card card-default">
                                        <div class="card-header clearfix">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    Prices
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" class="select-all-fields">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_OldPrice">Old price</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Old price field is required." id="ProductEditorSettingsModel_OldPrice" name="ProductEditorSettingsModel.OldPrice" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.OldPrice" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductCost">Product cost</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Product cost field is required." id="ProductEditorSettingsModel_ProductCost" name="ProductEditorSettingsModel.ProductCost" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductCost" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_DisableBuyButton">Disable buy button</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Disable buy button field is required." id="ProductEditorSettingsModel_DisableBuyButton" name="ProductEditorSettingsModel.DisableBuyButton" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.DisableBuyButton" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_DisableWishlistButton">Disable wishlist button</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Disable wishlist button field is required." id="ProductEditorSettingsModel_DisableWishlistButton" name="ProductEditorSettingsModel.DisableWishlistButton" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.DisableWishlistButton" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AvailableForPreOrder">Available for pre-order</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Available for pre-order field is required." id="ProductEditorSettingsModel_AvailableForPreOrder" name="ProductEditorSettingsModel.AvailableForPreOrder" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AvailableForPreOrder" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_CallForPrice">Call for price</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Call for price field is required." id="ProductEditorSettingsModel_CallForPrice" name="ProductEditorSettingsModel.CallForPrice" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.CallForPrice" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_CustomerEntersPrice">Customer enters price</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Customer enters price field is required." id="ProductEditorSettingsModel_CustomerEntersPrice" name="ProductEditorSettingsModel.CustomerEntersPrice" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.CustomerEntersPrice" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_PAngV">PAngV (base price) enabled</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The PAngV (base price) enabled field is required." id="ProductEditorSettingsModel_PAngV" name="ProductEditorSettingsModel.PAngV" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.PAngV" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Discounts">Discounts</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Discounts field is required." id="ProductEditorSettingsModel_Discounts" name="ProductEditorSettingsModel.Discounts" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Discounts" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_TelecommunicationsBroadcastingElectronicServices">Telecommunications, broadcasting and electronic services</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Telecommunications, broadcasting and electronic services field is required." id="ProductEditorSettingsModel_TelecommunicationsBroadcastingElectronicServices" name="ProductEditorSettingsModel.TelecommunicationsBroadcastingElectronicServices" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.TelecommunicationsBroadcastingElectronicServices" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_TierPrices">Tier prices</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Tier prices field is required." id="ProductEditorSettingsModel_TierPrices" name="ProductEditorSettingsModel.TierPrices" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.TierPrices" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header clearfix">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    Shipping
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" class="select-all-fields">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Weight">Weight</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Weight field is required." id="ProductEditorSettingsModel_Weight" name="ProductEditorSettingsModel.Weight" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Weight" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Dimensions">Dimensions</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Dimensions field is required." id="ProductEditorSettingsModel_Dimensions" name="ProductEditorSettingsModel.Dimensions" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Dimensions" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_FreeShipping">Free shipping</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Free shipping field is required." id="ProductEditorSettingsModel_FreeShipping" name="ProductEditorSettingsModel.FreeShipping" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.FreeShipping" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ShipSeparately">Ship separately</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Ship separately field is required." id="ProductEditorSettingsModel_ShipSeparately" name="ProductEditorSettingsModel.ShipSeparately" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ShipSeparately" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AdditionalShippingCharge">Additional shipping charge</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Additional shipping charge field is required." id="ProductEditorSettingsModel_AdditionalShippingCharge" name="ProductEditorSettingsModel.AdditionalShippingCharge" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AdditionalShippingCharge" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_DeliveryDate">Delivery date</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Delivery date field is required." id="ProductEditorSettingsModel_DeliveryDate" name="ProductEditorSettingsModel.DeliveryDate" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.DeliveryDate" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cards-group">
                                    <div class="card card-default">
                                        <div class="card-header clearfix">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    Inventory
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" class="select-all-fields">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductAvailabilityRange">Product availability range</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Product availability range field is required." id="ProductEditorSettingsModel_ProductAvailabilityRange" name="ProductEditorSettingsModel.ProductAvailabilityRange" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductAvailabilityRange" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Warehouse">Warehouses</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Warehouses field is required." id="ProductEditorSettingsModel_Warehouse" name="ProductEditorSettingsModel.Warehouse" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Warehouse" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_UseMultipleWarehouses">Multiple warehouses</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Multiple warehouses field is required." id="ProductEditorSettingsModel_UseMultipleWarehouses" name="ProductEditorSettingsModel.UseMultipleWarehouses" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.UseMultipleWarehouses" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_DisplayStockAvailability">Display availability</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Display availability field is required." id="ProductEditorSettingsModel_DisplayStockAvailability" name="ProductEditorSettingsModel.DisplayStockAvailability" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.DisplayStockAvailability" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_MinimumStockQuantity">Minimum stock qty</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Minimum stock qty field is required." id="ProductEditorSettingsModel_MinimumStockQuantity" name="ProductEditorSettingsModel.MinimumStockQuantity" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.MinimumStockQuantity" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_LowStockActivity">Low stock activity</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Low stock activity field is required." id="ProductEditorSettingsModel_LowStockActivity" name="ProductEditorSettingsModel.LowStockActivity" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.LowStockActivity" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_NotifyAdminForQuantityBelow">Notify for qty below</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Notify for qty below field is required." id="ProductEditorSettingsModel_NotifyAdminForQuantityBelow" name="ProductEditorSettingsModel.NotifyAdminForQuantityBelow" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.NotifyAdminForQuantityBelow" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Backorders">Backorders</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Backorders field is required." id="ProductEditorSettingsModel_Backorders" name="ProductEditorSettingsModel.Backorders" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Backorders" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AllowBackInStockSubscriptions">Allow back in stock subscriptions</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Allow back in stock subscriptions field is required." id="ProductEditorSettingsModel_AllowBackInStockSubscriptions" name="ProductEditorSettingsModel.AllowBackInStockSubscriptions" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AllowBackInStockSubscriptions" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_MinimumCartQuantity">Minimum cart qty</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Minimum cart qty field is required." id="ProductEditorSettingsModel_MinimumCartQuantity" name="ProductEditorSettingsModel.MinimumCartQuantity" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.MinimumCartQuantity" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_MaximumCartQuantity">Maximum cart qty</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Maximum cart qty field is required." id="ProductEditorSettingsModel_MaximumCartQuantity" name="ProductEditorSettingsModel.MaximumCartQuantity" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.MaximumCartQuantity" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AllowedQuantities">Allowed quantities</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Allowed quantities field is required." id="ProductEditorSettingsModel_AllowedQuantities" name="ProductEditorSettingsModel.AllowedQuantities" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AllowedQuantities" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_AllowAddingOnlyExistingAttributeCombinations">Allow only existing attribute combinations</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Allow only existing attribute combinations field is required." id="ProductEditorSettingsModel_AllowAddingOnlyExistingAttributeCombinations" name="ProductEditorSettingsModel.AllowAddingOnlyExistingAttributeCombinations" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.AllowAddingOnlyExistingAttributeCombinations" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_NotReturnable">Not returnable</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Not returnable field is required." id="ProductEditorSettingsModel_NotReturnable" name="ProductEditorSettingsModel.NotReturnable" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.NotReturnable" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header clearfix">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    Panels and product species
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" class="select-all-fields">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_ProductAttributes">Product attributes</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Product attributes field is required." id="ProductEditorSettingsModel_ProductAttributes" name="ProductEditorSettingsModel.ProductAttributes" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.ProductAttributes" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_SpecificationAttributes">Specification attributes</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Specification attributes field is required." id="ProductEditorSettingsModel_SpecificationAttributes" name="ProductEditorSettingsModel.SpecificationAttributes" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.SpecificationAttributes" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_IsGiftCard">Is gift card</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Is gift card field is required." id="ProductEditorSettingsModel_IsGiftCard" name="ProductEditorSettingsModel.IsGiftCard" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.IsGiftCard" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_DownloadableProduct">Downloadable product</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Downloadable product field is required." id="ProductEditorSettingsModel_DownloadableProduct" name="ProductEditorSettingsModel.DownloadableProduct" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.DownloadableProduct" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_IsRental">Is rental</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Is rental field is required." id="ProductEditorSettingsModel_IsRental" name="ProductEditorSettingsModel.IsRental" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.IsRental" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_RecurringProduct">Recurring product</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Recurring product field is required." id="ProductEditorSettingsModel_RecurringProduct" name="ProductEditorSettingsModel.RecurringProduct" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.RecurringProduct" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_Seo">SEO</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The SEO field is required." id="ProductEditorSettingsModel_Seo" name="ProductEditorSettingsModel.Seo" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.Seo" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_RelatedProducts">Related products</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Related products field is required." id="ProductEditorSettingsModel_RelatedProducts" name="ProductEditorSettingsModel.RelatedProducts" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.RelatedProducts" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_CrossSellsProducts">Cross-sells products</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Cross-sells products field is required." id="ProductEditorSettingsModel_CrossSellsProducts" name="ProductEditorSettingsModel.CrossSellsProducts" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.CrossSellsProducts" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_PurchasedWithOrders">Purchased with orders</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Purchased with orders field is required." id="ProductEditorSettingsModel_PurchasedWithOrders" name="ProductEditorSettingsModel.PurchasedWithOrders" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.PurchasedWithOrders" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-10">
                                                    <div class="label-wrapper"><label class="col-form-label" for="ProductEditorSettingsModel_StockQuantityHistory">Stock quantity history</label></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="check-box" data-val="true" data-val-required="The Stock quantity history field is required." id="ProductEditorSettingsModel_StockQuantityHistory" name="ProductEditorSettingsModel.StockQuantityHistory" type="checkbox" value="true">
                                                    <span class="field-validation-valid" data-valmsg-for="ProductEditorSettingsModel.StockQuantityHistory" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center margin-t-5">
                                <button type="submit" name="save-product-editor-settings" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQUmkfcen2h6CwwBcTVtE6vyiGl3ARII6MQzsAOih4c36WrOhcNUQXLQDgg9XFfUQkniR9JW0RF6RKHV3wkS39L4iaCKD8dbbSNN8ychLGPEK-lwjaeOS0mw8LS68etic4"><input name="ProductEditorSettingsModel.Manufacturers" type="hidden" value="false"><input name="ProductEditorSettingsModel.Published" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductTags" type="hidden" value="false"><input name="ProductEditorSettingsModel.GTIN" type="hidden" value="false"><input name="ProductEditorSettingsModel.ManufacturerPartNumber" type="hidden" value="false"><input name="ProductEditorSettingsModel.ShowOnHomepage" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductType" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductTemplate" type="hidden" value="false"><input name="ProductEditorSettingsModel.VisibleIndividually" type="hidden" value="false"><input name="ProductEditorSettingsModel.ACL" type="hidden" value="false"><input name="ProductEditorSettingsModel.Stores" type="hidden" value="false"><input name="ProductEditorSettingsModel.Vendor" type="hidden" value="false"><input name="ProductEditorSettingsModel.RequireOtherProductsAddedToCart" type="hidden" value="false"><input name="ProductEditorSettingsModel.AllowCustomerReviews" type="hidden" value="false"><input name="ProductEditorSettingsModel.AvailableStartDate" type="hidden" value="false"><input name="ProductEditorSettingsModel.AvailableEndDate" type="hidden" value="false"><input name="ProductEditorSettingsModel.MarkAsNew" type="hidden" value="false"><input name="ProductEditorSettingsModel.AdminComment" type="hidden" value="false"><input name="ProductEditorSettingsModel.OldPrice" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductCost" type="hidden" value="false"><input name="ProductEditorSettingsModel.DisableBuyButton" type="hidden" value="false"><input name="ProductEditorSettingsModel.DisableWishlistButton" type="hidden" value="false"><input name="ProductEditorSettingsModel.AvailableForPreOrder" type="hidden" value="false"><input name="ProductEditorSettingsModel.CallForPrice" type="hidden" value="false"><input name="ProductEditorSettingsModel.CustomerEntersPrice" type="hidden" value="false"><input name="ProductEditorSettingsModel.PAngV" type="hidden" value="false"><input name="ProductEditorSettingsModel.Discounts" type="hidden" value="false"><input name="ProductEditorSettingsModel.TelecommunicationsBroadcastingElectronicServices" type="hidden" value="false"><input name="ProductEditorSettingsModel.TierPrices" type="hidden" value="false"><input name="ProductEditorSettingsModel.Weight" type="hidden" value="false"><input name="ProductEditorSettingsModel.Dimensions" type="hidden" value="false"><input name="ProductEditorSettingsModel.FreeShipping" type="hidden" value="false"><input name="ProductEditorSettingsModel.ShipSeparately" type="hidden" value="false"><input name="ProductEditorSettingsModel.AdditionalShippingCharge" type="hidden" value="false"><input name="ProductEditorSettingsModel.DeliveryDate" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductAvailabilityRange" type="hidden" value="false"><input name="ProductEditorSettingsModel.Warehouse" type="hidden" value="false"><input name="ProductEditorSettingsModel.UseMultipleWarehouses" type="hidden" value="false"><input name="ProductEditorSettingsModel.DisplayStockAvailability" type="hidden" value="false"><input name="ProductEditorSettingsModel.MinimumStockQuantity" type="hidden" value="false"><input name="ProductEditorSettingsModel.LowStockActivity" type="hidden" value="false"><input name="ProductEditorSettingsModel.NotifyAdminForQuantityBelow" type="hidden" value="false"><input name="ProductEditorSettingsModel.Backorders" type="hidden" value="false"><input name="ProductEditorSettingsModel.AllowBackInStockSubscriptions" type="hidden" value="false"><input name="ProductEditorSettingsModel.MinimumCartQuantity" type="hidden" value="false"><input name="ProductEditorSettingsModel.MaximumCartQuantity" type="hidden" value="false"><input name="ProductEditorSettingsModel.AllowedQuantities" type="hidden" value="false"><input name="ProductEditorSettingsModel.AllowAddingOnlyExistingAttributeCombinations" type="hidden" value="false"><input name="ProductEditorSettingsModel.NotReturnable" type="hidden" value="false"><input name="ProductEditorSettingsModel.ProductAttributes" type="hidden" value="false"><input name="ProductEditorSettingsModel.SpecificationAttributes" type="hidden" value="false"><input name="ProductEditorSettingsModel.IsGiftCard" type="hidden" value="false"><input name="ProductEditorSettingsModel.DownloadableProduct" type="hidden" value="false"><input name="ProductEditorSettingsModel.IsRental" type="hidden" value="false"><input name="ProductEditorSettingsModel.RecurringProduct" type="hidden" value="false"><input name="ProductEditorSettingsModel.Seo" type="hidden" value="false"><input name="ProductEditorSettingsModel.RelatedProducts" type="hidden" value="false"><input name="ProductEditorSettingsModel.CrossSellsProducts" type="hidden" value="false"><input name="ProductEditorSettingsModel.PurchasedWithOrders" type="hidden" value="false"><input name="ProductEditorSettingsModel.StockQuantityHistory" type="hidden" value="false">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="copyproduct-window" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="copyproduct-window-title">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="copyproduct-window-title">Copy product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" action="/Admin/Product/CopyProduct" novalidate="novalidate">
                    <div class="form-horizontal">
                        <div class="modal-body">
                            <input type="hidden" data-val="true" data-val-required="The Id field is required." id="CopyProductModel_Id" name="CopyProductModel.Id" value="1">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="col-form-label" for="CopyProductModel_Name">New product name</label>
                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="The name of the new product."><i class="fas fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control text-box single-line" id="CopyProductModel_Name" name="CopyProductModel.Name" type="text" value="Build your own computer - copy">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="col-form-label" for="CopyProductModel_Published">Published</label>
                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to mark a product as published."><i class="fas fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Published field is required." id="CopyProductModel_Published" name="CopyProductModel.Published" type="checkbox" value="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="col-form-label" for="CopyProductModel_CopyImages">Copy images</label>
                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="Check to copy the images."><i class="fas fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input checked="checked" class="check-box" data-val="true" data-val-required="The Copy images field is required." id="CopyProductModel_CopyImages" name="CopyProductModel.CopyImages" type="checkbox" value="true">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Copy product
                            </button>
                        </div>
                    </div>
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K5ZJ_fvx_lHg-2EHjkH9lQUmkfcen2h6CwwBcTVtE6vyiGl3ARII6MQzsAOih4c36WrOhcNUQXLQDgg9XFfUQkniR9JW0RF6RKHV3wkS39L4iaCKD8dbbSNN8ychLGPEK-lwjaeOS0mw8LS68etic4"><input name="CopyProductModel.Published" type="hidden" value="false"><input name="CopyProductModel.CopyImages" type="hidden" value="false">
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "./app/views/layouts/footer.php"; ?>