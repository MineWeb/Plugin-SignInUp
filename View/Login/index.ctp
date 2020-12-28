<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <div id="login-before-two-factor-auth" class="thumbnail text-center" style="padding:15px">
                <form method="POST" data-ajax="true"
                      action="<?= $this->Html->url(array('plugin' => false, 'admin' => false, 'controller' => 'User', 'action' => 'ajax_login')) ?>"
                      data-callback-function="afterLogin">
                    <input type="hidden" name="data[_Token][key]" value="<?= $csrfToken ?>"/>
                    <h1 style="margin-bottom:30px"><?= $Lang->get('USER__LOGIN') ?></h1>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input class="form-control" name="pseudo"
                                   placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>" type="text" autofocus/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input class="form-control" name="password"
                                   placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>" type="password" autofocus/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input type="checkbox" name="remember_me">
                            <?= $Lang->get('USER__REMEMBER_ME') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="<?= $Lang->get('USER__LOGIN') ?>"/>
                    </div>
                </form>
            </div>
            <div id="login-two-factor-auth" class="thumbnail text-center" style="padding:15px;display:none;">
                <h1 style="margin-bottom:30px"><?= $Lang->get('USER__LOGIN_CODE_PLACEHOLDER') ?></h1>
                <form method="POST" data-ajax="true"
                      action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'Authentification', 'action' => 'validLogin')) ?>"
                      data-redirect-url="?">
                    <div class="form-group">
                        <input type="checkbox" style="display: none;" name="remember_me">
                        <input type="text" class="form-control" name="code"
                               placeholder="<?= $Lang->get('USER__LOGIN_CODE') ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="<?= $Lang->get('USER__LOGIN') ?>"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function afterLogin(req, res) {
        if (res['two-factor-auth'] === undefined)
            return window.location = '?t_' + Date.now()
        $('#login-two-factor-auth input[name="remember_me"]').attr('checked', $('#login-before-two-factor-auth input[name="remember_me"]').is(':checked'))
        $('#login-before-two-factor-auth').slideUp(150)
        $('#login-two-factor-auth').slideDown(150)
    }
</script>
