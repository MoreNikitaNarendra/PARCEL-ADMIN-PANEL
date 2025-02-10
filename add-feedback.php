<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_feed') ?></h1>
            </div>

            <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="view-feedback.php">
					<i class="bi-card-list me-1"></i>
					<?= translate('view_feedbacks') ?></a>
			</div>
        </div>
    </div>

    <form action="" class="row g-3" id="feedback-form">
        <!-- Name, Email, Phone in a single row -->
        <div class="col-12 col-md-4">
            <label for="name" class="form-label"><?= translate('name') ?></label>
            <input type="text" class="form-control form-control-sm" id="name" placeholder="<?= translate('enter_name') ?>">
        </div>
        <div class="col-12 col-md-4">
            <label for="email" class="form-label"><?= translate('email_id') ?></label>
            <input type="email" class="form-control form-control-sm" id="email" placeholder="<?= translate('enter_email') ?>">
        </div>
        <div class="col-12 col-md-4">
            <label for="phone" class="form-label"><?= translate('mobile_no') ?></label>
            <input type="text" class="form-control form-control-sm" id="phone" placeholder="<?= translate('enter_mobile') ?>">
        </div>

        <!-- Feedback textarea in its own row -->
        <div class="col-12">
            <label for="feedback" class="form-label"><?= translate('feedback') ?></label>
            <textarea class="form-control form-control-sm" id="feedback" rows="3" placeholder="<?= translate('enter_feedback_here') ?>"></textarea>
        </div>

        <!-- Rating in its own row -->
        <div class="col-12 col-md-6">
            <label for="rating" class="form-label"><?= translate('rating') ?></label>
            <select class="form-control form-control-sm" id="rating">
                <option value="" disabled selected><?= translate('select_rating') ?></option>
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
            </select>
        </div>

        <!-- Action buttons with spacing -->
        <div class="col-12 d-flex justify-content-end mt-3">
            <button type="submit" form="feedback-form" class="btn btn-sm btn-primary "><?= translate('submit') ?></button>
            <button type="reset" form="feedback-form" class="btn btn-sm btn-secondary ms-2  " data-bs-dismiss="modal"><?= translate('reset') ?></button>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/footer.php' ?>
