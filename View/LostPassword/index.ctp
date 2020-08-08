<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <div class="thumbnail text-center" style="padding:15px">
                <form method="post" data-redirect-url="?" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_lostpasswd')) ?>">
                    <input type="hidden" name="data[_Token][key]" value="<?= $csrfToken ?>" />
                    <div class="form-group">
                        <h5><?= $Lang->get('USER__EMAIL') ?> </h5>
                        <input type="text" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?= $Lang->get('USER__PASSWORD_FORGOT_SEND_MAIL') ?></button>
                </form>
            </div>
        </div>
    </div>
</div>