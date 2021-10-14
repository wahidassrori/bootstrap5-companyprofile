<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap 5</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Bootstrap 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-4 text-center">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-danger">Web Developer</span></h1>
                    <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vulputate nisl vitae orci sollicitudin, et lobortis nibh consequat. Maecenas mollis et lectus nec varius.</p>
                    <button class="btn btn-primary">Start The Enrollment</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="sitting-reading.png" alt="sitting reading">
            </div>
        </div>
    </section>

    <section class="bg-primary p-3 p-sm-4 text-light">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center text-center">
                <h4 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h4>
                <div class="input-group input-group news-input">
                    <input type="text" class="form-control" placeholder="Recipient's username">
                    <button class="btn btn-dark" type="button" id="button-addon2">Button</button>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 text-center">
        <div class="conteiner">
            <div class="row gy-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-dark text-light py-4 px-4">
                        <h1 class="mb-3"><i class="bi bi-laptop"></i></h1>
                        <div class="body">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum gravida imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-dark text-light py-4 px-4">
                        <h1 class="mb-3"><i class="bi bi-laptop"></i></h1>
                        <div class="body">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum gravida imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-dark text-light py-4 px-4">
                        <h1 class="mb-3"><i class="bi bi-laptop"></i></h1>
                        <div class="body">
                            <h5 class="card-title mb-3">Card Title</h5>
                            <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum gravida imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg p-5">
                    <img src="sitting-reading.png" alt="sitting-reading" class="img-fluid">
                </div>
                <div class="col-lg p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facere est similique provident accusantium animi recusandae exercitationem at, impedit repellendus dolores ipsam ab nisi dicta cum suscipit, ea numquam eius!</p>
                    <p class="lead">Lorem ipsum, maiores rerum blanditiis. Provident aspernatur magnam quia laudantium commodi.</p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="learn-more" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facere est similique provident accusantium animi recusandae exercitationem at, impedit repellendus dolores ipsam ab nisi dicta cum suscipit, ea numquam eius!</p>
                    <p class="lead">Lorem ipsum, maiores rerum blanditiis. Provident aspernatur magnam quia laudantium commodi.</p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read more
                    </a>
                </div>
                <div class="col-lg p-5">
                    <img src="sitting-reading.png" alt="sitting-reading" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequenly Asked Questions</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2> 
                    <ul class="list-grup list-group-flush">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location : </span> Jl. Margorejo Kayu No.21
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Phone : </span> 0987-099921
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Phone : </span> 0986-7643-7644
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Email : </span> satria@email.com
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Email : </span> student@email.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 bg-dark text-light text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 Frontend Bootcamp</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYXNzcm9yaSIsImEiOiJja3FraXZidzcwOWZxMnZwbXhocW1iNG5yIn0.q9WumFE3TW43jzXqlQKFEQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-71.060982, 42.35725],
            zoom: 18
        });
    </script>


</body>

</html>