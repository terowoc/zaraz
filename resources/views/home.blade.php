@extends('layout')

@section('content')
    <!-- banner -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7 text-center text-lg-left">
                    <h1 class="mb-4">Zaraz - send broadcasting messages at once!</h1>
                    <p class="mb-4">
                        Telegram bot broadcasting service with blackjack and asynchronous workers.
                        It's fully <a href="{{ config('app.github_repository') }}">opensource!</a>
                        Audit it or use a self-hosted version.
                    </p>
                </div>
                <div class="col-lg-4 d-lg-block d-none">
                    <img src="{{ asset('images/truck.png') }}" alt="illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- /banner -->

    <!-- topics -->
    <section class="section pb-0">
        <div class="container">
            <h2 class="section-title">Browse Your Topics</h2>
            <div class="row">
                <!-- topic -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card match-height">
                        <div class="card-body">
                            <i class="card-icon ti-panel mb-4"></i>
                            <h3 class="card-title h4">Basic Startup</h3>
                            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                            <a href="list.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- topic -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card match-height">
                        <div class="card-body">
                            <i class="card-icon ti-credit-card mb-4"></i>
                            <h3 class="card-title h4">Account Bill</h3>
                            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                            <a href="list.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- topic -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card match-height">
                        <div class="card-body">
                            <i class="card-icon ti-package mb-4"></i>
                            <h3 class="card-title h4">Our Features</h3>
                            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                            <a href="list.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- topic -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card match-height">
                        <div class="card-body">
                            <i class="card-icon ti-settings mb-4"></i>
                            <h3 class="card-title h4">Theme Facility</h3>
                            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
                            <a href="list.html" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /topics -->

    <!-- faq -->
    <section class="section pb-0">
        <div class="container">
            <h2 class="section-title">Mostly Asked Questions</h2>
            <div class="row masonry-wrapper">
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">Will updates also be free?</h3>
                            <p class="card-text content">Lorem, <a href="https://examplesite.com">link</a> <em>ipsum</em> dolor sit amet consectetur adipisicing elit. Cumque praesentium nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae maxime perspiciatis iste placeat architecto, mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum omnis vel sed temporibus. mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum
                                omnis vel sed temporibus. mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit
                                illo, unde cum omnis vel sed temporibus.</p>
                        </div>
                    </div>
                </div>
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">Discounts for students and Non Profit Organizations?</h3>
                            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
                                nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
                                maxime perspiciatis iste placeat architecto.</p>
                        </div>
                    </div>
                </div>
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">I need something unique, Can you make it?</h3>
                            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
                                nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
                                maxime perspiciatis iste placeat architecto, mollitia delectus <a href="https://examplesite.com">link</a>
                                ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum omnis vel sed temporibus,
                                repudiandae impedit nam ad enim porro, qui labore fugiat quod suscipit fuga necessitatibus. Perferendis,
                                ipsum?</p>
                        </div>
                    </div>
                </div>
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">Is there any documentation and support?</h3>
                            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
                                nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
                                maxime perspiciatis iste placeat architecto, mollitia delectus <a href="https://examplesite.com">link</a>
                                ut ab quibusdam.</p>
                        </div>
                    </div>
                </div>
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">Any refunds?</h3>
                            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
                                nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
                                maxime perspiciatis iste placeat architecto.</p>
                        </div>
                    </div>
                </div>
                <!-- faq item -->
                <div class="col-md-6 mb-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h3 class="card-title h5">What is a product key?</h3>
                            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
                                nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /faq -->

    <!-- call to action -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-lg-left text-center">
                    <h2 class="mb-3">Still Didn&rsquo;t Find Your Answer?</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <br> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
                    <a href="{{ config('app.github_repository') }}/issues" class="btn btn-primary">Open an issue</a>
                </div>
            </div>
        </div>
    </section>
@endsection
