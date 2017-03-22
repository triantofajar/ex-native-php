<li class="dropdown divider-vertical">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Login <span class="caret"></span>
                </a>
                <div class="dropdown-menu" style="padding:10px;min-width:250px;">
                    <div style="margin:17px">
                    <form action="proseslogin.php" method="POST" role="form" class="form-horizontal">
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="label-name"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" name="username" class="form-control" aria-describedby="label-name" placeholder="Username">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="label-pass"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password" class="form-control" aria-describedby="label-pass" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" role="button" name="login" class="form-control btn btn-primary" value="Login">
                        </div>
						 <div class="form-group">
                            <a href="?pg=signup" class="form-control btn btn-primary">Sign Up</a>
                        </div>
                    </form>
                    </div>
                </div>
            </li>