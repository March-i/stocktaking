<!doctype html>
<html>
<head>
    <meta charset="uth-8">
    <title>Stocktaking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="_token" content="{{csrf_token()}}"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .delete-developer-from-project {
            cursor: pointer;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a href="#" class="navbar-brand">Stocktaking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" id="projects-tab" data-toggle="tab" href="#projects" role="tab"
                   aria-controls="projects">Projects<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="developers-tab" data-toggle="tab" href="#developers" role="tab"
                   aria-controls="developers">Developers</a>
            </li>
        </ul>
    </div>
</nav>
<br>

<div class="alert alert-info" role="alert" id="messageAlert" style="display: none;"></div>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="projects" role="tabpanel" aria-labelledby="project-tab">


        <div class="container-fluid text-right">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newProject">Create
                new
                Project
            </button>
        </div>

        <div class="container">
            <table class="table table-striped" id="projectsTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project</th>
                    <th scope="col">Description</th>
                    <th scope="col">Developer(s)</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="modal fade" id="newProject" tabindex="-1" role="dialog" aria-labelledby="newProject"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create new Project</h5>
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
                            </div>
                            <button type="submit" class="btn btn-primary" id="saveNewProject">Save</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>


        <div class="modal fade" id="changeProject" tabindex="-1" role="dialog" aria-labelledby="changeProject"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Project</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="hidden" id="updateId">
                                <label for="updateTitle">Title:</label>
                                <input type="text" class="form-control" id="updateTitle" required>
                                <label for="updateDescription">Description:</label>
                                <textarea class="form-control" id="updateDescription" rows="5"
                                          required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="saveUpdateProject">Update</button>
                            <button type="button" class="btn btn-danger" id="deleteProject">Delete</button>
                        </form>
                    </div>


                </div>

            </div>

        </div>


    </div>


    <div class="tab-pane fade" id="developers" role="tabpanel" aria-labelledby="developers-tab">

        <div class="modal fade" id="changeDeveloper" tabindex="-1" role="dialog" aria-labelledby="changeDeveloper"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update developer</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form id="updateDeveloperForm">
                            <div class="form-group">
                                <input type="hidden" id="updateId">
                                <label for="updateDeveloperName">Name:</label>
                                <input type="text" class="form-control" id="updateName"
                                       placeholder="Enter developer name"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="saveUpdateDeveloper">Update</button>
                            <button type="button" class="btn btn-danger" id="deleteDeveloper">Delete</button>

                        </form>
                    </div>


                </div>

            </div>
        </div>

        <div class="container-fluid text-right">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newDeveloper">Add
                new developer
            </button>

        </div>

        <div class="modal fade" id="newDeveloper" tabindex="-1" role="dialog" aria-labelledby="newDeveloper"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add new developer</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form id="newDeveloperForm">
                            <div class="form-group">
                                <label for="developerName">Name:</label>
                                <input type="text" class="form-control" id="developerName"
                                       placeholder="Enter developer name"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="saveNewDeveloper">Save</button>

                        </form>
                    </div>


                </div>

            </div>

        </div>


        <div class="container">
            <table class="table table-hover" id="developersTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


<script>


    var developers = jQuery.Deferred();

    function loadProjectData() {
        var developersHasProject = jQuery.get("{{ url('/developer-has-project') }}");
        jQuery.ajax({
            url: "{{ url('/projects') }}",
            method: 'get',
            dataType: "json",
            success: function (result) {
                developersHasProject.done(function (developersHasProject) {
                    developers.done(function (developers) {
                        jQuery("#projectsTable tbody tr").remove();

                        for (var i = 0; i < result.length; i++) {
                            var item = result[i];
                            var developersRelations = developersHasProject.filter(function (relation) {
                                return relation.project_id === item.id;
                            });
                            var developersOnProject = [];
                            var availableDeveloperList = [];
                            for (var j = 0; j < developers.length; j++) {
                                var developer = developers[j];
                                var relation = developersRelations.find(function (relation) {
                                    return relation.developer_id === developer.id;
                                });
                                if (relation) {
                                    developersOnProject.push('<div data-id="' + relation.id + '"><span data-id="'+relation.id+'" class="badge badge-danger delete-developer-from-project">&#10060;</span> <span class="badge badge-info">' + developer.name + '</span></div>');
                                    continue;
                                }
                                availableDeveloperList.push('<a class="dropdown-item add-developer-to-project" data-project="' + item.id + '" data-id="' + developer.id + '">' + developer.name + '</a>');
                            }
                            availableDeveloperList = availableDeveloperList.join('');
                            developersOnProject = developersOnProject.join('');
                            var markup = "<tr data-id='" + item.id + "'><td scope=\"row\">" + (i + 1) + "</td><td>" + item.title + "</td><td>" + item.description + "</td><td><div>" + developersOnProject + "</div><div class=\"btn-group\"><button class=\"btn btn-secondary btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Add developer</button><div class=\"dropdown-menu\">" + availableDeveloperList + "</div></div></td><td><button type=\"button\" class=\"btn btn-secondary btn-sm btn-change-project\" >Change</button></tr>";
                            $("#projectsTable").append(markup);
                        }
                        $(".btn-change-project").click(function () {
                            $('#changeProject').modal('show');
                            var id = jQuery(this).parents('tr').data('id');
                            var item = result.find(function (item) {
                                return item.id == id;
                            })

                            jQuery('#updateTitle').val(item.title);
                            jQuery('#updateDescription').val(item.description);
                            jQuery('#updateId').val(item.id);
                        })
                    })
                })
            }
        });
    }

    function loadDeveloperData() {
        jQuery("#developersTable tbody tr").remove()
        jQuery.ajax({
            url: "{{ url('/developers') }}",
            method: 'get',

            dataType: "json",
            success: function (result) {
                console.log(result);
                developers.resolve(result);
                for (var i = 0; i < result.length; i++) {
                    var item = result[i];
                    var markup = "<tr data-id='" + item.id + "'><td scope=\"row\" >" + (i + 1) + "</td><td>" + item.name + "</td><td><button type=\"button\" class=\"btn btn-secondary btn-sm btn-change-developer\">Change</button></td></tr>";
                    $("#developersTable").append(markup);


                }

                $(".btn-change-developer").click(function () {
                    $('#changeDeveloper').modal('show')

                    var id = jQuery(this).parents('tr').data('id');
                    var item = result.find(function (item) {
                        return item.id == id;
                    })
                    console.log(item)

                    jQuery('#updateName').val(item.name);
                    jQuery('#updateId').val(item.id);

                })
            }
        });
    }

    jQuery(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        loadProjectData();
        jQuery('#saveNewProject').click(function (e) {
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/projects') }}",
                method: 'post',
                data: {
                    title: jQuery('#newTitle').val(),
                    description: jQuery('#newDescription').val()
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadProjectData();
                    $('#newProject').modal('hide');
                }
            });
        });


        jQuery('#saveUpdateProject').click(function (e) {
            e.preventDefault();
            var id = jQuery('#updateId').val();
            jQuery.ajax({
                url: "{{ url('/projects') }}/" + id,
                method: "post",
                data: {
                    title: jQuery('#updateTitle').val(),
                    description: jQuery('#updateDescription').val(),
                    _method: 'PUT'
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadProjectData();
                    $('#changeProject').modal('hide');
                }
            })
        })

        jQuery('#saveUpdateDeveloper').click(function (e) {
            e.preventDefault();
            var id = jQuery('#updateId').val();
            jQuery.ajax({
                url: "{{ url('/developers') }}/" + id,
                method: "post",
                data: {
                    name: jQuery('#updateName').val(),
                    _method: 'PUT'
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadDeveloperData();
                    $('#changeDeveloper').modal('hide');
                }
            })
        })

        jQuery('#deleteProject').click(function (e) {
            e.preventDefault();
            var id = jQuery('#updateId').val();
            jQuery.ajax({
                url: "{{ url('/projects') }}/" + id,
                method: "post",
                data: {
                    _method: 'DELETE'
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadProjectData();
                    $('#changeProject').modal('hide');
                }
            })
        })

        jQuery('#deleteDeveloper').click(function (e) {
            e.preventDefault();
            var id = jQuery('#updateId').val();
            jQuery.ajax({
                url: "{{ url('/developers') }}/" + id,
                method: "post",
                data: {
                    _method: 'DELETE'
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadDeveloperData();
                    $('#changeDeveloper').modal('hide');
                }
            })
        })

        jQuery('body').on('click', '.add-developer-to-project', function () {
            var link = jQuery(this);
            jQuery.ajax({
                url: "{{ url('/developer-has-project') }}",
                method: 'post',
                data: {
                    project_id: link.data('project'),
                    developer_id: link.data('id')
                },
                success: function () {
                    link.remove();
                    loadProjectData();
                }
            });
        });

        jQuery('body').on('click', '.delete-developer-from-project', function (e) {
            e.preventDefault();
            var id = jQuery(this).data('id');
            jQuery.ajax({
                url: "{{ url('/developer-has-project') }}/" + id,
                method: "post",
                data: {
                    _method: 'DELETE'
                },
                success: function (result) {

                    loadProjectData();

                }
            })
        });


        loadDeveloperData();
        jQuery('#saveNewDeveloper').click(function (e) {
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('/developers') }}",
                method: 'post',
                data: {
                    name: jQuery('#developerName').val()
                },
                success: function (result) {
                    if (result.success) {
                        showMessage(result.success);
                    }
                    loadDeveloperData();
                    loadProjectData();
                    $('#newDeveloper').modal('hide')
                }
            });
        });

        function showMessage(message) {
            var alert = jQuery('#messageAlert');
            alert.show();
            alert.html(message);
            setTimeout(function () {
                alert.hide();
            }, 3000);
        }
    });

    $('#newProject').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
    $('#newDeveloper').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });


</script>

</body>
</html>

