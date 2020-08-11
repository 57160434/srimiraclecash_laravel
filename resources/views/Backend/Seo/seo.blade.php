@extends('layouts.admindefault')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="title">SEO</h1>
        </div>
    </div>
    <div class="dropdown-divider "></div>
    <div class="col-12 col-md-12" style="background-color: #e8e8e8;">
        <div class="row">
        <div class="col-12">
            <span class="float-right">
                <a href="#" type="button" class="btn btn-success text-light">Save</a>
                <a href="{{url('admin/seo')}}" type="button" class="btn btn-danger text-light">Cancel</a>
            </span>
        </div>
            <div class="col-12">
                <form class="item form-group form-horizontal">
                    <ul class="nav nav-tabs mb-1">
                        <li class="active"><a data-toggle="tab" href="#index">Index</a></li>
                        <li><a data-toggle="tab" href="#customer">Customer</a></li>
                        <li><a data-toggle="tab" href="#service">Service</a></li>
                        <li><a data-toggle="tab" href="#article">Article</a></li>
                        <li><a data-toggle="tab" href="#document">Document</a></li>
                        <li><a data-toggle="tab" href="#contact">Contact</a></li>
                    </ul>
                    <div style="padding:10px"></div>
                    <div class="tab-content">
                        <div id="index" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label " for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="customer" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="service" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="article" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="document" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
                                </div>
                            </div>
                        </div>
                        <div id="contact" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaTitle">Meta Title</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaTitle" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaDescription">Meta Description</label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaDescription" type="text">
                                </div>
                                <div class="col-md-2 col-sm-12 mb-1">
                                    <label class="control-label "for="knowledgeMetaKeyword">Meta Keyword </label>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <input class="form-control input-lg" id="knowledgeMetaKeyword" type="text">
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