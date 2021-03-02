<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="{{ asset('css/landingPage.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<x-app-layout>
    <?php
    $nizKnjiga = array();
    ?>
    <br><br><br><br>
    <div class="dropdown">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form action="" id="book_lists_form">
                        <select name="bookList" id="bookList" onchange="getBooks(this)">
                            <option value="" disabled selected>Select book list</option>
                            @foreach(auth()->user()->book_list as $list)
                            <option value="{{$list->id}}">{{$list->title}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>

            <div class="row" style="padding:20px 0px">
                <div class="col-sm">
                    <!-- <button type="button" class="btn btn-outline-primary">Add book</button> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Book
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add book</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- FORM -->
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input id="title" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Writer</label>
                                            <input id="writer" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <!-- Padajuca lista listi knjiga -->

                                            <select name="bookListModal" id="bookListModal">
                                                <option value="" disabled selected>Select book list</option>
                                                @foreach(auth()->user()->book_list as $list)
                                                <option value="{{$list->id}}">{{$list->title}}</option>
                                                @endforeach
                                            </select>

                                            <!-- Padajuca lista listi knjiga -->
                                        </div>
                                    </form>
                                    <!-- FORM -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="addBook()" class="btn btn-primary" data-bs-dismiss="modal">Add book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>



           <!--  -->



            <div class="row">
                <div class="col-sm">
                    <!-- <button type="button" class="btn btn-outline-primary">Add book</button> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Add book list
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add book list</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- FORM -->
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input id="Title" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input id="Description" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">User id</label>
                                            <input id="UID" type="text" class="form-control" readonly value="{{auth()->user()->id}}">
                                        </div>
                                    </form>
                                    <!-- FORM -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="addBookList()" class="btn btn-primary" data-bs-dismiss="modal">Add book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>

        </div>
    </div>
    <div id="tbody">
    </div>
    <br><br><br>
    <div style="padding:30px" id="result">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Writer</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</x-app-layout>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
    let comboBox = document.getElementById('unorderedList');
    let tbody = document.getElementById('tbody');
    let mainDrop = document.getElementById('search');

    let selectedListTitle;
    var SelectedListID;
    //console.log(tbody);

    function getBooks() {

        var select = document.getElementById('bookList');
        var index = select.selectedIndex;
        var list_id = select.options[index].value;

        $.ajax({
            type: 'get',
            url: "api/book/" + list_id,
            success: function(data) {
                $('tbody').html(data);
            }
        })
    }

    function setUserId(){
        var UID=document.getElementById("UID");

    }

    function addBook() {
        var select = document.getElementById('bookListModal');
        var index = select.selectedIndex;
        var list_id = select.options[index].value;

        var title = document.getElementById('title').value;
        var writer = document.getElementById('writer').value;

        console.log(list_id);
        console.log(title);
        console.log(writer);

        $.ajax({
            type: 'post',
            url: "api/book",
            data: {
                "title": title,
                "writer": writer,
                "book_list_id": list_id
            },
            success: function() {
                alert("Adding book was successful");
            },
            error: function(xhr, status, error) {
                alert("Adding book was unsuccessful");
            }

        })

        getBooks();

    }

    function addBookList() {

        var title = document.getElementById('Title').value;
        var description = document.getElementById('Description').value;
        var user_id=document.getElementById('UID').value;

        console.log(title);
        console.log(description);
        console.log(user_id);

        $.ajax({
            type: 'post',
            url: "api/book_lists",
            data: {
                "title": title,
                "description": description,
                "user_id": user_id
            },
            success: function() {
                alert("Adding list was successful");
            },
            error: function(xhr, status, error) {
                alert("Adding list was unsuccessful");
            }

        })       
        location.reload();
    }


</script>