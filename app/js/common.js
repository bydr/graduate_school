$(function () {

    // Custom JS
    $(document).ready(function() {
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    });

    var datalist = $(".datalist");
    // получение и сохранения data-id выбранного пункта в input
    datalist.on('change', function () {
        let datalistInput = $(this).find('input');
        let selectedOption =
            $(this)
                .find(`[value="${datalistInput.val()}"]`);
        let selectedOptionId = selectedOption.attr('data-id');
        selectedOptionId = (selectedOptionId > 0) ? selectedOptionId : 0;
        datalistInput.attr('data-id', selectedOptionId);
    });

    // по выбранному id выводим все приказы
    $(".datalist-btn").on('click', function () {
        let inputValue = $(this)
            .closest('.datalist-bar')
            .find('.datalist input')
            .attr('data-id');

        if (inputValue > 0) {
            $.ajax({
                url:`/ajax_controller`,
                method:"post",
                data:{id:inputValue, operation:"search-orders-student"}
            })
                .done(res => {
                $('.orders-students-table')
                    .find('tbody')
                    .html(res);
                $('.reset-list').show();
                $('.show-list').hide();
                })
                .fail(res => {
                    console.log(res);
                });

            $.ajax({
                url:`/ajax_controller`,
                method:"post",
                data:{id:inputValue, operation:"search-orders-supervisor"}
            })
                .done(res => {
                    $('.orders-supervisors-table')
                        .find('tbody')
                        .html(res);
                    $('.reset-list').show();
                    $('.show-list').hide();
                })
                .fail(res => {
                    console.log(res);
                });
        }

    });



    $('.img-for-zooming').on('click', function () {
        if (!$(this).hasClass('is-zooming')) {
            $(this).addClass('is-zooming');

            let modalImgZoom = `
            <div class="dr-modal modalImgZoom">
                <div class="dr-modal-content">
                    <div class="dr-modal-close ic-x"></div>
                    <div class="dr-modal-content__inner text-center">
                     <a href="${$(this).attr('src')}" class="link btn btn-accent" download>
                        <span class="ic-download ic-white"></span>
                        <span class="link-text">Скачать</span>
                    </a>
                    <div class="img-wrapper">
                        <img src="${$(this).attr('src')}" alt="">
                    </div>
                    </div>
                </div>
                <div class="dr-modal-overlay"></div>
            </div>
                `;
            $('body')
                .append(modalImgZoom)
                .css('overflow', 'hidden');

            setTimeout(function () {
                $('.modalImgZoom').addClass('is-active');
            }, 500);
        }
    });

    $('body').on('click', '.dr-modal-close', function () {
        $(this).closest('.dr-modal').removeClass('is-active');
        $('html').css('overflow', 'hidden visible');
        $('.img-for-zooming').removeClass('is-zooming');
        setTimeout(function () {
            $('.dr-modal').remove();
        }, 500);
    });

    //добавление студента
    $('.btn-student').on('click', function(){
        var btn_formStudent = $('#id_add_student_form').find('#id_btn_formStudent');

        if($(this).attr('id') && ($(this).attr('id').indexOf('btn_add_student') > -1)){
            btn_formStudent.attr('name', 'addStudent');
            btn_formStudent.text('Добавить');
            var form = $('#id_add_student_form');
            form.find('#id_student').val(0);
            form.find('#id_surname').val("");
            form.find('#id_firstname').val("");
            form.find('#id_patronymic').val("");
            form.find('#id_date_birth').val("");
            form.find('#id_type').val("");
            form.find('#id_theme').val("");
            form.find('#id_supervisors').val("");
            form.find('#id_registration').val("");
            form.find('#id_date_begin').val("");
            form.find('#id_date_end').val("");
            form.find('#id_phone').val("");
        } else {
            btn_formStudent.attr('name', 'editStudent');
            btn_formStudent.text('Изменить');
        }
    });

    //изменение студента
    $('.btn_edit_student').on('click', function(){
        // var id = $(this).find('.id_user').eq(0).text();
        var row = this.closest('tr');
        var id = +$(row).find('.id_user').text();
        $.ajax({
            url:"/ajax_controller",
            method:"post",
            data:{
                id:id
                , operation:"getStudent"
            },
            success:function(data){
                var form = $('#id_add_student_form');
                let jsonData = JSON.parse(data)[0];
                form.find('#id_student').val(id);
                form.find('#id_surname').val(jsonData.surname);
                form.find('#id_firstname').val(jsonData.name);
                form.find('#id_patronymic').val(jsonData.patronymic);
                form.find('#id_date_birth').val(jsonData.date_birth);
                form.find('#id_registration').val(jsonData.registration);
                form.find('#id_phone').val(jsonData.phone);
                form.find('#id_theme').val(jsonData.theme);
                form.find('#id_date_begin').val(jsonData.date_begin);
                form.find('#id_date_end').val(jsonData.date_end);
                form.find('#id_supervisors').val(jsonData.supervisor_id);
                form.find('#id_type').val(jsonData.type_id);

            }});
    });



    let tableRowsForSelected = $('.table-for-selected .table tbody tr');
    tableRowsForSelected.on('click', function () {
        $(this).toggleClass('table-row__selected');
    });

    $('#btn-appointment').on('click', function () {
        let idOrder = $(this)
            .closest('#order-appointment')
            .find('.datalist-search')
            .data('id');
        let hasSelectedRows = $(this)
            .closest('#order-appointment')
            .find(tableRowsForSelected)
            .hasClass('table-row__selected');

        if (idOrder > 0 && hasSelectedRows) {
            let rowSelected = $(this)
                .closest('#order-appointment')
                .find('.table-row__selected');
            let idStudents = [];
            rowSelected.each(function (){
                idStudents.push($(this).find('.id_user').data('id'));
            });
            console.log(idStudents);
            $.ajax({
                url:`/ajax_controller`,
                method:"post",
                data:{idOrder:idOrder, idStudents: idStudents.join(","), operation:"addOrdersForStudent"}
            })
                .done(res => {
                    alert('Назначение приказа успешно состоялось!');
                    location.href = "/orders";
                })
                .fail(res => {
                    console.log(res);
                });

        } else {
            alert('Вы выбрали не все параметры для назначения')
        }
    });



});
