@extends('layouts.admindefault')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1 class="title">Article</h1>
        </div>
        <div class="col-6">
            <span class="float-right">
                <a href="#" type="button" class="btn btn-success text-light">Save</a>
            </span>
        </div>
    </div>
    <div class="dropdown-divider "></div>
    <div class="col-12 col-md-12" style="background-color: #e8e8e8;">
        <div class="row">
            <div class="col-12">
                <form class="item form-group form-horizontal">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a data-toggle="tab" href="#general">General</a></li>
                        <li><a data-toggle="tab" href="#seo">SEO</a></li>
                    </ul>
                    <div style="padding:10px"></div>
                    <div class="tab-content ">
                        <div id="general" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="image">Image Title <span
                                            class="required">*</span></label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename"
                                            disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear"
                                                style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                                    name="input-file-preview" /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="knowledgeTitle">Title</label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeTitle" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="knowledgeDescription">Description</label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeDescription" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="knowledgeDatail">Datail</label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeDatail" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label " for="image">Image Title <span
                                            class="required">*</span></label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename"
                                            disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear"
                                                style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                                    name="input-file-preview" /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                </div>
                            </div>
                        </div>
                        <div id="seo" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label" for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label "></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop