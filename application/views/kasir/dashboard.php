<div class="blog-section">
    <div class="container">
        <h2 class="mb-2 pb-2">Kasir</h2>
        <button type="button" class="btn submit-btn mt-1 mb-1" id="add_barcode"><i class="icofont-plus "></i> Barcode Baru</button>
        <br>
        <div class="table-responsive">
            <table id="FDataTable" class="table table-bordered table-hover" style="padding:0px">
                <thead>
                    <tr>
                        <th style="width: 24%; text-align:center!important">Waktu</th>
                        <th style="width: 16%; text-align:center!important">Token</th>
                        <th style="width: 16%; text-align:center!important">Status</th>
                        <th style="width: 16%; text-align:center!important">Meja</th>
                        <th style="width: 16%; text-align:center!important">Nama Pemesan</th>
                        <th style="width: 16%; text-align:center!important">QYT</th>
                        <th style="width: 16%; text-align:center!important">Total</th>
                        <th style="width: 16%; text-align:center!important">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <thead>
                    <tr>
                        <th colspan="4">Total</th>
                        <th colspan="1" id="total_harga"></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var total_harga = $('#total_harga');
        var add_barcode = $('#add_barcode');
        var dataPesanan = [];
        var FDataTable = $('#FDataTable').DataTable({
            //    '': [],
            deferRender: true,
            // 'order': false,
            //    'order': false,
            autoFill: true,
            columnDefs: [{
                targets: [3, 4],
                className: 'dt-body-right'
            }],
        });
        getListPesanan()

        function getListPesanan() {
            return $.ajax({
                url: `<?php echo site_url('Kasir/getListPesanan/') ?>`,
                'type': 'POST',
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataPesanan = json['data'];
                    renderPesanan(dataPesanan);
                },
                error: function(e) {}
            });
        }
        var swalSaveConfigure = {
            title: "Buat Barcode ",
            text: "Yakin akan membuat barcode?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#18a689",
            confirmButtonText: "Ya!",
        };

        add_barcode.on('click', function() {
            Swal.fire(swalSaveConfigure).then((result) => {
                if (!result.value) {
                    console.log('cancel')
                    return;
                }
                console.log('go')
                return $.ajax({
                    url: `<?php echo base_url('Kasir/add_barcode/') ?>`,
                    'type': 'get',
                    success: function(data) {
                        var json = JSON.parse(data);
                        if (json['error']) {
                            return;
                        }
                        curData = json['data'];
                        dataPesanan[curData['id_ses']] = curData;
                        renderPesanan(dataPesanan);
                        var anchor = document.createElement('a');
                        anchor.href = '<?= base_url('kasir/qrcode/') ?>' + curData['id_ses'];
                        anchor.target = "_blank";
                        anchor.click();
                    },
                    error: function(e) {}
                });
            })
        })

        function renderPesanan(data) {
            if (data == null || typeof data != "object") {
                console.log("User::UNKNOWN DATA");
                return;
            }
            var i = 0;

            var renderData = [];
            total = 0;
            Object.values(data).forEach((user) => {
                var konfirmasiPembayaran = `
                                <a class="konfirmasi-bayar dropdown-item" data-id='${user['id_ses']}'><i class='fa fa-pencil'></i>Konfirmasi Bayar</a>
                            `;
                var openDetail = `
                                <a class="btn btn-success" href='<?= base_url('kasir/cart/') ?>${user['id_ses']}'><i class='fa fa-trash'></i>Open</a>
                            `;
                var button = `
                                <div class="btn-group" opd="group">
                                <button id="action" type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-bars'></i></button>
                                <div class="dropdown-menu" aria-labelledby="action">
                                    ${konfirmasiPembayaran}
                                    ${openDetail}
                                </div>
                                </div>
                            `;
                test = `
                <a href='<?= base_url('order/') ?>` + user['token'] + `' > test btn</a>
                <a href='<?= base_url('kasir/qrcode/') ?>` + user['id_ses'] + `' > cetak qr</a>
                `;
                renderData.push([user['waktu'], user['token'] + test, statusPembayaran(user['ses_status']), user['nama_meja'], user['nama_pemesan'], user['total_qyt'], convertToRupiah(user['total_harga']), openDetail]);
            });
            FDataTable.clear().rows.add(renderData).draw('full-hold');
            total_harga.html(convertToRupiah(total));

        }
    })
</script>