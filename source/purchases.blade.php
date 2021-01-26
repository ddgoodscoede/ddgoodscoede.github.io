<x-layouts.master :page="$page">

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-12">Покупки на Диди</h1>

            <div class="space-y-6">

                <p class="max-w-prose">
                    <strong>{{ $page->appName() }}</strong> показывает доступные товары в соответствии с выбранным регионом.
                    Регион (страну и город) можно выбрать при регистрации и поменять в любой момент с помощью кнопки наверху сайта.
                </p>

                <div class="grid grid-cols-12 justify-center">
                    <x-screenshot
                        class="col-span-6"
                        src="{{ $page->image('dd-change-region.png') }}"
                        alt="Кнопка смены региона на Диди"
                    >Кнопка смены региона на Диди</x-screenshot>
                </div>

                <p class="max-w-prose">
                    Чтобы купить что-то на Диди, сначала зарегистрируйся и
                    <a href="{{ url('payments') }}" class="link">пополни баланс.</a><br>
                    Потом выбери понравившийся товар в любом магазине или через каталог.
                </p>

                <div class="grid grid-cols-12 justify-center">
                    <x-screenshot
                        class="col-span-6"
                        src="{{ $page->image('dd-purchase.png') }}"
                        alt="Блок покупки товара на Диди"
                    >Покупки на {{ $page->appName() }}</x-screenshot>
                </div>

                <p class="max-w-prose">
                    Жми <strong>"Купить",</strong> чтобы выбрать самую недорогую закладку в наличии в один клик
                    или выбери интересующее количество из списка.<br>
                    Также многие магазины продают товары "На заказ", т.е. товар будет доставлен специально для тебя
                    через закладку или даже почтой. Это может занять от нескольких часов до нескольких дней —
                    уточняй в конкретном магазине.
                </p>

                <div class="grid grid-cols-12 justify-center">
                    <x-screenshot
                        class="col-span-6"
                        src="{{ $page->image('dd-drop-search.png') }}"
                        alt="Страница поиска закладки"
                    >Страница поиска закладки</x-screenshot>
                </div>

                <p class="max-w-prose">
                    На открывшейся странице ты сможешь ввести координаты места,
                    неподалёку от которого ты хочешь получить закладку.<br>
                </p>

                <p class="max-w-prose">
                    Второй вариант — выбрать район города. Диди использует официальное деление городов на районы,
                    чтобы тебе было проще ориентироваться на транспорте.<br>
                    В списке отображаются минимально существующие деления города, т.е. чаще всего микрорайоны и округи.
                    Это позволяет подбирать закладки в пределах не более 15 минут пешком.
                </p>

            </div>

        </x-box>
    </x-section>

</x-layouts.master>
