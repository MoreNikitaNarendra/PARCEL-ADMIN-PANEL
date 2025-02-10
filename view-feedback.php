<?php require_once __DIR__ . "/header.php"; ?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('all_feedbacks') ?></h1>
            </div>
        </div>
    </div>
    <div class="billing-table-filters">
        <div class="row g-3">
            <div class="col-12 col-md-3">
                <div class="input-group input-group-sm">
                    <div class="input-group-text">
                        <i class="bi-search"></i>
                    </div>
                    <input type="search" class="form-control billing-table-search" placeholder="Search here">
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="data-table" class="table table-bordered table-nowrap table-align-middle">
            <thead class="thead-light" align="left">
                <tr>
                    <th><?= translate('sr_no') ?></th>
                    <th><?= translate('name') ?></th>
                    <th><?= translate('email') ?></th>
                    <th><?= translate('mobile_no') ?></th>
                    <th><?= translate('feedback') ?></th>
                    <th><?= translate('rating') ?></th>
                    <th><?= translate('action') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>john@gmail.com</td>
                    <td>124567890</td>
                    <td>Good Service</td>
                    <td>5</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?= translate('action') ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><?= translate('view') ?></a></li>
                                <li><a class="dropdown-item" href="#"><?= translate('delete') ?></a></li>
                            </ul>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alex</td>
                    <td>alex@gmail.com</td>
                    <td>124567891</td>
                    <td>Nice on time delivery</td>
                    <td>4</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?= translate('action') ?>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><?= translate('view') ?></a></li>
                            <li><a class="dropdown-item" href="#"><?= translate('delete') ?></a></li>
                            </ul>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="data-table-footer"></div>
</div>
<?php require_once __DIR__ . '/footer.php'; ?>

<script>
    let sowingListTable = false;
    sowingListTable = $('#data-table').DataTable({
        lengthChange: true,
        columnDefs: [{
            // targets: [0,],
            // orderable: false,
        }],
        order: [
            [1, 'desc'],
            [0, 'desc']
        ],
        initComplete: function (settings, json) {
            $('.dataTables_filter').hide();
            $('.data-table-footer').append($('#data-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.data-table-search').on('input', function () {
                sowingListTable.search(this.value).draw();
            });
            sowingListTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
            sowingListTable.buttons().container().appendTo($('.export-buttons'));
        },
        buttons: [{
            extend: 'collection',
            text: '<i class="bi bi-cloud-download-fill"></i>',
            className: 'btn-sm btn-outline-primary',
            buttons: [{
                extend: 'copy',
                text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> Copy'
            },
            {
                extend: 'excel',
                text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> Excel'
            },
            {
                extend: 'csv',
                text: '<i class="bi-filetype-csv dropdown-item-icon"></i> CSV'
            },
            {
                extend: 'pdf',
                text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> PDF'
            },
            {
                extend: 'print',
                text: '<i class="bi-printer dropdown-item-icon"></i> Print'
            }
            ]
        }],
    });
</script>