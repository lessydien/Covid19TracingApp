<body class="bg-gradient-primary">

<div class="container">

<!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-10 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                    <!--div class="row"-->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                </div>
                                <form class="user" id="formlogin" role="form"  name="formlogin" method="POST" enctype="multipart/form-data" autocomplete="on" >
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="user" id="user" aria-describedby="usernameHelp" placeholder="Username" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="pass" id="pass" placeholder="Password" required>
                                    </div>
                                    <button type="submit" id="tombollogin" class="btn btn-primary btn-user btn-block">
                                        <span id="loader" role="status" aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>LOGIN
                                    </button>
                                    <hr>
                                    <input type="hidden" id="myhide" name="<?php echo csrf_token(); ?>" value="<?php echo  csrf_hash(); ?>">
                                </form>
                            </div>
                        </div>
                    <!--/div-->
                </div>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
var SITE_URL = '<?php echo base_url(); ?>';
$(document).ready(function(){
    
    
    // $('#loader').removeClass('spinner-border spinner-border-sm');
    
    /*Swal.fire(
        'Location',
        'Pastikan GPS Aktif',
        'warning'
    )*/
    
    
    $('#formlogin').submit(function(e){
        e.preventDefault();
        var form_data= new FormData(this);
        $('#loader').addClass('spinner-border spinner-border-sm');
        var url_form = SITE_URL+"auth/login";
        window.location = SITE_URL+'/dashboard';
    //	console.log(form_data);
        // for (var value of form_data.values()) {
        //     console.log(value); 
        // }

        // for (var key of form_data.keys()) {
        //     console.log(key); 
        // }
/*
        $.ajax({
            type: "POST",
            url: url_form,
            dataType: "json",
            data: form_data,
            processData: false,
            contentType: false,
            success: function(data){
                $('#loader').removeClass('spinner-border spinner-border-sm');
                // alert(data);
                if(data.resp){
                    alert("Berhasil Login");
                    window.location = SITE_URL+'admin';
                }else{
                    alert("Username atau Password Salah.\n\r"+data.msg);
                }
                $('#myhide').val(data.csrf);
            }

        });
        */
                    

    });
    
    
    function settombol(status){
        if(status){
            $('#tombolmasuk').html('<span id="loader" role="status aria-hidden="true"></span><span class="sr-only">Loading...</span>PULANG');
        }
        else{
            $('#tombolmasuk').html('<span id="loader"  role="status aria-hidden="true"></span><span class="sr-only">Loading...</span>MASUK');
        }
    }


    
});			

</script>

</body>
</html>