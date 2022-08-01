<!doctype html>
<html lang="en">


<head>
    <title>Datepicker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
    <section class="container">
        <h3 class="pt-4 pb-2">Bootstrap Datepicker</h3>
        <form>
            <div class="row form-group">
                <label for="date" class="col-sm-1 col-form-label">Bắt đầu:</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" placeholder="Chọn ngày bắt đầu" class="form-control">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>

                    <label for="date" class="col-sm-1 col-form-label">Kết thúc:</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" placeholder="Chọn ngày kết thúc" class="form-control">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>

            </div>
        </form>
    </section>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                clearBtn: true,
                format: "dd-mm-yyyy"
            });
        });
    </script>


</body>

</html>