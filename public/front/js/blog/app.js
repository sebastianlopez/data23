
$(document).ready(function(){

    $("#btnAddCronologie").click(function(e){
        e.preventDefault();

        var date = $("#dateCronologie").val();
        var release = $("#release").val().trim();
        var description = CKEDITOR.instances['description'].getData();
        var article_id = $('#article_id').val();
        var _token = $("input[name='_token']").val();
        
        if (date === "" || release === "" || description === ""){
            alert("Campos de la cronologia vacios");
            return false;
        }
        addCronologie(_token, date, release, description, article_id);
        clearFields();
    });

    $(document).on('click', '#btnDelete', function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        var id = $(this).attr("data-id");
        deleteCronologie(_token, id);
    });

    //pagination
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            getPagination($(this).attr('href').split('page=')[1]);
        });
    });

    function getPagination(page) {
        var _token = $("input[name='_token']").val();
        var urlServer = $("#_url").val();
        var article_id = $('#article_id').val();
        $.ajax({
            url: urlServer+"/pagination?current_page="+page,
            type:'GET',
            data: {_token:_token, id :article_id},
            success: function(data) {
                $('#cronologies').empty();
                $('#cronologies').append(data);
            },
            error: function(request) {
                alert(request);
            }
        });
    }

    function addCronologie(_token, date, release, description, article_id){
        var urlServer = $("#_url").val();
        $.ajax({
            url: urlServer+'/addCronologie',
            type:'POST',
            data: {_token:_token, publicationDate: date, release: release, description: description, article_id: article_id},
            success: function(data) {
                getCronologies();
            },
            error: function(request) {
                alert(request);
            }
        });
    }

    function deleteCronologie(_token, id){
        var urlServer = $("#_url").val();
        $.ajax({
            url: urlServer+'/deleteCronologie',
            type:'DELETE',
            data: {_token:_token, id : id},
            success: function(data) {
                getCronologies();
            },
            error: function(request) {
                alert(request);
            }
        });
    }

    function getCronologies(){
        var urlServer = $("#_url").val();
        var article_id = $('#article_id').val();
        var current_page = $(".pagination > .active > span").text();
        $.ajax({
            url: urlServer+'/getCronologies',
            type:'GET',
            data: {id: article_id, current_page : current_page},
            success: function(data) {
                $('#cronologies').empty();
                $('#cronologies').append(data);
            },
            error: function(request) {
                alert(request);
            }
        });
    }

    function updateCronologies(_token, id, date, release, description){
        var urlServer = $("#_url").val();
        $.ajax({
            url: urlServer+'/editCronologie',
            type:'POST',
            data: {_token:_token, id: id, publicationDate: date, release: release, description: description},
            success: function(data) {
                getCronologies();
            },
            error: function(request) {
                alert(request);
            }
        });
    }

    $(document).on('click', '#btnEdit', function(e){
        e.preventDefault();
        var id = $(this).attr("data-id");

        var date = $("#tblCronologies #date"+id).text().trim();
        var release = $("#tblCronologies #release"+id).text().trim();
        var description = $("#tblCronologies #description"+id).val();
        
        //llenar los campos para la edicion
        $("#dateCronologie").val(date);
        $("#release").val(release);
        CKEDITOR.instances['description'].setData(description);

        //ocultar boton agregar, mostrar botones guardar y cancelar
        $("#btnAddCronologie").hide();
        $("#btnSave").show();
        $("#btnCancel").show();

        //guardar id de la fila a editar
        $('#btnSave').attr('data-id', id);
    });

    $("#btnCancel").click(function(e){
        e.preventDefault();
        clearFields();
        hideButtons();
    });

    $("#btnSave").click(function(e){
        e.preventDefault();
        var id = $(this).attr("data-id");
        var _token = $("input[name='_token']").val();

        var date = $("#dateCronologie").val();
        var release = $("#release").val().trim();
        var description = CKEDITOR.instances['description'].getData();

        updateCronologies(_token, id, date, release, description);

        clearFields();
        hideButtons();
    });

    function clearFields(){
        $("#dateCronologie").val("");
        $("#release").val("");
        CKEDITOR.instances['description'].setData("");
    }

    function hideButtons(){
        $("#btnAddCronologie").show();
        $("#btnSave").hide();
        $("#btnCancel").hide();
    }
});