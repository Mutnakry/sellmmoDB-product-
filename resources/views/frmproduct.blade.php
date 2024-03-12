<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/navlayout.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- model --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="./img/icon.png" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        :root {
            --header-height: 2rem;
            --nav-width: 220px;
            --first-color: #4723D9;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 0;
            /* Change "0 1rem" to "0 0". */
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            /* display: none; */
            cursor: pointer
        }

        .header_img {
            width: 35px;
            height: 35px;
            /* display: flex; */
            float: end;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -50%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* overflow: hidden */
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color)
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }


        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }

        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 0rem);
                /* Change "calc(var(--nav-width) + 2rem" to "calc(var(--nav-width) + 0rem". */
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }


            /* .show {
                width: calc(var(--nav-width) + 15px)
            } */

            /* .body-pd {
                padding-left: calc(var(--nav-width) + 18px)
            } */
        }


        /* Add this. */
        #bodyto {
            /* margin: 1rem; */
            /* The same as header padding-left (i.e., 2rem). */
            /* margin-top: 2rem; */
            /* The same as header height (i.e., 3rem + 1rem). */
        }
    </style>

    <title>Basic - Bootstrap 5 with Gulp 4</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
        <div class="header_img"> <img
                src="https://w7.pngwing.com/pngs/895/199/png-transparent-spider-man-heroes-download-with-transparent-background-free-thumbnail.png"
                alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i><span
                        class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                            class="nav_name">Dashboard</span> </a>
                    <a href="category" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                            class="nav_name">Category</span> </a>
                    <a href="product" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                            class="nav_name">Product</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                            class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Stats</span> </a>
                </div>
            </div>
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light" id="bodyto">
        <div class="content m-2">
            <div class="content m-3">
                @if (session('success'))
                    <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert" id="alert">
                        <strong>Successfull!</strong> {{ session('success') }}
                    </div>
                @elseif (count($errors) > 0)
                    <div class="alert mt-2 alert-danger alert-dismissible fade show" role="alert" id="alert">
                        <strong>Failed!</strong> {{ $errors->first() }}
                    </div>
                    {{-- @elseif (session('delete'))
                <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert" id="alert">
                    <strong>Successfull!</strong> {{ session('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif (session('update'))
                <div class="alert mt-2 alert-success alert-dismissible fade show" role="alert" id="alert">
                    <strong>Successfull!</strong> {{ session('update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}
                @endif

                <div class="d-flex mt-3">
                    <button class="btn btn-warning rounded-pill m-1 text-success" data-bs-toggle="modal"
                        data-bs-target="#addModal"><i class=" fa fa-plus"></i> Register</button>
                </div>
                <div class="row shadow">
                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th class="bg-secondary text-light">ID</th>
                                <th class="bg-secondary text-light">product Name</th>
                                <th class="bg-secondary text-light">User Name</th>
                                <th class="bg-secondary text-light">Category Name</th>
                                <th class="bg-secondary text-light">detia</th>
                                <th class="bg-secondary text-light">price</th>
                                <th class="bg-secondary text-light"> Discount</th>
                                <th class="bg-secondary text-light">Day Wrranty</th>
                                <th class="bg-secondary text-light">status</th>
                                <th class="bg-secondary text-light">Action</th>
                                <th class="bg-secondary text-light">photo</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->names }}</td>
                                    <td>{{ $product->user_name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount }}</td>
                                    <td>{{ $product->day_warranty }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td><img src="/photo/{{ $product->photo }}" width="40px" class="img-thumbnail"
                                            alt=""></td>
                                    <td>
                                        <button
                                            class="btn btn-warning btn-sm btn-flat text-light pt-0 rounded-pill pr-3 pl-3  pb-0 bg-info text-warning"
                                            data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}"> <i
                                                class="fa fa-edit"></i>
                                        </button>
                                        <button
                                            class="btn btn-danger btn-sm btn-flat pt-0 pr-3  rounded-pill pl-3 pb-0 bg-info text-danger"
                                            data-bs-toggle="modal" data-bs-target="#delete{{ $product->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                {{-- edit modal --}}
                                <div class="modal fade" id="edit{{ $product->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Modal</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" enctype="multipart/form-data"
                                                action="{{ route('product_update', $product->id) }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <div class="modal-body text-light bg-secondary">
                                                    <div class="form-group">
                                                        <label for="form-label">producgt name</label>
                                                        <input type="text" class="form-control" required value="{{ $product->names }}"
                                                            name="txtproname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtcatname">Category Name</label>
                                                        <select name="txtcatname" class="form-control" required>
                                                            <option value="">-----------select value---------
                                                            </option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->names }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-body text-light bg-secondary">
                                                    <div class="form-group">
                                                        <label for="form-label">User Name</label>
                                                        <select name="txtusername" id=""
                                                            class="form-control" required>
                                                            <option value="">----------select nvalue----------
                                                            </option>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">
                                                                    {{ $user->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-label"> price</label>
                                                        <input type="number" class="form-control" required value="{{ $product->price }}"
                                                            name="txtprice">
                                                    </div>

                                                </div>
                                                <div class="modal-body text-light bg-secondary">
                                                    <div class="form-group">
                                                        <label for="form-label"> detail</label>
                                                        <input type="text" class="form-control" required value="{{ $product->detail }}"
                                                            name="txtdetail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-label"> photo</label>
                                                        <input type="file" class="form-control" required
                                                            name="photo">
                                                            <label for="" class="text-danger">រូបចាស់</label>
                                                            <img src="photo/{{ $product->photo }}" alt="" width="50px" class="m-2">
                                                            <input type="hidden" value="{{ $product->photo }}"
                                                                    name="photo2">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-label"> discount</label>
                                                        <input type="number" class="form-control" required value="{{ $product->discount }}"
                                                            name="txtdiscount">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-label"> Day</label>
                                                        <input type="number" class="form-control" required value="{{ $product->day_warranty }}"
                                                            name="txtday">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-label"> Status</label>
                                                        <input type="number" class="form-control" required value="{{ $product->status }}"
                                                            name="txtdstatus">
                                                    </div>

                                                </div>
                                                <div class="modal-footer bg-secondary">
                                                    <button type="button" class="btn btn-warning text-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- delete modal --}}
                                {{-- <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Model</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-secondary text-light">
                                                <h4>Are you sure delete this <span
                                                        class="text-danger">{{ $category->names }}</span> </h4>
                                            </div>
                                            <div class="modal-footer bg-secondary">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="{{ route('delete_category', $category->id) }}"
                                                    class="btn btn-warning">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            @endforeach

                        </tbody>
                    </table>
                    {{-- pagination --}}
                    {{-- <div class="d-flex justify-content-end">
                        {!! $categories->links('pagination::bootstrap-5') !!}
                    </div> --}}
                </div>
            </div>
            {{-- save  --}}
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Modal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('product_save') }}">
                            @csrf
                            <div class="modal-body text-light bg-secondary">
                                <div class="form-group">
                                    <label for="form-label">producgt name</label>
                                    <input type="text" class="form-control" required name="txtproname">
                                </div>
                                <div class="form-group">
                                    <label for="txtcatname">Category Name</label>
                                    <select name="txtcatname" class="form-control" required>
                                        <option value="">-----------select value---------</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->names }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-body text-light bg-secondary">
                                <div class="form-group">
                                    <label for="form-label">User Name</label>
                                    <select name="txtusername" id="" class="form-control" required>
                                        <option value="">----------select nvalue----------</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="form-label"> price</label>
                                    <input type="number" class="form-control" required name="txtprice">
                                </div>

                            </div>
                            <div class="modal-body text-light bg-secondary">
                                <div class="form-group">
                                    <label for="form-label"> detail</label>
                                    <input type="text" class="form-control" required name="txtdetail">
                                </div>
                                <div class="form-group">
                                    <label for="form-label"> photo</label>
                                    <input type="file" class="form-control" required name="photo">
                                </div>
                                <div class="form-group">
                                    <label for="form-label"> discount</label>
                                    <input type="number" class="form-control" required name="txtdiscount">
                                </div>
                                <div class="form-group">
                                    <label for="form-label"> Day</label>
                                    <input type="number" class="form-control" required name="txtday">
                                </div>
                                <div class="form-group">
                                    <label for="form-label"> Status</label>
                                    <input type="number" class="form-control" required name="txtdstatus">
                                </div>

                            </div>
                            <div class="modal-footer bg-secondary">
                                <button type="button" class="btn btn-warning text-light"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./js/navlayout.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });

        // {{-- remove alert save update delete --}}

        $("document").ready(function() {
            setTimeout(() => {
                $("div.alert").remove();
            }, 4000);
        });
    </script>
</body>
