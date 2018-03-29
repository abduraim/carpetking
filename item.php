<script type="text/javascript">
    function l_image (a) {
        document.example_img.src=a;
        document.getElementById('link_img').setAttribute('href',a);
    }

    function change_order() {
        if (document.getElementById('logo').value != 1) {
            document.getElementById('logo_pts').removeAttribute('disabled','');
            document.getElementById('logo_pts').setAttribute('value','1');
        } else {
            document.getElementById('logo_pts').setAttribute('disabled','');
            document.getElementById('logo_pts').setAttribute('value','0');
        }

        console.log( cost_edging(document.getElementById('edging').value) );

        endcost(document.getElementById('pts').value ,cost_material( document.getElementById('material').value), cost_logos(document.getElementById('logo').value), document.getElementById('logo_pts').value, cost_edging(document.getElementById('edging').value) );
    }

    function cost_material(material_id) {
        var str = '<?php v_materials_array_json(); ?>';
        var data = JSON.parse(str);
        console.log(data);
        //die('asdf');
        for (index = 0; index < data.length; index ++) {
            if (data[index].id == material_id)
                return data[index].cost;
            continue;
        }
    }

    function  cost_logos(logos_id) {
        var str = '<?php v_logos_array_json(); ?>';
        var data = JSON.parse(str);
        for (index = 0; index < data.length; index ++) {
            if (data[index].id == logos_id)
                return data[index].cost;
            continue;
        }
    }

    function cost_edging(edging_id) {
        var str = '<?php v_edgings_array_json(); ?>';
        var data = JSON.parse(str);
        for (index = 0; index < data.length; index ++) {
            if (data[index].id == edging_id)
                return data[index].cost;
            continue;
        }
    }

    function endcost(pts, cost_material, cost_logos, pts_logos, cost_edging) {
        document.getElementById('cost').innerHTML = pts*(parseInt(cost_material)+parseInt(cost_logos)*parseInt(pts_logos)+parseInt(cost_edging)) + " руб.";
    }



</script>

<div class="container-fluid"">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <a href="?page=catalog">Каталог</a>
                <?=' / '?>
                <a href="?page=catalog&mark=<?=$_GET['mark']?>"><?php v_mark_title($_GET['mark']) ?></a>
                <?=' / '?>
                <?php v_mat_title($_GET['product']); ?>
            </div>

            <br>

            <h1 class="caption_title_all_n1">
                <?php v_mat_title($_GET['product']); echo' для '; v_mark_title($_GET['mark']); echo ' '; v_model_title($_GET['model']); ?>
            </h1>

            <div class="col-xs-12 col-sm-12 col-md-3 div_item_materials_block">

                <?php v_materials_list_block(); ?>

            </div>

            <div class="col-xs-12 col-sm-8 col-md-6">

                <div class="caption_title_all_n2_left">
                    Описание ковриков:
                </div>
                <div class="">
                    <?php v_mat_title($_GET['product']); ?> для <?php v_mark_title($_GET['mark']); ?> <?php v_model_title($_GET['model']); ?> (<?php v_mark_title_rus($_GET['mark']); ?> <?php v_model_title_min($_GET['model']); ?>) разработаны индивидуально для данной модели автомобиля.

                    <br><br>

                <div class="div_item_content-text">
                    <p>
                        Наши коврики идеально подогнаны под пол вашего автомобиля, закреплены, не пропускают через себя воду, собирают пыль и удерживают ее, легко чистятся и гармонично вписываются в интерьер автомобиля.
                    </p>
                    <p>
                        Учтем любые Ваши пожелания. Нужны только передние? Сделаем.
                    </p>
                </div>

<!--                    <ol>
                        <li>Закрывают полностью пол автомобиля</li>
                        <li>Не скользят. Штатные клипсы крепления, люверсы, липучки, шипы антискольжения</li>
                        <li>Мелкие делтали очень важны, каждый коврик проходит контроль качества</li>
                        <li>Только качественные европейские или российские материалы</li>
                        <li>Время изготовления 2-3 часа, склад готовых комплектов</li>
                        <li>Мы сами производим, гарантия низкой цены</li>
                        <li>Цена в 2-5 раз дешевле оригинала, а по качеству изготовления лучше</li>
                        <li>Любые Ваши пожелания, нужны только передние? Сделаем!</li>
                        <li>Логотипы</li>
                    </ol>-->

                    <br>

                    Выберите материал, цвет окантовки, количество логотипов:

                    </div>

                <form method="post" action="" name="form">

                    <input type="hidden" name="mark" value=<?=$_GET['mark']?> >
                    <input type="hidden" name="model" value=<?=$_GET['model']?> >
                    <input type="hidden" name="product" value=<?=$_GET['product']?> >

                <div class="row div_item_selects_block">

                    <div class="col-xs-6">
                        <label for="material">Материал:</label>
                        <select name="material" id="material" class="form-control" onchange="change_order();">
                            <?php v_materials_list(); ?>
                        </select>
                    </div>

                    <div class="col-xs-6">
                        <label for="edging">Цвет окантовки:</label>
                        <select name="edging" id="edging" class="form-control" onchange="change_order();">
                            <?php v_edgings_list(); ?>
                        </select>
                    </div>

                    <div class="col-xs-6">
                        <label for="logo">Шильдик(и):</label>
                        <select name="logo" id="logo" class="form-control" onchange="change_order();">
                            <?php v_logos_list(); ?>
                        </select>
                    </div>

                    <div class="col-xs-6">
                        <label for="logo_pts">Кол-во логотипов:</label>
                        <input type="number" min="1" max="4" value="0" name="logo_pts" id="logo_pts" class="form-control" onchange="change_order();" disabled>
                    </div>

                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 div_item_calc_block">
                <div class="div_item_calc_cost" id="cost"><?php v_materials_property('cost') ?> руб.</div>
                <div class="div_item_calc_pts"><input type="number" min="1" max="99" value="1" size="2" class="form-control" name="pts" id="pts" onchange="change_order();"></div>
                <div class="cent"><button type="submit" class="btn btn-success btn-block">В КОРЗИНУ</button></div>
                <div class="div_item_calc_benefits">Доставка 200 рублей</div>
            </div>


            </form>

        </div>




        <?php require_once 'materials.php'; ?>


        <br>

        <h4>Хотите посмотреть, как коврики будут выглядеть в Вашем автомобиле? Мы сшили автоковрики более чем 500 автовладельцам, заполните форму ниже и получите фото именно Вашего авто</h4>

        <br>

        <h3>Заполните форму, менеджер отправит фото в течение 5 минут</h3>

        <br>


        <div class="row">

            <div class="hidden-xs col-sm-2 col-md-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-6">

                <form method="post" action="send_photo.php" class="div_order_form">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Телефон</label>
                        <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Введите номер телефона">
                    </div>
                    <div class="form-group">
                        <label for="mail">E-mail</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="Введите e-mail для отправки фото">
                    </div>
                    <div class="form-group">
                        <label for="comment">Комментарий</label>
                        <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Введите предварительный вопрос и удобное время для звонка"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Запросить">
                </form>

            </div>
            <div class="hidden-xs col-sm-2 col-md-3"></div>


        </div>



        <br>
    </div>
</div>
