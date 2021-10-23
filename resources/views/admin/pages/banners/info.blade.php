@extends('admin.pages.banners.layout')
@section('title', 'Информация')
@section('body')

    @bannerBlock(['title'=>'Контакты'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Сообщения обратной связи вы получите на этот адрес электронной почты'])
            @banner('data.contact_email', 'Эл. почта ')
            @endcard
        </div>
    </div>
    @endbannerBlock


    @bannerBlock(['title'=>'Информатионни блока ввэрх'])
    <div class="row">
        <div class="col-6">
            @card(['title'=>'Текст 1'])
            @banner('header_info.title1', 'Введите текст 1')
            @endcard
        </div>
        <div class="col-6">
            @card(['title'=>'Текст 2'])
            @banner('header_info.title2', 'Введите текст 2')
            @endcard
        </div>
        <div class="col-6">
            @card(['title'=>'Номер телефона'])
            @banner('header_info.phone', 'Введите номер телефона')
            @endcard
        </div>
        <div class="col-6">
            @card(['title'=>'Электронная почта'])
            @banner('header_info.email', 'Введите электронная почта')
            @endcard
        </div>

        <div class="col-6 ">

            @card(['title'=>'Кнопка мнения и предложения'])
            @banner('header_info.button1_title', 'Название')
            @banner('header_info.button1', 'Ссылка')
            @endcard
        </div>

        <div class="col-6">

            @card(['title'=>'Кнопка ETB-manager'])
            @banner('header_info.button2_title', 'Название')
            @banner('header_info.button2', 'Ссылка')
            @endcard
        </div>

        @endbannerBlock
        @bannerBlock(['title'=>'Нижний блок информации'])
        <div class="row">
            <div class="col-4">
                @card(['title'=>'Приемная директора'])
                @banner('footer_info.title1','Заголовок')
                @banner('footer_info.director_reception', 'Введите номер телефона')
                @endcard
            </div>

            <div class="col-4">
                @card(['title'=>'Каталог'])
                @banner('footer_info.title2','Заголовок')
                @banner('footer_info.informer', 'Введите номер телефона')
                @endcard
            </div>

            <div class="col-4">
                @card(['title'=>'Отдел управления человеческими ресурсами'])
                @banner('footer_info.title3','Заголовок')
                @banner('footer_info.human_resources', 'Введите номер телефона')
                @endcard
            </div>

            <div class="col-4">
                @card(['title'=>'Бухгалтерия'])
                @banner('footer_info.title4','Заголовок')
                @banner('footer_info.accounting', 'Введите номер телефона')
                @endcard
            </div>

            <div class="col-4">
                @card(['title'=>'Национальная лаборатория референс'])
                @banner('footer_info.title5','Заголовок')
                @banner('footer_info.national_reference', 'Введите номер телефона')
                @endcard
            </div>
            <div class="col-4">

                @card(['title'=>'Адрес'])
                @banner('footer_info.address', 'Название')
                @endcard

            </div>

            <div class="col-4">
                @card(['title'=>'Электронная почта`'])
                @banner('footer_info.email', 'Введите электронная почта')
                @endcard
            </div>
            @endbannerBlock
            <div class="col-12 col-dxl-6">
                @bannerBlock(['title'=>'Загаловок блока соц.сетей'])
                @card(['title'=>'Загаловок'])
                @banner('social_title.title', 'Имя блока')
                @endcard
                @cards(['title'=>'Ссылки социальных сетей', 'banners'=>'socials'])
                @banner('icon', 'Икона (20x20)')
                @banner('title', 'Название')
                @banner('url', 'Ссылка')
                @endcards
                @endbannerBlock
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    @bannerBlock(['title'=>'Footer блок 1'])
                    @cards(['title'=>'', 'banners'=>'footer_1'])
                    @banner('title', 'Название')
                    @banner('url', 'Ссылка')
                    @endcards
                    @endbannerBlock
                </div>
                <div class="col-12 col-md-6">
                    @bannerBlock(['title'=>'Footer блок 2'])
                    @cards(['title'=>'', 'banners'=>'footer_2'])
                    @banner('title', 'Название')
                    @banner('url', 'Ссылка')
                    @endcards
                    @endbannerBlock
                </div>
                <div class="col-12 col-md-6">
                    @bannerBlock(['title'=>'Footer блок 3'])
                    @cards(['title'=>'', 'banners'=>'footer_3'])
                    @banner('title', 'Название')
                    @banner('url', 'Ссылка')
                    @endcards
                    @endbannerBlock
                </div>
            </div>
        </div>
        @bannerBlock(['title'=>'Контент страниц'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Логотипы'])
                @banner('data.header_logo', 'Верхний логотип (156 X 90)')
                @banner('data.menu_logo', 'Нижний логотип (156 X 90)')
                @endcard
            </div>
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Карта'])
                @banner('data.iframe', 'Ссылка iframe')
                @endcard
            </div>
        </div>
        @endbannerBlock
        @bannerBlock(['title'=>'SEO'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Названии'])
                @banner('seo.title_suffix', 'Суффикс названии')
                @endcard
            </div>
        </div>

        @endbannerBlock
        @bannerBlock(['title'=>'Рабочее время'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>''])
                @banner('footer_info.time', 'Добавить рабочее время')
                @endcard
            </div>
        </div>
        @endbannerBlock
        @bannerBlock(['title'=>'Главная страница  заголовок H1'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Названии'])
                @banner('footer_info.title_bannera', 'Заголовок H1')
                @endcard
            </div>
        </div>

        @endbannerBlock
        @bannerBlock(['title'=>'Цвет'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Цвет'])
                @banner('header_info.color', 'Выберите цвет')
                @endcard
            </div>
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Copyright'])
                @banner('footer_info.copyright', 'Copyright')
                @endcard
            </div>
        </div>
    @endbannerBlock
@endsection
