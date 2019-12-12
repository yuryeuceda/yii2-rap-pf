<body class="login-page">


    <div class="login-box">
        <div class="login-logo">
            <b>Administración </b>RAP Pensiones </div>
        <div class="login-logo">
            <img src="/img/general/logo.png" alt="RAP">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingrese para iniciar su sesión</p>
            <form id="w0" action="/site/login" method="post">
                <input type="hidden" name="_csrf-backend" value="GOf4tn_7INJuyTPzdh3VPse8RgiT_FaWyXt63UPaGM7iLJNsZBq1qpRUZ-tnrO99UzYoTH8h9ep30MgQ6vbkWw==">
                <div class="form-group has-feedback field-loginform-username required">

                    <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" placeholder="Usuario" autocomplete="off" aria-required="true"><span class='glyphicon glyphicon-envelope form-control-feedback'></span>

                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group has-feedback field-loginform-password required">

                    <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="Contraseña" aria-required="true"><span class='glyphicon glyphicon-lock form-control-feedback'></span>

                    <p class="help-block help-block-error"></p>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="form-group field-loginform-rememberme">
                            <div class="checkbox">
                                <label for="loginform-rememberme">
                                    <input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked>
                                    Recuerdame
                                </label>
                                <p class="help-block help-block-error"></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login-button">Ingresar</button> </div>
                </div>


            </form> <a href="#">
                Olvidé mi contraseña </a>
            <br>
        </div>
    </div>