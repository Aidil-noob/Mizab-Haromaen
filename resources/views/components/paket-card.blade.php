@props(['paket', 'gambar' => null])

<div class="card min-h-full">
    <div class="card__body">
        {{-- nama paket --}}
        <div class="font-serif font-extrabold text-2xl text-center uppercase">
            {{ $paket->nama_paket }}
        </div>
        <hr class="separator my-4"/>
        @if ($gambar)
            <img
                loading="lazy"
                decoding="async"
                src="{{asset('storage/' . $gambar)}}"
                class="rounded"
            />
        @endif
        <h3 class="font-bold text-start text-xl lg:text-2xl">Rincian Paket</h3>
        <div class="grid grid-cols-2 gap-x-15 gap-y-6 lg:gap-y-10">
            {{-- nama hotel --}}
            <div>
                <span class="font-medium text-lg lg:text-2xl">Harga Mulai</span>
                <span class="font-bold block text-lg lg:text-2xl">IDR {{number_format($paket->harga, 0, ',', '.')}}</span>
            </div>
            <div>
                <span class="font-medium text-lg lg:text-2xl">Fasilitas Hotel</span>
                <span class="font-bold block text-lg lg:text-2xl">
                    <x-rating-star :rating="$paket->rating"/>
                </span>
            </div>
            <div>
                <span class="font-medium text-lg lg:text-2xl">Hotel Madinah</span>
                <span class="font-bold block text-lg lg:text-2xl">{{ $paket->nama_hotel_madinah }}</span>
            </div>
            <div>
                <span class="font-medium text-lg lg:text-2xl">Hotel Makkah</span>
                <span class="font-bold block text-lg lg:text-2xl">{{ $paket->nama_hotel_makkah }}</span>
            </div>
            <div>
                <span class="font-medium text-lg lg:text-2xl">Maskapai</span>
                <span class="font-bold block text-lg lg:text-2xl">Lion Air</span>
            </div>
            <div>
                <span class="font-medium text-lg lg:text-2xl">Durasi</span>
                <span class="font-bold block text-lg lg:text-2xl">13 Hari</span>
            </div>
        </div>
        <div class="flex justify-end my-2">
            <button
                class="button py-7 pr-1 pl-7 button--primary button--outline button--xl font-semibold lg:text-2xl"
                style="--button-radius:50px; --button-color:black;"
               data-stisla-dialog-trigger="dlg-{{$paket->id}}"
            >
                Daftar Sekarang
                <span
                    class="icon-box icon-box--primary icon-box--lg icon-box--circle"
                    style="--icon-box-bg:var(--color-primary-foreground);"
                >
                    <x-lucide-move-up-right/>
                </span>
            </button>
             <div class="dialog" id="dlg-{{$paket->id}}" data-stisla-dialog aria-labelledby="dlg-label-{{$paket->id}}">
               <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
               <div class="dialog__panel">
                 <div class="dialog__content">
                   <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close">
                      <x-lucide-x />
                   </button>
                   <div class="dialog__header">
                     <h2 class="dialog__title" id="dlg-label-{{$paket->id}}">Formulir Pendaftaran Umroh</h2>
                   </div>
                   <div class="dialog__body">
                      <form>
                         <div class="field">
                            <label for="dlg-package-{{$paket->id}}" class="field__label">Paket yang dipilih</label>
                            <select class="combobox" data-stisla-combobox>
                               <option value="{{$paket->nama_paket}}">{{$paket->nama_paket}}</option>
                            </select>
                         </div>
                        <div class="field">
                          <label for="dlg-name-{{$paket->id}}" class="field__label">Nama Jamaah:</label>
                          <input type="text" class="input" id="dlg-name-{{$paket->id}}" placeholder="Nama lengkap sesuai paspor" autocomplete="email" autofocus />
                        </div>
                        <field class="field">
                           <x-input-label :value="__('Kelamin')" />
                            <select class="combobox" data-stisla-combobox>
                               <option value="Pria">Pria</option>
                               <option value="Wanita">Wanita</option>
                            </select>
                        </field>
                        <field class="field">
                           <x-input-label :value="__('Tipe Kamar')" />
                            <select class="combobox" data-stisla-combobox>
                               <option value="Double">Double</option>
                               <option value="Triple">Triple</option>
                               <option value="Quad">Quad</option>
                            </select>
                        </field>
                      </form>
                   </div>
                   <div class="dialog__footer">
                     <button class="button button--tertiary" data-stisla-dialog-dismiss>Cancel</button>
                     <button class="button button--primary" data-stisla-dialog-dismiss>Konfirmasi</button>
                   </div>
                 </div>
               </div>
             </div>
        </div>
    </div>
</div>
