<div class="modal-content">
    <section class="unpad ">
        <div class="container">
            <div class="row">
                <div class="col-sm-push-1 col-md-10 col-sm-10 col-xs-12">
                    <div class="feature feature-1">
                        <div class="feature__body boxed boxed--lg boxed--border text-left">
                            <form>
                                <div class="modal-close modal-close-cross"></div>
                                <h3>Add page</h3>
                                <p>You will add a new page on the website. To display it on the main navigation you should go to edit navigation settings.</p>
                                <hr class="short">
                                <div class="col-sm-4 col-md-4 col-xs-12 setting-col clear-left">
                                    <div class="row form-group">
                                        <h4>Name</h4>
                                        <div class="form-group">
                                            {!! Form::text('page_name', '', ['class' => 'form-control', 'placeholder' => 'Page name']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 setting-col">
                                    <div class="row form-group">
                                        <h4>URL</h4>
                                        {!! Form::text('page_url', 'page-name', ['class' => 'form-control', 'placeholder' => 'page-name', 'readonly' => 'readonly']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 setting-col">
                                    <div class="row form-group">
                                        <h4>Type</h4>
                                        <div class="form-group">
                                            <div class="input-select">
                                                <select name="page_type" class="form-control">
                                                    <option value="0" selected="selected">Custom</option>
                                                    <option value="1">About</option>
                                                    <option value="2">Contact</option>
                                                    <option value="3">Blog</option>
                                                    <option value="4">Listings</option>
                                                    <option value="5">Team</option>
                                                    <option value="6">Careers</option>
                                                    <option value="7">Events</option>
                                                    <option value="8">Clients</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h4 class="clear-left">Layout</h4>
                                <div class="slider variants col-sm-12" data-arrows="false" data-paging="true">
                                    <ul class="slides">
                                        <li class="header-type slide--high col-sm-4 col-md-3 col-xs-12">
                                            <div class="row hover-shadow">
                                                blog
                                            </div>
                                        </li>
                                        <li class="header-type slide--high col-sm-4 col-md-3 col-xs-12">
                                            <div class="row hover-shadow">
                                                contact
                                            </div>
                                        </li>
                                        <li class="header-type slide--high col-sm-4 col-md-3 col-xs-12">
                                            <div class="row hover-shadow">
                                                about
                                            </div>
                                        </li>
                                        <li class="header-type slide--high col-sm-4 col-md-3 col-xs-12">
                                            <div class="row hover-shadow">
                                                listings
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                                <br>
                                <div class="col-xs-12">
                                    <a class="btn btn--sm btn--primary type--uppercase pull-right modal-close">
                                        <span class="btn__text">
                                            Done
                                        </span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>