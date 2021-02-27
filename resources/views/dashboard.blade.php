<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="{{ asset('css/landingPage.css') }}" rel="stylesheet">

<x-app-layout>
    <?php
    $nizKnjiga = array();
    ?>
    <br><br><br><br>
    <div class="dropdown d-flex justify-content-center">
        <button class="btn btn-secondary dropdown-toggle" style="width: 400px" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Izaberi listu knjiga
        </button>
        <ul id="unorderedList" class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="width: 400px">
            @foreach(auth()->user()->book_list as $list)
            <li id="itemChangeClick"><a id="{{$list->id}}" class="dropdown-item">{{$list->title}}</a></li>
            @foreach($list->books as $listBooks)
            <!-- <li><a class="dropdown-item">{{$listBooks->title}}</a></li> -->
            <?php
            array_push($nizKnjiga, $listBooks->title);            
            ?>
            @endforeach
            @endforeach
        </ul>
    </div>
    <div id="tbody">
    </div>
    <?php
    foreach($nizKnjiga as $knjiga){
    echo $knjiga;
    }
    ?>

</x-app-layout>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
    let comboBox = document.getElementById('unorderedList');
    let tbody = document.getElementById('tbody');
    let selectedListTitle;
    var SelectedListID;
    //console.log(tbody);

    $('#unorderedList li a').on('click', function() {
        //console.log($(this).html());
        selectedListTitle = $(this).html();
        SelectedListID = $(this).attr("id");
        console.log(SelectedListID);
    });

    comboBox.addEventListener('click', (event) => {
        console.log(selectedListTitle);

    });
</script>