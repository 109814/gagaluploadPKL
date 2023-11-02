<!-- Features -->
<div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Terbaru <span>Seputar Prionechi</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            @foreach ($posts as $post)
                            <div class="card-body">
                            <h4 class="card-title"><a href="/berita/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h4>
                            <p>By. Prionechi <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"></a>{{ $post->category->name }}</p>
                            <p>{{ $posts->excerpt }}</p>
                        </div>
                        @endforeach
                        </div>
                        <!-- end of card -->
                    

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->