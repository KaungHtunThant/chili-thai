<style>
    .no-bullets {
        list-style-type: none;
        padding-left: 0;
    }

    /*Adds a margin underneath each image in the slide show */
    .boxstyle {
        margin-bottom: 20px;
    }

    /*Controls for the modal slideshow*/
    .controls {
        width: 50px;
        display: block;
        font-size: 11px;
        padding-top: 8px;
        font-weight: bold;
        font-size: 20px;
    }

    a.controls:hover {
        text-decoration: none;
    }

    .next {
        float: right;
        text-align: right;
    }

    .gallery-controls {
        height: 25px;
        clear: both;
        display: block;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            width: 80%;
            max-width: 1000px;
        }
    }
</style>
<div class="container-fluid bg-dark m-0 p-0">
    <ul class="row no-bullets">
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-soup-001.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-002.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-fr-003.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-004.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-chef-003.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-001.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-soup-002.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-003.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-004.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-005.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>
        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><img class="img-fluid boxstyle" height="500px"
                src="img/menu/menu-app-001.jpg" width="1200px" data-bs-target="#myModal" data-bs-toggle="modal"></li>

    </ul>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body img-fluid"></div>
            </div>
        </div>
    </div>
    <!--End of modal-->

</div>


</main>


<!--jQuery, Popper, and Bootstrap Javascript files-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!--JS for modal-->
<script>
    $(document).ready(function() {
        $('li img').on('click', function() {
            var src = $(this).attr('src');
            var img = '<img src="' + src + '" class="img-fluid w-100">';
            var index = $(this).parent('li').index();
            var html = '';
            html += img;
            html += '<div class="gallery-controls">';
            html += '<a class="controls next text-decoration-none" href="' + (index + 2) + '">NEXT</a>';
            html += '<a class="controls previous text-decoration-none" href="' + (index) +
                '">PREVIOUS</a>';
            html += '</div>';
            $('#myModal').modal();
            $('#myModal').on('shown.bs.modal', function() {
                $('#myModal .modal-body').html(html);
                //new code
                $('a.controls').trigger('click');
            })
            $('#myModal').on('hidden.bs.modal', function() {
                $('#myModal .modal-body').html('');
            });
        });
    })
    //page controls prev and next
    $(document).on('click', 'a.controls', function() {
        var index = $(this).attr('href');
        var src = $('ul.row li:nth-child(' + index + ') img').attr('src');
        $('.modal-body img').attr('src', src);
        var newPrevIndex = parseInt(index) - 1;
        var newNextIndex = parseInt(newPrevIndex) + 2;
        if ($(this).hasClass('previous')) {
            $(this).attr('href', newPrevIndex);
            $('a.next').attr('href', newNextIndex);
        } else {
            $(this).attr('href', newNextIndex);
            $('a.previous').attr('href', newPrevIndex);
        }
        var total = $('ul.row li').length + 1;
        //hide next button
        if (total === newNextIndex) {
            $('a.next').hide();
        } else {
            $('a.next').show()
        }
        //hide previous button
        if (newPrevIndex === 0) {
            $('a.previous').hide();
        } else {
            $('a.previous').show()
        }

        return false;
    });
</script>
