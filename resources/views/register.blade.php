<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Buat Akun Prionechi</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{asset('inoiq/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('inoiq/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('inoiq/css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('inoiq/css/styles.css')}}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="logoosis.png">
    </head>
    <body>
        
        <!-- Mennu home -->
        @include('menu_home')
        


        <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Daftar Akun</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">Sudah Punya Akun? <a class="blue" href="{{ route('auth')}}">Masuk</a></p>

                            <!-- Log In Form -->
                            <form action="{{ route('registrasi')}}" method="POST">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                @endif
                                @if (Session::get('sucess'))
                                    <div class="alert alert-sucess alert-dismissible fade show">
                                        <ul>
                                            <li>{{Session::get('sucess')}}</li>
                                        </ul>
                                    </div>
                                    
                                @endif
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="nisn" placeholder="name@example.com" value="{{old('nisn')}}" name="nisn">
                                    <label for="nisn">NISN</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="name@example.com" value="{{old('name')}}" name="name">
                                    <label for="name">fullname</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <label for="jenis_kelamin"></label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                        
                                </div>
                                <div class="mb-4 form-floating">
                                    <label for="kelas"></label>
                                    <select class="form-control" id="kelas" name="kelas">
                                        <option value="">Kelas</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="jurusan" placeholder="jihadumar28gmail.com" name="jurusan" value="{{old('jurusan')}}">
                                    <label for="jurusan">Jurusan</label>    
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="eskul" placeholder="jihadumar28gmail.com" name="eskul" value="{{old('eskul')}}">
                                    <label for="eskul">Ekstrakurikuler</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="no_hp" placeholder="jihadumar28gmail.com" name="no_hp" value="{{old('no_hp')}}">
                                    <label for="no_hp">Nomer HP</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="almt" placeholder="jihadumar28gmail.com" name="almt" value="{{old('almt')}}">
                                    <label for="almt">Alamat Rumah</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="jihadumar28gmail.com" name="email">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{old('password')}}">
                                    <label for="password">Password</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <label for="role"></label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="">Role</option>
                                        <option value="siswa">siswa</option>
                                
                                    </select>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Log in</button>
                            </form>
                            <!-- end of log in form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


      
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="{{asset('inoiq/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('inoiq/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('inoiq/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('inoiq/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('inoiq/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>