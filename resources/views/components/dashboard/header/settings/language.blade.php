<div
    class="cursor-pointer relative"
    x-data="{
        showOptions: false,
        language: localStorage.getItem('language') || 'en',
    }"
    @click.away="showOptions = false"

>
    <div @click="showOptions = true">
        <div class="flex gap-2 border border-gray-500 p-2 rounded-md" x-show:on="language === 'en'">
            <span class="dark:text-white">EN</span>
            <img src="{{ asset('images/english-flag.png') }}" class="w-10 h-6" />
        </div>
        <div class="flex gap-2 border border-gray-500 p-2 rounded-md" x-show:on="language === 'pt'">
            <span class="dark:text-white">PT</span>
            <img src="{{ asset('images/portuguese-flag.png') }}" class="w-10 h-6" />
        </div>
    </div>

    <x-simple-modal id="showOptions">
        <div  x-data="{
            setLanguage: function (lang) {
                localStorage.setItem('language', lang);
                window.location.reload();
            }
        }">
            <p class="mb-4 text-xl">Choose your language</p>
            <div class="flex flex-col space-y-4">
                <button class="cursor-pointer" @click="setLanguage('en')">
                    <img src="{{ asset('images/english-flag.png') }}" class="h-40 w-56" />
                </button>
                <button class="cursor-pointer" @click="setLanguage('pt')">
                    <img src="{{ asset('images/portuguese-flag.png') }}" class="h-40 w-56" />
                </button>
            </div>
        </div>
    </x-simple-modal>
</div>
