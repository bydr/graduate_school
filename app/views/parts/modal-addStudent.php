<!-- The Modal -->
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Студент</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="id_add_student_form"
                      class="add_student_form"
                      method="post"
                      action="">
                    <div class="form-group">
                        <label for="id_surname">Фамилия: </label>
                        <input name="surname"
                               type="text"
                               class="form-control"
                               id="id_surname"
                               placeholder="Введите фамилию"
                               required
                        >
                    </div>
                    <div class="form-group">
                        <label for="id_firstname">Имя: </label>
                        <input name="firstname"
                               type="text"
                               class="form-control"
                               id="id_firstname"
                               placeholder="Введите имя"
                               required
                        >
                    </div>
                    <div class="form-group">
                        <label for="id_patronymic">Отчество: </label>
                        <input name="patronymic"
                               type="text"
                               class="form-control"
                               id="id_patronymic"
                               placeholder="Введите отчество"
                               required
                        >
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="id_date_birth">Дата рождения: </label>
                                <input name="date_birth"
                                       type="date"
                                       class="form-control"
                                       id="id_date_birth"
                                       placeholder="Дата"
                                >
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="id_type">Тип студента: </label>
                                <select name="type_student" id="id_type" class="form-control">
                                    <option value="" disabled selected>Тип студента...</option>
                                    <?php foreach ($studentTypes as $item): ?>
                                        <option value="<?= $item['id']; ?>"><?= $item['type']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_phone">Телефон: </label>
                        <input name="phone"
                               type="tel"
                               class="form-control"
                               id="id_phone"
                               placeholder="Введите номер"
                        >
                    </div>
                    <div class="form-group">
                        <label for="id_theme">Тема диссертации: </label>
                        <input name="theme"
                               type="text"
                               class="form-control"
                               id="id_theme"
                               placeholder="Тема"
                        >
                    </div>

                    <div class="form-group">
                        <label for="id_supervisors">Научный руководитель: </label>
                        <select name="supervisor" id="id_supervisors" class="form-control">
                            <option value="" disabled selected>Выберите руководителя...</option>
                            <?php foreach ($db_supervisors as $item): ?>
                                <option value="<?= $item['id']; ?>"><?= $item['fio']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_registration">Прописка: </label>
                        <input name="registration"
                               type="text"
                               class="form-control"
                               id="id_registration"
                               placeholder="Прописка"
                        >
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="id_date_begin">Дата поступления: </label>
                                <input name="date_begin"
                                       type="date"
                                       class="form-control"
                                       id="id_date_begin"
                                       placeholder="Дата поступления"
                                       required
                                >
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="id_date_end">Дата окончания: </label>
                                <input name="date_end"
                                       type="date"
                                       class="form-control"
                                       id="id_date_end"
                                       placeholder="Дата окончания"
                                >
                            </div>

                        </div>
                    </div>
                    <input name="id_student"
                           type="text"
                           class="form-control"
                           id="id_student"
                           hidden
                           value="0"
                    >
                    <button id="id_btn_formStudent" name="addStudent" type="submit" class="btn btn-primary">Добавить</button>

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
