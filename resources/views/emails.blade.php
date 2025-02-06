Поздравляем с покупкой билета, <strong>{{ $name }}</strong>,
<p>{{ $body }}</p>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
	.barcode {
		left: 50%;
		box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
		display: inline-block;
		transform: translateX(-90px);
	}
    .widthTicket {
        width: 500px;
    }
</style>

<div class="widthTicket mx-auto z-10 bg-blue-900 rounded-3xl">
	<div class="flex flex-col">
		<div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
			<div class="flex-none sm:flex">


				<div class="flex-auto justify-evenly">
                    <!-- Блок билета №1 -->
					<div class="flex flex-col">
						<div class="flex items-center my-1">
							<h2 class="font-medium">Фестиваль «Дом Довлатова в Пушкинских Горах»</h2>
						</div>

                        <div class="flex items-center my-1 justify-between">
							<p class="font-medium text-xs">Дата посещения:</p>
                            <p class="font-medium text-xs">26.06.2025 16:00 - 29.06.2025 15:00</p>
						</div>
					</div>

					<div class="border-dashed border-b-2 my-5"></div>
                    <!-- Блок билета №2 -->
					<div class="flex flex-col">
                        <p class="text-xs">Общество с ограниченной ответственностью «ОНЛАЙН ТУР»</p>
                        <p class="text-xs mt-1">ИНН: 7840111319; КПП: 784001001; ОГРН: 1247800011403</p>
                        <p class="text-xs mt-1">Утвержден Министерством культуры Российской Федерации от 29.06.2020 г. № 702</p>
					</div>
                    <!-- Разделитель-->
					<div class="border-dashed border-b-2 my-5 pt-5">
						<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
						<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
					</div>
                     <!-- Блок билета №3 -->
                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Заказ:</p>
                            <p class="text-sm">№ 352654</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Дата оплаты:</p>
                            <p class="text-sm">29.12.2024 13:18</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Тип билета:</p>
                            <p class="text-sm">Вездеход со свободной рассадкой</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Стоимость:</p>
                            <p class="text-sm">5 000.00 руб.</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Вид оплаты:</p>
                            <p class="text-sm">Банковская карта</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Кол-во посетителей:</p>
                            <p class="text-sm">1</p>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-sm">Получатель:</p>
                            <p class="text-sm font-semibold">Костина Елена Валерьевна</p>
                        </div>
                    </div>
                    <!-- Разделитель-->
					<div class="border-dashed border-b-2 my-5 pt-5">
						<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
						<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
					</div>
                    <!-- Блок билета №4 -->
					<div class="flex flex-col">
                        <div class="flex items-center my-1">
                            <p class="font-medium text-xs">Фестиваль «Дом Довлатова в Пушкинских Горах»</p>
                        </div>
                        <div class="flex items-center my-1 justify-between">
                            <p class="font-medium text-xs">Дата посещения:</p>
                            <p class="font-medium text-xs">26.06.2025 16:00 - 29.06.2025 15:00</p>
                        </div>
					</div>
					<div class="flex flex-col py-5  justify-center text-sm ">
						<h6 class="font-bold text-center">Электронный билет</h6>
                        <h6 class="font-bold text-center">1558624</h6>
						<div class="barcode h-14 w-0 inline-block mt-4 relative left-auto"></div>
					</div>
				</div>      
			</div>
		</div>
	</div>
</div>