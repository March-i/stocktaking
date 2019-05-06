<!doctype html>
<html>
<head>
    <meta charset="uth-8">
    <title>Stocktaking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a href="#projects" class="navbar-brand">Stocktaking</a>
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
            {{--aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" id="projects-tab" data-toggle="tab" href="#projects" role="tab"
                   aria-controls="projects" >Projects<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="developers-tab" data-toggle="tab" href="#developers" role="tab"
                   aria-controls="developers">Developers</a>
            </li>
        </ul>
    </div>
</nav>
<br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="projects" role="tabpanel" aria-labelledby="project-tab">


        <div class="container-fluid text-right">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newProject">Create
                new
                Project
            </button>
        </div>

        <div class="modal fade" id="newProject" tabindex="-1" role="dialog" aria-labelledby="newProject"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLable">Create new Project</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="newTitle">Title:</label>
                                <input type="text" class="form-control" id="newTitle" placeholder="Enter title"
                                       required>
                                <label for="newDescription">Description:</label>
                                <textarea class="form-control" id="newDescription" placeholder="Enter description"
                                          rows="5"
                                          required></textarea>
                                <label>Devoloper(s):</label>
                                <select class="form-control">
                                    <option>Select developer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row text-centr justify-content-around">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <h3>test###</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#chengeProject">Change
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="chengeProject" tabindex="-1" role="dialog" aria-labelledby="chengeProject"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLable">Change Project</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="newTitle">Title:</label>
                                <input type="text" class="form-control" id="newTitle" required>
                                <label for="newDescription">Description:</label>
                                <textarea class="form-control" id="newDescription" rows="5"
                                          required></textarea>
                                <label>Devoloper(s):</label>
                                <select class="form-control">
                                    <option></option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>


    </div>


    <div class="tab-pane fade" id="developers" role="tabpanel" aria-labelledby="developers-tab">

        <div class="container-fluid text-right">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newDeveloper">Add new developer
            </button>

        </div>

        <div class="modal fade" id="newDeveloper" tabindex="-1" role="dialog" aria-labelledby="newDeveloper"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLable">Add new developer</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="newTitle">Name:</label>
                                <input type="text" class="form-control" id="newTitle" placeholder="Enter developer name"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>
</html>