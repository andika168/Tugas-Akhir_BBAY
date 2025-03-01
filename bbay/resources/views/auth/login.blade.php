<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Login Dashboard</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
    @if($errors->has('message'))
    <div>{{ $errors->first('message') }}</div>
    @endif
    <form method="post" action="{{route('login')}}">
        <section class="user-login section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block">
                            <!-- Image -->
                            <div class="image align-self-center"><img class="img-fluid" src="../assets/images/logofup.png" alt="logo"></div>
                            <!-- Content -->
                            <div class="content text-center">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                                </div>
                                <div class="title-text">
                                    <h3>Sign in to To Dashboard</h3>
                                </div>
                                @csrf
                                <!-- Username -->
                                <input class="form-control main" type="text" placeholder="Username" name="username" required>
                                <!-- Password -->
                                <input class="form-control main" type="password" placeholder="Password" name="password" required>
                                <!-- Submit Button -->
                                <button class="btn btn-main-sm">sign in</button>
                                <div class="new-acount">
                                    <a href="{{route('landing')}}">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="plugins/aos/aos.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
</body>

</html>