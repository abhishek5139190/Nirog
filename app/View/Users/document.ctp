

<section class="content">

    <div class="container">
        <div class="row">
            <?php echo $this->element('sidebar'); ?>
            <div class="main col-md-9 col-sm-8 col-xs-12">
                <h2>Edit Your Profile<span><a href="#">View Profile</a></span></h2>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">

                        <div class="panel panel-default">
                            <div class="panel-heading panel-height"><p class="text-primary editText">Hi! We are delighted to have you onboard and can't wait for you to get started with Nirog Street.
                                    <br>Simply upload your medical credential and get verified.</p>  </div>

                        </div>
                    </div>
                </div>
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->Form->create(false, ['id' => 'xxx', 'url' => '/users/document/' . $userDetails['User']['id']]); ?>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">

                        <label>Medical Registration No.</label>
                        <input type="text" value="<?php
                        if (!empty($userDetails['Professional']['medi_reg_no'])) {
                            echo $userDetails['Professional']['medi_reg_no'];
                        }
                        ?>" name="data[Professional][medi_reg_no]" placeholder="Registration Number" class="form-control" />

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label>Issuing Authority</label>
                        <input type="text" value="<?php
                        if (!empty($userDetails['Professional']['issuing_authority'])) {
                            echo $userDetails['Professional']['issuing_authority'];
                        }
                        ?>" name="data[Professional][issuing_authority]" placeholder="Name of the Issuing Authority" class="form-control" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="submit" value="Save Changes" name="submit" class="form-control btn-info" />
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>




                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">

                            <table class="table table-condensed">

                                <tbody>


                                    <tr>
                                        <td class="col-md-9"><label>Medical Registration Copy</lable></td>



                                <form action="<?php echo $this->Html->url('/', true) ?>users/proff" id="registerss" enctype="multipart/form-data" method="post" accept-charset="utf-8"> 
                                    <input id="uploads" name="data[User][rg_proff]" class="resrs" type="file"/>
                                    <td id="stage1"></td>
                                    <td><a href="" class="upload1" id="upload_reg">Upload</a></td>
                                </form>
                                </tr>
                                <style>
                                    #upload_reg{
                                        text-decoration:none;
                                    }
                                    #uploads{
                                        display:none
                                    }

                                </style>
                                <script type="text/javascript">
                                    $("#upload_reg").on('click', function (e) {
                                        e.preventDefault();
                                        $("#uploads:hidden").trigger('click');
                                    });
                                    $('.resrs').on("change", function () {
                                        $('#registerss').ajaxSubmit({
                                            success: function (d) {
                                                if (d.r = 1) {
                                                    $("#stage1").html("success");
                                                    $('#stage1').delay(1000).fadeOut();
                                                } else {
                                                    $("#stage1").html("please upload again");
                                                    $('#stage1').delay(1000).fadeOut();
                                                }
                                                $('.reg').attr("src", "<?php echo $this->Html->url("/images/"); ?>" + "gh.jpg");
                                            }
                                        });
                                    });
                                </script>


                                <tr>
                                    <td><label>Latest Certificate of Medical Degree</label></td>
                                <form action="<?php echo $this->Html->url('/', true) ?>users/lmdee" id="lndee" enctype="multipart/form-data" method="post" accept-charset="utf-8"> 
                                    <input id="uploadsd" name="data[User][bachlor]" class="bach" type="file"/>
                                    <td id="stage2"></td>
                                    <td><a href="" class="upload1" id="upload_lmd">Upload</a></td>
                                </form>  
                                </tr>
                                <style>
                                    #upload_lmd{
                                        text-decoration:none;
                                    }
                                    #uploadsd{
                                        display:none
                                    }

                                </style>
                                <script type="text/javascript">
                                    $("#upload_lmd").on('click', function (e) {
                                        e.preventDefault();
                                        $("#uploadsd:hidden").trigger('click');
                                    });
                                    $('.bach').on("change", function () {
                                        $('#lndee').ajaxSubmit({
                                            success: function (d) {
                                                if (d.r = 1) {
                                                    $("#stage2").html("success");
                                                    $('#stage2').delay(1000).fadeOut();
                                                } else {
                                                    $("#stage2").html("please upload again");
                                                    $('#stage2').delay(1000).fadeOut();
                                                }
                                                $('.reg').attr("src", "<?php echo $this->Html->url("/images/"); ?>" + "gh.jpg");
                                            }
                                        });
                                    });
                                </script>


                                <tr>
                                    <td><b>Govt. ID </b> <span class="text-muted">(Drivers Licences,Passport,Voter ID etc)</span></td>
                                <form action="<?php echo $this->Html->url('/', true) ?>users/licence" id="licence" enctype="multipart/form-data" method="post" accept-charset="utf-8"> 
                                    <input id="uploadl" name="data[User][master]" class="dsf" type="file"/>
                                    <td id="stage3"></td>
                                    <td><a href="" class="upload1" id="upload_lic">Upload</a></td>
                                </form> 
                                </tr>

                                <style>
                                    #upload_lic{
                                        text-decoration:none;
                                    }
                                    #uploadl{
                                        display:none
                                    }

                                </style>
                                <script type="text/javascript">
                                    $("#upload_lic").on('click', function (e) {
                                        e.preventDefault();
                                        $("#uploadl:hidden").trigger('click');
                                    });
                                    $('.dsf').on("change", function () {
                                        $('#licence').ajaxSubmit({
                                            success: function (d) {
                                                if (d.r = 1) {
                                                    $("#stage3").html("success");
                                                    $('#stage3').delay(1000).fadeOut();

                                                } else {
                                                    $("#stage3").html("please upload again");
                                                    $('#stage3').delay(1000).fadeOut();
                                                }
                                                $('.reg').attr("src", "<?php echo $this->Html->url("/images/"); ?>" + "gh.jpg");
                                            }
                                        });
                                    });
                                </script>





                                <tr>
                                    <td><label>Prescription Pad</label> </td>
                                <form action="<?php echo $this->Html->url('/', true) ?>users/certificate" id="Prescription" enctype="multipart/form-data" method="post" accept-charset="utf-8"> 
                                    <input id="uploadpre" name="data[User][add_certificate]" class="pre" type="file"/>
                                    <td id="stage4"></td>
                                    <td><a href="" class="upload1" id="upload_pre">Upload</a></td>
                                </form> 


                                </tr>


                                <style>
                                    #upload_pre{
                                        text-decoration:none;
                                    }
                                    #uploadpre{
                                        display:none
                                    }

                                </style>
                                <script type="text/javascript">
                                    $("#upload_pre").on('click', function (e) {
                                        e.preventDefault();
                                        $("#uploadpre:hidden").trigger('click');
                                    });
                                    $('.pre').on("change", function () {
                                        $('#Prescription').ajaxSubmit({
                                            success: function (d) {
                                                if (d.r = 1) {
                                                    $("#stage4").html("success");
                                                    $('#stage4').delay(1000).fadeOut();
                                                } else {
                                                    $("#stage4").html("please upload again");
                                                    $('#stage4').delay(1000).fadeOut();
                                                }
                                                $('.reg').attr("src", "<?php echo $this->Html->url("/images/"); ?>" + "gh.jpg");
                                            }
                                        });
                                    });
                                </script>






                                <tr>
                                    <td><label>Bussiness Card</label> </td>
                                <form action="<?php echo $this->Html->url('/', true) ?>users/other" id="Business" enctype="multipart/form-data" method="post" accept-charset="utf-8"> 
                                    <input id="uploadoth" name="data[User][other]" class="oth" type="file"/>
                                    <td id="stage5"></td>
                                    <td><a href="" class="upload1" id="upload_oth">Upload</a></td>
                                </form> 
                                </tr>

                                <style>
                                    #upload_oth{
                                        text-decoration:none;
                                    }
                                    #uploadoth{
                                        display:none
                                    }

                                </style>
                                <script type="text/javascript">
                                    $("#upload_oth").on('click', function (e) {
                                        e.preventDefault();
                                        $("#uploadoth:hidden").trigger('click');
                                    });
                                    $('.oth').on("change", function () {
                                        $('#Business').ajaxSubmit({
                                            success: function (d) {
                                                if (d.r = 1) {
                                                    $("#stage5").html("success");
                                                    $('#stage5').delay(1000).fadeOut();
                                                } else {
                                                    $("#stage5").html("please upload again");
                                                    $('#stage5').delay(1000).fadeOut();
                                                }
                                                $('.reg').attr("src", "<?php echo $this->Html->url("/images/"); ?>" + "gh.jpg");
                                            }
                                        });
                                    });
                                </script>





                                </tbody>
                            </table>

                        </div>




                    </div>
                </div>
            </div>

            </section>