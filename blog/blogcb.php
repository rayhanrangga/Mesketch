<?php
include 'crudBlog.php';
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$id = $_GET['id'];
$bacaBlog = bacaBlog($id);
$bacaKomen = bacaKomen($id);
$data = hitungKomen($id);
$jml = $data['jml'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MeSketch</title>

    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/mesketch-logram1.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link rel="stylesheet" href="inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="inc/revolution/css/settings.css" />
    <link rel="stylesheet" href="inc/revolution/css/layers.css" />
    <link rel="stylesheet" href="inc/revolution/css/navigation.css" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="single_post_page_full" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">

    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->
    <?php
    // include('navbar.php');
    ?>

    <!--BLog single section-->
    <section id="blog-single" class="p-top-40 p-bottom-80">

        <!--Container-->
        <div class="container clearfix">

            <div class="row">

                <div class="col-xs-12">

                    <!--Post Single-->
                    <div class="postSingle">

                        <?php
                        foreach ($bacaBlog as $blog) {
                            $id = $blog['idBlog'];
                            $author = $blog['author'];
                            $judul = $blog['judul'];
                            $isi = $blog['isi'];
                            $img = $blog['gambar'];
                            $tanggal = $blog['tanggal'];
                            echo " 
                        <div class='postMedia'>
                            <img alt='' src='../img/blog/$img'>
                        </div>
                        <!--Post image-->

                        <div class='postMeta clearfix'>
                            <div class='postMeta-info'>
                                <span class='metaAuthor'><i class='fa fa-user'></i> <a href='#'>$author</a></span>
                                <span class='metaCategory'><i class='fa fa-folder'></i> <a href='#'>Research</a></span>
                                <span class='metaComment'><i class='fa fa-comments'></i> <a href='#'>$jml Comments</a></span>
                            </div>
                            <div class='postMeta-date'>
                                <span class='metaDate'><i class='fa fa-calendar'></i> <a href='#'>$tanggal</a></span>
                            </div>
                        </div>
                        <!--Post meta-->

                        <div class='postTitle'>
                            <h1>$judul</h1>
                            <div class='divider-small'></div>
                        </div>
                        <!--Post title-->

                        <p>$isi</p>";
                        } ?>

                    </div>

                    <!--End post single-->

                    <!--Comments-->
                    <div class="comments m-top-60">
                        <h4><?php echo  $jml ?> Comments</h4>

                        <div id="komen"></div>

                    </div>


                    <!--Respond-->
                    <div class="respond">
                        <h4 class="m-bottom-20" style="margin-top: 60px;">Leave a comment</h4>

                        <!--Reply form-->
                        <div class="replyForm">
                            <form method="POST" id="form_komen">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="isi" id="isi" placeholder="Tulis Komentar" cols="45" rows="5"></textarea>
                                        <input type="hidden" name="id_komen" id="id_komen" value="0" />
                                        <input type="hidden" name="id_blog" id="id_blog" value="<?php echo $id ?>" />
                                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                    </div>
                                </div>
                            </form>


                            <!--Reply form message-->
                            <div id="success">
                                <h2>Your message has been sent. Thank you!</h2>
                            </div>
                            <div id="error">
                                <h2>Sorry your message can not be sent.</h2>
                            </div>
                            <!--End reply form message-->

                        </div>
                        <!--End reply form-->
                    </div>
                    <!--End respond-->

                </div> <!-- /.col -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->

    </section>
    <!--End blog single section-->


    <!-- Start Footer -->
    <footer class="site-footer">
        <div class="container">
            <small class="copyright pull-left">Copyrights © 2019 All Rights Reserved By <a href="http://www.tabthemes.com/">tabthemes</a>.</small>
            <div class="social-icon pull-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a href="#"><i class="fa fa-globe"></i></a>
            </div>
            <!-- /social-icon -->
        </div>
        <!-- /container -->
    </footer>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- jQuery -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <!-- <script src="js/retina.min.js"></script> -->
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>

    <!-- Custom Plugin -->
    <script src="js/custom.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#form_komen').on('submit', function(event) {
                event.preventDefault();
                let nama = $('#nama').val();
                let isi = $('#isi').val();
                let email = $('#email').val();
                let id_blog = $('#id_blog').val();

                if (nama == '') {
                    alert("Nama Pengirim Harus disii");
                } else if (isi == '') {
                    alert("Komentar Harus disii");
                } else if (email == '') {
                    alert("Email Harus disii");
                } else {
                    var form_data = $(this).serialize();
                    $.ajax({
                        url: "tambah_komentar.php",
                        method: "POST",
                        data: form_data,
                        success: function(data) {
                            $('#form_komen')[0].reset();
                            $('#id_komen').val('0');
                            load_comment();
                        },
                        error: function(data) {
                            console.log(data.responseText)
                        }
                    })
                }
            });

            load_comment();

            function load_comment() {
                var id = "<?php echo $id; ?>";
                $.ajax({
                    url: "ambil_komentar.php",
                    method: "POST",
                    data: {
                        "id": id
                    },
                    success: function(data) {
                        $('#komen').html(data);
                    },
                    error: function(data) {
                        console.log(data.responseText)
                    }
                })
            }

            $(document).on('click', '.reply', function() {
                var id_komen = $(this).attr("id");
                $('#id_komen').val(id_komen);
                $('#nama').focus();
            });
        });
    </script>
</body>

</html>