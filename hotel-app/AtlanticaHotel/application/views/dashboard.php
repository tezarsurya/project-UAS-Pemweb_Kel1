<style>
    .card-header {
        background-color: #273c75;
    }

    .card-header h5 {
        color: #fff;
    }

    .card-body {
        background-color: #dcdde1;
    }
</style>
<div class="row d-flex justify-content-start border-bottom">
    <h2>Dashboard</h2>
</div>
<div class="row justify-content-center pt-3">
    <div class="card mx-2 my-2">
        <div class="card-header">
            <h5>Jumlah Reservasi</h5>
        </div>
        <div class="card-body">
            <strong>
                <h5>
                    <?php
                    echo $reservasi;
                    ?>
                </h5>
            </strong>
        </div>
    </div>
    <div class="card mx-2 my-2">
        <div class="card-header">
            <h5>Jumlah Pengunjung</h5>
        </div>
        <div class="card-body">
            <strong>
                <h5>
                    <?php
                    echo $customer;
                    ?>
                </h5>
            </strong>
        </div>
    </div>
    <div class="card mx-2 my-2">
        <div class="card-header">
            <h5>Jumlah Kamar</h5>
        </div>
        <div class="card-body">
            <strong>
                <h5>
                    <?php
                    echo $kamar;
                    ?>
                </h5>
            </strong>
        </div>
    </div>
    <div class="card mx-2 my-2">
        <div class="card-header">
            <h5>Jumlah Resepsionis</h5>
        </div>
        <div class="card-body">
            <strong>
                <h5>
                    <?php
                    echo $receptionist;
                    ?>
                </h5>
            </strong>
        </div>
    </div>
</div>