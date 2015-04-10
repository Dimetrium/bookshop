<div class="container">
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">SignIn/SignUp</h4>
                </div>

                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                            <li><a href="#create" data-toggle="tab">Create Account</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form id="loginForm" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Username</label>

                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="username"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Password</label>

                                        <div class="col-xs-5">
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-5 col-xs-offset-3">
                                            <button type="submit" class="btn btn-primary" formaction="login">Login
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="create">
                                <form id="tab" method="post" class="form-horizontal">

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Name</label>

                                        <div class="col-xs-5">
                                            <input type="text" value="" name="name" class="input-xlarge">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Password</label>

                                        <div class="col-xs-5">
                                            <input type="text" value="" name="password" class="input-xlarge">
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary" formaction="user/new">Create Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
