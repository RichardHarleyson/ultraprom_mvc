<div class="filter_info" id="modal_filter_info">

  <div class="input-group" id="modal_filter_manufacturer">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Производитель</span>
    </div>
    <select class="custom-select" name="filter_manufacturer">
      <?php foreach ($manufacturers as $m): ?>
        <option value="<?=$m['m_name']?>" data-m_id="<?=$m['id']; ?>" data-category="<?=$m['c_id']; ?>"><?=$m['m_name'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="input-group" id="modal_filter_country">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Страна Прозводитель</span>
    </div>
    <select class="custom-select" name="filter_country">
      <option value="Германия" selected>Германия</option>
      <option value="Дания">Дания</option>
      <option value="Италия">Италия</option>
      <option value="Корея">Корея</option>
      <option value="Франция">Франция</option>
      <option value="Турция">Турция</option>
      <option value="Китай">Китай</option>
      <option value="Украина">Украина</option>
      <option value="Словакия">Словакия</option>
      <option value="Португалия">Португалия</option>
      <option value="Польша">Польша</option>
      <option value="Чехия">Чехия</option>
      <option value="Норвегия">Норвегия</option>
      <option value="Румыния">Румыния</option>
      <option value="Малайзия">Малайзия</option>
      <option value="Япония">Япония</option>
      <option value="Гонконг">Гонконг</option>
      <option value="Швеция">Швеция</option>
      <option value="Таиланд">Таиланд</option>
      <option value="Болгария">Болгария</option>
      <option value="Македония">Македония</option>
      <option value="Словения">Словения</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_contur">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Контура</span>
    </div>
      <select class="custom-select" name="filter_contur">
        <option value="Одноконтурный" selected>Одноконтурный</option>
        <option value="Двухконтурный">Двухконтурный</option>
        <option value="Двухконтурны с Бойлером">Двухконтурны + бойлер</option>
      </select>
  </div>

  <div class="input-group" id="modal_filter_power">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тепловая мощность</span>
    </div>
    <select class="custom-select" name="filter_power">
      <option value="До 20 кВт" selected>До 10 кВт</option>
      <option value="До 20 кВт">До 20 кВт</option>
      <option value="20 - 24 кВт">20 - 24 кВт</option>
      <option value="24 - 30 кВт">24 - 30 кВт</option>
      <option value="30 – 40 кВт">30 – 40 кВт</option>
      <option value="Свыше 40 кВт">Свыше 40 кВт</option>
      <option value=""></option>
      <option value="40 – 50 кВт">40 – 50 кВт</option>
      <option value="50 - 100 кВт">50 - 100 кВт</option>
      <option value="60 - 100 кВт">60 - 100 кВт</option>
      <option value="Свыше 100 кВт">Свыше 100 кВт</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_epower">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Электрическая мощность</span>
    </div>
    <select class="custom-select" name="filter_epower">
      <option value="3 - 5 кВт" selected>3 - 5 кВт</option>
      <option value="6 - 10 кВт">6 - 10 кВт</option>
      <option value="11 - 15 кВт">11 - 15 кВт</option>
      <option value="16 - 20 кВт">16 - 20 кВт</option>
      <option value="21 - 25 кВт">21 - 25 кВт</option>
      <option value="26 - 30 кВт">26 - 30 кВт</option>
      <option value="36 - 40 кВт">36 - 40 кВт</option>
      <option value="41 - 45 кВт">41 - 45 кВт</option>
      <option value="51 - 60 кВт">51 - 60 кВт</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_burn_cam">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Отвод продуктов сгорания</span>
    </div>
    <select class="custom-select" name="filter_burn_cam">
      <option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
      <option value="Дымоходный (Atmo)">Дымоходный (Atmo)</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_teploobmen">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Теплообменник</span>
    </div>
    <select class="custom-select" name="filter_teploobmen">
      <option value="Битермический" selected>Битермический</option>
      <option value="Раздельный">Раздельный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_heating_square">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Отапливаемая площадь</span>
    </div>
    <select class="custom-select" name="filter_heating_square">
      <option value="До 50 м2">До 50 м2</option>
      <option value="До 80 м2">До 80 м2</option>
      <option value="До 100 м2">До 100 м2</option>
      <option value=""></option>
      <option value="До 120 м2">До 120 м2</option>
      <option value="До 200 м2">До 200 м2</option>
      <option value="До 250 м2">До 250 м2</option>
      <option value="До 300 м2">До 300 м2</option>
      <option value="До 400 м2">До 400 м2</option>
      <option value="Свыше 400 м2">Свыше 400 м2</option>
      <option value=""></option>
      <option value="До 500 м2">До 500 м2</option>
      <option value="Свыше 500 м2">Свыше 500 м2</option>
      <option value=""></option>
      <option value="До 600 м2">До 600 м2</option>
      <option value="До 800 м2">До 800 м2</option>
      <option value="Свыше 800 м2">Свыше 800 м2</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_tteploobmen">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Теплообменник</span>
    </div>
    <select class="custom-select" name="filter_tteploobmen">
      <option value="Стальной" selected>Стальной</option>
      <option value="Чугунный">Чугунный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_nasos">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Насос</span>
    </div>
    <select class="custom-select" name="filter_nasos">
      <option value="Есть" selected>Есть</option>
      <option value="Нет">Нет</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_napryajenie">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Напряжение Питания, В</span>
    </div>
    <select class="custom-select" name="filter_napryajenie">
      <option value="220" selected>220</option>
      <option value="380">380</option>
      <option value="220-380">220-380</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_montaj">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Монтажа</span>
    </div>
    <select class="custom-select" name="filter_montaj">
      <option value="Напольные" selected>Напольный</option>
      <option value="Настенный">Настенный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rozjig">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Розжига</span>
    </div>
    <select class="custom-select" name="filter_rozjig">
      <option value="Электро" selected>Электро</option>
      <option value="Пьезо">Пьезо</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_otvod">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Способ Отвода Газов</span>
    </div>
    <select class="custom-select" name="filter_otvod">
      <option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
      <option value="Дымоходный">Дымоходный</option>
      <option value="Парапетный">Парапетный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_controller">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Управление</span>
    </div>
    <select class="custom-select" name="filter_controller">
      <option value="Механическое" selected>Механическое</option>
      <option value="Электронное">Электронное</option>
      <option value="Электромеханическое">Электромеханическое</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_rad_type">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип</span>
    </div>
    <select class="custom-select" name="filter_rad_type">
      <option value="Тип 11" selected>Тип 11</option>
      <option value="Тип 22">Тип 22</option>
      <option value="Тип 33">Тип 33</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_height">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Высота</span>
    </div>
    <select class="custom-select" name="filter_rad_height">
      <option value="500" selected>200</option>
      <option value="300">300</option>
      <option value="500">400</option>
      <option value="500">500</option>
      <option value="600">600</option>
      <option value="500">900</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_length">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Длинна</span>
    </div>
    <select class="custom-select" name="filter_rad_length">
      <option value="400" selected>400</option>
      <option value="500">500</option>
      <option value="600">600</option>
      <option value="700">700</option>
      <option value="800">800</option>
      <option value="900">900</option>
      <option value="1000">1000</option>
      <option value="1100">1100</option>
      <option value="1200">1200</option>
      <option value="1300">1300</option>
      <option value="1400">1400</option>
      <option value="1500">1500</option>
      <option value="1600">1600</option>
      <option value="1700">1700</option>
      <option value="1800">1800</option>
      <option value="1900">1900</option>
      <option value="2000">2000</option>
      <option value="2100">2100</option>
      <option value="2200">2200</option>
      <option value="2300">2300</option>
      <option value="2400">2400</option>
      <option value="2500">2500</option>
      <option value="2600">2600</option>
      <option value="2700">2700</option>
      <option value="2800">2800</option>
      <option value="2900">2900</option>
      <option value="3000">3000</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_conn">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Подключение</span>
    </div>
    <select class="custom-select" name="filter_rad_conn">
      <option value="Боковое" selected>Боковое</option>
      <option value="Нижнее">Нижнее</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_apex">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Межосевое расстояние</span>
    </div>
    <select class="custom-select" name="filter_apex">
      <option value="300" selected>300</option>
      <option value="350">350</option>
      <option value="500">500</option>
      <option value="800">800</option>
      <option value="900">900</option>
      <option value="1000">1000</option>
      <option value="1200">1200</option>
      <option value="1400">1400</option>
      <option value="1600">1600</option>
      <option value="1800">1800</option>
      <option value="2000">2000</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_sec">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Количество Секций</span>
    </div>
    <select class="custom-select" name="filter_rad_sec">
      <option value="3" selected>3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_deep_sec">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Глубина секцй</span>
    </div>
    <select class="custom-select" name="filter_deep_sec">
      <option value="80" selected>80</option>
      <option value="90">90</option>
      <option value="96">96</option>
      <option value="100">100</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_elem_comp">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Комплектации</span>
    </div>
    <select class="custom-select" name="filter_rad_elem_comp">
      <option value="Кран Маевского" selected>Кран Маевского</option>
      <option value="Напольный крепеж">Напольный крепеж</option>
      <option value="Настенный крепеж">Настенный крепеж</option>
      <option value="Кронштейн угловой">Кронштейн угловой</option>
      <option value="Кронштейн анкерный">Кронштейн анкерный</option>
      <option value="Решетка конвектора">Решетка конвектора</option>
      <option value="Присоединительный набор">Присоединительный набор</option>
      <option value="Кронштейн для сушки белья">Кронштейн для сушки белья</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_kind">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Радиатора</span>
    </div>
    <select class="custom-select" name="filter_rad_kind">
      <option value="Чугунные" selected>Чугунные</option>
      <option value="Панельные">Панельные</option>
      <option value="Секционные">Секционные</option>
      <option value="Внутрипольные">Внутрипольные</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_rad_eradius">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Диаметр подключения</span>
    </div>
    <select class="custom-select" name="filter_rad_eradius">
      <option value="1" selected>1</option>
      <option value="1/2">1/2</option>
      <option value="3/4">3/4</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_pipe_rad">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Диаметр Трубы</span>
    </div>
    <select class="custom-select" name="filter_pipe_rad">
      <option value="10" selected>10</option>
      <option value="14">14</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="20">20</option>
      <option value="26">26</option>
      <option value="28">28</option>
      <option value="32">32</option>
      <option value="35">35</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_flour_montaj">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип монтажа</span>
    </div>
    <select class="custom-select" name="filter_flour_montaj">
      <option value="В стяжку" selected>В стяжку</option>
      <option value="В слой плиточного клея">В слой плиточного клея</option>
      <option value="Под напольное покрытие">Под напольное покрытие</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_flour_type">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип пола</span>
    </div>
    <select class="custom-select" name="filter_flour_type">
      <option value="Мат" selected>Мат</option>
      <option value="Кабель">Кабель</option>
      <option value="Пленка">Пленка</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_stype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип</span>
    </div>
    <select class="custom-select" name="filter_stype">
      <option value="Втроенный" selected>Встроенный</option>
      <option value="Наружный">Наружный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_ttype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Изделия ТП</span>
    </div>
    <select class="custom-select" name="filter_ttype">
      <option value="Труба для теплого пола" selected>Труба для теплого пола</option>
      <option value="Коллекторная группа">Коллекторная группа</option>
      <option value="Маты и плиты для пола">Маты и плиты для пола</option>
      <option value="Смесительный узел">Смесительный узел</option>
      <option value="Автоматика">Автоматика</option>
      <option value="Шкафы">Шкафы</option>
      <option value="Термоголовка с датчиком">Термоголовка с датчиком</option>
      <option value="Добавки в бетон">Добавки в бетон</option>
      <option value="Демпферная лента">Демпферная лента</option>
      <option value="Крепежи">Крепежи</option>
      <option value="Комплектующие">Комплектующие</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_flour_cabtype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип кабеля</span>
    </div>
    <select class="custom-select" name="filter_flour_cabtype">
      <option value="Двухжильный" selected>Двухжильный</option>
      <option value="Одножильный">Одножильный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_flour_cabrad">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Диаметр кабеля</span>
    </div>
    <select class="custom-select" name="filter_flour_cabrad">
      <option value="3" selected>3</option>
      <option value="4">4</option>
      <option value="7">7</option>
      <option value="5,5">5,5</option>
      <option value="0,9-1,8">0,9-1,8</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_flour_isqr">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Площадь мата, м2</span>
    </div>
    <select class="custom-select" name="filter_flour_isqr">
      <option value="0.5" selected>0.5</option>
      <option value="0.75">0.75</option>
      <option value="1.0">1.0</option>
      <option value="1.5">1.5</option>
      <option value="2.0">2.0</option>
      <option value="2.5">2.5</option>
      <option value="3.0">3.0</option>
      <option value="3.5">3.5</option>
      <option value="4.0">4.0</option>
      <option value="4.5">4.5</option>
      <option value="5.0">5.0</option>
      <option value="6.0">6.0</option>
      <option value="7.0">7.0</option>
      <option value="8.0">8.0</option>
      <option value="9.0">9.0</option>
      <option value="10.0">10.0</option>
      <option value="12.0">12.0</option>
      <option value="14.0">14.0</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_fitting_type">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Фитинга</span>
    </div>
    <select class="custom-select" name="filter_fitting_type">
      <option value="Заглушка" selected>Заглушка</option>
      <option value="Муфта соеденительная">Муфта соеденительная</option>
      <option value="Муфта редукционная">Муфта редукционная</option>
      <option value="Муфта с внутренней резьбой">Муфта с внутренней резьбой</option>
      <option value="Муфта с наружной резьбой">Муфта с наружной резьбой</option>
      <option value="Муфта с накидной гайкой">Муфта с накидной гайкой</option>
      <option value="Угол соеденительный">Угол соеденительный</option>
      <option value="Угол с внутренней резьбой">Угол с внутренней резьбой</option>
      <option value="Угол с наружной резьбой">Угол с наружной резьбой</option>
      <option value="Угол установочный">Угол установочный</option>
      <option value="Тройник равнопроходной">Тройник равнопроходной</option>
      <option value="Тройник редукционный">Тройник редукционный</option>
      <option value="Тройник с внутренней резьбой">Тройник с внутренней резьбой</option>
      <option value="Тройник с наружной резьбой">Тройник с наружной резьбой</option>
      <option value="Тройник двойной">Тройник двойной</option>
      <option value="Кран, вентиль">Кран, вентиль</option>
      <option value="Планка монтажная">Планка монтажная</option>
      <option value="Коллектор">Коллектор</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_ppr_type">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Изделия</span>
    </div>
    <select class="custom-select" name="filter_ppr_type">
      <option value="Трубы" selected>Трубы</option>
      <option value="Фитинги">Фитинги</option>
      <option value="Крепления">Крепления</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_stockfit_type">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Фитинга Канализации</span>
    </div>
    <select class="custom-select" name="filter_stockfit_type">
      <option value="Труба" selected>Труба</option>
      <option value="Заглушка">Заглушка</option>
      <option value="Муфта">Муфта</option>
      <option value="Колено">Колено</option>
      <option value="Тройник">Тройник</option>
      <option value="Редукция">Редукция</option>
      <option value="Ревизия">Ревизия</option>
      <option value="Компенсатор">Компенсатор</option>
      <option value="Крестовина">Крестовина</option>
      <option value="Адаптер чугун-пластик">Адаптер чугун-пластик</option>
      <option value="Колено универсальное">Колено универсальное</option>
      <option value="Колено WC">Колено WC</option>
      <option value="Манжет">Манжет</option>
      <option value="Трап сточный">Трап сточный</option>
      <option value="Фитинги">Фитинги</option>
      <option value="Хомут крепежный">Хомут крепежный</option>
      <option value="Силикон">Силикон</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_stock_rad">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Диаметр Канализации</span>
    </div>
    <select class="custom-select" name="filter_stock_rad">
      <option value="110мм" selected>110мм</option>
      <option value="160мм">160мм</option>
      <option value="200мм">200мм</option>
      <option value="250мм">250мм</option>
      <option value="3150мм">315мм</option>
      <option value="400мм">400мм</option>
      <option value="500мм">500мм</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_wheating">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Обогрев Зимой</span>
    </div>
    <select class="custom-select" name="filter_wheating">
      <option value="-5°С" selected>-5°С</option>
      <option value="-7°С">-7°С</option>
      <option value="-10°С">-10°С</option>
      <option value="-15°С">-15°С</option>
      <option value="-20°С">-20°С</option>
      <option value="-23°С">-23°С</option>
      <option value="-25°С">-25°С</option>
      <option value="-30°С">-30°С</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_invert">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Инвертная Технология</span>
    </div>
    <select class="custom-select" name="filter_invert">
      <option value="Нет" selected>Нет</option>
      <option value="Да">Да</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_bpower">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Мощность,БТЕ/час</span>
    </div>
    <select class="custom-select" name="filter_bpower">
      <option value="05" selected>05</option>
      <option value="07">07</option>
      <option value="09">09</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="15">15</option>
      <option value="18">18</option>
      <option value="24">24</option>
      <option value="30">30</option>
      <option value="36">36</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_csquare">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Площадь, м2</span>
    </div>
    <select class="custom-select" name="filter_csquare">
      <option value="до 15 м2" selected>до 15 м2</option>
      <option value="до 20 м2">до 20 м2</option>
      <option value="до 30 м2">до 30 м2</option>
      <option value="30 м2">30 м2</option>
      <option value="35 м2">35 м2</option>
      <option value="до 40 м2">до 40 м2</option>
      <option value="40 м2">40 м2</option>
      <option value="до 60 м2">до 60 м2</option>
      <option value="до 80 м2">до 80 м2</option>
      <option value="до 100 м2">до 100 м2</option>
      <option value="до 120 м2">до 120 м2</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_ctype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип хладагента</span>
    </div>
    <select class="custom-select" name="filter_ctype">
      <option value="r-32" selected>r-32</option>
      <option value="r-410а">r-410а</option>
      <option value="r-410">r-410</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_napor">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Напор, м</span>
    </div>
    <select class="custom-select" name="filter_napor">
      <option value="2 - 3 м" selected>2 - 3 м</option>
      <option value="3 - 4 м">3 - 4 м</option>
      <option value="4 - 5 м">4 - 5 м</option>
      <option value="6 - 7 м">6 - 8 м</option>
      <option value="8 - 12 м">8 - 12 м</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_effect">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Производительность, м</span>
    </div>
    <select class="custom-select" name="filter_effect">
      <option value="2 - 4 м3/час" selected>2 - 4 м3/час</option>
      <option value="4 - 5 м3/час">4 - 5 м3/час</option>
      <option value="5 - 6 м3/час">5 - 6 м3/час</option>
      <option value="6 - 8 м3/час">6 - 8 м3/час</option>
      <option value="8 - 12 м3/час">8 - 12 м3/час</option>
      <option value="10 - 12 м3/час">10 - 12 м3/час</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_mlength">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Монтажная Длина, мм</span>
    </div>
    <select class="custom-select" name="filter_mlength">
      <option value="130мм" selected>130м</option>
      <option value="180мм">180мм</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_nepower">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Потребляемая Мощность, Вт</span>
    </div>
    <select class="custom-select" name="filter_nepower">
      <option value="20 - 40 Вт" selected>20 - 40 Вт</option>
      <option value="40 - 60 Вт">40 - 60 Вт</option>
      <option value="60 - 80 Вт">60 - 80 Вт</option>
      <option value="80 - 100 Вт">80 - 100 Вт</option>
      <option value="100 - 120 Вт">100 - 120 Вт</option>
      <option value="120 - 150 Вт">120 - 150 Вт</option>
      <option value="150 - 200 Вт">150 - 200 Вт</option>
      <option value="200 - 250 Вт">200 - 250 Вт</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_bform">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Форма Бойлера</span>
    </div>
    <select class="custom-select" name="filter_bform">
      <option value="Цилиндрический" selected>Цилиндрический</option>
      <option value="Прямоугольный">Прямоугольный</option>
      <option value="Slim (тонкий)">Slim (тонкий)</option>
      <option value="Плоский">Плоский</option>
      <option value="Компактный">Компактный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_bset">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Установка Бойлера</span>
    </div>
    <select class="custom-select" name="filter_bset">
      <option value="Под мойку" selected>Под мойку</option>
      <option value="Над мойкой">Над мойкой</option>
      <option value="Настенный">Настенный</option>
      <option value="Настенный вертикальный">Настенный вертикальный</option>
      <option value="Настенный горизонтальный">Настенный горизонтальный</option>
      <option value="Вертикальный/Горизонтальный">Вертикальный/Горизонтальный</option>
      <option value="Напольный">Напольный</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_tentype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Тэна</span>
    </div>
    <select class="custom-select" name="filter_tentype">
      <option value='"Сухой"' selected>"Сухой"</option>
      <option value='"Мокрый"'>"Мокрый"</option>
    </select>
  </div>

  <div class="input-group" id="modal_filter_bsqrt">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Обьем Бойлера</span>
    </div>
    <select class="custom-select" name="filter_bsqrt">
      <option value='5 - 10' selected>5 - 10</option>
      <option value='11 - 15'>11 - 15</option>
      <option value='16 - 30'>16 - 30</option>
      <option value='31 - 50'>31 - 50</option>
      <option value='51 - 60'>51 - 60</option>
      <option value='61 - 80'>61 - 80</option>
      <option value='81 - 100'>81 - 100</option>
      <option value='101 - 120'>101 - 120</option>
      <option value='121 - 150'>121 - 150</option>
      <option value='151 - 200'>151 - 200</option>
      <option value='201 - 250'>201 - 250</option>
      <option value='251 - 300'>251 - 300</option>
      <option value='300'>300</option>
      <option value='400'>400</option>
      <option value='500'>500</option>
      <option value='750'>750</option>
      <option value='800'>800</option>
      <option value='1000'>1000</option>
      <option value='2000'>2000</option>
    </select>
  </div>


  <div class="input-group" id="modal_filter_ptype">
    <div class="input-group-prepend w-50">
      <span class="input-group-text w-100">Тип Программатора</span>
    </div>
    <select class="custom-select" name="filter_ptype">
      <option value='Проводной' selected>Проводной</option>
      <option value='Беспроводной'>Беспроводной</option>
      <option value='с Wi-Fi'>с Wi-Fi</option>
    </select>
  </div>


</div>
